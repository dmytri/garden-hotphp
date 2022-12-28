FROM php:8.2-cli

RUN mkdir /app
COPY /app/* /app

WORKDIR /app

CMD ["php", "dev.php","Component","main","config.yaml"]

