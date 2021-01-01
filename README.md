## To run in your local 

1. cp .env.example to .env
2. Add your db credentials to .env
3. `composer install` & `php artisan migrate` 
4. `php artisan serve`


## Generate post with factory 
1. `php artisan tinker`
2. Now in shell `App\Models\Post::factory()->times(20)->create(['user_id' => 2]);`
User id should already exist