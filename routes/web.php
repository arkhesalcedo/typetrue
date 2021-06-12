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

Route::get('homepage', function() {
    return Redirect::to('/', 301);
});

Route::get('privacy-policy', function() {
    return view('privacy-policy');
});

Route::get('terms-of-use', function() {
    return view('terms-of-use');
});

Route::get('contact-us', function() {
    return view('contact-us');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/email-validate/{address}', function($address) {
    $client = new GuzzleHttp\Client();

    $result = $client->get('https://api:' . env('MAILGUN_API') . '@api.mailgun.net/v4/address/validate', [
        'query' => ['address' => $address]
    ]);

    return response()->json(json_decode($result->getBody()->getContents()));
});

Route::post('/request-callback', function () {
    $info['first_name'] = request()->input('first_name');
    $info['last_name'] = request()->input('last_name');
    $info['email'] = request()->input('email');
    $info['phone'] = request()->input('phone');
    $info['comment'] = request()->input('comment');

    \Mail::to('info@typetrue.com')->send(new \App\Mail\RequestACallback($info));

    return response()->json(['status' => 'success']);
});

Route::post('/email-quote', function () {
    $lead = \App\Lead::findOrFail(request()->input('lead_id'));

    \Mail::to($lead->email)->send(new \App\Mail\EmailQuote($lead));

    foreach (['arkhesalcedo@yahoo.com', 'info@typetrue.ca'] as $recipient) {
        Mail::to($recipient)->send(new \App\Mail\Notification($lead));
    }
});

Route::prefix('lead')->group(function () {
    Route::post('store', 'LeadController@store');

    Route::patch('update', 'LeadController@update');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/leads', 'HomeController@getData')->name('leads');


Route::get('/{any}', function ($any) {
    if (in_array($any, ['gender', 'age', 'diagnosed', 'smoker', 'a1c', 'height', 'weight', 'conditions', 'info', 'product', 'sorry', 'thanks'])) {
        return view('questions');
    }

    return Redirect::to('/', 301);
})->where('any', '.*');
