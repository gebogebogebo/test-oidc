FROM php:7.4.3-apache
RUN apt-get update
RUN apt-get -y install libapache2-mod-auth-openidc
RUN apt-get -y install vim
RUN apt-get -y install tcpdump
RUN echo '<!DOCTYPE html><html>This place is open.</html>' > /var/www/html/open-content.html
RUN echo '<?php phpinfo(); ?>' > /var/www/html/phpinfo.php
RUN echo '<?php $headers = apache_request_headers(); foreach ($headers as $header => $value) { echo "$header: $value <br />\n"; } ?>' > /var/www/html/phpheaders.php
COPY ./html/ /var/www/html/
COPY ./auth_openidc.conf /etc/apache2/mods-enabled/