<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use TCG\Voyager\Facades\Voyager;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    /*Route::get('/', function () {
        return view('welcome');
    });*/
    Auth::routes();
    Route::resource('state', App\Http\Controllers\StateController::class);
    Route::get('/', [App\Http\Controllers\StateController::class, 'index'])->name('index');
    Route::get('register/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register.id');
    Route::post('/webhook', [App\Http\Controllers\PaymentController::class, 'webhook'])->name('webhook');


    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
        Route::get('/select-user', [App\Http\Controllers\Admin\ResultController::class, 'getUser'])->name('setUser');
    });



    Route::middleware('auth')->group(function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
        Route::post('/profile', [App\Http\Controllers\HomeController::class, 'save'])->name('profile.update');
        Route::get('/verify/{id}', [App\Http\Controllers\HomeController::class, 'verify'])->name('verify');
        Route::post('/verify/{id}', [App\Http\Controllers\HomeController::class, 'verify'])->name('verifybirth');
        Route::get('/page/{id}', [App\Http\Controllers\PageController::class, 'index'])->name('page')->middleware('birth');

        Route::get('/quiz/{id}', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz')->middleware('birth');
        Route::post('/quiz/{id}', [App\Http\Controllers\QuizController::class, 'quizSubmit'])->name('quizSubmit')->middleware('birth');

        Route::get('/final-quiz/{id}', [App\Http\Controllers\FinalQuizController::class, 'index'])->name('final.quiz')->middleware('birth');
        Route::post('/final-quiz/{id}', [App\Http\Controllers\FinalQuizController::class, 'quizSubmit'])->name('final.quiz.post')->middleware('birth');

        Route::get('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'addon'])->name('payment.addon');
        Route::get('/courtinfo/{id}', [App\Http\Controllers\PaymentController::class, 'courtinfo'])->name('payment.courtinfo');
        Route::post('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'index']);
        Route::post('/payment/{id}/completed', [App\Http\Controllers\PaymentController::class, 'paymentCompleted'])->name('payment.completed');
        Route::post('payment/process-payment/{string}/{price}', [App\Http\Controllers\PaymentController::class, 'processPayment'])->name('processPayment');
//        Route::get('/data', [App\Http\Controllers\PaymentController::class, 'dataImporter'])->name('data');
        Route::get('/testdata', [App\Http\Controllers\PaymentController::class, 'paymentCompleted'])->name('payment.get');

    });


