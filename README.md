### Route can be declared by one of methods:
 ##### 1. using attribute #Route
 ##### 2. using a separate file

 commands:
```
 symfony console make:controller HomeController
 symfony console list make
````

command to create db docker image
```
symfony console make:docker:database
```
after docker db image is created, symfony already set DATABASE_URL already. if we dump($_SERVER) we can see DATABASE_* INFO
# instead of using:
````
 ./bin/console
````
we can use
````
 symfony console
````

To create entity
````
 ./bin/console make:entity
````
# we need to install if the command make:migration throw error
## after migration created, we need to migrate
````
symfony console make:migration
sudo apt install php-mysql
symfony console doctrine:migrations:migrate
````