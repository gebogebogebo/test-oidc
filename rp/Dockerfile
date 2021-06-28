FROM php:7.4.3-apache
RUN apt-get update
RUN apt-get -y install libapache2-mod-auth-openidc
RUN apt-get -y install vim
RUN echo '<!DOCTYPE html><html>This place is open.</html>' > /var/www/html/open-content.html
RUN echo '<?php phpinfo(); ?>' > /var/www/html/phpinfo.php
RUN echo '<?php $headers = apache_request_headers(); foreach ($headers as $header => $value) { echo "$header: $value <br />\n"; } ?>' > /var/www/html/phpheaders.php
RUN mkdir /var/www/html/secure
RUN echo '<!DOCTYPE html><html>This place is secure.</html>' > /var/www/html/secure/secure-content.html
RUN echo '<?php phpinfo(); ?>' > /var/www/html/secure/phpinfo.php
RUN echo '<?php $headers = apache_request_headers(); foreach ($headers as $header => $value) { echo "$header: $value <br />\n"; } ?>' > /var/www/html/secure/phpheaders.php
