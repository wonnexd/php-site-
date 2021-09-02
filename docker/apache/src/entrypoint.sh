#!/bin/bash
mkdir -p /var/log/app/apache \
    && touch /var/log/app/apache/access.log \
    && touch /var/log/app/apache/error.log \
    && chown -R tran:www-data /var/log/app/apache \
    && mkdir -p /var/log/app/cron \
    && touch /var/log/app/cron/cron.log \
    && chown -R tran:www-data /var/log/app/cron

supervisord -c /etc/supervisor/supervisor.conf
