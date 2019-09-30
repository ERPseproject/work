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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/database', 'HomeController@index')->name('home');


////////////

// user system
Route::get('index', function () {
    return view('Home.index');
});
Route::get('index2', function () {
    return view('Home.index2');
});
Route::get('admin', function () {
    return view('Home.admin');
});
Route::get('kurupan', function () {
    return view('Kurupan.main');
});
Route::get('varasarn', function () {
    return view('Varasarn.index');
});
Route::get('database', function () {
    return view('Home.database');
});


// kurupan system
Route::get('add', function () {
    return view('Kurupan.add.add');
});
Route::get('search', function () {
    return view('Kurupan.searchandsell.mainsearch');
});
Route::get('addrec', function () {
    return view('Kurupan.record.addrec');
});
Route::get('soldrec', function () {
    return view('Kurupan.record.soldrec');
});

//varasarn system
Route::get('academic', function () {
    return view('Varasarn.Academic');
});
Route::get('show', function () {
    return view('Varasarn.show');
});
Route::get('show', function () {
    return view('Varasarn.show');
});
Route::get('back_varasarn', function () {
    return view('Varasarn.index');
});
Route::get('back_show', function () {
    return view('Varasarn.show');
});
Route::get('back_show2', function () {
    return view('Varasarn.show2');
});


//Project and Service
Route::get('moufirst', function () {
    return view('Project_and_service.moufirst');
});
Route::get('mouIn', function () {
    return view('Project_and_service.mouIn');
});
Route::get('customer', function () {
    return view('Project_and_service.customer');
});
Route::get('recipe', function () {
    return view('Project_and_service.recipe');
});

//Project
Route::get('search_project', function () {
    return view('Project_and_service.Project.tarhtml');
});
Route::get('next', function () {
    return view('Project_and_service.Project.next');
});
Route::get('view', function () {
    return view('Project_and_service.Project.view');
});
Route::get('edit', function () {
    return view('Project_and_service.Project.edit');
});
Route::get('pe1', function () {
    return view('Project_and_service.Project.pe1');
});
Route::get('pe2', function () {
    return view('Project_and_service.Project.pe2');
});
Route::get('pe3', function () {
    return view('Project_and_service.Project.pe3');
});
Route::get('pe4', function () {
    return view('Project_and_service.Project.pe4');
});

//Service
Route::get('search_service', function () {
    return view('Project_and_service.Service.search');
});
Route::get('service_edit', function () {
    return view('Project_and_service.Service.editwork');
});
Route::get('service_view', function () {
    return view('Project_and_service.Service.viewdata');
});

////////////

// user system
Route::get('index', function () {
    return view('Home.index');
});
Route::get('index2', function () {
    return view('Home.index2');
});
// Route::get('admin', function () {
//     return view('Home.admin');
// });
Route::get('kurupan', function () {
    return view('Kurupan.main');
});
Route::get('varasarn', function () {
    return view('Varasarn.index');
});


// kurupan system
Route::get('add', function () {
    return view('Kurupan.add.add');
});
Route::get('search', function () {
    return view('Kurupan.searchandsell.mainsearch');
});
Route::get('addrec', function () {
    return view('Kurupan.record.addrec');
});
Route::get('soldrec', function () {
    return view('Kurupan.record.soldrec');
});


//varasarn system
Route::get('academic', function () {
    return view('Varasarn.Academic');
});
Route::get('show', function () {
    return view('Varasarn.show');
});
Route::get('show', function () {
    return view('Varasarn.show');
});
Route::get('back_varasarn', function () {
    return view('Varasarn.index');
});
Route::get('back_show', function () {
    return view('Varasarn.show');
});
Route::get('back_show2', function () {
    return view('Varasarn.show2');
});


//Project and Service
Route::get('moufirst', function () {
    return view('Project_and_service.moufirst');
});
Route::get('mouIn', function () {
    return view('Project_and_service.mouIn');
});
Route::get('customer', function () {
    return view('Project_and_service.customer');
});
Route::get('recipe', function () {
    return view('Project_and_service.recipe');
});
Route::get('confirm', function () {
    return view('Project_and_service.confirm');
});

//Project
Route::get('search_project', function () {
    return view('Project_and_service.Project.tarhtml');
});
Route::get('next', function () {
    return view('Project_and_service.Project.next');
});
Route::get('view', function () {
    return view('Project_and_service.Project.view');
});
Route::get('edit', function () {
    return view('Project_and_service.Project.edit');
});
Route::get('pe1', function () {
    return view('Project_and_service.Project.pe1');
});
Route::get('pe2', function () {
    return view('Project_and_service.Project.pe2');
});
Route::get('pe3', function () {
    return view('Project_and_service.Project.pe3');
});
Route::get('pe4', function () {
    return view('Project_and_service.Project.pe4');
});

//Service
Route::get('search_service', function () {
    return view('Project_and_service.Service.search');
});
Route::get('service_edit', function () {
    return view('Project_and_service.Service.editwork');
});
Route::get('service_view', function () {
    return view('Project_and_service.Service.viewdata');
});




Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')
    ->name('login.provider')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')
    ->name('login.callback')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

//TestRoute
//Route::post('database', 'HrController@HrView');
