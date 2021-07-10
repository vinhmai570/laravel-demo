## About Project

This projec is demo of functions Laravel, includes Model, View, Controller, Route, ... 

## Requirements
* php 7.4
* mysql 5.7

## Install Laravel

```sh
composer create-project laravel/laravel laravel-demo

cd laravel-demo

php artisan serve
```

## Connect database

```
DB_CONNECTION=YOUR_CONNECTION
DB_HOST=YOUR_DB_HOST
DB_PORT=YOUR_DB_PORT
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD
```

## Create View

```bash
# create app layout file
touch resources/views/app.blade.php
# create commons folder
mkdir resources/views/commons
# create header file
touch resources/views/commons/header.blade.php
# create footer file
touch resources/views/commons/footer.blade.php
# create home views
mkdir resources/views/home && touch resources/views/home/index.blade.php
```

## Setup views, bootstrap 4

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    @include('commons.header')
    @yield('content')
    @include('commons.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
```

 - Setup header
 - Resources link: https://getbootstrap.com/docs/4.0/components/navbar
 
```html
<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <a class="navbar-brand" href="#">Laravel Demo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Life</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Finance</a>
        </li>
      </ul>
    </div>
</nav>
```

 - Setup footer
 - Resources link: https://mdbootstrap.com/docs/standard/navigation/footer

```html
<!-- Footer -->
<footer class="bg-light text-center text-lg-start container">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Footer Content</h5>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-0">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-dark">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-dark">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
```

 - Setup home layout
 ```html
@extends('app')
@section('content')
<div class="container" style="min-height: 60vh">
    <h1>Home content</h1>
</div>
@endsection
 ```

 - Create home controller

```sh
php artisan make:controller HomeController
```
 - Create function index

 ```php
// App/Http/Controller/HomeController

public function index()
{
    return view('home.index');
}
```

 - Setup home route

```php
// routes/web.php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('root');
```

 - Make category & post models

```sh
php artisan make:model Category -m
php artisan make:model Post -m
```

 - Add attributes to category & post migrations

```php
// databases/migrations/...categories_table.php
$table->string('name');
$table->string('slug')->unique();

// databases/migrations/...posts_table.php
$table->string('title');
$table->string('slug')->unique();
$table->string('short_description');
$table->string('description');
$table->string('image');
$table->integer('category_id');
```

 - Run migrate

 ```
php artisan migrate
 ```

 - Create relationships for post & category models

 ```php
// App/Models/Category
public function posts()
{
    return $this->hasMany(Post::class);
}

// App/Models/Post
public function category()
{
    return $this->belongsTo(Category::class);
}
 ```

 - Seed categories & posts

```bash
php artisan make:factory PostFactory --model=Post
```

```php
// database/fatories/PostFactory
use Illuminate\Support\Str;

// definition() function
$title = $this->faker->sentence(10);

return [
    'title' => $title,
    'slug' => Str::slug($title),
    'short_description' => $this->faker->sentence(15),
    'description' => $this->faker->text(200),
    'image' => $this->faker->imageUrl(600, 480),
    'category_id' => rand(1, 3)
];

// database/DatabaseSeeder
use Illuminate\Support\Facades\DB;

\App\Models\Post::factory(20)->create();

DB::table('categories')->insert([
    [
        'id'   => 1,
        'name' => 'news',
        'slug' => 'news'
    ],
    [
        'id'   => 2,
        'name' => 'life',
        'slug' => 'life'
    ],
    [
        'id'   => 3,
        'name' => 'finance',
        'slug' => 'finance'
    ]
]);
```

 - Get posts from databases

```php
// App/Http/Controller/HomeController
use App\Models\Post;

// index() function
$posts = Post::paginate(10);
return view('home.index', compact('posts'));
```

 - Show posts to home view

```html
<!-- resources/views/home/index.blade.php -->
@extends('app')
@section('content')
<div class="container" style="min-height: 60vh">
    <div class="row">
        @foreach ($posts as $post)
        <div class="card col-md-4" style="width: 18rem;">
            <img class="card-img-top" src="{{ $post->image }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->short_description }}</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
        @endforeach
    </div>
    <div style="margin: 20px">
        {{ $posts->links() }}
    </div>
</div>
@endsection
```

 - To use bootstrap for pagination

```php
// App/Providers/AppServiceProvider
use Illuminate\Pagination\Paginator;

// boot() function
Paginator::useBootstrap();
```

 - Show posts by category
 - Make PostController
```sh
php artisan make:controller PostController
```

 - Create function index()
```php
// App/Http/Controller/PostController
use Illuminate\Http\Request;
use App\Models\Category;

public function index(Request $request)
{
    $categories = Category::all();
    $posts      = Category::firstWhere('slug', $request->category)->posts()->paginate(6);
    return view('home.index', compact('posts', 'categories'));
}
```

 - Create route for PostController

```php
use App\Http\Controllers\PostController;

Route::get('/posts/{category}', [PostController::class, 'index'])->name('posts.index');
```

 - Update header view
```html
<nav class="navbar navbar-expand-lg navbar-light bg-light container">
    <a class="navbar-brand" href="#">Laravel Demo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        @foreach ($categories as $category)
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index', $category->slug) }}">{{ ucfirst($category->name) }}</a>
          </li>
        @endforeach
      </ul>
    </div>
</nav>
```
