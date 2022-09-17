# Laravel Practice

## Setup
 - OK, there should have been some instructions, but...

## CRON commands
```
app='/var/www/application'
php='/usr/bin/php'

# Auto-populating random products
* * * * * $php $app/artisan products:populate 1 10

```