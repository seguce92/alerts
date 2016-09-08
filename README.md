# Alerts

Alerts is a package for show alerts with pNotify jQuery plugin Bootstrap.

Alerts requires PHP >= 5.3, laravel 5.*


## Installation

You can install the package for your Laravel 5 project through Composer.

```bash
$ composer require seguce92/alerts
```

Register the service provider in `app/config/app.php`.

```php
'Seguce92\Alerts\AlertsServiceProvider',
```

Add the alias to the list of aliases in `app/config/app.php`.

```php
'Alerts' => 'Seguce92\Alerts\Facades\Alert',
```

Then run a few commands in the terminal:
``` bash
$ php artisan vendor:publish
```
## Configuration

Set icon to true to use the default icon for the selected style/type, false for no icon, or a string for your own icon class.
```php
'icon'	=>	true,
```

What styling classes to use. (Can be either "brighttheme", "jqueryui", "bootstrap2", "bootstrap3", "fontawesome", or a custom style object. See the source in the end of pnotify.js for the properties in a style object.)
```php
'styling'	=>	'bootstrap3',
```

Delay in milliseconds before the notice is removed.
```php
'delay'	=>	'8000',
```

Whether to escape the content of the text. (Not allow HTML.)
```php
'text_escape'	=>	false,
```

Display a drop shadow.
```php
'shadow'	=>	false,
```

Opacity of the notice.
```php
'opacity'	=>	1,
```

notification type [desktop, normal]
```php
'desktop'	=>	false
```

## Basic Usage

Controllers.php

```php
Alert::info('description')->flash();

Alert::success('description')->flash();

Alert::warning('description')->flash();

Alert::error('description')->flash();
```

View.php

add function before of section script
-	bootstrap.min.css or font-awesome.min.css
-	jquery.min.js

```php
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

{!! Alerts::all() !!}
```
