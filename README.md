# Paymob Integration
Demo integration with Paymob Payment Gateway.

-> This project runs with Laravel version 9.

## Requirement
- php version >= 8.1
- composer version >= 2.4

## how to run
- install PHP version >=8.1 on you machine using Xampp or download it Manually:
    - https://www.apachefriends.org/download.html
    - https://www.php.net/manual/en/install.php

- install composer https://getcomposer.org/doc/00-intro.md

- Download The project using git or as a zip file then extract it.

- Go to project path and open CMD or GitBash and run this commands <br/>        1- composer update

- and to make sure autoload.php file is regenerated, run this command <br/>     2- composer dump-autoload 
- #### Finaly run this command 
    3- php artisan serve

### The project is now up and running! Access it through http://127.0.0.1:8000

#### As per Paymob Documentation, Use the following card test data to perform a test transaction
<table><thead><tr><th style="text-align:left" colspan="2">MasterCard</th></tr></thead><tbody><tr><td style="text-align:left"><strong>Card Number</strong> </td><td style="text-align:left">5123456789012346</td></tr><tr><td style="text-align:left"><strong>Cardholder Name</strong> </td><td style="text-align:left">Test Account</td></tr><tr><td style="text-align:left"><strong>Expiry Month</strong> </td><td style="text-align:left">12</td></tr><tr><td style="text-align:left"><strong>Expiry Year</strong> </td><td style="text-align:left">25</td></tr><tr><td style="text-align:left"><strong>CVV</strong> </td><td style="text-align:left">123</td></tr></tbody></table>
