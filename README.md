

<p align="center"> Please run following commands to setup it</p>

<p align="center">1- composer update</p>
<p align="center">2-php artisan migrate</p>
<p align="center">3- php artisan db:seed</p>
<p align="center">4-DTL Products.postman_collection.json import file in the POSTMAN</p>


<p align="center">optional : composer dump-autoload</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




 Task :- 

  

 Please prepare a simple "Product" module for us to understand your skills. Product module's requirements are given below. 

    

Requirements: 

  

    We expect that product module will contain product's name, price, status, person's information who add the product and product's type (item/service). 
    We expect to see all product's previous record history. (This may be just in Model & Migration.) 
    We expect to see Product's add, edit, delete, show, and index methods. 
    We expect a capability to see the person who added the product and capability to see a product list that can be filtered as product name and person who added the product. 
    When new products added, you need to send an email to person who added the product. (Mail settings do not have to be adjusted. We just need to see the mail notification code.) 
    When we run the project, we expect at least 1 person, and 1 product has been registered as default. 
    We will NOT be expecting to see login, logout, user crud modules. Please keep your focus on the product module. (You are free to create a middleware that can create a random user when request triggered.) 
    We are NOT expecting to test a code. 
    We are NOT expecting for HTML/Blade Template code. This scenario must work on an API and works with JSON format. 

      
    Hints:-   

    Attention will be paid to the variable names and file structure. 
    The desired features will be checked for compliance with the best usage scenarios allowed by Laravel and PHP. 
    Focus will be on methods you will use regarding the performance and security of the module. 

 Note: You can use "Storage" to store records. 

    We want to log a record's all changes. To see these information’s Who changed, which field changed, when was this change made. It's enough to see for us what kind of Models and Migrations you create on the system. We want to see what kind of structure you did.  

     The product list's additional features. There should be a search bar to filter user who added the product, and it can be search as product name. 
