# our base image
FROM php:7.0-apache

# tell the port number the container should expose
EXPOSE 80 443

# copy code to the directory
COPY src/ /var/www/html/

# set the entry point
ENTRYPOINT 'apachectl'