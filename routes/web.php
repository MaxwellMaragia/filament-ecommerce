<?php

use App\Http\Controllers\RobotsTxtController;
use App\Livewire\AccountPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\BrandsPage;
use App\Livewire\CancelPage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\ChangePassword;
use App\Livewire\CheckoutPage;
use App\Livewire\ContactUs;
use App\Livewire\HomePage;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SucessPage;
use App\Livewire\UpdateProfile;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class);
Route::get('/products', ProductsPage::class);
Route::get('/cart', CartPage::class);
Route::get('/products/{slug}', ProductDetailPage::class);
Route::get('/categories/{slug}', CategoriesPage::class);
Route::get('/brands/{slug}', BrandsPage::class);
Route::get('/contact-us', ContactUs::class);

//robots
//Route::controller(RobotsTxtController::class)->group(function () {
//    Route::get('/robots.txt', 'index');
//});

Route::get('/robots.txt', function (){
    $path = public_path('robots.txt');
    if (file_exists($path)) {
        return response()->file($path,[
            'Content-Type' => 'text/plain',
        ]);
    }
    abort(404);
});

//auth
Route::middleware('guest')->group(function () {
    Route::get('/login', LoginPage::class)->name('login');
    Route::get('/register', RegisterPage::class);
    Route::get('/forgot', ForgotPasswordPage::class)->name('password.request');
    Route::get('/reset/{token}', ResetPasswordPage::class)->name('password.reset');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
    Route::get('/checkout', CheckoutPage::class);
    Route::get('/my-orders', MyOrdersPage::class);
    Route::get('/my-orders/{order_id}', MyOrderDetailPage::class)->name('my-orders.show');
    Route::get('/success', SucessPage::class)->name('success');
    Route::get('/cancel', CancelPage::class);
    Route::get('/account', AccountPage::class)->name('account');
    Route::get('/update-profile',UpdateProfile::class)->name('update-profile');
    Route::get('/change-password',ChangePassword::class)->name('change-password');
});




