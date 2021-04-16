# PHP base image
FROM php:alpine
RUN apk add --no-cache git curl
ENV COMPOSER_MEMORY_LIMIT -1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
WORKDIR /app
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
