<?php


Route::post('product_reviews','NewShopController@review')->name('product_reviews');

Route::get('/', 
[

  'uses' => 'NewShopController@index',
  'as' => '/'

]
);
Route::post('/review-product',
    [
        'uses' => 'NewShopController@productDetails',
        'as'   => 'review-product'
    ]);
Route::get('/product-catagorey/{id}', 
[

  'uses' => 'NewShopController@catagoreyProduct',
  'as' => 'product-catagorey'

]
);
Route::get('/product-brand/{id}',
    [
        'uses' => 'NewShopController@brandProduct',
        'as' => 'product-brand'
    ]
);
Route::get('/product-details/{id}/{name}',
    [
        'uses' => 'NewShopController@productDetails',
        'as'   => 'product-details'
    ]);
/* ROUTE FOR search */
Route::post('search-product',
    [
        'uses' => 'NewShopController@index',
        'as' => 'search-product'
    ]
);
Route::post('/add-to-cart',
    [
        'uses'=>'CartController@addToCart',
        'as' =>'add-to-cart'
    ]
);
Route::get('/show-cart',
    [
        'uses' =>'CartController@showCart',
        'as'   =>'show-cart'
    ]
);
Route::get('/delete-cart/{id}',
    [
        'uses' => 'CartController@deleteCart',
        'as'   =>'delete-cart'
    ]
);
Route::post('/update-cart',
    [
        'uses'=>'CartController@updateCart',
        'as'=>'update-cart'
    ]
);

Route::get('/view-checkout','CheckoutController@showCheckout');
Route::post('/customer-registation',
    [
        'uses' =>'CheckoutController@customerSignUp',
        'as' =>'customer-sign-up'
    ]
);
Route::post('/customer-login',
    [
        'uses' => 'CheckoutController@customerLoginCheck',
        'as'   => 'customer-login'
    ]
);
Route::post('/customer-logout',
    [
        'uses' => 'CheckoutController@customerLogout',
        'as'   => 'customer-logout'
    ]
);
Route::get('/new-customer-login',
    [
        'uses' => 'CheckoutController@newCustomerLogin',
        'as' =>'new-customer-login'
    ]
);
Route::get('/checkout-shipping',
    [
        'uses' => 'CheckoutController@shippingForm',
        'as' =>'checkout-shipping'
    ]
);
Route::post('/new-shipping',
    [
        'uses' => 'CheckoutController@saveShippingInfo',
        'as' =>'new-shipping'
    ]
);
Route::get('/checkout-payment',
    [
        'uses' => 'CheckoutController@paymentForm',
        'as' => 'checkout-payment'
    ]
);
Route::post('/checkout-order',
    [
        'uses' => 'CheckoutController@newOrder',
        'as' => 'new-order'
    ]
);
Route::get('/complete-order',
    [
        'uses' => 'CheckoutController@completeOrder',
        'as'   => 'complete-order'
    ]
);
/*Admin Routes */
Route::get('/add-catagorey',
	[
		'uses' =>'CatagoreyController@addCatagorey',
		'as'   =>'add-catagorey'
	]
);
Route::get('/unpublish-catagorey/{id}',
	[
		'uses' =>'CatagoreyController@unpublishCatagorey',
		'as'   =>'unpublish-catagorey'
	]
);
Route::get('/publish-catagorey/{id}',
	[
		'uses' =>'CatagoreyController@publishCatagorey',
		'as'   =>'publish-catagorey'
	]
);
Route::get('/manage-catagorey',
	[
		'uses' =>'CatagoreyController@manageCatagorey',
		'as'   =>'manage-catagorey'
	]
);

Route::post('/update-catagorey',
    [
        'uses'=>'CatagoreyController@updateCatagorey',
        'as'  =>'update-catagorey'
    ]);
Route::get('/delete-catagorey/{id}',
    [
        'uses' =>'CatagoreyController@deleteCatagorey',
        'as'   =>'delete-catagorey'
    ]
);
Route::post('/save-catagorey',

    [
        'uses' =>'CatagoreyController@savecatagorey',
        'as'   =>'save-catagorey'
    ]
);
Route::get('/edit-catagorey/{id}',

    [
        'uses' =>'CatagoreyController@editCatagorey',
        'as'   =>'edit-catagorey'
    ]
);
/*Brand Routes*/
Route::get('/add-brand',

    [
        'uses' =>'BrandController@addBrand',
        'as'   =>'add-brand'
    ]
);
Route::get('/manage-brand',

    [
        'uses' =>'BrandController@manageBrand',
        'as'   =>'manage-brand'
    ]
);
Route::post('/save-brand',

    [
        'uses' =>'BrandController@saveBrand',
        'as'   =>'save-brand'
    ]
);
Route::get('/edit-brand/{brand_id}',
    [
        'uses' =>'BrandController@editBrand',
        'as'   =>'edit-brand'
    ]
);
Route::post('/update-brand',
    [
        'uses' => 'BrandController@updateBrand',
        'as'   => 'update-brand'
    ]
);
Route::get('/delete-brand/{brand_id}',
    [
        'uses' => 'BrandController@deleteBrand',
        'as'   =>'delete-brand'
    ]
);
Route::get('/unpublish-brand/{id}',
	[
		'uses' =>'BrandController@unpublishBrand',
		'as'   =>'unpublish-brand'
	]
);
Route::get('/publish-brand/{id}',
	[
		'uses' =>'BrandController@publishBrand',
		'as'   =>'publish-brand'
	]
);
/*Product Route*/
Route::get('/add-product',
    [
        'uses' =>'ProductController@addProduct',
        'as'   =>'add-product'
    ]
);
Route::get('/manage-product',
    [
        'uses' =>'ProductController@manageProduct',
        'as'   =>'manage-product'
    ]
);
Route::post('/save-product',
    [
        'uses' =>'ProductController@saveProduct',
        'as'   =>'save-product'
    ]
);
Route::get('/edit-product/{id}',
    [
        'uses' =>'ProductController@editProduct',
        'as'   =>'edit-product'
    ]
);
Route::get('/unpublish-product/{id}',
    [
        'uses' =>'ProductController@unpublishProduct',
        'as'   =>'unpublish-product'
    ]
);
Route::get('/publish-product/{id}',
    [
        'uses' =>'ProductController@publishProduct',
        'as'   =>'publish-product'
    ]
);
Route::post('/update-product',
    [
        'uses' => 'ProductController@updateProduct',
        'as'   =>  'update-product'
    ]
);
Route::get('/delete-product/{id}',
    [
        'uses' => 'ProductController@deleteProduct',
        'as'   =>'delete-product'
    ]
);
/* Manage order*/
Route::get('/manage-order',
    [
        'uses' => 'OrderController@manageOrderInfo',
        'as'   => 'manage-order',
        'middleware' =>'login'
    ]
);
Route::get('/view-order-details/{id}',
    [
        'uses' => 'OrderController@viewOrderDetails',
        'as'   => 'view-order-details'
    ] 
);
Route::get('/view-order-invoice/{id}',
    [
        'uses' => 'OrderController@viewOrderInvoice',
        'as'   => 'view-order-invoice'
    ]
);
    Route::get('/download-order-invoice/{id}',
        [
            'uses' => 'OrderController@downloadInvoice',
            'as' =>'download-order-invoice'
        ]
    );
        Route::get('/edit-order/{id}',
        [
            'uses' => 'OrderController@editOrder',
            'as' =>'edit-order'
        ]
    );
    Route::get('/delete-order/{id}',
        [
            'uses' =>'OrderController@deleteOrder',
            'as' =>'delete-order'
        ]
    );
    Route::post('/update-order',
        [
            'uses' => 'OrderController@updateOrder',
            'as' =>'update-order'
        ]
    );
    Route::get('/ajax-email-check/{id}',
        [
            'uses' =>'CheckoutController@EmailCheck',
            'as' => 'ajax-email-check'
        ]
    );
    Route::post('/review',
        [
            'uses' => 'NewShopController@review',
            'as' => 'review'
        ]
    );
    /* Slider Route */
Route::get('/add-slider',
    [
        'uses' => 'SliderController@addSlider',
        'as' => 'add-slider'
    ]
);
Route::get('/manage-slider',
    [
        'uses' => 'SliderController@manageSlider',
        'as' => 'manage-slider'
    ]
);
Route::post('/save-slider',
    [
        'uses' =>'SliderController@saveSlider',
        'as'   =>'save-slider'
    ]
);
Route::get('/edit-slider/{id}',
    [
        'uses' =>'SliderController@editSlider',
        'as'   =>'edit-slider'
    ]
);
Route::get('/unpublish-slider/{id}',
    [
        'uses' =>'SliderController@unpublishSlider',
        'as'   =>'unpublish-slider'
    ]
);
Route::get('/publish-slider/{id}',
    [
        'uses' =>'SliderController@publishSlider',
        'as'   =>'publish-slider'
    ]
);
// Route::post('/update-slider',
//     [
//         'uses' => 'SliderController@updateSlider',
//         'as'   =>  'update-slider'
//     ]
// );
Route::get('/delete-slider/{id}',
    [
        'uses' => 'SliderController@deleteSlider',
        'as'   =>'delete-slider'
    ]
);
Route::get('/rules',
    [
        'uses' => 'NewShopController@rule',
        'as' => 'rules'
    ]
);
/*Admin Routes */
Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home/{id}',
//     ['uses'=>'HomeController@saleProductInfo','as' => 'home']
// );