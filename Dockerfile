# our base image
FROM php:7.0-apache

# tell the port number the container should expose
EXPOSE 80 443

RUN apt-get install php5-mysqlnd -y
