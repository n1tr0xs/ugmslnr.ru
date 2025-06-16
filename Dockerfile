FROM php:8.2-apache

# Устанавливаем необходимые расширения
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Включим mod_rewrite (если нужно для .htaccess)
RUN a2enmod rewrite

# Копируем файлы проекта
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
