<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('contact_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/contact-contacts*") ? "c-show" : "" }} {{ request()->is("admin/contact-companies*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-phone-square c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contactManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('contact_contact_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contact-contacts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contact-contacts") || request()->is("admin/contact-contacts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactContact.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('contact_company_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contact-companies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contact-companies") || request()->is("admin/contact-companies/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-shoe-prints c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactCompany.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('inicio_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/sliders*") ? "c-show" : "" }} {{ request()->is("admin/company-questions*") ? "c-show" : "" }} {{ request()->is("admin/services*") ? "c-show" : "" }} {{ request()->is("admin/sponsors*") ? "c-show" : "" }} {{ request()->is("admin/faqs*") ? "c-show" : "" }} {{ request()->is("admin/registration-forms*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-home c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.inicio.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('slider_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-images c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.slider.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('company_question_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.company-questions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/company-questions") || request()->is("admin/company-questions/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-question-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.companyQuestion.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.service.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('sponsor_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sponsors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sponsors") || request()->is("admin/sponsors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.sponsor.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('faq_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.faqs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/faqs") || request()->is("admin/faqs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-question c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.faq.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('registration_form_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.registration-forms.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/registration-forms") || request()->is("admin/registration-forms/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.registrationForm.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('multimedia_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/company-videos*") ? "c-show" : "" }} {{ request()->is("admin/service-photos*") ? "c-show" : "" }} {{ request()->is("admin/service-videos*") ? "c-show" : "" }} {{ request()->is("admin/video-faqs*") ? "c-show" : "" }} {{ request()->is("admin/header-photos*") ? "c-show" : "" }} {{ request()->is("admin/photo-description-grals*") ? "c-show" : "" }} {{ request()->is("admin/thru-video-times*") ? "c-show" : "" }} {{ request()->is("admin/exhibitor-images*") ? "c-show" : "" }} {{ request()->is("admin/schedule-images*") ? "c-show" : "" }} {{ request()->is("admin/exposer-images*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.multimedia.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('company_video_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.company-videos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/company-videos") || request()->is("admin/company-videos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.companyVideo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_photo_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.service-photos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/service-photos") || request()->is("admin/service-photos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.servicePhoto.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_video_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.service-videos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/service-videos") || request()->is("admin/service-videos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.serviceVideo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('video_faq_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.video-faqs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/video-faqs") || request()->is("admin/video-faqs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.videoFaq.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('header_photo_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.header-photos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/header-photos") || request()->is("admin/header-photos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.headerPhoto.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('photo_description_gral_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.photo-description-grals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/photo-description-grals") || request()->is("admin/photo-description-grals/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.photoDescriptionGral.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('thru_video_time_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.thru-video-times.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/thru-video-times") || request()->is("admin/thru-video-times/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.thruVideoTime.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('exhibitor_image_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.exhibitor-images.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exhibitor-images") || request()->is("admin/exhibitor-images/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.exhibitorImage.title') }}
                            </a>
                        </li>
                    @endcan
                   {{-- @can('schedule_image_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.schedule-images.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/schedule-images") || request()->is("admin/schedule-images/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.scheduleImage.title') }}
                            </a>
                        </li>
                    @endcan--}}
                    @can('exposer_image_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.exposer-images.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exposer-images") || request()->is("admin/exposer-images/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-image c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.exposerImage.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('about_us_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/descriptions*") ? "c-show" : "" }} {{ request()->is("admin/thru-times*") ? "c-show" : "" }} {{ request()->is("admin/testimonials*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-cog c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.aboutUs.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('description_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.descriptions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/descriptions") || request()->is("admin/descriptions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-text-width c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.description.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('thru_time_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.thru-times.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/thru-times") || request()->is("admin/thru-times/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-clock c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.thruTime.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('testimonial_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.testimonials.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/testimonials") || request()->is("admin/testimonials/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.testimonial.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('brand_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/marcas*") ? "c-show" : "" }} {{ request()->is("admin/brand-videos*") ? "c-show" : "" }} {{ request()->is("admin/mademe-an-exhibitors*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-certificate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.brand.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('marca_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.marcas.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/marcas") || request()->is("admin/marcas/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.marca.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('brand_video_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.brand-videos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/brand-videos") || request()->is("admin/brand-videos/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-video c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.brandVideo.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('mademe_an_exhibitor_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.mademe-an-exhibitors.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/mademe-an-exhibitors") || request()->is("admin/mademe-an-exhibitors/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.mademeAnExhibitor.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('schedule_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/masters*") ? "c-show" : "" }} {{ request()->is("admin/lecturers*") ? "c-show" : "" }} {{ request()->is("admin/master-form-payments*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-calendar c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.schedule.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('master_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.masters.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/masters") || request()->is("admin/masters/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.master.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('lecturer_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.lecturers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/lecturers") || request()->is("admin/lecturers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.lecturer.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('master_form_payment_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.master-form-payments.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/master-form-payments") || request()->is("admin/master-form-payments/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-address-card c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.masterFormPayment.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('exposer_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/benefits*") ? "c-show" : "" }} {{ request()->is("admin/exponents*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-user-graduate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.exposer.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('benefit_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.benefits.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/benefits") || request()->is("admin/benefits/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.benefit.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('exponent_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.exponents.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/exponents") || request()->is("admin/exponents/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.exponent.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('contact_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/contact-forms*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-envelope c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.contact.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('contact_form_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.contact-forms.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/contact-forms") || request()->is("admin/contact-forms/*") ? "c-active" : "" }}">
                                <i class="fa-fw far fa-envelope-open c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.contactForm.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('static_page_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/terms*") ? "c-show" : "" }} {{ request()->is("admin/privacy-notices*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw far fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.staticPage.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('term_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.terms.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/terms") || request()->is("admin/terms/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.term.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('privacy_notice_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.privacy-notices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/privacy-notices") || request()->is("admin/privacy-notices/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.privacyNotice.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>