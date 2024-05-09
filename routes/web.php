<?php

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    //return view('welcome');
    return view('landing.index'); //Redirect on load to login or home
})->name('landing');

Route::get('login', function () {
    //return view('welcome');
    return view('auth.login'); //Redirect on load to login or home
});
//LARAVEL DEFAULT
Auth::routes();

/**
 * UNAUTHENTICATED ROUTES
 */
Route::post('employer/otp', [App\Http\Controllers\EmployerController::class, 'verifyotp'])->name('employer.otp');
Route::get('employer/ecs', [App\Http\Controllers\EmployerController::class, 'ecs'])->name('employer.ecs');
Route::get('employer/lgas', [App\Http\Controllers\EmployerController::class, 'lgas'])->name('employer.lgas');

Route::get('/check-email', 'App\Http\Controllers\EmployerController@checkEmail')->name('check-email');
Route::get('/check-phone', 'App\Http\Controllers\EmployerController@checkPhone')->name('check-phone');



Route::get('certificate/{certificateId}/detailspage', 'App\Http\Controllers\CertificateController@displayCertificateDetailsPage')->name('certificate.detailspage');
Route::get('certificate/verify', 'App\Http\Controllers\CertificateController@verifyCertificate')->name('certificate.verify');
Route::get('verification', 'App\Http\Controllers\CertificateController@verification')->name('verification');


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /**
     * EMPLOYERS
     */
    Route::get('employer/profile', [App\Http\Controllers\EmployerController::class, 'profile'])->name('employer.profile');
    Route::resource('employer', App\Http\Controllers\EmployerController::class);


    /**
     * EMPLOYEES
     */
    Route::get('employee/createbulk', [App\Http\Controllers\EmployeeController::class, 'createbulk'])->name('employee.createbulk');
    Route::post('employee/uploadbulk', [App\Http\Controllers\EmployeeController::class, 'uploadbulk'])->name('employee.uploadbulk');
    Route::post('employee/storebulk', [App\Http\Controllers\EmployeeController::class, 'storebulk'])->name('employee.storebulk');
    Route::resource('employee', App\Http\Controllers\EmployeeController::class);
    //Route::put('/sub-services/{subService}', 'SubServiceController@update')->name('sub-services.update');


    Route::get('/documents/index', 'App\Http\Controllers\EmployerDocumentController@index')->name('documents.index');
    Route::post('/documents/store', 'App\Http\Controllers\EmployerDocumentController@store')->name('documents.store');
    Route::get('/documents/create', 'App\Http\Controllers\EmployerDocumentController@create')->name('documents.create');
    Route::get('download/niwa/act', 'App\Http\Controllers\EmployerDocumentController@niwaAct')->name('download.niwa.act');



    /**
     * PAYMENTS
     */
    Route::get('payment/invoice/download/{payment}', [App\Http\Controllers\PaymentController::class, 'download'])->name('payment.invoice.download');
    Route::get('payment/invoice/{payment}', [App\Http\Controllers\PaymentController::class, 'invoice'])->name('payment.invoice');
    Route::get('payment/remita', [App\Http\Controllers\PaymentController::class, 'callbackRemita'])->name('payment.callback');
    Route::get('payment/remitadata', [App\Http\Controllers\PaymentController::class, 'callbackRemitaData'])->name('payment.callbackdata');
    Route::post('payment/remita', [App\Http\Controllers\PaymentController::class, 'generateRemita'])->name('payment.remita');
    Route::get('payment/inspection', [App\Http\Controllers\PaymentController::class, 'inspection'])->name('payment.inspection');
    Route::get('payment/steps', [App\Http\Controllers\PaymentController::class, 'steps'])->name('payment.steps');
    Route::get('payment/reg', [App\Http\Controllers\PaymentController::class, 'regPayment'])->name('payment.reg');
    Route::resource('payment', App\Http\Controllers\PaymentController::class);



    /**
     * CERTIFICATES
     */
    Route::get('certificate/{certificateId}/details', 'App\Http\Controllers\CertificateController@displayCertificateDetails')->name('certificate.details');
    Route::get('certificate/{certificateId}/download', 'App\Http\Controllers\CertificateController@downloadCertificateDetails')->name('certificate.download');
    //Route::get('certificate/verify', 'App\Http\Controllers\CertificateController@verifyCertificate')->name('certificate.verify');
    //Route::get('verification', 'App\Http\Controllers\CertificateController@verification')->name('verification');



    Route::resource('certificate', App\Http\Controllers\CertificateController::class);

    Route::get('/new/incoming', 'App\Http\Controllers\ServiceApplicationController@area_office_document')->name('add.new.incoming.document');
    Route::post('/add/new/incoming/store/', 'App\Http\Controllers\ServiceApplicationController@storeIncoming')->name('incoming_store');


    /**
     * CLAIMS
     */
    Route::resource('claim/accident', App\Http\Controllers\AccidentClaimController::class);
    Route::resource('claim/death', App\Http\Controllers\DeathClaimController::class);
    Route::resource('claim/disease', App\Http\Controllers\DiseaseClaimController::class);

    Route::resource('service-applications', App\Http\Controllers\ServiceApplicationController::class);
    Route::get('service-application-documents/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'documentIndex'])->name('service-applications.documents.index');
    Route::post('service-application-documents/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'documentStore'])->name('service-applications.documents.store');
    Route::post('resubmit-documents/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'resubmitDocuments'])->name('documents.resubmit');
    Route::get('application-form-payment/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'applicationFormPayment'])->name('application_form_payment');
    Route::get('processing-fee-payment/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'processingFeePayment'])->name('processing_fee_payment');
    Route::get('inspection-fee-payment/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'inspectionFeePayment'])->name('inspection_fee_payment');
    Route::get('equipment-fee-payment/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'equipmentFeePayment'])->name('equipment_fee_payment');
    Route::get('permit-document/{id}', [App\Http\Controllers\ServiceApplicationController::class, 'downloadPermit'])->name('download_permit');
    Route::get('apply/for/a/service', [App\Http\Controllers\ServiceApplicationController::class, 'ServiceApplication'])->name('apply_for_a_service');

    Route::get('/services/{service}/processing-types', 'App\Http\Controllers\ServiceApplicationController@getProcessingTypes');
    Route::get('/services/{service}/services-types', 'App\Http\Controllers\ServiceApplicationController@getServicesByBranch');

    Route::get('/switch/area/office', 'App\Http\Controllers\ServiceApplicationController@switchAreaOffice')->name('switch.area.office');
    Route::get('/switch/area/office', 'App\Http\Controllers\ServiceApplicationController@switchAreaOffice')->name('goareaoffice');
    Route::post('/switch/area/office/save', 'App\Http\Controllers\ServiceApplicationController@switchAreaOfficeSave')->name('switch.area.office.save');




});

Route::get('/notification', function () {
    $employer = App\Models\Employer::find(26083);
    /* $payment = App\Models\Payment::get()->last();
    $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'DejaVu Sans', ])
        ->loadView('payments.invoice', ['pid' => $payment->id])
        ->setPaper('a4', 'portrait');//email */

    $password = "password";

    //use from inside code
    //return (new App\Mail\EmployerRegisteredMail($employer))->render();

    //send for testing
    Illuminate\Support\Facades\Mail::to('pyrichgroupltd@gmail.com')->send(new App\Mail\EmployerRegisteredMail($employer, $password));
    /* $content = $pdf->download()->getOriginalContent();
    Illuminate\Support\Facades\Storage::put('public/invoices/invoice_' . $payment->id . '.pdf',$content);
    Illuminate\Support\Facades\Mail::to('realbenten@gmail.com')->send(new App\Mail\PaymentStatusMail($payment));
    Illuminate\Support\Facades\Storage::delete('public/invoices/invoice_' . $payment->id . '.pdf'); */

    //use for browser render outside codeblock
    return new App\Mail\EmployerRegisteredMail($employer, $password);
    ///return new App\Mail\PaymentStatusMail($payment);

    //notification
    /* return (new App\Notifications\EmployerRegistrationNotification
    ($employer))->toMail($employer); */
    //$employer->notify(new EmployerRegistrationNotification($employer));
});


Route::get('/pdf', function () {
    $payment = App\Models\Payment::get()->last();

    $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'DejaVu Sans',])
        ->loadView('payments.invoice', ['pid' => $payment->id])
        ->setPaper('a4', 'portrait')
        //->set_option('isHtml5ParserEnabled', true)
        //->set_option('isRemoteEnabled', true)
        //->setWarnings(false)
    ;

    /* $pdf->getDomPDF()->setHttpContext(
        stream_context_create([
            'ssl' => [
                'allow_self_signed' => TRUE,
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
            ]
        ])
    ); */

    //download pdf
    //return $pdf->download('invoice.pdf');

    //save to storage
    //$content = $pdf->download()->getOriginalContent();
    //Illuminate\Support\Facades\Storage::put('public/invoices/invoice_' . $payment->id . '.pdf',$content);

    //display pdf in browser without downlod
    $pdf->render();
    return $pdf->stream('invoice.pdf');
});

Route::resource('booking',BookingController::class);
Route::post('showbooking',[BookingController::class,'showbooking'])->name('showbooking');

//atp you can remove tne tv if you encounter issues later
Route::get('bookpage/{id}/tv/{amount}',[BookingController::class,'bookpage'])->name('bookingpage');

Route::post('paybook',[BookingController::class,'create'])->name('paybook');
Route::post('storepayment',[BookingController::class,'store'])->name('storepayment');
