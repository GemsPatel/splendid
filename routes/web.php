<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CronController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\MailGunController;

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "will clear the all cached!";
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BlogController::class, 'index']);
Route::get('category/{slug}', [BlogController::class, 'getCategoryWiseBlogs']);
Route::get('view/{slug}', [BlogController::class, 'getBlogDetails']);

//testing function
Route::get('/get-xml-mp3', [CronController::class, 'getXMLMP3']);
Route::get('/get-splendit-title', [CronController::class, 'getSplenditTitle']);

//Cron function
Route::get('send-android-notification',[CronController::class, 'sendAndroidNotification']); //check and send every 5 min ( */4 * * * * curl https://domain/send-android-notification )
Route::get('send-ios-notification',[CronController::class, 'sendIOSNotification']); //check and send every 5 min ( */6 * * * * curl https://domain/send-ios-notification )
Route::get('generate-country-alias',[CronController::class, 'generateCountryAlias']);
Route::get('generate-language-alias',[CronController::class, 'generateLanguageAlias']);
Route::get('generate-admin-menu-seeder',[CronController::class, 'generateAdminMenuSeeder']);
Route::get('generate-configuration-seeder',[CronController::class, 'generateConfigurationSeeder']);
Route::get('generate-permission-seeder',[CronController::class, 'generateAdminPemissionSeeder']);
Route::get('generate-category-seeder',[CronController::class, 'generateCategorySeeder']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('update-country-flag', [CronController::class, 'updateCountryFlag']);
Route::get('twilio-send-msg', [CronController::class, 'sendTwilioMessage']);

/**
 * Temp Routes
 */
// Route::get('/', function () { return view('front.index'); });
Route::get('404', function () { return view('front.404'); });
Route::get('send-mail-using-mailgun', [MailGunController::class, 'index'])->name('send.mail.using.mailgun.index');
Route::get('about', function () { return view('front.about'); });
Route::get('author-single', function () { return view('front.author-single'); });
Route::get('blog', function () { return view('front.blog'); });
Route::get('blog2', function () { return view('front.blog2'); });
Route::get('blog3', function () { return view('front.blog3'); });
Route::get('blog4', function () { return view('front.blog4'); });
Route::get('blog5', function () { return view('front.blog5'); });
Route::get('cart', function () { return view('front.cart'); });
Route::get('category', function () { return view('front.category'); });
Route::get('checkout', function () { return view('front.checkout'); });
Route::get('contact', function () { return view('front.contact'); });
Route::get('post-single', function () { return view('front.post-single'); });
Route::get('post-single2', function () { return view('front.post-single2'); });
Route::get('product-single', function () { return view('front.product-single'); });
Route::get('real-details', function () { return view('front.real-details'); });
Route::get('shop', function () { return view('front.shop'); });
Route::get('generate-blade', [CronController::class, 'generateBladeFile']);
Route::get('export-pings-tree-log', [CronController::class, 'ExportPingsTreeLogFromAPISecond']);
