# Usa una imagen oficial de PHP con servidor embebido
FROM php:8.2-cli

# Instala extensiones necesarias (puedes agregar más si tu app las usa)
RUN apt-get update && apt-get install -y unzip libzip-dev \
    && docker-php-ext-install zip

# Copia todo el proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Puerto expuesto por App Platform
ENV PORT 8080

# Comando de inicio
CMD ["php", "-S", "0.0.0.0:8080", "index.php"]
