#!/bin/bash

# Installing Packages
apt update -y

# Installing packages
npm install -g @vue/cli

npm install

# Alway on
tail -f /dev/null