abz.testTask
===========

Testk task for Job-offer to ABZ Agency

# Installation

1) git clone git@github.com:iGor3kUA/abz.agency.testtask.git
2) composer install
3) bin/console doctrine:database:create
4) bin/console doctrine:schema:update --force
5) bin/console doctrine:fixtures:load
6) bin/console server:start
7) http://127.0.0.1:8000
