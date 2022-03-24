#!/bin/bash

# Installing Packages
apt update -y
apt install -y curl wget nano unzip

# Installing Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && rm composer-setup.php && mv composer.phar /usr/local/bin/composer

# Installing PHPUnit
wget https://phar.phpunit.de/phpunit-6.4.phar && chmod +x phpunit-6.4.phar && mv phpunit-6.4.phar /usr/local/bin/phpunit

# Installing packages
composer install

# Alway on
tail -f /dev/null