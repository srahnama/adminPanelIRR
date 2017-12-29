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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');












Route::resource('tripThemes', 'TripThemeController');





Route::resource('places', 'PlaceController');

Route::resource('tripAvailabilities', 'TripAvailabilitieController');

Route::resource('routeThemes', 'RouteThemeController');

Route::resource('inclusions', 'InclusionController');

Route::resource('placeTypes', 'PlaceTypeController');

Route::resource('pictures', 'PictureController');

Route::resource('routes', 'RouteController');

Route::resource('tripInclusions', 'TripInclusionController');

Route::resource('placeTransportations', 'PlaceTransportationController');

Route::resource('contents', 'ContentController');

Route::resource('tripThemeRelations', 'TripThemeRelationController');

Route::resource('userLicences', 'UserLicenceController');

Route::resource('routeThemeRelations', 'RouteThemeRelationController');

Route::resource('placesParts', 'PlacesPartController');

Route::resource('placeTypeRelations', 'PlaceTypeRelationController');

Route::resource('userExperiences', 'UserExperienceController');

Route::resource('routeTodos', 'RouteTodoController');

Route::resource('userCars', 'UserCarController');

Route::resource('routeLocations', 'RouteLocationController');

Route::resource('tripLocations', 'TripLocationController');

Route::resource('placeInfos', 'PlaceInfoController');

Route::resource('userPrefs', 'UserPrefController');