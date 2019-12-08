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

Auth::routes();
Route::get('/home', 'DashboardController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('course', function () {
    return view('frontend.course');
});

Route::get('gallery', function () {
    return view('frontend.gallery');
});

Route::get('about_us', function () {
    return view('frontend.about_us');
});

Route::get('contact_us', function () {
    return view('frontend.contact_us');
});

Route::get('test', function () {
    return view('frontend.test');
});
//root = prefix by using auth to protect the regular rout name
Route::group(['prefix' => 'backend','middleware' => ['auth']], function () {  

    Route::get('dashboard',        			array('as'=>'dashboard','uses'=>'DashboardController@index'));

    Route::get('user',        			array('as'=>'user','uses'=>'UserController@index'));
    Route::get('user/create',        	array('as'=>'user/create','uses'=>'UserController@create'));
    Route::post('user/store',        	array('as'=>'user/store','uses'=>'UserController@store'));
    Route::get('user/edit/{id}',        	array('as'=>'user/edit','uses'=>'UserController@edit'));
    Route::post('user/update/{id}',      array('as'=>'user/update','uses'=>'UserController@update'));
    Route::get('user/delete/{id}', 		array('as'=>'user/delete','uses'=>'UserController@destroy'));

    Route::get('student',        			array('as'=>'student','uses'=>'StudentController@index'));
    Route::get('student/create',        	array('as'=>'student/create','uses'=>'StudentController@create'));
    Route::post('student/store',        	array('as'=>'student/store','uses'=>'StudentController@store'));
    Route::get('student/edit/{id}',        	array('as'=>'student/edit','uses'=>'StudentController@edit'));
    Route::post('student/update/{id}',      array('as'=>'student/update','uses'=>'StudentController@update'));
    Route::get('student/delete/{id}', 		array('as'=>'student/delete','uses'=>'StudentController@destroy'));

    Route::get('course',        			array('as'=>'course','uses'=>'CourseController@index'));
    Route::get('course/create',        	array('as'=>'course/create','uses'=>'CourseController@create'));
    Route::post('course/store',        	array('as'=>'course/store','uses'=>'CourseController@store'));
    Route::get('course/edit/{id}',        	array('as'=>'course/edit','uses'=>'CourseController@edit'));
    Route::post('course/update/{id}',      array('as'=>'course/update','uses'=>'CourseController@update'));
    Route::get('course/delete/{id}', 		array('as'=>'course/delete','uses'=>'CourseController@destroy'));

    Route::get('township',        			array('as'=>'township','uses'=>'townshipController@index'));
    Route::get('township/create',        	array('as'=>'township/create','uses'=>'townshipController@create'));
    Route::post('township/store',        	array('as'=>'township/store','uses'=>'townshipController@store'));
    Route::get('township/edit/{id}',        	array('as'=>'township/edit','uses'=>'townshipController@edit'));
    Route::post('township/update/{id}',      array('as'=>'township/update','uses'=>'townshipController@update'));
    Route::get('township/delete/{id}', 		array('as'=>'township/delete','uses'=>'townshipController@destroy'));

    Route::get('registration',        			array('as'=>'registration','uses'=>'RegistrationController@index'));
    Route::get('registration/create',        	array('as'=>'registration/create','uses'=>'RegistrationController@create'));
    Route::post('registration/store',        	array('as'=>'registration/store','uses'=>'RegistrationController@store'));
    Route::get('registration/edit/{id}',        	array('as'=>'registration/edit','uses'=>'RegistrationController@edit'));
    Route::post('registration/update/{id}',      array('as'=>'registration/update','uses'=>'RegistrationController@update'));
    Route::get('registration/delete/{id}', 		array('as'=>'registration/delete','uses'=>'RegistrationController@destroy'));


    Route::get('report',        			array('as'=>'report','uses'=>'ReportController@index'));
    Route::get('report/search/{type?}',        	array('as'=>'report/search/{type?}','uses'=>'ReportController@search'));
    Route::get('report/exportexcel/{type?}',        	array('as'=>'report/exportexcel/{type?}','uses'=>'ReportController@excel'));
    Route::get('report/previewpdf/{type?}',        	array('as'=>'report/previewpdf/{type?}','uses'=>'ReportController@pdfPreview'));
    Route::get('report/exportpdf/{type?}',        	array('as'=>'report/exportpdf/{type?}','uses'=>'ReportController@pdfExport'));

    Route::resource('course_type', 'CoursetypeController');
});


/*
sufee-admin-dashboard-master Sample Routes
*/
Route::get('/sampletemplateview', function () {
    return view('sampletemplate_views.index');
});

Route::get('/sampletemplateview/ui-buttons', function () {
    return view('sampletemplate_views.ui-buttons');
});

/*
Testing Routes for email sending
*/
Route::get('email', array('as'=>'email','uses'=>'MailController@index'));

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendbasicemail2','MailController@basic_email2');

Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendhtmlemail2','MailController@html_email2');

Route::get('sendattachmentemail','MailController@attachment_email');
Route::get('sendattachmentemail2','MailController@attachment_email2');
/*
Testing Routes for email sending
*/


/*
Testing Routes for upload
*/
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');
/*
Testing Routes for upload
*/

/*
Testing Routes for Ajax
*/
Route::get('ajax',function(){
return view('message');
});
Route::post('/getmsg','AjaxController@index'); 	
/*
Testing Routes for Ajax
*/

Route::get('/error',function(){
	abort(404);
});