<?php

namespace Coreproc\NovaSystemInfoCard\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use Coreproc\NovaSystemInfoCard\CardServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();
        Route::middlewareGroup('nova', []);
    }
    protected function getPackageProviders($app)
    {
        return [
            CardServiceProvider::class,
        ];
    }
}