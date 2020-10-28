<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'HomeController@index')->name('home');

Route::post('/api/auth', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/access-denied', 'User\\UserController@accessDenied')->name('home');

//Route::resource('/', 'User\\CabinetController')->names('/');

Route::group(array('prefix' => '/', 'middleware' => 'auth'), function (){

    Route::get('/', [
        'uses' => 'User\\SupperAdmin\\CabinetUsersController@redirect',
        'middleware' => 'auth'
    ]);

//    Route::resource('users', 'User\\SupperAdmin\\CabinetUsersController')->names('cabinetUsers');
//    Route::resource('programs', 'User\\SupperAdmin\\CabinetProgramsController')->names('cabinetPrograms');

    Route::group(array('prefix' => 'seances', 'middleware' => 'auth'), function (){

        Route::get('', [
            'uses' => 'User\\SupperAdmin\\CabinetSeancesController@index',
            'middleware' => 'auth'
        ]);

        Route::post('', [
            'uses' => 'User\\SupperAdmin\\CabinetSeancesController@index',
            'middleware' => 'auth'
        ]);

        Route::group(array('prefix' => 'create', 'middleware' => 'auth'), function (){

            Route::get('', [
                'uses' => 'User\\SupperAdmin\\CabinetSeancesController@create',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'store', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetSeancesController@store',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'edit', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::get('', [
                    'uses' => 'User\\SupperAdmin\\CabinetSeancesController@edit',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'update', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::post('', [
                    'uses' => 'User\\SupperAdmin\\CabinetSeancesController@update',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'enable', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetSeancesController@enableLog',
                'middleware' => 'auth'
            ]);

        });

    });


    Route::group(array('prefix' => 'users', 'middleware' => 'auth'), function (){

        Route::get('', [
            'uses' => 'User\\SupperAdmin\\CabinetUsersController@index',
            'middleware' => 'auth'
        ]);

        Route::group(array('prefix' => 'create', 'middleware' => 'auth'), function (){

            Route::get('', [
                'uses' => 'User\\SupperAdmin\\CabinetUsersController@create',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'store', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetUsersController@store',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'edit', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::get('', [
                    'uses' => 'User\\SupperAdmin\\CabinetUsersController@edit',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'add_mobile', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::post('', [
                    'uses' => 'User\\SupperAdmin\\CabinetUsersController@add_mobile',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'update', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::post('', [
                    'uses' => 'User\\SupperAdmin\\CabinetUsersController@update',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'enable', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetUsersController@enableUser',
                'middleware' => 'auth'
            ]);

        });

    });

//    Route::group(array('prefix' => 'programs', 'middleware' => 'auth'), function (){
//
//        Route::get('', [
//            'uses' => 'User\\SupperAdmin\\CabinetProgramsController@index',
//            'middleware' => 'auth'
//        ]);
//
//        Route::group(array('prefix' => 'create', 'middleware' => 'auth'), function (){
//
//            Route::get('', [
//                'uses' => 'User\\SupperAdmin\\CabinetProgramsController@create',
//                'middleware' => 'auth'
//            ]);
//
//        });
//
//        Route::group(array('prefix' => 'store', 'middleware' => 'auth'), function (){
//
//            Route::post('', [
//                'uses' => 'User\\SupperAdmin\\CabinetProgramsController@store',
//                'middleware' => 'auth'
//            ]);
//
//        });
//
//        Route::group(array('prefix' => 'edit', 'middleware' => 'auth'), function (){
//
//            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){
//
//                Route::get('', [
//                    'uses' => 'User\\SupperAdmin\\CabinetProgramsController@edit',
//                    'middleware' => 'auth'
//                ]);
//
//            });
//
//        });
//
//        Route::group(array('prefix' => 'update', 'middleware' => 'auth'), function (){
//
//            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){
//
//                Route::post('', [
//                    'uses' => 'User\\SupperAdmin\\CabinetProgramsController@update',
//                    'middleware' => 'auth'
//                ]);
//
//            });
//
//        });
//
//        Route::group(array('prefix' => 'enable', 'middleware' => 'auth'), function (){
//
//            Route::post('', [
//                'uses' => 'User\\SupperAdmin\\CabinetProgramsController@enableProgram',
//                'middleware' => 'auth'
//            ]);
//
//        });
//
//    });

    Route::group(array('prefix' => 'mobiles', 'middleware' => 'auth'), function (){

        Route::get('', [
            'uses' => 'User\\SupperAdmin\\CabinetMobilesController@index',
            'middleware' => 'auth'
        ]);

        Route::group(array('prefix' => 'create', 'middleware' => 'auth'), function (){

            Route::get('', [
                'uses' => 'User\\SupperAdmin\\CabinetMobilesController@create',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'store', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetMobilesController@store',
                'middleware' => 'auth'
            ]);

        });

        Route::group(array('prefix' => 'edit', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::get('', [
                    'uses' => 'User\\SupperAdmin\\CabinetMobilesController@edit',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'update', 'middleware' => 'auth'), function (){

            Route::group(array('prefix' => '{id}', 'middleware' => 'auth'), function (){

                Route::post('', [
                    'uses' => 'User\\SupperAdmin\\CabinetMobilesController@update',
                    'middleware' => 'auth'
                ]);

            });

        });

        Route::group(array('prefix' => 'enable', 'middleware' => 'auth'), function (){

            Route::post('', [
                'uses' => 'User\\SupperAdmin\\CabinetMobilesController@enableProgram',
                'middleware' => 'auth'
            ]);

        });

    });

//    Route::resource('logs', 'User\\SupperAdmin\\CabinetLogsController')->names('cabinetLogs');

});

Route::group(array('prefix' => 'api', 'middleware' => 'auth'), function (){

    Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function (){

        Route::group(array('prefix' => 'helper', 'middleware' => 'auth'), function (){

            Route::post('change_program', [
                'uses' => 'User\\SupperAdmin\\CabinetProgramsController@changeProgram',
                'middleware' => 'auth'
            ]);

        });

    });

});

Route::group(array('prefix' => 'test'), function (){

    Route::get('timezones', [
        'uses' => 'TimeZonesController@getTimeZones'
    ]);

    Route::get('countries', [
        'uses' => 'TimeZonesController@getCountries'
    ]);

});
