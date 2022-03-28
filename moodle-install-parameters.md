Paramètres des scripts d'installation Moodle
============================================

Version minimale avec un config.php déjà configuré :

```
[sudo -u www-data] php admin/cli/install_database.php --lang=fr --adminpass=adm1n --adminemail=admin@admin.org --agree-license --fullname='Pad Plus' --shortname=padplus
```

## Minimal config.php

Généré par le script d'installation si besoin.

```php
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'm@0dl3ing';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost:8080';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

// Optionnel : clé de protection pour les mises à jour Moodle https://docs.moodle.org/311/en/Upgrade_key
// $CFG->upgradekey = 'put_some_password-like_value_here';

require_once(__DIR__ . '/lib/setup.php');
```

## install.php

Script d'installation : `php admin/cli/install.php --help`
- génération config.php (si non présent)
- appel `install_database.php`

```
Command line Moodle installer, creates config.php and initializes database.
Please note you must execute this script with the same uid as apache
or use chmod/chown after installation.

Site defaults may be changed via local/defaults.php.

Options:
--chmod=OCTAL-MODE    Permissions of new directories created within dataroot.
                      Default is 2777. You may want to change it to 2770
                      or 2750 or 750. See chmod man page for details.
--lang=CODE           Installation and default site language.
--wwwroot=URL         Web address for the Moodle site,
                      required in non-interactive mode.
--dataroot=DIR        Location of the moodle data folder,
                      must not be web accessible. Default is moodledata
                      in the parent directory.
--dbtype=TYPE         Database type. Default is mysqli
--dbhost=HOST         Database host. Default is localhost
--dbname=NAME         Database name. Default is moodle
--dbuser=USERNAME     Database user. Default is root
--dbpass=PASSWORD     Database password. Default is blank
--dbport=NUMBER       Use database port.
--dbsocket=PATH       Use database socket, 1 means default. Available for some databases only.
--prefix=STRING       Table prefix for above database tables. Default is mdl_
--fullname=STRING     The fullname of the site
--shortname=STRING    The shortname of the site
--summary=STRING      The summary to be displayed on the front page
--adminuser=USERNAME  Username for the moodle admin account. Default is admin
--adminpass=PASSWORD  Password for the moodle admin account,
                      required in non-interactive mode.
--adminemail=STRING   Email address for the moodle admin account.
--upgradekey=STRING   The upgrade key to be set in the config.php, leave empty to not set it.
--non-interactive     No interactive questions, installation fails if any
                      problem encountered.
--agree-license       Indicates agreement with software license,
                      required in non-interactive mode.
--allow-unstable      Install even if the version is not marked as stable yet,
                      required in non-interactive mode.
--skip-database       Stop the installation before installing the database.
-h, --help            Print out this help

Example:
$sudo -u www-data /usr/bin/php admin/cli/install.php --lang=cs
```

## install_database.php

Script d'installation : `php admin/cli/install_database.php --help`
- création dossier moodledata si besoin
- initialisation base de données avec tables et paramètres

```
Advanced command line Moodle database installer.
Please note you must execute this script with the same uid as apache.

Site defaults may be changed via local/defaults.php.

Options:
--lang=CODE           Installation and default site language. Default is en.
--adminuser=USERNAME  Username for the moodle admin account. Default is admin.
--adminpass=PASSWORD  Password for the moodle admin account.
--adminemail=STRING   Email address for the moodle admin account.
--agree-license       Indicates agreement with software license.
--fullname=STRING     Name of the site
--shortname=STRING    Name of the site
--summary=STRING      The summary to be displayed on the front page
-h, --help            Print out this help

Example:
$sudo -u www-data /usr/bin/php admin/cli/install_database.php --lang=cs --adminpass=soMePass123 --agree-license
```
