<?php

Route::get('/','HomeController@inicio');

//Route::redirect('/', '/registro');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
   // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Contact Company
    Route::delete('contact-companies/destroy', 'ContactCompanyController@massDestroy')->name('contact-companies.massDestroy');
    Route::post('contact-companies/media', 'ContactCompanyController@storeMedia')->name('contact-companies.storeMedia');
    Route::post('contact-companies/ckmedia', 'ContactCompanyController@storeCKEditorImages')->name('contact-companies.storeCKEditorImages');
    Route::resource('contact-companies', 'ContactCompanyController');

    // Contact Contacts
    Route::delete('contact-contacts/destroy', 'ContactContactsController@massDestroy')->name('contact-contacts.massDestroy');
    Route::post('contact-contacts/media', 'ContactContactsController@storeMedia')->name('contact-contacts.storeMedia');
    Route::post('contact-contacts/ckmedia', 'ContactContactsController@storeCKEditorImages')->name('contact-contacts.storeCKEditorImages');
    Route::resource('contact-contacts', 'ContactContactsController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::post('sliders/media', 'SliderController@storeMedia')->name('sliders.storeMedia');
    Route::post('sliders/ckmedia', 'SliderController@storeCKEditorImages')->name('sliders.storeCKEditorImages');
    Route::resource('sliders', 'SliderController');

    // Company Questions
    Route::delete('company-questions/destroy', 'CompanyQuestionsController@massDestroy')->name('company-questions.massDestroy');
    Route::post('company-questions/media', 'CompanyQuestionsController@storeMedia')->name('company-questions.storeMedia');
    Route::post('company-questions/ckmedia', 'CompanyQuestionsController@storeCKEditorImages')->name('company-questions.storeCKEditorImages');
    Route::resource('company-questions', 'CompanyQuestionsController');

    // Service
    Route::delete('services/destroy', 'ServiceController@massDestroy')->name('services.massDestroy');
    Route::post('services/media', 'ServiceController@storeMedia')->name('services.storeMedia');
    Route::post('services/ckmedia', 'ServiceController@storeCKEditorImages')->name('services.storeCKEditorImages');
    Route::resource('services', 'ServiceController');

    // Company Video
    Route::delete('company-videos/destroy', 'CompanyVideoController@massDestroy')->name('company-videos.massDestroy');
    Route::resource('company-videos', 'CompanyVideoController');

    // Sponsors
    Route::delete('sponsors/destroy', 'SponsorsController@massDestroy')->name('sponsors.massDestroy');
    Route::post('sponsors/media', 'SponsorsController@storeMedia')->name('sponsors.storeMedia');
    Route::post('sponsors/ckmedia', 'SponsorsController@storeCKEditorImages')->name('sponsors.storeCKEditorImages');
    Route::resource('sponsors', 'SponsorsController');

    // Service Photo
    Route::delete('service-photos/destroy', 'ServicePhotoController@massDestroy')->name('service-photos.massDestroy');
    Route::post('service-photos/media', 'ServicePhotoController@storeMedia')->name('service-photos.storeMedia');
    Route::post('service-photos/ckmedia', 'ServicePhotoController@storeCKEditorImages')->name('service-photos.storeCKEditorImages');
    Route::resource('service-photos', 'ServicePhotoController');

    // Service Video
    Route::delete('service-videos/destroy', 'ServiceVideoController@massDestroy')->name('service-videos.massDestroy');
    Route::resource('service-videos', 'ServiceVideoController');

    // Video Faqs
    Route::delete('video-faqs/destroy', 'VideoFaqsController@massDestroy')->name('video-faqs.massDestroy');
    Route::post('video-faqs/media', 'VideoFaqsController@storeMedia')->name('video-faqs.storeMedia');
    Route::post('video-faqs/ckmedia', 'VideoFaqsController@storeCKEditorImages')->name('video-faqs.storeCKEditorImages');
    Route::resource('video-faqs', 'VideoFaqsController');

    // Faqs
    Route::delete('faqs/destroy', 'FaqsController@massDestroy')->name('faqs.massDestroy');
    Route::resource('faqs', 'FaqsController');

    // Header Photo
    Route::delete('header-photos/destroy', 'HeaderPhotoController@massDestroy')->name('header-photos.massDestroy');
    Route::post('header-photos/media', 'HeaderPhotoController@storeMedia')->name('header-photos.storeMedia');
    Route::post('header-photos/ckmedia', 'HeaderPhotoController@storeCKEditorImages')->name('header-photos.storeCKEditorImages');
    Route::resource('header-photos', 'HeaderPhotoController');

    // Description
    Route::delete('descriptions/destroy', 'DescriptionController@massDestroy')->name('descriptions.massDestroy');
    Route::post('descriptions/media', 'DescriptionController@storeMedia')->name('descriptions.storeMedia');
    Route::post('descriptions/ckmedia', 'DescriptionController@storeCKEditorImages')->name('descriptions.storeCKEditorImages');
    Route::resource('descriptions', 'DescriptionController');

    // Photo Description Gral
    Route::delete('photo-description-grals/destroy', 'PhotoDescriptionGralController@massDestroy')->name('photo-description-grals.massDestroy');
    Route::post('photo-description-grals/media', 'PhotoDescriptionGralController@storeMedia')->name('photo-description-grals.storeMedia');
    Route::post('photo-description-grals/ckmedia', 'PhotoDescriptionGralController@storeCKEditorImages')->name('photo-description-grals.storeCKEditorImages');
    Route::resource('photo-description-grals', 'PhotoDescriptionGralController');

    // Thru Time
    Route::delete('thru-times/destroy', 'ThruTimeController@massDestroy')->name('thru-times.massDestroy');
    Route::post('thru-times/media', 'ThruTimeController@storeMedia')->name('thru-times.storeMedia');
    Route::post('thru-times/ckmedia', 'ThruTimeController@storeCKEditorImages')->name('thru-times.storeCKEditorImages');
    Route::resource('thru-times', 'ThruTimeController');

    // Thru Video Time
    Route::delete('thru-video-times/destroy', 'ThruVideoTimeController@massDestroy')->name('thru-video-times.massDestroy');
    Route::resource('thru-video-times', 'ThruVideoTimeController');

    // Testimonials
    Route::delete('testimonials/destroy', 'TestimonialsController@massDestroy')->name('testimonials.massDestroy');
    Route::post('testimonials/media', 'TestimonialsController@storeMedia')->name('testimonials.storeMedia');
    Route::post('testimonials/ckmedia', 'TestimonialsController@storeCKEditorImages')->name('testimonials.storeCKEditorImages');
    Route::resource('testimonials', 'TestimonialsController');

    // Marca
    Route::delete('marcas/destroy', 'MarcaController@massDestroy')->name('marcas.massDestroy');
    Route::post('marcas/media', 'MarcaController@storeMedia')->name('marcas.storeMedia');
    Route::post('marcas/ckmedia', 'MarcaController@storeCKEditorImages')->name('marcas.storeCKEditorImages');
    Route::resource('marcas', 'MarcaController');

    // Brand Video
    Route::delete('brand-videos/destroy', 'BrandVideoController@massDestroy')->name('brand-videos.massDestroy');
    Route::resource('brand-videos', 'BrandVideoController');

    // Mademe An Exhibitor
    Route::delete('mademe-an-exhibitors/destroy', 'MademeAnExhibitorController@massDestroy')->name('mademe-an-exhibitors.massDestroy');
    Route::resource('mademe-an-exhibitors', 'MademeAnExhibitorController');

    // Exhibitor Image
    Route::delete('exhibitor-images/destroy', 'ExhibitorImageController@massDestroy')->name('exhibitor-images.massDestroy');
    Route::post('exhibitor-images/media', 'ExhibitorImageController@storeMedia')->name('exhibitor-images.storeMedia');
    Route::post('exhibitor-images/ckmedia', 'ExhibitorImageController@storeCKEditorImages')->name('exhibitor-images.storeCKEditorImages');
    Route::resource('exhibitor-images', 'ExhibitorImageController');

    // Registration Form
    Route::delete('registration-forms/destroy', 'RegistrationFormController@massDestroy')->name('registration-forms.massDestroy');
    Route::post('registration-forms/parse-csv-import', 'RegistrationFormController@parseCsvImport')->name('registration-forms.parseCsvImport');
    Route::post('registration-forms/process-csv-import', 'RegistrationFormController@processCsvImport')->name('registration-forms.processCsvImport');
    Route::resource('registration-forms', 'RegistrationFormController');
     Route::get('registration-forms/mail/{id}', 'RegistrationFormController@enviarmail')->name('registration-forms.mail');

    // Master
    Route::delete('masters/destroy', 'MasterController@massDestroy')->name('masters.massDestroy');
    Route::resource('masters', 'MasterController');

    // Schedule Image
    Route::delete('schedule-images/destroy', 'ScheduleImageController@massDestroy')->name('schedule-images.massDestroy');
    Route::post('schedule-images/media', 'ScheduleImageController@storeMedia')->name('schedule-images.storeMedia');
    Route::post('schedule-images/ckmedia', 'ScheduleImageController@storeCKEditorImages')->name('schedule-images.storeCKEditorImages');
    Route::resource('schedule-images', 'ScheduleImageController');

    // Lecturer
    Route::delete('lecturers/destroy', 'LecturerController@massDestroy')->name('lecturers.massDestroy');
    Route::resource('lecturers', 'LecturerController');

    // Master Form Payment
    Route::delete('master-form-payments/destroy', 'MasterFormPaymentController@massDestroy')->name('master-form-payments.massDestroy');
    Route::resource('master-form-payments', 'MasterFormPaymentController');

    // Exposer Image
    Route::delete('exposer-images/destroy', 'ExposerImageController@massDestroy')->name('exposer-images.massDestroy');
    Route::post('exposer-images/media', 'ExposerImageController@storeMedia')->name('exposer-images.storeMedia');
    Route::post('exposer-images/ckmedia', 'ExposerImageController@storeCKEditorImages')->name('exposer-images.storeCKEditorImages');
    Route::resource('exposer-images', 'ExposerImageController');

    // Benefit
    Route::delete('benefits/destroy', 'BenefitController@massDestroy')->name('benefits.massDestroy');
    Route::post('benefits/media', 'BenefitController@storeMedia')->name('benefits.storeMedia');
    Route::post('benefits/ckmedia', 'BenefitController@storeCKEditorImages')->name('benefits.storeCKEditorImages');
    Route::resource('benefits', 'BenefitController');

    // Exponent
    Route::delete('exponents/destroy', 'ExponentController@massDestroy')->name('exponents.massDestroy');
    Route::post('exponents/media', 'ExponentController@storeMedia')->name('exponents.storeMedia');
    Route::post('exponents/ckmedia', 'ExponentController@storeCKEditorImages')->name('exponents.storeCKEditorImages');
    Route::resource('exponents', 'ExponentController');

    // Contact Form
    Route::delete('contact-forms/destroy', 'ContactFormController@massDestroy')->name('contact-forms.massDestroy');
    Route::resource('contact-forms', 'ContactFormController');

    // Terms
    Route::delete('terms/destroy', 'TermsController@massDestroy')->name('terms.massDestroy');
    Route::post('terms/media', 'TermsController@storeMedia')->name('terms.storeMedia');
    Route::post('terms/ckmedia', 'TermsController@storeCKEditorImages')->name('terms.storeCKEditorImages');
    Route::resource('terms', 'TermsController');

    // Privacy Notice
    Route::delete('privacy-notices/destroy', 'PrivacyNoticeController@massDestroy')->name('privacy-notices.massDestroy');
    Route::post('privacy-notices/media', 'PrivacyNoticeController@storeMedia')->name('privacy-notices.storeMedia');
    Route::post('privacy-notices/ckmedia', 'PrivacyNoticeController@storeCKEditorImages')->name('privacy-notices.storeCKEditorImages');
    Route::resource('privacy-notices', 'PrivacyNoticeController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

//MIOS

 Route::get('/registro','FrontController@register')->name('pago');
 Route::get('/registro-formulario','FrontController@form')->name('formulario');

 //Paypal
 Route::post('/registro-form','RegisterPaymentController@save')->name('guardardatos');
 Route::get('/paypal/pay','RegisterPaymentController@payWithPaypal')->name('paypalPay');
 Route::get('/paypal/status','RegisterPaymentController@payPalStatus')->name('paypalPayStatus');


 //Stripe
 Route::get('/stripe-pay','FrontController@stripeformulario')->name('stripePay');
 Route::post('/stripe-pay-form','RegisterPaymentController@stripePayment')->name('stripePayStatus');

 Route::get('/printlabel/{id}', 'FrontController@printlabel')->name('boleto');
 Route::get('/imprimir/{id}', 'FrontController@myPDF')->name('imprimir');

 //Avisos de privacidad
 Route::get('/aviso-de-privacidad','FrontController@AvisoPrivacidad')->name('aviso');
 Route::get('/terminos-y-condiciones','FrontController@TerminosCondiciones')->name('terminos');

 //Paginas
 Route::get('/nosotros','FrontController@Nosotros')->name('us');
 Route::get('/marcas','FrontController@Marcas')->name('brands');
 Route::get('/cronograma','FrontController@Cronograma')->name('cronogram');
 Route::get('/conferencias-magistrales','FrontController@Magistral')->name('exhibitor');
 Route::get('/contacto','FrontController@Contacto')->name('contact');

 Route::post('/expositor-form','FrontController@ExpositorFormulario')->name('expositorform');
 Route::post('/contacto-form','FrontController@ContactoFormulario')->name('contactform');


