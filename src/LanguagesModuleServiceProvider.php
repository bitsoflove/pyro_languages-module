<?php namespace Bitsoflove\LanguagesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Bitsoflove\LanguagesModule\Language\Contract\LanguageRepositoryInterface;
use Bitsoflove\LanguagesModule\Language\LanguageRepository;
use Anomaly\Streams\Platform\Model\Languages\LanguagesLanguagesEntryModel;
use Bitsoflove\LanguagesModule\Language\LanguageModel;
use Illuminate\Routing\Router;

class LanguagesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/languages'           => 'Bitsoflove\LanguagesModule\Http\Controller\Admin\LanguagesController@index',
        'admin/languages/create'    => 'Bitsoflove\LanguagesModule\Http\Controller\Admin\LanguagesController@create',
        'admin/languages/edit/{id}' => 'Bitsoflove\LanguagesModule\Http\Controller\Admin\LanguagesController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Bitsoflove\LanguagesModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * The addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Bitsoflove\LanguagesModule\Event\ExampleEvent::class => [
        //    Bitsoflove\LanguagesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Bitsoflove\LanguagesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        LanguagesLanguagesEntryModel::class => LanguageModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        LanguageRepositoryInterface::class => LanguageRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
