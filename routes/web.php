<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\PartController;
use App\Http\Controllers\ProfileImageController;
use App\Http\Controllers\User\StudentEventController;
use App\Http\Controllers\User\ParticipantController;
use App\Http\Controllers\Super\EventssController;
use App\Http\Controllers\Super\UsersController;
use App\Http\Controllers\Super\PartsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');




Route::group(['middleware' =>['auth','user']], function(){
    Route::get('/student', function () {
        return view('user.studentevent');
    });
    route::get('/studenteve',[StudentEventController::class, 'studentevents']);
    route::get('/addpar',[ParticipantController::class, 'addpar']);
    route::post('/addedpart',[ParticipantController::class, 'addedpart']);
    route::get('/studshowevent/{id}',[StudentEventController::class, 'studeventshow']);

    route::get('/participant',[ParticipantController::class, 'views']);
    route::get('/showss/{id}',[ParticipantController::class, 'shows']);
    route::get('/edit/{id}',[ParticipantController::class, 'edit']);
    route::put('/update/{id}',[ParticipantController::class, 'updated']);
    route::delete('/deleted/{id}',[ParticipantController::class, 'deleted']);
    route::get('/showevents/{events_id}',[ParticipantController::class, 'showevents']);

 
});




Route::group(['middleware' =>['auth','admin']], function(){
Route::get('/admin', function () {
    return view('admin.event');
});
route::get('/eventss',[EventsController::class, 'events']);
route::get('/eventfinishs',[EventsController::class, 'eventfinish']);
route::delete('/eventdeletes/{id}',[EventsController::class, 'eventdelete']);
route::get('/addss',[EventsController::class, 'add']);
route::post('/addevents',[EventsController::class, 'addevent']);
route::get('/searchs',[EventsController::class, 'search']);
route::get('/showeventss/{id}',[EventsController::class, 'show']);

route::get('/partshows/{id}',[EventsController::class, 'partshow']);

route::get('/tosearchs',[EventsController::class, 'tosearch']);
route::get('/eventedits/{id}',[EventsController::class, 'edit']);
route::put('/eventupdates/{id}',[EventsController::class, 'eventup']);

route::get('/addss/{id}',[EventsController::class, 'editadd']);
route::put('/eventadds/{id}',[EventsController::class, 'eventadd']);

Route::get('/export-pdfs/{id}',[EventsController::class, 'creatpdf'])->name('exports.pdf');

route::get('/dashboard',[EventsController::class, 'dash']);





route::get('/indexs',[PartController::class, 'views']);
route::delete('/deletes/{id}',[PartController::class, 'delete']);
route::get('/partedits/{id}',[PartController::class, 'partedit']);
route::put('/partupdates/{id}',[PartController::class, 'partupdate']);
route::get('/shows/{id}',[PartController::class, 'show']);
route::get('/partsearchs',[PartController::class, 'partsearch']);



route::get('/temps',[EventsController::class, 'temp']);



});






Route::group(['middleware' =>['auth','super']], function(){
    Route::get('/admin', function () {
        return view('super.event');
    });
    route::get('/events',[EventssController::class, 'events']);
    route::get('/eventfinish',[EventssController::class, 'eventfinish']);
    route::delete('/eventdelete/{id}',[EventssController::class, 'eventdelete']);
    route::get('/add',[EventssController::class, 'add']);
    route::post('/addevent',[EventssController::class, 'addevent']);
    route::get('/search',[EventssController::class, 'search']);
    route::get('/showevent/{id}',[EventssController::class, 'show']);
    
    // route::get('/partshow/{id}',[EventssController::class, 'partshow']);
    
    route::get('/tosearch',[EventssController::class, 'tosearch']);
    route::get('/eventeditt/{id}',[EventssController::class, 'edit']);
    route::put('/eventupdate/{id}',[EventssController::class, 'eventup']);
    
    route::get('/add/{id}',[EventssController::class, 'editadd']);
    route::put('/eventadd/{id}',[EventssController::class, 'eventadd']);
    
    Route::get('partshow/{id}',[EventssController::class, 'partshow']);
    Route::get('/export-pdf/{id}',[EventssController::class, 'creatpdf'])->name('export.pdf');
    
    route::get('/dashboards',[EventssController::class, 'dash']);
    
    
    
    route::get('/users',[UsersController::class, 'users']);
    route::get('/user-edit/{id}',[UsersController::class, 'useredit']);
    route::put('/userup/{id}',[UsersController::class, 'userup']);
    route::delete('/userdelete/{id}',[UsersController::class, 'userdelete']);
    route::get('/showuser/{id}',[UsersController::class, 'usershow']);
    
    
    
    
    route::get('/index',[PartsController::class, 'views']);
    route::delete('/delete/{id}',[PartsController::class, 'delete']);
    route::get('/partedit/{id}',[PartsController::class, 'partedit']);
    route::put('/partupdate/{id}',[PartsController::class, 'partupdate']);
    route::get('/show/{id}',[PartsController::class, 'show']);
    route::get('/partsearch',[PartsController::class, 'partsearch']);
    
    
    
    route::get('/temp',[EventssController::class, 'temp']);
    
    
    
   
    });
    




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/myteam',[TeamsController::class, 'myteam']);

    Route::post('/profile/image', [ProfileImageController::class, 'update'])->name('profile.image.update');

    Route::get('/profileuser', [ProfileController::class, 'useredit'])->name('profile2.edit2');
    Route::patch('/profileuser', [ProfileController::class, 'userupdate'])->name('profile2.update2');
    Route::delete('/profileuser', [ProfileController::class, 'userdestroy'])->name('profile2.destroy2');


    
    Route::get('/profileadmin', [ProfileController::class, 'adminedit'])->name('profile3.edit3');
    Route::patch('/profileadmin', [ProfileController::class, 'adminupdate'])->name('profile3.update3');
    Route::delete('/profileadmin', [ProfileController::class, 'admindestroy'])->name('profile3.destroy3');

   
});



require __DIR__.'/auth.php';

