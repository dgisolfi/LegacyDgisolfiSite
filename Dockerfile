# dgisolfi website(dgisolfi-site)
FROM        php:7.0-apache
EXPOSE 80
MAINTAINER  Daniel

#RUN apt-get update \
#        && apt-get install -y \
#                && apt-get update \
#                && apt-get install -y \
#                    make \
#                   git \
#                    curl \
#                    vim \
#                    vim-gnome

 # Create application environment
COPY src/ /var/www/html/
