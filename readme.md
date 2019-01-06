1. composer create-project --prefer-dist laravel/laravel Articles
2. Set .env
3. php artisan key:generate
4. php artisan make:migration create_articles_table --create=articles #make changes in articles_table
5. php artisan make:seeder ArticlesTableSeeder #add factory(App\Article::class,30)->create();
6. php artisan make:factory ArticleFactory #create article factory to add fake text inside database
7. php artisan make:model Article
8. php artisan migrate
9. php artisan db:seed
10. php artisan make:controller ArticleController --resource
11. php artisan make:resource Article

=> npm install
=> npm run watch
=> php artisan serve (separate tab)

#articles API

http		URL						Description

get 	=> /api/articles 		=> to get all the articles (paginated 15 per page)
get 	=> /api/article/{id}	=> to get specfic article
post	=> /api/article 		=> to add new article
put 	=> /api/article 		=> to update existing article
delete 	=> /api/article/{id}	=> to delete some article