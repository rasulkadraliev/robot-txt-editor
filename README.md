
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel Robot.txt Editor Package

In order to use the package please do the following:

1. This command should be run:

	$ composer require kadraliev\robot-txt-editor

2. After the package has been copied to your project directory run the following command

	$ php artisan vendor:publish --provider="Kadraliev\Robottxteditor\RobotTxtEditorProvider"

3. In config/app.php add the following class to Package Service Providers section: 

	Kadraliev\Robottxteditor\RobotTxtEditorProvider::class,

￼<img width="682" alt="Package Service Providers" src="https://user-images.githubusercontent.com/80862439/125878391-a60a4a6c-6f31-4ebd-8fd5-049357306cc7.png">



## License

The Laravel Robot.txt Editor Package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
