# Usar la imagen oficial de PHP con Apache
FROM php:7.0-apache

ARG user
ARG uid

# Establecer el directorio de trabajo
WORKDIR /var/www/html/

# Copiar el contenido del proyecto al directorio raíz del servidor web
COPY . .

# Instalar extensiones necesarias para MySQL y otros
RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN groupadd -g $uid $user && \
    useradd -u $uid -g $user -m -d /home/$user $user && \
    usermod -aG www-data $user

# Dar permisos necesarios
RUN chown -R gabriel:gabriel /var/www/html \
    && chmod -R 755 /var/www/html

# Instala módulos necesarios y habilita mod_rewrite
RUN a2enmod rewrite

# Reinicia Apache para aplicar los cambios
RUN service apache2 restart

# Exponer el puerto 80 del contenedor
EXPOSE 80