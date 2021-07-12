php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer

composer create-project --prefer-dist laravel/laravel project-name

cd project-name


php artisan migrate

# For Laravel < 6
php artisan make:auth

# For Laravel > 6
composer require laravel/ui
php artisan ui vue --auth


php artisan make:migration create_hotel_tables --create=rooms
php artisan make:seeder HotelSeeder
php artisan db:seed

php artisan make:controller ShowRoomsController --invokable

php artisan make:controller BookingController --resource --model=Booking


