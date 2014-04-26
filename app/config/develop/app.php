<?php

return array(
    'debug' => true,
    'url' => 'http://example.dev',
    'providers' => array(
        'Illuminate\Foundation\Providers\ArtisanServiceProvider',
        'Illuminate\Auth\AuthServiceProvider',
        'Illuminate\Cache\CacheServiceProvider',
        'Illuminate\Session\CommandsServiceProvider',
        'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
        'Illuminate\Routing\ControllerServiceProvider',
        'Illuminate\Cookie\CookieServiceProvider',
        'Illuminate\Database\DatabaseServiceProvider',
        'Illuminate\Encryption\EncryptionServiceProvider',
        'Illuminate\Filesystem\FilesystemServiceProvider',
        'Illuminate\Hashing\HashServiceProvider',
        'Illuminate\Html\HtmlServiceProvider',
        'Illuminate\Log\LogServiceProvider',
        'Illuminate\Mail\MailServiceProvider',
        'Illuminate\Database\MigrationServiceProvider',
        'Illuminate\Pagination\PaginationServiceProvider',
        'Illuminate\Queue\QueueServiceProvider',
        'Illuminate\Redis\RedisServiceProvider',
        'Illuminate\Remote\RemoteServiceProvider',
        'Illuminate\Auth\Reminders\ReminderServiceProvider',
        'Illuminate\Database\SeedServiceProvider',
        'Illuminate\Session\SessionServiceProvider',
        'Illuminate\Translation\TranslationServiceProvider',
        'Illuminate\Validation\ValidationServiceProvider',
        'Illuminate\View\ViewServiceProvider',
        'Illuminate\Workbench\WorkbenchServiceProvider',
        'Bootstrapper\BootstrapperServiceProvider',
        'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider',
        'Barryvdh\Debugbar\ServiceProvider',
    ),

    'aliases' => array(
        'App' => 'Illuminate\Support\Facades\App',
        'Artisan' => 'Illuminate\Support\Facades\Artisan',
        'Auth' => 'Illuminate\Support\Facades\Auth',
        'Blade' => 'Illuminate\Support\Facades\Blade',
        'Cache' => 'Illuminate\Support\Facades\Cache',
        'ClassLoader' => 'Illuminate\Support\ClassLoader',
        'Config' => 'Illuminate\Support\Facades\Config',
        'Controller' => 'Illuminate\Routing\Controller',
        'Cookie' => 'Illuminate\Support\Facades\Cookie',
        'Crypt' => 'Illuminate\Support\Facades\Crypt',
        'DB' => 'Illuminate\Support\Facades\DB',
        'Eloquent' => 'Illuminate\Database\Eloquent\Model',
        'Event' => 'Illuminate\Support\Facades\Event',
        'File' => 'Illuminate\Support\Facades\File',
        'Hash' => 'Illuminate\Support\Facades\Hash',
        'HTML' => 'Illuminate\Support\Facades\HTML',
        'Input' => 'Illuminate\Support\Facades\Input',
        'Lang' => 'Illuminate\Support\Facades\Lang',
        'Log' => 'Illuminate\Support\Facades\Log',
        'Mail' => 'Illuminate\Support\Facades\Mail',
        'Password' => 'Illuminate\Support\Facades\Password',
        'Queue' => 'Illuminate\Support\Facades\Queue',
        'Redirect' => 'Illuminate\Support\Facades\Redirect',
        'Redis' => 'Illuminate\Support\Facades\Redis',
        'Request' => 'Illuminate\Support\Facades\Request',
        'Response' => 'Illuminate\Support\Facades\Response',
        'Route' => 'Illuminate\Support\Facades\Route',
        'Schema' => 'Illuminate\Support\Facades\Schema',
        'Seeder' => 'Illuminate\Database\Seeder',
        'Session' => 'Illuminate\Support\Facades\Session',
        'SSH' => 'Illuminate\Support\Facades\SSH',
        'Str' => 'Illuminate\Support\Str',
        'URL' => 'Illuminate\Support\Facades\URL',
        'Validator' => 'Illuminate\Support\Facades\Validator',
        'View' => 'Illuminate\Support\Facades\View',
        'Alert' => 'Bootstrapper\\Alert',
        'Badge' => 'Bootstrapper\\Badge',
        'Breadcrumb' => 'Bootstrapper\\Breadcrumb',
        'Button' => 'Bootstrapper\\Button',
        'ButtonGroup' => 'Bootstrapper\\ButtonGroup',
        'ButtonToolbar' => 'Bootstrapper\\ButtonToolbar',
        'Carousel' => 'Bootstrapper\\Carousel',
        'DropdownButton' => 'Bootstrapper\\DropdownButton',
        'Form' => 'Bootstrapper\\Form',
        'Helpers' => 'Bootstrapper\\Helpers',
        'Icon' => 'Bootstrapper\\Icon',
        'Image' => 'Bootstrapper\\Image',
        'Label' => 'Bootstrapper\\Label',
        'MediaObject' => 'Bootstrapper\\MediaObject',
        'Navbar' => 'Bootstrapper\\Navbar',
        'Navigation' => 'Bootstrapper\\Navigation',
        'Paginator' => 'Bootstrapper\\Paginator',
        'Progress' => 'Bootstrapper\\Progress',
        'Tabbable' => 'Bootstrapper\\Tabbable',
        'Table' => 'Bootstrapper\\Table',
        'Thumbnail' => 'Bootstrapper\\Thumbnail',
        'Typography' => 'Bootstrapper\\Typography',
        'Debugbar' => 'Barryvdh\Debugbar\Facade',
    ),
);
