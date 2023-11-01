# RpiControll

In order to use the GPIO ports your user must be a member of the gpio group. The pi user is a member by default, other users need to be added manually.

sudo usermod -a -G gpio <username>

sudo usermod -a -G www-data <username>

sudo usermod -a -G gpio www-data

sudo chown -R www-data:www-data /var/www

sudo chown -R -f www-data:www-data /var/www/html

sudo visudo command and add the following line to the sudoers file:

www-data ALL=NOPASSWD: ALL