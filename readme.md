@webiste: http://foostart.com

@package-name: sample
@author: Kang
@date: 27/12/2017
@version: 2.0

@features

1. CRUD
2. Add category to form
3. Language standard
4. Add filters on table data
5. Add token for prevent XSRF
====================================== Setting Pexcels ===============================

Step 1: Add service providers to config/app.php
Foostart\Pexcel\PexcelServiceProvider::class,
Foostart\Slideshow\SlideshowServiceProvider::class,
Foostart\Filemanager\FilemanagerServiceProvider::class,
Intervention\Image\ImageServiceProvider::class,
Maatwebsite\Excel\ExcelServiceProvider::class,
=======================================================================================
Step 2: Install publish
php artisan vendor:publish --provider="Foostart\\Pexcel\\PexcelServiceProvider" --force
========================================================================================
Step 3: And add class aliases
'Image' => Intervention\Image\Facades\Image::class,
'Excel' => Maatwebsite\Excel\Facades\Excel::class,
========================================================================================
Step 4: Publish the package’s config and assets :
php artisan vendor:publish --tag=lfm_config
php artisan vendor:publish --tag=lfm_public