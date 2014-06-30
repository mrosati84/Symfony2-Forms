# Symfony2 Form component

This project shows how to use the [Symfony2 Form component][1] without using the whole Symfony2 framework infrastructure.

To initialize, simply call `composer install` or `php composer.phar install` inside the root directory to install the vendor libraries.
After, start a PHP webserver locally

    $ php -S localhost:8000

and visit `http://localhost:8000/index.php` with your web browser.

This sample project uses the following packages

* [symfony/form][2]
* [twig/twig][3]
* [symfony/twig-bridge][4]

*Note*:
`trans` Twig filter has been removed from `form_div_layout.html.twig` file.

  [1]: https://github.com/symfony/Form
  [2]: https://github.com/symfony/symfony
  [3]: https://github.com/fabpot/Twig
  [4]: https://github.com/symfony/TwigBridge