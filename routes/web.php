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


/* #######################    welcomeController  -  LandingPage  #########################*/
Route::get('/', 'welcomeController@welcome');
/* #######################    welcomeController  -  LandingPage  #########################*/


// Route::get('/home', function(){


// 	return view('home');
// });
/* #######################    StudentController   #########################*/
// Route::get('/student', 'studentController@student');
/* #######################    StudentController   #########################*/





/* #######################    EmployeeController   #########################*/
// Route::get('/employee', 'employeeController@employee');
/* #######################    EmployeeController   #########################*/




/* #######################    AdminController   #########################*/
 Route::get('/admin', 'admin\adminController@index');
/*Route::resource('pages/admin', 'adminController');*/


Route::get('employee', 'admin\EmployeeController@index');
Route::resource('employee', 'admin\EmployeeController');
// Route::resource('pages/admin/employee', 'AdminEmployeeController'); -->



// Route::get('/adminStudent', 'adminController@adminStudent');
// Route::get('/adminSubject', 'adminController@adminSubject');
// Route::get('/adminAttendance', 'adminController@adminAttendance');
// Route::get('/adminClass', 'adminController@adminClass');
// Route::get('/adminExam', 'adminController@adminExam');
// Route::get('/adminFee', 'adminController@adminFee');
// Route::get('/adminExpense', 'adminController@adminExpense');



// Route::get('/addEmployee', 'AdminEmployeeController@addEmployee');
// Route::resource('/addEmployee', 'adminController');
/* #######################    AdminController   #########################*/






/* #######################    ParentsController   #########################*/
// Route::get('/parents', 'parentsController@parents');
/* #######################    ParentsController   #########################*/






/* #######################    AuthController   #########################*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/* #######################    AuthController   #########################*/






