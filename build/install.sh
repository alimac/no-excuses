#!/bin/bash

set -e

path=$(dirname "$0")
base=$(cd $path/.. && pwd)
drush="/home/vagrant/vendor/bin/drush $drush_flags -y -r $base/www"

chmod -R +w $base/www/sites/default
chmod -R +w $base/config

echo "Symlink settings.php into our Drupal."
ln -sf $base/config/settings.php $base/www/sites/default/
echo "Installing Drupal like a boss."
$drush si --site-name=no-excuses --account-pass=admin
