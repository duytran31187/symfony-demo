#!/bin/bash


cd ../
symfony console doctrine:migrations:migrate
symfony server:start