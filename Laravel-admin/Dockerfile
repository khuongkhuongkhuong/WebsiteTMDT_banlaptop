FROM php:8.2-cli

# Cài các extension PHP cần thiết
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Cài Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

# Tạo file .env tạm để build
RUN cp .env.example .env

# Cài dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Phân quyền
RUN chmod -R 775 storage bootstrap/cache
RUN mkdir -p public

EXPOSE 8000

# Chạy tất cả lệnh artisan lúc runtime (khi có biến môi trường thật)
CMD php artisan key:generate --force && \
    php artisan config:cache && \
    php artisan view:cache && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8000} --no-reload