# flowerstoreph-product-upload
FlowerStore.ph Simple Product Upload By Michael Ryan P. Aquino

STEP BY STEP TO SETUP THE SIMPLE PRODUCT UPLOAD PROJECT
1. Make sure that you install the composer. Here's the link: https://getcomposer.org/download/

2. Once you're done pulling/cloning the project's repository and placing it in the htdocs folder. Assuming that you're using XAMPP, lookout for this path and place it in here: "C:\xampp\htdocs". If you want to use MAMP, I think there is no difference between them, and there's a path "C:\xampp\htdocs" like this also in there

3. Run this laravel artisan command --> "composer install". Make sure that the terminal command you're using when you type and run this command is that you're pointing into the path where you place your project when you clone the project's repository. Example path (on my end): "C:\xampp\htdocs\product-upload"

4. Copy .env.example content and paste it to a new file named saved as ".env" file, in the root folder

5. Run this laravel artisan command --> "php artisan key:generate". Make sure that the terminal command you're using when you type and run this command is that you're pointing into the path where you place your project when you clone the project's repository. Example path (on my end): "C:\xampp\htdocs\product-upload"

6. Import the database into your PHPMyAdmin. The database file is located inside the folder named "COPY_OF_DATABASE". After importing the database file, you need to configure the database credentials as well inside .env file. Find the keyword "DB_DATABASE=" inside .env file and put the database file name which is "product_upload" and it should be the same, otherwise it won't work. So inside .env file the "DB_DATABASE=" should be like this: "DB_DATABASE=product_upload". Make sure as well that the MySQL port in your XAMPP/MAMP/Laragon is enable

7. Then for you to run the Laravel project under your localhost environment, open your terminal command and make sure that the terminal command you're using when you type and run this command is that you're pointing into the path where you place your project when you clone the project's repository. Example path (on my end): "C:\xampp\htdocs\product-upload" and run this command "php artisan serve" and copy the URL that will be generated once you type that command and place it to your browser. Or create a virtual host configuration on this project.

Please let me know if something needs to be changed/updated. If there's also an issue and conflict with my local setup instructions, please let me know so I can work on it immediately.

Command to run migration: php artisan migrate
Command to run product seeder: php artisan db:seed --class=ProductSeeder
