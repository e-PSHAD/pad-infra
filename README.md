Infrastructure PAD+
===================

Ce dépôt contient les informations techniques et les scripts pour l'installation d'une infrastructure PAD+.

## Déploiement Pad+ avec Ansible

Voir le [guide d'installation](https://docs.ansible.com/ansible/latest/installation_guide/index.html). Basiquement cela se fait avec pip (Python 3.8+ sur la machine de contrôle).

Sur les machines cibles, il faut juste avoir un accès ssh.

Prérequis :
- serveur Apache installé
- base de données MariaDB installé

Créer un [fichier d'inventaire Ansible](https://docs.ansible.com/ansible/latest/user_guide/intro_inventory.html#intro-inventory) avec la machine cible (serveur web Apache) et la configuration customisée.

Exemple de fichier d'inventaire avec configuration customisée

```yaml
all:
  children:
    webservers:
      hosts:
        XXX
      vars:
        moodle:
          hostname: XXX
          upgrade_key: XXX
          version_tag: XXX
        db:
          host: XXX
          name: XXX
          user: XXX
          pass: XXX
```

D'autres options de configuration plus génériques sont disponibles dans `ansible_playbooks/group_vars/all.yml` et peuvent être surchargées dans la configuration d'inventaire ou d'hôte (voir la [doc Ansible sur les variables](https://docs.ansible.com/ansible/latest/user_guide/intro_inventory.html#adding-variables-to-inventory)).

Exécuter le playbook `moodle_deploy.yml` dans le répertoire `ansible_playbooks`.

Exemple avec un fichier d'inventaire `eig-epshad.hosts.yml` et l'utilisateur root en SSH :

```
ansible-playbook moodle_deploy.yml -i eig-epshad.hosts.yml -u root
```
