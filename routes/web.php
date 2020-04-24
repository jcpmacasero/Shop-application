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

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/redirectG', 'SocialAuthGoogleController@redirect');
Route::get('/callbackGoogle', 'SocialAuthGoogleController@callback');

Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('/my-cart/paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));	

Route::get('/getCat', 'HomeController@getCat');
Route::get('/getCat2', 'HomeController@getCat2');
Route::get('/getAdd', 'HomeController@getAdd');
Route::get('/getSub', 'HomeController@getSub');
Route::get('/refbadge','ProductController@getCount');
Route::get('bank', 'BankView@index')->name('bank');

Route::get('profile', 'UserProfile@index')->name('profile');
Route::get('getOrder', 'UserProfile@dataOrdered')->name('getOrder');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/{id}','HomeController@productsByCategory')->name('productlist');
Route::get('productsearch/{id}/{id2}','HomeController@productsBySearch')->name('productlist');
Route::get('/my-cart','ProductController@getAllCart')->name('showcart');
Route::get('showall','ProductController@getAllCart2');
Route::get('product-info/{id}','ProductController@showProduct')->name('showproduct');
Route::get('/remove/{id}','ProductController@removecartItem')->name('removeitem');
Route::get('add-to-cart/{id}/{maxqty}/{qty}','ProductController@addToCart')->name('prodcart');

Route::get('checkout','CheckoutController@checkoutIndex')->name('checkout');
Route::get('city/{id}','CheckoutController@getmycity');
Route::get('barangay/{id}','CheckoutController@getmybarangay');
//verify
Route::get('verifymobile/{number}','CheckoutController@mobile_verification');
Route::get('checkverify/{code}','CheckoutController@check_verify');

Route::get('updateqty/{id}/{newqty}','ProductController@updatenewQty');
Route::post('addship','ProductController@storeShip')->name('addship');
Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

 
//admin
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin/profile', 'AdminController@edit_admin_profile')->name('admin.profile');
Route::get('admin/reg', 'AdminRegister@showIndex')->name('admin.reg');
Route::post('admin/reg', 'AdminRegister@registerAdmin')->name('admin.regnewuser');
Route::get('admin/users', 'AdminUsersController@showIndex')->name('admin.controlusers');

Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('admin/product', 'AdminProductController@productAdminIndex')->name('admin.product');
Route::post('admin/subcategory', 'AdminProductController@addSubCategory')->name('admin.subcategory');
Route::post('admin/product', 'AdminProductController@addProduct')->name('admin.addProduct');
Route::post('admin/edit-product', 'AdminProductController@editProductDetails')->name('admin.editProduct');
Route::get('admin/get-product/{id}', 'AdminProductController@getProductDetails');
Route::get('admin/del-img/{id}', 'AdminProductController@deleteImg');

Route::get('admin/category', 'AdminCategoryController@categoryAdminIndex')->name('admin.category');
Route::get('admin/products', 'AdminProductController@deleteProducts')->name('admin.delproducts');
Route::get('admin/categories', 'AdminCategoryController@deleteCategories')->name('admin.delcategories');
Route::post('admin/category-add', 'AdminCategoryController@addCategory')->name('admin.addcat');
Route::get('admin/get-cat/{id}', 'AdminCategoryController@CategoryDetails');
Route::post('admin/edit-category', 'AdminCategoryController@editCategoryDetails')->name('admin.editCategory');

Route::get('admin/subcategory', 'AdminSubcategoryController@subcategoryAdminIndex')->name('admin.subcategory');
Route::get('admin/del-subcategories', 'AdminSubcategoryController@deleteSubCategories')->name('admin.delsubcategories');
Route::get('admin/get-subcat/{id}', 'AdminSubcategoryController@SubcategoryDetails');
Route::post('admin/edit-subcategory', 'AdminSubcategoryController@editSubCategoryDetails')->name('admin.editsubCategory');

Route::get('admin/pendorders', 'AdminOrderPendingController@OrderPendingIndex')->name('admin.pending');
Route::get('admin/ordersup', 'AdminOrderPendingController@updateProduct')->name('admin.updatestat');

Route::get('admin/approve-orders', 'AdminOrderApproveController@OrderApproveIndex')->name('admin.approve');

Route::get('admin/report-sales', 'AdminReportSalesController@reportSalesIndex')->name('admin.salesrep');
Route::post('admin/report-sales-daily', 'AdminReportSalesController@generateReportDaily')->name('admin.gendailyrep');
Route::post('admin/report-sales-custom', 'AdminReportSalesController@generateReportCustom')->name('admin.gencustomrep'); 
