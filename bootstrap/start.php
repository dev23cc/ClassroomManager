<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application;

/*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
*/

$env = $app->detectEnvironment(array(

	'local' => array('snf-612459'),

));

/*
|--------------------------------------------------------------------------
| Bind Paths
|--------------------------------------------------------------------------
|
| Here we are binding the paths configured in paths.php to the app. You
| should not be changing these here. If you need to change these you
| may do so within the paths.php file and they will be bound here.
|
*/

$app->bindInstallPaths(require __DIR__.'/paths.php');

/*
|--------------------------------------------------------------------------
| Load The Application
|--------------------------------------------------------------------------
|
| Here we will load this Illuminate application. We will keep this in a
| separate location so we can isolate the creation of an application
| from the actual running of the application with a given request.
|
*/

$framework = $app['path.base'].
                 '/vendor/laravel/framework/src';

require $framework.'/Illuminate/Foundation/start.php';

Form::macro('datetime', function($name) {
    $years = value(function() {
        $startYear = (int) date('Y');
        $endYear = $startYear - 5;
        $years = ['' => 'year'];
        for($year = $startYear; $year > $endYear; $year--) {
            $years[ $year ] = $year;
        };
        return $years;
    });

    $months = value(function() {
        $months = ['' => 'month'];
        for($month = 1; $month < 13; $month++) {
            $timestamp = strtotime(date('Y'). '-'.$month.'-13');
            $months[ $month ] = strftime('%B', $timestamp);
        }
        return $months;
    });

    $days = value(function() {
        $days = ['' => 'day'];
        for($day = 1; $day < 32; $day++) {
            $days[ $day ] = $day;
        }
        return $days;
    });

    $hours = value(function() {
        $hours = ['' => 'hour'];
        for($hour = 0; $hour < 24; $hour++) {
            $hours[ $hour ] = $hour;
        }
        return $hours;
    });

    $minutes = value(function() {
        $minutes = ['' => 'minute'];
        for($minute = 0; $minute < 60; $minute++) {
            $minutes[ $minute ] = $minute;
        }
        return $minutes;
    });
    $seconds = value(function() {
        $seconds = ['' => 'second'];
        for($second = 0; $second < 60; $second++) {
            $seconds[ $second ] = $second;
        }
        return $seconds;
    });
    return Form::select($name.'[year]', $years) .
    Form::select($name.'[month]', $months) .
    Form::select($name.'[day]', $days) . ' - ' .
    Form::select($name.'[hour]', $hours) .
    Form::select($name.'[minute]', $minutes) . ' - ' .
    Form::select($name.'[second]', $seconds);
});

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
