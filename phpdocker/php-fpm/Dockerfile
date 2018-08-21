FROM phpdockerio/php72-fpm:latest
WORKDIR "/application"

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install  php7.2-mysql \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Run entrypoint with doctrine migrations
# COPY docker-entrypoint.sh /docker-entrypoint.sh
# COPY waitforit.sh /waitforit.sh
# RUN chmod +x /docker-entrypoint.sh /waitforit.sh
# ENTRYPOINT ["sh","/docker-entrypoint.sh"] 
