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
Route::get('/','FontendController@index');
Route::get('/credit','FontendController@credit');
Route::get('/registered','FontendController@register');
Route::get('/article','FontendController@article');
Route::get('/news','FontendController@news');
Route::get('/about-us','FontendController@aboutus');
Route::get('/mission-vision','FontendController@missionvision');
Route::get('/contact-us','FontendController@contact');
Route::get('/policy','FontendController@policy');
Route::get('/terms-condition','FontendController@termscondition'); 

Route::get('/searchtype','FontendController@getcreditByid');
Route::get('/searchcredits/{id}','FontendController@getByid');
Route::get('/readnews/{id}','FontendController@readnews');
Route::get('/readarticle/{id}','FontendController@readarticle');
Route::get('/search_location/{id}','FontendController@search_location');

Route::post('/save-credit','FontendController@credit_save');
Route::post('/save-contact','FontendController@contact_save');


Auth::routes();
              
Route::get('/clc', function() {

  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('config:cache');
  Artisan::call('view:clear');
      // Artisan::call('view:clear');
      // session()->forget('key');
  return "Cleared!";
});   



// Route::get('/backoffice/login', function () {
//     return view('backoffice.index');
// })->name('login_backoffice');

// Route::get('/backoffice', function () {
//     return view('backoffice.index');
// })->name('login_backoffice'); Document

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/backoffice/dashboard','DashboardController');
     Route::get('/backoffice/banner','DashboardController@banner')->name('banner');


      Route::get('/backoffice/target','targetController@target')->name('target');


 Route::get('/backoffice/credits','DashboardController@credits')->name('credits');

  Route::get('/backoffice/new','newController@new')->name('new');


   Route::get('/backoffice/qualification','qualificationController@qualification')->name('qualification');

      
 Route::get('/backoffice/document','documentController@document')->name('document');
 
  Route::get('/backoffice/paymentmethod','paymentmethodController@paymentmethod')->name('paymentmethod');
  
    Route::get('/backoffice/logobank','logobankController@logobank')->name('logobank');
	
	Route::get('/backoffice/footer','footerController@footer')->name('footer');
	
	
	
	Route::get('/backoffice/type','typecreditsController@typecredits')->name('typecredits');

	Route::get('/backoffice/downloaddoc','downloaddocController@downloaddoc')->name('downloaddoc');


  Route::get('/backoffice/articlebanner','articlebannerController@articlebanner')->name('articlebanner');
  
  Route::get('/backoffice/newbanner','newbannerController@newbanner')->name('newbanner');
  
  Route::get('/backoffice/branch','branchController@branch')->name('branch');
  
    Route::get('/backoffice/contactor','ContactorController@branch')->name('contactor');

    		Route::get('/backoffice/contactorfooter','contactorfooterController@contactorfooter')->name('contactorfooter');


    Route::get('/backoffice/vision','visionController@vision')->name('vision');

    Route::get('/backoffice/detailcredit','detailcreditController@detailcredit')->name('detailcredit');

    Route::get('/backoffice/logomember','logomemberController@logomember')->name('logomember');

Route::get('/backoffice/logosocial','logosocialController@logosocial')->name('logosocial');









/////แบนเนอร์ ///


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create/banner/','DashboardController@createform')->name('banner.create');
Route::post('/banner/create/','DashboardController@create');
 Route::post('/updatebanner', 'DashboardController@updatebanner');
Route::get('/editbanners/{id}', 'DashboardController@edit');
Route::post('/delete', 'DashboardController@delete');



////บทความ ////

Route::get('/backoffice/article','articleController@article')->name('article');
Route::get('/create/article/','articleController@articleform')->name('article.create');
 Route::post('/article/create/','articleController@create');
Route::get('/editarticle/{id}', 'articleController@edit');

 Route::post('/update_article', 'articleController@update_article');
 Route::post('/delarticle', 'articleController@del');



////สินเชื่อ ////


Route::get('/backoffice/credits','creditsController@credits')->name('credits');

Route::get('/create/credits/','creditsController@creditsform')->name('credits.create');

Route::post('/credits/create/','creditsController@create');

Route::get('/editcredits/{id}', 'creditsController@edit');

 Route::post('/update_credits', 'creditsController@update_credits');

  Route::post('/del1', 'creditsController@del');


  ////เป้าหมาย ////

  Route::get('/create/target/','targetController@target')->name('target.create');

Route::get('/create/target/','targetController@targetform')->name('target.create');


Route::post('/target/create/','targetController@create');

Route::get('/edittarget/{id}', 'targetController@edit');

 Route::post('/update_target', 'targetController@update_target');

   Route::post('/del_target', 'targetController@del');

//////// ข่าวสารบริษัท

Route::get('/create/new/','newController@new')->name('new.create');

Route::get('/create/new/','newController@newform')->name('new.create');
Route::post('/new/create/','newController@create');

Route::get('/editnew2/{id}', 'newController@edit');
 Route::post('/updatenew', 'newController@updatenew');

 Route::post('/del', 'newController@del');

///// คุณสมบัติ


 Route::get('/create/qualification/','qualificationController@qualification')->name('qualification.create');

Route::get('/create/qualification/','qualificationController@qualificationform')->name('qualification.create');

Route::get('/editqualification/{id}', 'qualificationController@edit');

Route::post('/update2', 'qualificationController@update2');

Route::post('/qualification/create/','qualificationController@create');


 Route::post('/delqualification', 'qualificationController@del');


 ////////////เอกสาร

  Route::get('/create/document/','documentController@document')->name('document.create');


Route::get('/create/document/','documentController@documentform')->name('document.create');


Route::post('/document/create/','documentController@create');

Route::get('/editdocument/{id}', 'documentController@edit');

Route::post('/updatedocument', 'documentController@updatedocument');

 Route::post('/documentdel', 'documentController@del');
 
 
  ////////////ช่องทางชำระเงิน
///Route::get('/create/paymentmethod/','paymentmethodController@paymentmethod')->name('paymentmethod.create');
  Route::get('/editpaymentmethod/{id}', 'paymentmethodController@edit');
  
  Route::post('/updatepaymentmethod', 'paymentmethodController@updatepaymentmethod');
  
  
    //////////// logobank logobank
	
	  Route::get('/create/logobank/','logobankController@logobank')->name('logobank.create');
	  
	  
Route::get('/create/logobank/','logobankController@logobankform')->name('logobank.create');

Route::post('/logobank/create/','logobankController@create');
 Route::get('/editlogobank/{id}', 'logobankController@edit');
   Route::post('/updatelogobank', 'logobankController@updatelogobank');
	
	Route::post('/del3', 'logobankController@del');
	 
	 
	 //////////// footer
	 
  
Route::get('/create/footer/','footerController@footer')->name('footer.create');

Route::get('/editfooter/{id}', 'footerController@edit');
  Route::post('/updatefooter', 'footerController@updatefooter');

 //////////// การจัดการประเภทสินเชื่อ
 
  Route::get('/create/typecredits/','typecreditsController@typecredits')->name('typecredits.create');
  
  Route::post('/type/create/','typecreditsController@create');
  Route::get('/create/typecredits/','typecreditsController@typecreditsform')->name('typecredits.create');
 Route::get('/edittype/{id}', 'typecreditsController@edit');
 Route::post('/updatetype', 'typecreditsController@updatetypecredits');
 
 Route::post('/deltype', 'typecreditsController@del');
 
 ///////การจัดการดาวน์โหลดเอกสาร
 
 Route::get('/create/downloaddoc/','downloaddocController@downloaddoc')->name('downloaddoc.create');
 
 Route::post('/downloaddoc/create/','downloaddocController@create');
 
  Route::get('/create/downloaddoc/','downloaddocController@downloaddocform')->name('downloaddoc.create');
   Route::post('/downloaddocdel', 'downloaddocController@del');
   Route::get('/editdownloaddoc/{id}', 'downloaddocController@edit');
    Route::post('/updatedownloaddoc', 'downloaddocController@updatedownloaddoc');


    /////// การจัดการแบนเนอร์บทความ

  Route::get('/backoffice/articlebanner','articlebannerController@articlebanner')->name('articlebanner');
 Route::post('/articlebanner/create/','articlebannerController@create');
Route::get('/editarticles/{id}', 'articlebannerController@edit');

Route::post('/updatearticlebanner', 'articlebannerController@updatearticlebanner');
//Route::post('/delarticlebanner', 'articlebannerController@del');

/////// การจัดการแบนเนอร์บ

  Route::get('/backoffice/newbanner','newbannerController@newbanner')->name('newbanner');
Route::get('/create/articlebanner/','newbannerController@newbannerform')->name('newbanner.create');
 Route::post('/articlebanner/create/','newbannerController@create');
Route::get('/editnew/{id}', 'newbannerController@edit');

Route::post('/updatenewbanner', 'newbannerController@updatenewbanner');
//Route::post('/delarticlebanner', 'articlebannerController@del');


//////การจัดการ สาขา

  Route::get('/backoffice/branch','branchController@branch')->name('branch');
Route::get('/create/branch/','branchController@branchform')->name('branch.create');

Route::post('/branch/create/','branchController@create');
Route::get('/editbranch/{id}', 'branchController@edit');
Route::post('/updatebranch', 'branchController@updatebranch');
   Route::post('/delbranch', 'branchController@del');
   
   //////การจัดการติดต่อกับเรา

  	Route::get('/backoffice/contactor','ContactorController@contactor')->name('contactor');
	Route::get('/editcontactors/{id}', 'ContactorController@edit');
   
   Route::post('/updatecontactors', 'ContactorController@updatecontactor');
   
    Route::post('/delcontactor', 'ContactorController@del');




    	/////////ติดต่อกับเรา(footer)  contactorfooter
	
	  Route::get('/backoffice/contactor','contactorfooterController@contactorfooter')->name('contactorfooter');
	
	Route::get('/create/contactor/','contactorfooterController@contactorfooterform')->name('contactorfooter.create');
	Route::post('/contactor/create/','contactorfooterController@create');
	Route::get('/editcontactor/{id}', 'contactorfooterController@edit');
   
   Route::post('/updatecontactor', 'contactorfooterController@updatecontactorfooter');
   
    Route::post('/contactordel', 'contactorfooterController@del');



////// วิสัยทัศน์
  
      Route::get('/backoffice/vision','visionController@vision')->name('vision');
      Route::get('/create/vision/','visionController@visionform')->name('vision.create');
      
        Route::post('/vision/create/','visionController@create');
        Route::get('/editvision/{id}', 'visionController@edit');
           Route::post('/updatevision', 'visionController@updatevision');
           Route::post('/delvision', 'visionController@del');


           ////// รายละเอียดเครดิต
  
      Route::get('/backoffice/detailcredit','detailcreditController@detailcredit')->name('detailcredit');
      Route::get('/create/detailcredit/','detailcreditController@detailcreditform')->name('detailcredit.create');
      
      Route::post('/detailcredit/create/','detailcreditController@create');
      Route::get('/editdetailcredit/{id}', 'detailcreditController@edit');
      Route::post('/updatedetailcredit', 'detailcreditController@updatedetailcredit');
       Route::post('/deldetailcredit', 'detailcreditController@del');




///////แบนเนอร์สมาชิกupdatelogomember
  Route::get('/backoffice/logomember','logomemberController@logomember')->name('logomember');
      Route::get('/create/logomember/','logomemberController@logomemberform')->name('logomember.create'); 
      Route::post('/logomember/create/','logomemberController@create');
      Route::get('/editlogomember/{id}', 'logomemberController@edit');
      Route::post('/updatelogomember', 'logomemberController@updatelogomember');
      Route::post('/dellogomember', 'logomemberController@del');

  
  /////////สินเชื่อ(footer)  
  
  Route::get('/backoffice/credit','creditfooterController@creditfooter')->name('creditfooter');
  Route::get('/create/credit/','creditfooterController@creditfooterform')->name('creditfooter.create');
  Route::post('/credit/create/','creditfooterController@create');
  Route::get('/editcredit/{id}', 'creditfooterController@edit');
  Route::post('/updatecredit', 'creditfooterController@updatecontactorfooter');
  Route::post('/creditdel', 'creditfooterController@del');




//////// การจัดการโซเชียล  logosocial
        Route::get('/backoffice/logosocial','logosocialController@logosocial')->name('logosocial');
        Route::get('/create/logosocial/','logosocialController@logosocialform')->name('logosocial.create'); 
        Route::post('/logosocial/create/','logosocialController@create');
        Route::get('/editlogosocial/{id}', 'logosocialController@edit');
        Route::post('/updatelogosocial', 'logosocialController@updatelogosocial');
        Route::post('/dellogosocial', 'logosocialController@del');
        Route::get('/backoffice/registerlist', 'RegisterController@index');
        Route::post('/registerdel', 'RegisterController@del');
        Route::get('/backoffice/contactlist', 'RegisterController@list');
        Route::post('/contactdel', 'RegisterController@del2');

//////// การจัดการโซเชียล  images
Route::get('/backoffice/images','ImagesController@index');
Route::get('/backoffice/images/create','ImagesController@create');
Route::post('/backoffice/images/create','ImagesController@store');
Route::get('/backoffice/images/edit/{id}','ImagesController@edit');
Route::post('/backoffice/images/update/{id}','ImagesController@update');
Route::post('/backoffice/images/delete/{id}','ImagesController@destroy');


/////// แบนเนอร์เกี่ยวกับเรา
Route::get('/aboutindex', 'AboutController@index');
Route::post('/aboutindexstore', 'AboutController@update');
// Route::post('/updatelogomember', 'logomemberController@updatelogomember');
// Route::post('/dellogomember', 'logomemberController@del');

});
    



