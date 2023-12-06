<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Mail\VerificationCodeMail;

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

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });


/*
|--------------------------------------------------------------------------
| ADMIN SIDE ROUTES
|--------------------------------------------------------------------------
|
*/
Route::get('/admin-login', [AdminController::class,"AdminLogin"]);
Route::get('/admin-manage-admin/{adminID}', [AdminController::class, "ManageAdmin"])->name('manage.admin.view');
Route::get('/admin-add-admin', [AdminController::class, "AddAdmin"]);
Route::get('/admin-process-orders', [AdminController::class, "AdminProcessOrders"]);
Route::get('/admin-orders-perpage', [AdminController::class, "AdminManageOrders"]);
Route::get('/admin-manage-products', [AdminController::class, "AdminManageProducts"]);
Route::get('/admin-products-perpage', [AdminController::class, "AdminProductsPerPage"]);
Route::get('/admin-manage-users', [AdminController::class, "AdminManageUsers"]);

//Displaying Data
Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/user-ordering-page', [ProductController::class, 'ProductInfo']);
/*
|--------------------------------------------------------------------------
| ADMIN SIDE LOGIN
|--------------------------------------------------------------------------
|
*/

Route::get('/admin-login', [AdminController::class, 'AdminLogin'])->name('admin-login');
Route::post('/admin-login/success', [AdminController::class, 'loginprocess']);



/*
|--------------------------------------------------------------------------
| ADMIN SIDE CRUD
|--------------------------------------------------------------------------
|
*/

//ADMIN ADD
Route::post('add/admin', [AdminController::class, 'store']);
//ADMIN EDIT UPDATE
Route::put('/admin-manage-admin/{adminID}', [AdminController::class, 'adminEdit'])->name('admin.update');
//ADMIN OWN PROFILE UPDATE
Route::put('/admin/profile/{adminID}', [AdminController::class, 'updateAdminProfile'])->name('admin.profile.update');

//ADMIN DELETE
Route::delete('/admin/{adminID}', [AdminController::class, 'adminDelete'])->name('admin.delete');

/*
|--------------------------------------------------------------------------
| PRODUCT 
|--------------------------------------------------------------------------
|
*/

//PRODUCT ADD
Route::post('add/product', [ProductController::class, 'store'])->name('add-product');
//PRODUCT PERPAGE (EDIT/UPDATE)
Route::get('/admin-products-perpage/{prodID}', [ProductController::class, 'viewProduct'])->name('admin.products.view');
Route::put('/admin-products-perpage/{prodID}', [ProductController::class, 'productEdit'])->name('demo.update');
//Show Product
Route::get('/admin-dashboard#products', [AdminController::class, 'dashboard'])->name('admin.dashboard.products');
//PRODUCT DELETE
Route::delete('/product/{prodID}', [ProductController::class, 'productDelete'])->name('product.delete');


/*
|--------------------------------------------------------------------------
| CUSTOMER/USER SIDE ROUTES
|--------------------------------------------------------------------------
|
*/

Route::get('/', [UserController::class, "index"]);
Route::get('/{page}', [UserController::class, "showPage"])->where('page', 
        'homepage|news|customer-reviews|about-us|personnel-about|services-and-products|FaQs|contact-us|user-forgetpass|user-passreset-success|user-resetpass|user-register|user-ordering-page|user-cart-page|user-profile|user-order-checkout|user-order-summary|user-order-history');
require __DIR__.'/auth.php';


//Displaying of Products


////USER SENDING EMAIL
// Route for sending the verification code
Route::post('/send-verification-code', [RegistrationController::class, 'sendVerificationCode'])->name('sendVerificationCode');

// Route for verifying the entered code
Route::post('/verify', [RegistrationController::class, 'verify'])->name('verify');

//Add User
// Handle registration form submission
Route::post('/user-register', [RegistrationController::class, 'userRegister'])->name('register.submit');

//User Login
Route::post('/user-login/success', [UserController::class, 'userLogin']);

//User Update
Route::put('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');

//Add to cart
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');
Route::get('/get-cart-count', [CartController::class,'getCartCount'])->name('get-cart-count');


Route::post('/logout', [CartController::class, 'logout'])->name('logout');

Route::get('/user-cart-page', [CartController::class, 'showCart'])->name('user.cart.page');
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('clearCart'); 
Route::post('/order-placed', [CartController::class, 'orderPlaced'])->name('orderPlaced'); 
Route::post('/clear-item/{productId}', [CartController::class, 'clearItem'])->name('clear.item');

//Placing of Order

Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('place.order');

//displaying

Route::get('/user-order-summary', [OrderController::class, 'showAllOrders'])->name('show');
Route::get('/admin-orders-perpage/{orderID}', [OrderStatusController::class, 'viewOrderStatus'])->name('admin.status.view');
Route::get('/user-order-history/{orderID}', [OrderStatusController::class, 'viewPerOrder'])->name('user.order.history');

//user displaying, update/edit, delete in admin
Route::get('/admin-manage-user/{userID}', [UserController::class, 'viewProfile'])->name('admin.user.view');
Route::put('/update-profile/{userID}', [UserController::class, 'profileUpdate'])->name('admin.user.update');
Route::delete('/user-profile/{userID}', [UserController::class, 'profileDelete'])->name('admin.user.delete');
//Changing Order Status user side
Route::put('/user-profile', [OrderStatusController::class, 'changeOrderStatus'])->name('user.status.complete');
//Changing Order Admin user side
Route::put('/admin-orders-perpage', [OrderStatusController::class, 'changeOrderStatusAdmin'])->name('user.status.complete.admin');