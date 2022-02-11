Infrastructure PAD+
===================

Ce dépôt contient les informations techniques et les scripts pour l'installation d'une infrastructure PAD+.

## Prérequis

Voir https://docs.moodle.org/dev/Moodle_3.11_release_notes#Server_requirements

En résumé:
- serveur Apache installé
- base de données MariaDB installé, 10.2.29 <= version <= 10.5

> PHP version: minimum PHP 7.3.0. PHP 7.4.x is supported too. PHP 8.0 support is not ready for production yet.
> - PHP extension sodium is recommended.
> - PHP setting max_input_vars is recommended to be >= 5000 for PHP 7.x installations.


## Déploiement Pad+ avec Ansible

Voir le [guide d'installation](https://docs.ansible.com/ansible/latest/installation_guide/index.html). Basiquement cela se fait avec pip (Python 3.8+ sur la machine de contrôle). Sur les machines cibles, il faut juste avoir un accès SSH.

Créer un [fichier d'inventaire Ansible](https://docs.ansible.com/ansible/latest/user_guide/intro_inventory.html#intro-inventory) avec la machine cible (serveur web Apache) et la configuration customisée.

Exemple de fichier d'inventaire avec configuration customisée :

```yaml
all:
  children:
    webservers:
      hosts:
        XXX # adresse du serveur web
      vars:
        moodle: # paramètres Moodle
          hostname: XXX # nom du dossier où est hébergé le site, e.g. https://www.<hostname>
          version_tag: XXX # tag de la version à télécharger sur le dépôt git https://github.com/e-PSHAD/PAD
          fullname: XXX # nom du site Moodle
          shortname: XXX # nom court du site
          adminuser: admin
          adminpass: XXX
          adminemail: XXX
          upgrade_key: XXX # clé de protection lors des mises à jour Moodle https://docs.moodle.org/311/en/Upgrade_key
        db: # paramètres Moodle
          host: XXX
          name: XXX # nom de la base de données
          user: XXX
          pass: XXX
```

D'autres options de configuration plus génériques sont disponibles dans `ansible_playbooks/group_vars/all.yml` et peuvent être surchargées dans la configuration d'inventaire ou d'hôte (voir la [doc Ansible sur les variables](https://docs.ansible.com/ansible/latest/user_guide/intro_inventory.html#adding-variables-to-inventory)).

Exécuter le playbook `moodle_install.yml` dans le répertoire `ansible_playbooks`. Exemple avec un fichier d'inventaire `eig-epshad.hosts.yml` et l'utilisateur root en SSH :

```
ansible-playbook moodle_install.yml -i eig-epshad.hosts.yml -u root
```

Le playbook définit les principales étapes d'une [installation Moodle](https://docs.moodle.org/311/en/Installing_Moodle) en s'appuyant sur le script `admin/cli/install.php`. Voir les [paramètres de configuration et de la ligne de commande](./moodle-install-parameters.md).


## Configuration automatique post-installation

La plupart des options de configuration ne deviennent disponibles qu'une fois l'installation initiale terminée (étape ci-dessus). Pour la configuration standard de la PAD+, il est possible de scripter ces options dans le [fichier pad_config_vars.yml](./ansible-playbooks/vars/pad_config_vars.yml) avec le playbook `ansible_playbooks/moosh_config_set.yml`. La procédure utilise l'outil [Moosh](https://moosh-online.com/) (installé par le playbook). Le playbook prend aussi en charge la redéfinition des permissions des rôles.

```
ansible-playbook moosh_config_set.yml -i eig-epshad.hosts.yml -u root
```

Cela permet par exemple de configurer le fuseau horaire, activer la recherche globale,... Voir une liste (non exhaustive) de [paramètres Moodle sous Moosh](./moosh-config.md).

Dans le fichier `pad_config_vars.yml`, la seconde section `capabilities` permet de changer les permissions de la plateforme par rôle. Par exemple, désactiver l'édition du tableau de bord pour tous les utilisateurs.

### Configuration automatique d'une installation locale sous Docker

Le playbook `ansible_playbooks/docker_post_config.yml` permet d'effectuer la même série de configuration automatique pour une [installation locale sous Docker](https://e-pshad.github.io/pad-doc/developpement/setup-local). Moosh est installé par défaut dans [l'image Docker de développement](https://github.com/e-PSHAD/PAD/blob/pad-main/dev_assets/docker/Dockerfile.pad_dev). Le playbook installe aussi les paquetages de langue.

Pour être exécuté, ce playbook nécessite l'installation de deux dépendances :

```shell
# bindings pour Docker sous Python 3.8
pip install docker
# module Ansible pour Docker
ansible-galaxy collection install community.docker
```

Un fichier d'inventaire spécifique doit être créé pour cibler le conteneur Docker :

```yaml
all:
  children:
    webservers:
      hosts:
        docker-webserver:
          ansible_host: 127.0.0.1
      vars:
        docker:
          webserver_name: padplus-webserver-1 # nom du conteneur dans votre projet docker-compose local
        import_data: # variables pour l'import automatique de données
          source_folder: ./demo # non utilisé dans le playbook docker
          users_file: demo/users.csv
          users_categories_file: demo/users_categories.csv
          category_files:
            - demo/categories_bordeaux.xml
            - demo/categories_limoges.xml
            - demo/categories_muret.xml
            - demo/categories_catalogue.xml
          course_files:
            - demo/sequences_bordeaux.csv
            - demo/sequences_limoges.csv
            - demo/sequences_muret.csv
            - demo/sequences_catalogue.csv
          remove_categories: # match category to remove by name/substring
            - Bordeaux
            - Limoges
            - Muret
            - Catalogue
```

Exécuter le playbook `docker_post_config.yml` dans le répertoire `ansible_playbooks`. Exemple avec un fichier d'inventaire `local-docker.hosts.yml` :

```
ansible-playbook docker_post_config.yml -i local-docker.hosts.yml
```

### Import automatique de données sous Docker

Le playbook `ansible_playbooks/docker_import_data.yml` permet d'importer plusieurs types de données depuis des fichiers sources et des sauvegardes :

- création de comptes à partir d'un fichier CSV - voir https://docs.moodle.org/311/en/Upload_users
- import d'arborescences de catégories à partir de plusieurs fichiers XML (commande `moosh category-export`)
- import de backups de séquences dans l'arborescence - voir https://docs.moodle.org/311/en/Upload_courses
- inscription des usagers dans les séquences
- attribution des rôles des usagers dans les catégories

Le fichier d'inventaire doit contenir une section `import_data` dans les vars pour référencer les fichiers sources (voir exemple ci-dessus). Attention ces fichiers doivent être accessibles sous Docker. Exécuter le playbook `docker_import_data.yml` dans le répertoire `ansible_playbooks`. Des tags Ansible permettent de n'exécuter que certaines tâches : `users`, `categories`, `courses`, `users_categories`. Exemple avec un fichier d'inventaire `local-docker.hosts.yml` :

```
ansible-playbook docker_import_data.yml -i local-docker.hosts.yml [--tags users]
```

La tâche "Remove matched categories and content" est **destructrice** : elle supprime toutes les catégories trouvées par `import_data.remove_categories` ainsi que les sous-catégories et séquences associées. Cette tâche n'est exécutée qu'en l'appelant explicitement avec le tag `remove-category-and-content`.

La tâche "Remove all existing users except guest, admin" est **destructrice** : elle supprime tous les comptes utilisateurs à l'exception du compte invité et du compte admin de base. Cette tâche n'est exécutée qu'en l'appelant explicitement avec le tag `remove-all-users`.


## MariaDB et Debian 9

| Database 	| Minimum version 	| Recommended |
|-----------|-------------------|-------------|
| MariaDB 	| 10.2.29           | 10.5        |

**Beware!** MariaDB default version is 10.1.48 on Debian 9!

**Beware!** "The setting ROW_FORMAT=COMPRESSED is deprecated in MariaDB 10.6.", which is required by Moodle. Use 10.5 or disable this setting. https://tracker.moodle.org/browse/MDL-72131

For update instructions, see there : https://mariadb.org/download/?t=repo-config&d=Debian+9+%22stretch%22&v=10.6&r_m=cnrs

Register repo as source:
```
sudo apt-get install software-properties-common dirmngr apt-transport-https
sudo apt-key adv --fetch-keys 'https://mariadb.org/mariadb_release_signing_key.asc'
sudo add-apt-repository 'deb [arch=amd64,i386,ppc64el,arm64] https://ftp.igh.cnrs.fr/pub/mariadb/repo/10.5/debian stretch main'
```

Install latest version
```
sudo apt-get update
sudo apt-get install mariadb-server
```

## Paquetage de langue personnalisé pour la PAD+

Ce dépôt contient dans le [dossier lang](lang/) l'archive de paquetage et l'historique des chaînes personnalisées dans la PAD+.
