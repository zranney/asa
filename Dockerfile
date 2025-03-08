# Utiliser une image officielle PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP requises pour Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier les fichiers de l'application
WORKDIR /var/www/html
COPY . .

# Installer les dépendances et configurer Laravel
RUN composer install --no-dev --optimize-autoloader --no-plugins --no-scripts && \
    php artisan config:cache && \
    php artisan route:cache

# Donner les bonnes permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]
