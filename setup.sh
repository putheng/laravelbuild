#!/usr/bin/env bash

# Add the PHP 7 Repositories
sudo add-apt-repository ppa:ondrej/php

#If you’re missing add-apt-repository, like some plain systems are, 
echo "\ninstall it and then add-apt-repository ppa:ondrej/php"
sudo apt-get -y install software-properties-common
sudo apt-get -y install python-software-properties

# Update
sudo apt-get update

echo "\nInstall Git"
sudo apt-get install -y git

echo "\nInstall Nginx"
sudo apt-get -y install unzip zip nginx

echo "\nInstall PHP 7.2 FPM"
sudo apt-get -y install php7.2 php7.2-fpm php7.2-mysql php7.2-mbstring php7.2-xml php7.2-curl

echo "\nInstall PHP 7.1 FPM"
sudo apt-get -y install php7.1 php7.1-cli php7.1-common php7.1-json php7.1-opcache php7.1-mysql php7.1-mbstring php7.1-mcrypt php7.1-zip php7.1-fpm

echo "\nInstall PHP 7.0 FPM"
sudo apt-get -y install php7.0 php7.0-fpm php7.0-mysql php7.0-mbstring php7.0-xml php7.0-curl

echo "\nInstall PHP 5.5 FPM"
sudo apt-get -y install php5.6 php5.6-fpm

echo "\nRestart PHP"
sudo service php7.2-fpm restart
sudo service php7.1-fpm restart
sudo service php7.0-fpm restart
sudo service php5.6-fpm restart

echo "\nUpdate"
sudo apt-get update

echo "\nSet MySql User, Password"
debconf-set-selections <<< 'mysql-server mysql-server/root_password password putheng'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password ph077977794'

echo "\nInstall MySql"
sudo apt-get install -y mysql-server

echo "\nInstall Composer"
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

echo "\nSetup HHVM"
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 B4112585D386EB94

echo "\nHHVM's repository"
sudo add-apt-repository "deb http://dl.hhvm.com/ubuntu $(lsb_release -sc) main"

echo "\nUpdate"
sudo apt-get update

echo "\nInstall HHVM"
sudo apt-get -y install hhvm

echo "\n Run script which makes the integration with Nginx"
sudo /usr/share/hhvm/install_fastcgi.sh

echo "\nConfig Nginx to know HHVM"
#Change on Nginx sites enabled ==> fastcgi_pass   127.0.0.1:9000;

echo "\nRemove default Nginx host"
rm -f /etc/nginx/sites-enabled/default

echo "\nCreate default host"
sudo mkdir -p /var/www/html/default

echo "\nCreate new default host"

cat <<EOF > /etc/nginx/sites-available/default
# Application with PHP 7.2
#
server {
	listen 80;
    listen 443 ssl http2;

	root /var/www/html/default/public;
	index index.php index.html;

	server_name lexscorp.com;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    charset utf-8;
    sendfile off;
    client_max_body_size 100m;

	location ~* \.php\$ {
		# With php-fpm unix sockets
		fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
		fastcgi_index	index.php;
		include			fastcgi_params;
		fastcgi_param   SCRIPT_FILENAME    \$document_root\$fastcgi_script_name;
		fastcgi_param   SCRIPT_NAME        \$fastcgi_script_name;

        fastcgi_intercept_errors off;
        fastcgi_buffer_size 16k;
        fastcgi_buffers 4 16k;
        fastcgi_connect_timeout 300;
        fastcgi_send_timeout 300;
        fastcgi_read_timeout 300;
	}

    location ~ /\.ht {
        deny all;
    }

}
EOF

sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

echo "\nRestart Nginx"
sudo service nginx restart

echo "\nDownload file system"
wget https://github.com/putheng/laravelbuild/archive/master.zip

# Unzip 
unzip master.zip

echo "\nMove file to public html"
mv laravelbuild-master/* /var/www/html/default/

echo "\nInstall dependency"
composer install -d /var/www/html/default

sudo chmod -R ug+rwx /var/www/html/default/bootstrap/cache
sudo chmod -R ug+rwx /var/www/html/default/storage 

# Other way
sudo chown -R $USER:www-data /var/www/html/default/storage
sudo chown -R $USER:www-data /var/www/html/default/bootstrap/cache

chmod -R 775 /var/www/html/default/storage
chmod -R 775 /var/www/html/default/bootstrap/cache

cp /var/www/html/default/.env.example /var/www/html/default/.env

php /var/www/html/default/artisan key:generate
php /var/www/html/default/artisan migrate
php /var/www/html/default/artisan db:seed


