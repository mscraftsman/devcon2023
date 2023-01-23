FROM nginx
COPY ./docker/default.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/html
COPY ./ /var/www/html/
