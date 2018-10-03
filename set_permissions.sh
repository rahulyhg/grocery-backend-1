#!/bin/bash

chown -R www-data:www-data config
chown -R www-data:www-data data
chown -R www-data:www-data module 
chmod -R g+w config
chmod -R g+w data
chmod -R g+w module
