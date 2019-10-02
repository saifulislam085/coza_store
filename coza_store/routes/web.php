<?php

Route::get('/',[
    'uses'=>'CozaController@index',
    'as'=>'/'
]);

Route::get('/product/category/{id}',[
   'uses' =>  'CozaController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/product-details/{id}',[
    'uses'=>'CozaController@productDetails',
    'as'=>'product-details'
]);

Route::post('/addToCart',[
    'uses' => 'CartController@addToCart',
    'as' => 'add-to-cart'
]);

Route::get('/cart/show',[
   'uses' => 'CartController@showCart',
    'as' => 'show-cart'
]);

Route::get('/cart/delete/{id}',[
    'uses'=>'CartController@deleteCart',
    'as'=>'delete-cart-item'
]);

Route::post('/cart/update',[
    'uses' => 'CartController@updateCart',
    'as' => 'update-cart'
]);


Route::get('/checkout',[
    'uses' => 'CheckoutController@index',
    'as' => 'checkout'
]);

Route::post('/customer/registration',[
    'uses' => 'CheckoutController@customerSignUp',
    'as' => 'customer-sign-up'
]);

Route::get('/checkout/shipping',[
    'uses' => 'CheckoutController@shippingForm',
    'as' => 'checkout-shipping'
]);

Route::post('/shipping/save',[
    'uses' => 'CheckoutController@saveShippingInfo',
    'as' => 'new-shipping'
]);

Route::get('/checkout/payment',[
    'uses' => 'CheckoutController@paymentForm',
    'as' => 'checkout-payment'
]);

Route::post('/shipping/order',[
    'uses' => 'CheckoutController@saveNewOrder',
    'as' => 'new-order'
]);

Route::get('/complete/order',[
    'uses' => 'CheckoutController@completeOrder',
    'as' => 'complete-order'
]);

Route::post('/checkout/customer-log-in',[
    'uses' => 'CheckoutController@customerLoginCheck',
    'as' => 'customer-log-in'
]);

Route::post('/checkout/customer-logout',[
    'uses' => 'CheckoutController@customerLogout',
    'as' => 'customer-logout'
]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Admin Routes

    Route::get('/category/add',[
        'uses'=>'CategoryController@index',
        'as'=>'add-category',
    ]);

    Route::post('/category/new',[
        'uses'=>'CategoryController@saveCategoryInfo',
        'as'=>'new-category'
    ]);

    Route::get('/category/manage',[
        'uses'=>'CategoryController@manageCategoryInfo',
        'as'=> 'manage-category'
    ]);

    Route::get('/category/unpublished/{id}',[
        'uses' => 'CategoryController@unpublishedCategoryInfo',
        'as' => 'unpublished-category'
    ]);

    Route::get('/category/published/{id}',[
        'uses' => 'CategoryController@publishedCategoryInfo',
        'as' => 'published-category'
    ]);

    Route::get('/category/edit/{id}',[
        'uses' => 'CategoryController@editCategoryInfo',
        'as'=> 'edit-category'
    ]);

    Route::post('/category/update',[
        'uses'=>'CategoryController@updateCategoryInfo',
        'as' =>'update-category'
    ]);

    Route::get('/category/delete/{id}',[
        'uses'=>'CategoryController@deleteCategoryInfo',
        'as' => 'delete-category',
        'middleware' => 'admin'
    ]);





//Brand
//Route::group(['middleware' => ['agent']], function () {
    Route::get('/brand/add', [
        'uses' => 'BrandController@index',
        'as' => 'add-brand',
    ]);

    Route::post('/brand/new', [
        'uses' => 'BrandController@saveBrandInfo',
        'as' => 'new-brand'

    ]);

    Route::get('/brand/manage', [
        'uses' => 'BrandController@showBrandInfo',
        'as' => 'manage-brand'
    ]);
//});
//Product
//Route::group(['middleware' => ['user']], function () {
    Route::get('/product/add',[
        'uses' => 'ProductController@index',
        'as' => 'add-product'
    ]);

    Route::post('/product/save',[
        'uses' => 'ProductController@saveProductInfo',
        'as' => 'new-product'
    ]);

    Route::get('/product/manage',[
        'uses' => 'ProductController@showProductInfo',
        'as' => 'manage-product'
    ]);

    Route::get('/order/manage-order',[
        'uses'=> 'OrderController@manageOrder',
        'as' => 'manage-order'
    ]);

    Route::get('/order/view-details/{id}',[
        'uses'=> 'OrderController@viewOrderDetails',
        'as' => 'view-order-details'
    ]);

    Route::get('/order/view-invoice/{id}',[
        'uses'=> 'OrderController@viewOrderInvoice',
        'as' => 'view-order-invoice'
    ]);

    Route::get('/order/download-invoice/{id}',[
        'uses'=> 'OrderController@downloadOrderInvoice',
        'as' => 'download-invoice'
    ]);

    Route::get('/slider/add-slider',[
        'uses'=> 'SliderController@index',
        'as' => 'add-slider'
    ]);

    Route::post('/slider/new-slider',[
        'uses'=> 'SliderController@saveSlider',
        'as' => 'new-slider'
    ]);









//});
//
//Route::group(['middleware' => ['admin']], function () {
//    Route::get('/brand/add', [
//        'uses' => 'BrandController@index',
//        'as' => 'add-brand',
//    ]);
//
//    Route::post('/brand/new', [
//        'uses' => 'BrandController@saveBrandInfo',
//        'as' => 'new-brand'
//
//    ]);
//
//    Route::get('/brand/manage', [
//        'uses' => 'BrandController@showBrandInfo',
//        'as' => 'manage-brand'
//    ]);
//});
//
//
//Route::group(['middleware' => ['admin']], function () {
//    Route::get('/product/add',[
//        'uses' => 'ProductController@index',
//        'as' => 'add-product'
//    ]);
//
//    Route::post('/product/save',[
//        'uses' => 'ProductController@saveProductInfo',
//        'as' => 'new-product'
//    ]);
//
//    Route::get('/product/manage',[
//        'uses' => 'ProductController@showProductInfo',
//        'as' => 'manage-product'
//    ]);
//});


