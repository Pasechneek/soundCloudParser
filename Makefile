
symfony1:
	wget https://get.symfony.com/cli/installer -O - | bash
	sudo mv /home/danil/.symfony/bin/symfony /usr/local/bin/symfony

check:
	symfony check:requirements

composer:
	php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
	php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
	php composer-setup.php
	php -r "unlink('composer-setup.php');"

composer-in:
	php composer.phar install

composer-move:
	sudo mv composer.phar /usr/local/bin/composer

mariadb:
	sudo apt-get install software-properties-common
	sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
	sudo add-apt-repository 'deb [arch=amd64,arm64,ppc64el] http://mirror.lstn.net/mariadb/repo/10.5/ubuntu focal main'
	sudo apt update
	sudo apt-get -f install mariadb-server

mariadb2:#only for ubuntu 21.10
	sudo apt-get install software-properties-common dirmngr apt-transport-https
	sudo apt-key adv --fetch-keys 'https://mariadb.org/mariadb_release_signing_key.asc'
	sudo add-apt-repository 'deb [arch=amd64,arm64,ppc64el] https://mirrors.xtom.ee/mariadb/repo/10.5/ubuntu impish main'
	sudo apt update
	sudo apt install mariadb-server

mysql:
	sudo apt-get -f install php-mysql

mysql2:
	sudo apt-get -f install php8.0-mysql

mysql3:
	sudo apt-get clean
	sudo apt-get purge mysql*
	sudo apt-get update
	sudo apt-get install -f

mysql4:
	sudo apt-get install mysql-server-5.7

mysql5:
	sudo apt-get install mariadb-server-core-10.5
	sudo apt-get dist-upgrade

php:
	sudo apt-get --purge remove php-common
	sudo apt-get install php-common php-mysql php-cli

check:
	dpkg -l | grep -E 'mysql|mariadb'

fix:
	sudo apt -y purge mysql*
	sudo apt -y autoremove
	sudo rm -rf /etc/mysql
	sudo rm -rf /var/lib/mysql*

fix2:
	sudo apt-get clean
	sudo apt-get purge 'mysql*'
	sudo apt-get update
	sudo apt-get install -f
	sudo apt-get install mysql-server-8.0
	sudo apt-get dist-upgrade
	sudo apt-get install mysql-server

remove:
	sudo apt-get remove --purge mysql-server*

total-remove:
	sudo apt-get remove --purge mysql-client-8.0
	sudo apt-get remove --purge mysql-common
	sudo apt-get remove --purge mysql-server-core-8.0
	sudo apt-get remove --purge php8.0-mysql

git:
	git remote add origin git@github.com:Pasechneek/soundCloudParser.git
	git branch -M main
	git push -u origin main
