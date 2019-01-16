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
    return view('index');
});

Auth::routes();

//menu find team
Route::get('/findTeam', 'TeamController@showAllTeamList');
Route::post('/findTeam', 'TeamController@searchForum')->name('search_team');
Route::get('/addTeam', 'TeamController@showAddTeamPage')->name('show_add_team_page');
Route::post('/addTeam', 'TeamController@addTeam')->name('add_team');

//menu tournament
Route::get('/services','TournamentController@test');
Route::get('/inserttour','TournamentController@inserttournament');
Route::post('/doinserttour','TournamentController@doinserttour');
Route::get('/tourdetail/{id}','TournamentController@tourdetail');
Route::get('/deletetour/{id}','TournamentController@deletetour');
Route::get('/edittour/{id}','TournamentController@viewedittour');
Route::post('/savetour','TournamentController@edittour');

//menu Learn
Route::get('/about','LearnController@learn');
Route::get('/learnml','LearnController@learnML');
Route::get('/learndota','LearnController@learnDota');

