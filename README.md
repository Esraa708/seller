# How to use the app:-
- you should create database name at phpMyAdmin and then put the name at .env file
- Run php artisan migrate
- composer update
- php artisan serve
# Steps to make it work
-  ### Register
    ```sh   
    php artisan voyager:admin esraa.esraa123@gmail.com --create
      ```
   
-  ###  you will enter inside voyager admin as an adimn then creat bread for categories ,subcategories and attributes then add relations to them
 
-  ### Add values to categories, subcategories and attributes
-  ###  then create another user as a normal user
-  ### login with it then go to
     ```sh
     http://localhost:8000/selectcategory
    ```
   
-  ### To view all products 
     ```sh
     http://localhost:8000/product
    ```

    



 