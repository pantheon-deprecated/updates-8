#!/bin/sh

# Prepare the settings file for installation
if [ ! -f code/sites/default/settings.php ]
  then
    cp code/sites/default/default.settings.php code/sites/default/settings.php
    chmod 777 code/sites/default/settings.php
fi

# Prepare the services file for installation
if [ ! -f code/sites/default/services.yml ]
  then
    cp code/sites/default/default.services.yml code/sites/default/services.yml
    chmod 777 code/sites/default/services.yml
fi

# Prepare the files directory for installation
if [ ! -d code/sites/default/files ]
  then
    mkdir -m777 code/sites/default/files
fi
