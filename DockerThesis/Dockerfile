FROM php:8.0.3-apache
#COPY . /var/www/html/
#WORKDIR /var/www/html/
#RUN chmod -R 777 /var/www/html

# install the ssl-cert package which will create a "snakeoil" keypair
RUN apt-get update \
 && DEBIAN_FRONTEND=noninteractive apt-get install -y ssl-cert \
 && rm -r /var/lib/apt/lists/*

# enable ssl module and enable the default-ssl site
RUN a2enmod ssl \
 && a2ensite default-ssl

#RUN echo "ServerName 192.168.0.126" >> /etc/apache2/apache2.conf

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli

#EXPOSE 80
