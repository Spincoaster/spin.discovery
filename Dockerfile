FROM wordpress:php7.3-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update
RUN apt-get install -y sudo less default-mysql-client git zip unzip
RUN rm -rf /var/lib/apt/lists/*
RUN curl -o /bin/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x /bin/wp-cli.phar
RUN mv /bin/wp-cli.phar /usr/local/bin/wp

WORKDIR /var/www/html/