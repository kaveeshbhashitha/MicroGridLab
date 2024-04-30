<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\InternationalController;
use App\Http\Controllers\PostgraduateController;
use App\Http\Controllers\UserRegiController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//main router for admin and user
Route::get('/home', [HomeController::class, 'index']);

//web page handling routers
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::post('/send-email', [WebController::class, 'sendEmail'])->name('send.email');

Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/people', [WebController::class, 'peoples'])->name('peoples');
Route::get('/publications', [WebController::class, 'publications'])->name('publications');
Route::get('/researchers', [WebController::class, 'researchers'])->name('researchers');
Route::get('/news', [WebController::class, 'news'])->name('news');
Route::get('/projects', [WebController::class, 'projects'])->name('projects');
Route::get('/courses', [WebController::class, 'courses'])->name('courses');

//admin pages handling routers
//main pages handling routers
Route::get('/admin/news', [NewsController::class, 'adminnews'])->name('adminnews');
Route::get('/admin/people', [AdminController::class, 'adminpeople'])->name('adminpeople');
Route::get('/admin/publication', [PublicationController::class, 'adminpublish'])->name('adminpublish');
Route::get('/admin/research', [ResearchController::class, 'adminresearch'])->name('adminresearch');
Route::get('/admin/project', [ProjectController::class, 'adminproject'])->name('adminproject');
Route::get('/admin/course', [CourseController::class, 'admincourse'])->name('admincourse');

//people handling routers for admin
Route::get('/admin/people/alumni', [AlumniController::class, 'adminpeoplealumni'])->name('adminpeoplealumni');
Route::get('/admin/people/coordinator', [CoordinatorController::class, 'adminpeoplecoordinator'])->name('adminpeoplecoordinator');
Route::get('/admin/people/international', [InternationalController::class, 'adminpeopleinternational'])->name('adminpeopleinternational');
Route::get('/admin/people/staff', [StaffController::class, 'adminpeoplestaff'])->name('adminpeoplestaff');
Route::get('/admin/people/postgraduate', [PostgraduateController::class, 'adminpeoplepostgraduate'])->name('adminpeoplepostgraduate');

//people handling routers for admin
Route::get('/admin/system/systemuser', [UserRegiController::class, 'adminsystemusers'])->name('adminsystemusers');


//user pages handling routers
//main user routes
Route::get('/user/addnews', [UserController::class, 'addnews'])->name('addnews');
Route::get('/user/addpublication', [UserController::class, 'addpublication'])->name('addpublication');
Route::get('/user/research', [UserController::class, 'addresearch'])->name('addresearch');
Route::get('/user/people', [UserController::class, 'userpeople'])->name('userpeople');
Route::get('/user/project', [UserController::class, 'addproject'])->name('addproject');
Route::get('/user/course', [UserController::class, 'addcourse'])->name('addcourse');

//user people routes
Route::get('/user/people/alumni', [AlumniController::class, 'userpeoplealumni'])->name('userpeoplealumni');
Route::get('/user/people/coordinator', [UserController::class, 'userpeoplecoordinator'])->name('userpeoplecoordinator');
Route::get('/user/people/international', [UserController::class, 'userpeopleinternational'])->name('userpeopleinternational');
Route::get('/user/people/staff', [UserController::class, 'userpeoplestaff'])->name('userpeoplestaff');
Route::get('/user/people/postgraduate', [UserController::class, 'userpeoplepostgraduate'])->name('userpeoplepostgraduate');

//alumni
Route::resource('/alumni', AlumniController::class);
Route::post('/alumni/{id}/publish', [AlumniController::class, 'publish'])->name('alumni.publish');
Route::post('/alumni/{id}/unpublish', [AlumniController::class, 'unpublish'])->name('alumni.unpublish');

//coordinator
Route::resource('/coordinator', CoordinatorController::class);
Route::post('/coordinator/{id}/publish', [CoordinatorController::class, 'publish'])->name('coordinator.publish');
Route::post('/coordinator/{id}/unpublish', [CoordinatorController::class, 'unpublish'])->name('coordinator.unpublish');

//international
Route::resource('/international', InternationalController::class);
Route::post('/international/{id}/publish', [InternationalController::class, 'publish'])->name('international.publish');
Route::post('/international/{id}/unpublish', [InternationalController::class, 'unpublish'])->name('international.unpublish');

//postgraduate
Route::resource('/postgraduate', PostgraduateController::class);
Route::post('/postgraduate/{id}/publish', [PostgraduateController::class, 'publish'])->name('postgraduate.publish');
Route::post('/postgraduate/{id}/unpublish', [PostgraduateController::class, 'unpublish'])->name('postgraduate.unpublish');

//user
Route::resource('/user', UserRegiController::class);

//research
Route::resource('/research', ResearchController::class);
Route::post('/research/{id}/publish', [ResearchController::class, 'publish'])->name('research.publish');
Route::post('/research/{id}/unpublish', [ResearchController::class, 'unpublish'])->name('research.unpublish');

//publication
Route::resource('/publication', PublicationController::class);
Route::post('/publication/{id}/publish', [PublicationController::class, 'publish'])->name('publication.publish');
Route::post('/publication/{id}/unpublish', [PublicationController::class, 'unpublish'])->name('publication.unpublish');

//news
Route::resource('/newss', NewsController::class);
Route::post('/news/{id}/publish', [NewsController::class, 'publish'])->name('newss.publish');
Route::post('/news/{id}/unpublish', [NewsController::class, 'unpublish'])->name('newss.unpublish');

//staff
Route::resource('/staff', StaffController::class);
Route::post('/staff/{id}/publish', [StaffController::class, 'publish'])->name('staff.publish');
Route::post('/staff/{id}/unpublish', [StaffController::class, 'unpublish'])->name('staff.unpublish');

//project
Route::resource('/project', ProjectController::class);
Route::post('/project/{id}/publish', [ProjectController::class, 'publish'])->name('project.publish');
Route::post('/project/{id}/unpublish', [ProjectController::class, 'unpublish'])->name('project.unpublish');

//course
Route::resource('/course', CourseController::class);
Route::post('/course/{id}/publish', [CourseController::class, 'publish'])->name('course.publish');
Route::post('/course/{id}/unpublish', [CourseController::class, 'unpublish'])->name('course.unpublish');

// Fallback route for handling undefined routes
Route::fallback(function () {
    return view('error404');
});