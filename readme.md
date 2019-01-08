# Articles

![Alt Text](https://github.com/rahulgoyal8312/Articles/blob/master/public/Articles.png)

## prerequisite
- composer should be installed
- npm should be installed

## setup
- clone the repository in your local system
- run `composer install`
- run `npm install`
- create a new file named `.env` and copy `.env.example` into it.
- update the database configuration in `.env` with your MySQL database configuration
- create the database for the project
- run migrations `php artisan migrate`
- run seeders `php artisan db:seed`
- start server `php artisan serve`
- run `npm run dev` and then `npm run watch` or `npm run watch-poll` to compile the resources


## articles API

 http			URL						Description

- get 		=> /api/articles 		=> to get all the articles (paginated 15 per page)
- get 		=> /api/article/{id}	=> to get specfic article
- post		=> /api/article 		=> to add new article
- put 		=> /api/article 		=> to update existing article
- delete	=> /api/article/{id}	=> to delete some article


