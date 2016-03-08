# Pinotify
A web-based stock checking application that alerts users by email if the Pi Zero is in stock.

### Setup:
**resources/config**
* Import database.sql into phpmyadmin (or run using the MySQL command line) to create the necessary tables.

**resources/email_system** and **resources/stock_check**
* Create a Cron job with check_send_email.php and adafruit-stock.php:
* `*/5 * * * * php /var/www/html/resources/stock_check/adafruit-stock.php`
* `*/5 * * * * php /var/www/html/resources/email_system/check_send_email.php`
