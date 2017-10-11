# our base image
FROM php:7.0-apache

# tell the port number the container should expose
EXPOSE 80 443

# copy code to the directory
COPY src/ /var/www/html/

# Install python and pip
RUN apk add --update py2-pip

# upgrade pip
RUN pip install --upgrade pip

# install Python modules needed by the Python app
COPY requirements.txt /usr/src/app/
RUN pip install --no-cache-dir -r /usr/src/app/requirements.txt

# copy files required for the app to run
COPY app.py /usr/src/app/
COPY templates/index.html /usr/src/app/templates/


# run the application
CMD ["python", "/usr/src/app/app.py"]



