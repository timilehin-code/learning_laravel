<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# INTRO:

<h1 style="color:green">Hi, it's me timi, and i am learning everything there is to learn about laravel</h1>

## Lesson 1 - Installing laravel globally:

1. **Install composer** : Composer is the package manager for php that is used to install different php packages,frameworks and libraries for your project. You can install composer from the <a href="https://getcomposer.org/"> composer official website</a>,
   after installation, you can now open your terminal and run the following commands

2. **Install Laravel globally**: After installing Composer you then have to install laravel by running this command

```bash
   composer global require laravel/installer
```

3. **Creating a Laravel Application**: now after installing Laravel globally, you now have to create a laravel application by running the following command

```bash
    laravel new name-of-your-application
```

## Lesson 2 - Building a test server:

when using laravel, there are two versions which are the test version that we work on and to make sure the it works perfectly then the live version which is publicly available and every user can access or see

1.  **Install node.js** : Node js is the server side version of js and to install you can go to the <a href="https://nodejs.org/en/download">node js official website</a> then take the following procedures

2.  make sure in your .env file on the app*url section it read something like this `APP_URL=http://localhost/dashboard/name-of-your-application/public` make sure the \_public* folder is included in the app_url like what we have here.

3.  In your laravel application folder you will have to makes sure you have two files called `vite.config.js` and `package.json`

4.  In your `vite.config.js` you should have

```js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
```

make sure the input key has the link to the css and js as shown in the snippet above

5. now open your code editor terminal and run the following commands

```bash
 npm install vite --save-dev
```

 <h3 style="text-align:center;">Or</h3>

```bash
    npm install vite -D
```

**What it does:**

- Installs Vite (fast dev server & build tool)
- Adds it to `devDependencies` in `package.json`
- Used only during development (not in production)

 <h3>Then <h3>

```bash
 npx vite
```

<h3 style="text-align:center;">Or</h3>

```bash
 npm run dev
```

this will create a link to the testing server for your application

6. to link your css and js assets to your blade template, do this

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/app.css" />
        <title>Document</title>
        @vite('resources/css/app.css') @vite('resources/js/app.js')
    </head>

    <body>
        <h1>Welcome to the Home Page</h1>
    </body>
</html>
```

> [!NOTE]
> Any changes is made to that page is only happening on the test version of your project

7. You can compile the test version of your application to the live version by running this command

```bash
    npx vite build
```

this command builds a version of the website and puts it into the live version of the website

## Lesson 3 - Laravel routes:

routes helps you handle HTTP requests on your web app. The route folder is located inside the main folder in your application folder, but we are going to be focusing more on the `web.php` file to create routes. There are 6 basic types of routes in laravel
**Which are:**

- get() : which is used to get resources from uri and other parameters
- post() : which is used when submitting data
- put()
- patch()
- delete()
- options()

```Php
//parameters using route
Route::get('/profile/{firstName}/{lastName}', function ($firstName, $lastName) {
    return $firstName . $lastName;

});
// Named Routes
Route::get('/test', function () {
    return "This is a test";

})->name("testpage");


// grouped route
Route::prefix("profile")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/user', function () {
        return view('user.blade');
    });
});

// Post Route example
Route::post("/formSubmit", function(Request $request){
    $request->validate([
        'fullName' => 'required|min:3',
        'email' => 'required|min:3|max:300|email:rfc,dns',
    ]);
    $fullName = $request->input('fullName');
    $email = $request->input('email');

    return "Your fullName is $fullName and email is $email";
})->name("submit_form");
```

> [!NOTE]
> For you to be able to use the router Methods you have to use the following namespace

```php
use Illuminate\Support\Facades\Route;
```

> [!NOTE]
> To be able to handle HTTP request, and accessing request data, and more, you will use the following namespace

```php
use Illuminate\Http\Request;
```

## Lesson 4 - Layouts:

Layouts allows you to be able to reuse code just like the php include and require functions but it is a bit different because you have to create a layout page that will be mirrored by other pages and to do that you have to use the `@yield` directive to define a layout
section and the in the page that is going to mirror the layout is going to use the `@extends` directive to specify the layout you are mirroring and then the `@section` directive to specify the section of the layout you want to mirror, although we have the `@include` directive to include a page to another page

## Lesson 5 - Models and Controllers:

To create a Model and controller in laravel you just need to open your editors terminal and type this command :

```bash
    php artisan make:model yourModelName -mcr
```

the mcr at the back stands for

1. m - Migration : (it creates a table structure for the model you created)
2. c - Controller : (the controller creates a controller class for the model you created)
3. r - Resources (for creates all the methods required for a crude operation in the controller class)


## Lesson 6 - Migrating tables to databases
So  after creating a model and controller using the PHP command above in your database folder it creates a php file that helps you  create a table in your database

```php
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // to create a column with the data type  varchar
            $table->text('body'); // to create a column with the data type  text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts'); // dropping a table
    }
};
```
So after adding the column into the methods you can now run the following commands
```bash
    php artisan migrate # to migrate a table
    
    php artisan  migrate:rollback # to undo/rollback previous changes

    php artisan migrate:refresh # to re-run all migration files in the database

    # you can add --path=database/migrations/yourFileName.php if you are targeting one file
```
