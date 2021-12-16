See https://docs.moodle.org/dev/Moodle_3.11_release_notes#Server_requirements

Basically,
PHP version: minimum PHP 7.3.0. PHP 7.4.x is supported too. PHP 8.0 support is not ready for production yet.
- PHP extension sodium is recommended.
- PHP setting max_input_vars is recommended to be >= 5000 for PHP 7.x installations.

Database requirements

| Database 	| Minimum version 	| Recommended |
|-----------|-------------------|-------------|
| MariaDB 	| 10.2.29           | 10.5        |

**Beware!** On Debian 9, MariaDB default version is 10.1.48!

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


/var/lib/mysql-10.6/
