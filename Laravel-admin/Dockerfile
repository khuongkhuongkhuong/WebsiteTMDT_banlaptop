FROM php:8.2-cli

# Cài các extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy toàn bộ code vào container
COPY . .

# Cài dependencies PHP
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Tạo APP_KEY và cache config
RUN php artisan key:generate --force
RUN php artisan storage:link
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Phân quyền thư mục storage
RUN chmod -R 775 storage bootstrap/cache

# Expose port
EXPOSE 8000

# Chạy migration và start server
CMD php artisan migrate --force --no-interaction && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8000}