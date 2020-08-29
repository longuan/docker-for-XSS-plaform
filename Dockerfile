FROM ubuntu:14.04
MAINTAINER solei1

# Setup environment
ENV DEBIAN_FRONTEND noninteractive

# Update sources
RUN apt-get update -y

# install http
RUN apt-get install -y apache2 vim bash-completion unzip
RUN mkdir -p /var/lock/apache2 /var/run/apache2

# install mysql
RUN apt-get install -y mysql-client mysql-server
#RUN echo "NETWORKING=yes" > /etc/sysconfig/network
# start mysqld to create initial tables
#RUN service mysqld start

# install php
RUN apt-get install -y php5 php5-mysql php5-dev php5-gd php5-memcache php5-pspell php5-snmp snmp php5-xmlrpc libapache2-mod-php5 php5-cli
#RUN yum install -y php php-mysql php-devel php-gd php-pecl-memcache php-pspell php-snmp php-xmlrpc php-xml

# install supervisord

RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor

# install sshd
RUN apt-get install -y openssh-server openssh-client passwd
RUN mkdir -p /var/run/sshd

# set AllowOverride All
RUN a2enmod rewrite

# change mysql charset to utf8
RUN rm /etc/mysql/my.cnf
COPY my.cnf /etc/mysql/my.cnf

# 
RUN rm /etc/apache2/apache2.conf
COPY apache2.conf /etc/apache2/apache2.conf

# remove default apache index.html
RUN rm /var/www/html/index.html

# copy xss/ to /var/www/html
COPY XSS /var/www/html

# chown
RUN chown -R www-data:www-data /var/www/html

ADD supervisord.conf /etc/
EXPOSE 22 80 443

CMD ["supervisord", "-n"]
