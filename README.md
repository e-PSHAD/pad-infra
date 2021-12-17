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
