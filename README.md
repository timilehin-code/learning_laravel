<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# INTRO:

<h1 style="color:green">Hi, it's me timi, and i am learning everything there is to learn about laravel</h1>

## Lesson 1: Installing laravel globally:

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

## Lesson 2 : Building a test server:

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

```bash
 npx vite
```

the it will create a link to the testing server for your application

6. to link your css and js assets to your blade template, do this
```html
    <!DOCTYPE html>
    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Welcome to the Home Page</h1>
</body>
</html>
```

>[!NOTE]
>Any changes is made to that page is only happening on the test version of your project

7. You can compile the test version of your application to the live version by running this command
```bash
    npx vite build
```
this command builds a version of the website and puts it into the live version of the website
