<?php

Route::get('/posts','PagesController@posts');

Route::post('/posts/store','PagesController@store');

Route::get('/post-id/{post}','PagesController@postone');

Route::post('/posts/{post}/store','CommentsController@store');


Route::match(['get','post'],'/admin','AdminController@Login');

Route::match(['get','post'],'/admin/updatepwd','AdminController@updatePassword');

Route::get('/products/{title}','PostsController@Products');

Route::match(['get','post'],'/add-cart','PostsController@addtocart');

Route::get('post/{id}','PostsController@Product');

Route::get('post/{id}','IndexController@Product');
 
Route::match(['get','post'],'/cart','PostsController@cart');

Route::match(['get','post'],'/caring','PostsController@post');

Route::match(['get','post'],'/postt/view-post','PostsController@viewPost');
Auth::routes();


//Route::get('/','ListingController@listing');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','IndexController@index');

Route::get('/posts/{id}','ListingController@listing');

Route::get('/admin/dashboard','AdminController@dashboard');
Route::get('/logout','AdminController@logout');

Route::get('/admin/settings','AdminController@settings');

Route::get('/admin/check-pwd','AdminController@chkPassword');


//////

Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');

Route::match(['get','post'],'/admin/view-category','CategoryController@viewCategory');

Route::match(['get','post'],'/admin/view-users','UsersController@viewUser');

Route::match(['get','post'],'/admin/add-user','UsersController@addUser');

Route::match(['get','post'],'/admin/edit-user/{id}','UsersController@editUser');

Route::match(['get','post'],'/admin/delete-user/{id}','UsersController@deleteUser');

Route::match(['get','post'],'/admin/view-problems','ProductsController@viewProblem');

Route::match(['get','post'],'/admin/add-problem','ProductsController@addProblem');

Route::match(['get','post'],'/admin/edit-problem/{id}','ProductsController@editProblem');

Route::match(['get','post'],'/admin/delete-problem/{id}','ProductsController@deleteProblem');

Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');

Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');

Route::match(['get','post'],'/admin/add-post','PostsController@addProduct');

//Route::match(['get','post'],'/postt/add-post','PostsController@addtopost');

//Route::match(['get','post'],'/add-post','PostsController@addtopost');

Route::match(['get','post'],'/admin/view-post','PostsController@viewProduct');

//Route::match(['get','post'],'/admin/view-carts','CartsController@viewCart');

//Route::match(['get','post'],'/admin/add-problem','CartsController@AddCart');

//Route::match(['get','post'],'/admin/edit-cart/{id}','CartsController@editCart');

//Route::match(['get','post'],'/admin/delete-cart/{id}','CartsController@deleteCart');

//Route::match(['get','post'],'/postt/add-commentt','CommentsController@viewC');

Route::match(['get','post'],'/postt/post','PostsController@AddComment');

//Route::match(['get','post'],'/postt/add-commentt','CommentsController@viewComment');

Route::match(['get','post'],'/postt/add-post','PostsController@AddPost');

Route::match(['get','post'],'/admin/edit-comment/{id}','CommentsController@editComment');

Route::match(['get','post'],'/admin/delete-comment/{id}','CommentsController@deleteComment');

Route::match(['get','post'],'/admin/view-results','ResultsController@viewR');

Route::match(['get','post'],'/admin/add-result','ResultsController@AddR');

Route::match(['get','post'],'/admin/edit-result/{id}','ResultsController@editR');

Route::match(['get','post'],'/admin/delete-result/{id}','ResultsController@deleteR');



Route::match(['get','post'],'/admin/view-questions','QuestionsController@viewQ');

Route::match(['get','post'],'/admin/add-question','QuestionsController@AddQ');

Route::match(['get','post'],'/admin/edit-question/{id}','QuestionsController@editQ');

Route::match(['get','post'],'/admin/delete-question/{id}','QuestionsController@deleteQ');

Route::match(['get','post'],'/admin/edit-post/{id}','PostsController@editProduct');

Route::match(['get','post'],'/admin/delete-post/{id}','PostsController@deleteProduct');

Route::match(['get','post'],'/admin/add-attribute/{id}','PostsController@addAttributes');

Route::GET('/login-register','UsersController@userLoginRegister');

Route::GET('/user-logout','UsersController@logout');

//Route::match(['get','post'],'/login-register','UsersController@register');

Route::post('/user-register','UsersController@register');

Route::post('/user-login','UsersController@login');

Route::get('/admin/view-contact','ContactsController@viewContact');

Route::match(['GET','POST'],'/pages/contact','ContactsController@contact');

Route::match(['get','post'],'/admin/delete-contact/{id}','ContactsController@deleteContact');

Route::match(['get','post'],'/admin/edit-contact/{id}','ContactsController@editContact');

Route::match(['get','post'],'/admin/add-contact','ContactsController@addContact');

//Route::match(['get','post'],'/add-post','ContactsController@addtopost');



//Route::match(['get','post'],'/login-register','UsersController@login');


//mail contact
/*Route::get('test', function() {
    Mail::send('Email.test', [], function ($message) {
        $message->to('example@gmail.com', 'HisName')->subject('Welcome!');
    });

});

Route::get('test', function()
{
    dd(Config::get('mail'));
});*/

