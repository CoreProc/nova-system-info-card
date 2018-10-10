<?php

namespace Coreproc\NovaSystemInfoCard\Http\Controllers;

use DB;
use Laravel\Nova\Nova;

class SystemInfoController
{
    public function check()
    {
        return [
            'os' => php_uname('s'),
            'php' => phpversion(),
            'database' => $this->getDatabase(),
            'laravel' => app()->version(),
            'nova' => Nova::version(),
        ];
    }

    private function getDatabase()
    {
        $knownDatabases = [
            'sqlite',
            'mysql',
            'pgsql',
            'sqlsrv',
        ];

        if (! in_array(config('database.default'), $knownDatabases)) {
            return 'Unknown';
        }

        $results = DB::select(DB::raw("select version()"));

        return $results[0]->{'version()'};
    }
}
