<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PayPalPaymentController;

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

Route::get('/', [ClientController::class,'home']);
Route::get('/service', [ClientController::class,'service']);
Route::get('/financial', [ClientController::class,'financial']);

Route::post('/payer', [ShopController::class,'payer']);
Route::get('/shop', [ShopController::class,'shop']);
Route::get('/shop/{id}', [ShopController::class,'show']);
// Route::get('/register', [ClientController::class,'home']);

Route::get('/addtocart', [ShopController::class, 'addtocart'])->name('addtocart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/handle-payment', [PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::get('/cancel-payment', [PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('/payment-success', [PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');

// Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
// Route::get('success', [PaymentController::class, 'success']);
// Route::get('error', [PaymentController::class, 'error']);
/* PayPal */
Route::post('paypal/payment', [PaypalController::class, 'AppelClient'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
