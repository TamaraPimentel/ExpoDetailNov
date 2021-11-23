<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 23,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 28,
                'title' => 'inicio_access',
            ],
            [
                'id'    => 29,
                'title' => 'slider_create',
            ],
            [
                'id'    => 30,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 31,
                'title' => 'slider_show',
            ],
            [
                'id'    => 32,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 33,
                'title' => 'slider_access',
            ],
            [
                'id'    => 34,
                'title' => 'company_question_create',
            ],
            [
                'id'    => 35,
                'title' => 'company_question_edit',
            ],
            [
                'id'    => 36,
                'title' => 'company_question_show',
            ],
            [
                'id'    => 37,
                'title' => 'company_question_delete',
            ],
            [
                'id'    => 38,
                'title' => 'company_question_access',
            ],
            [
                'id'    => 39,
                'title' => 'service_create',
            ],
            [
                'id'    => 40,
                'title' => 'service_edit',
            ],
            [
                'id'    => 41,
                'title' => 'service_show',
            ],
            [
                'id'    => 42,
                'title' => 'service_delete',
            ],
            [
                'id'    => 43,
                'title' => 'service_access',
            ],
            [
                'id'    => 44,
                'title' => 'multimedia_access',
            ],
            [
                'id'    => 45,
                'title' => 'company_video_create',
            ],
            [
                'id'    => 46,
                'title' => 'company_video_edit',
            ],
            [
                'id'    => 47,
                'title' => 'company_video_show',
            ],
            [
                'id'    => 48,
                'title' => 'company_video_delete',
            ],
            [
                'id'    => 49,
                'title' => 'company_video_access',
            ],
            [
                'id'    => 50,
                'title' => 'sponsor_create',
            ],
            [
                'id'    => 51,
                'title' => 'sponsor_edit',
            ],
            [
                'id'    => 52,
                'title' => 'sponsor_show',
            ],
            [
                'id'    => 53,
                'title' => 'sponsor_delete',
            ],
            [
                'id'    => 54,
                'title' => 'sponsor_access',
            ],
            [
                'id'    => 55,
                'title' => 'service_photo_create',
            ],
            [
                'id'    => 56,
                'title' => 'service_photo_edit',
            ],
            [
                'id'    => 57,
                'title' => 'service_photo_show',
            ],
            [
                'id'    => 58,
                'title' => 'service_photo_delete',
            ],
            [
                'id'    => 59,
                'title' => 'service_photo_access',
            ],
            [
                'id'    => 60,
                'title' => 'service_video_create',
            ],
            [
                'id'    => 61,
                'title' => 'service_video_edit',
            ],
            [
                'id'    => 62,
                'title' => 'service_video_show',
            ],
            [
                'id'    => 63,
                'title' => 'service_video_delete',
            ],
            [
                'id'    => 64,
                'title' => 'service_video_access',
            ],
            [
                'id'    => 65,
                'title' => 'video_faq_create',
            ],
            [
                'id'    => 66,
                'title' => 'video_faq_edit',
            ],
            [
                'id'    => 67,
                'title' => 'video_faq_show',
            ],
            [
                'id'    => 68,
                'title' => 'video_faq_delete',
            ],
            [
                'id'    => 69,
                'title' => 'video_faq_access',
            ],
            [
                'id'    => 70,
                'title' => 'faq_create',
            ],
            [
                'id'    => 71,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 72,
                'title' => 'faq_show',
            ],
            [
                'id'    => 73,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 74,
                'title' => 'faq_access',
            ],
            [
                'id'    => 75,
                'title' => 'header_photo_create',
            ],
            [
                'id'    => 76,
                'title' => 'header_photo_edit',
            ],
            [
                'id'    => 77,
                'title' => 'header_photo_show',
            ],
            [
                'id'    => 78,
                'title' => 'header_photo_delete',
            ],
            [
                'id'    => 79,
                'title' => 'header_photo_access',
            ],
            [
                'id'    => 80,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 81,
                'title' => 'description_create',
            ],
            [
                'id'    => 82,
                'title' => 'description_edit',
            ],
            [
                'id'    => 83,
                'title' => 'description_show',
            ],
            [
                'id'    => 84,
                'title' => 'description_delete',
            ],
            [
                'id'    => 85,
                'title' => 'description_access',
            ],
            [
                'id'    => 86,
                'title' => 'photo_description_gral_create',
            ],
            [
                'id'    => 87,
                'title' => 'photo_description_gral_edit',
            ],
            [
                'id'    => 88,
                'title' => 'photo_description_gral_show',
            ],
            [
                'id'    => 89,
                'title' => 'photo_description_gral_delete',
            ],
            [
                'id'    => 90,
                'title' => 'photo_description_gral_access',
            ],
            [
                'id'    => 91,
                'title' => 'thru_time_create',
            ],
            [
                'id'    => 92,
                'title' => 'thru_time_edit',
            ],
            [
                'id'    => 93,
                'title' => 'thru_time_show',
            ],
            [
                'id'    => 94,
                'title' => 'thru_time_delete',
            ],
            [
                'id'    => 95,
                'title' => 'thru_time_access',
            ],
            [
                'id'    => 96,
                'title' => 'thru_video_time_create',
            ],
            [
                'id'    => 97,
                'title' => 'thru_video_time_edit',
            ],
            [
                'id'    => 98,
                'title' => 'thru_video_time_show',
            ],
            [
                'id'    => 99,
                'title' => 'thru_video_time_delete',
            ],
            [
                'id'    => 100,
                'title' => 'thru_video_time_access',
            ],
            [
                'id'    => 101,
                'title' => 'testimonial_create',
            ],
            [
                'id'    => 102,
                'title' => 'testimonial_edit',
            ],
            [
                'id'    => 103,
                'title' => 'testimonial_show',
            ],
            [
                'id'    => 104,
                'title' => 'testimonial_delete',
            ],
            [
                'id'    => 105,
                'title' => 'testimonial_access',
            ],
            [
                'id'    => 106,
                'title' => 'brand_access',
            ],
            [
                'id'    => 107,
                'title' => 'marca_create',
            ],
            [
                'id'    => 108,
                'title' => 'marca_edit',
            ],
            [
                'id'    => 109,
                'title' => 'marca_show',
            ],
            [
                'id'    => 110,
                'title' => 'marca_delete',
            ],
            [
                'id'    => 111,
                'title' => 'marca_access',
            ],
            [
                'id'    => 112,
                'title' => 'brand_video_create',
            ],
            [
                'id'    => 113,
                'title' => 'brand_video_edit',
            ],
            [
                'id'    => 114,
                'title' => 'brand_video_show',
            ],
            [
                'id'    => 115,
                'title' => 'brand_video_delete',
            ],
            [
                'id'    => 116,
                'title' => 'brand_video_access',
            ],
            [
                'id'    => 117,
                'title' => 'mademe_an_exhibitor_create',
            ],
            [
                'id'    => 118,
                'title' => 'mademe_an_exhibitor_edit',
            ],
            [
                'id'    => 119,
                'title' => 'mademe_an_exhibitor_show',
            ],
            [
                'id'    => 120,
                'title' => 'mademe_an_exhibitor_delete',
            ],
            [
                'id'    => 121,
                'title' => 'mademe_an_exhibitor_access',
            ],
            [
                'id'    => 122,
                'title' => 'exhibitor_image_create',
            ],
            [
                'id'    => 123,
                'title' => 'exhibitor_image_edit',
            ],
            [
                'id'    => 124,
                'title' => 'exhibitor_image_show',
            ],
            [
                'id'    => 125,
                'title' => 'exhibitor_image_delete',
            ],
            [
                'id'    => 126,
                'title' => 'exhibitor_image_access',
            ],
            [
                'id'    => 127,
                'title' => 'registration_form_create',
            ],
            [
                'id'    => 128,
                'title' => 'registration_form_edit',
            ],
            [
                'id'    => 129,
                'title' => 'registration_form_show',
            ],
            [
                'id'    => 130,
                'title' => 'registration_form_delete',
            ],
            [
                'id'    => 131,
                'title' => 'registration_form_access',
            ],
            [
                'id'    => 132,
                'title' => 'schedule_access',
            ],
            [
                'id'    => 133,
                'title' => 'master_create',
            ],
            [
                'id'    => 134,
                'title' => 'master_edit',
            ],
            [
                'id'    => 135,
                'title' => 'master_show',
            ],
            [
                'id'    => 136,
                'title' => 'master_delete',
            ],
            [
                'id'    => 137,
                'title' => 'master_access',
            ],
            [
                'id'    => 138,
                'title' => 'schedule_image_create',
            ],
            [
                'id'    => 139,
                'title' => 'schedule_image_edit',
            ],
            [
                'id'    => 140,
                'title' => 'schedule_image_show',
            ],
            [
                'id'    => 141,
                'title' => 'schedule_image_delete',
            ],
            [
                'id'    => 142,
                'title' => 'schedule_image_access',
            ],
            [
                'id'    => 143,
                'title' => 'lecturer_create',
            ],
            [
                'id'    => 144,
                'title' => 'lecturer_edit',
            ],
            [
                'id'    => 145,
                'title' => 'lecturer_show',
            ],
            [
                'id'    => 146,
                'title' => 'lecturer_delete',
            ],
            [
                'id'    => 147,
                'title' => 'lecturer_access',
            ],
            [
                'id'    => 148,
                'title' => 'master_form_payment_create',
            ],
            [
                'id'    => 149,
                'title' => 'master_form_payment_edit',
            ],
            [
                'id'    => 150,
                'title' => 'master_form_payment_show',
            ],
            [
                'id'    => 151,
                'title' => 'master_form_payment_delete',
            ],
            [
                'id'    => 152,
                'title' => 'master_form_payment_access',
            ],
            [
                'id'    => 153,
                'title' => 'exposer_access',
            ],
            [
                'id'    => 154,
                'title' => 'exposer_image_create',
            ],
            [
                'id'    => 155,
                'title' => 'exposer_image_edit',
            ],
            [
                'id'    => 156,
                'title' => 'exposer_image_show',
            ],
            [
                'id'    => 157,
                'title' => 'exposer_image_delete',
            ],
            [
                'id'    => 158,
                'title' => 'exposer_image_access',
            ],
            [
                'id'    => 159,
                'title' => 'benefit_create',
            ],
            [
                'id'    => 160,
                'title' => 'benefit_edit',
            ],
            [
                'id'    => 161,
                'title' => 'benefit_show',
            ],
            [
                'id'    => 162,
                'title' => 'benefit_delete',
            ],
            [
                'id'    => 163,
                'title' => 'benefit_access',
            ],
            [
                'id'    => 164,
                'title' => 'exponent_create',
            ],
            [
                'id'    => 165,
                'title' => 'exponent_edit',
            ],
            [
                'id'    => 166,
                'title' => 'exponent_show',
            ],
            [
                'id'    => 167,
                'title' => 'exponent_delete',
            ],
            [
                'id'    => 168,
                'title' => 'exponent_access',
            ],
            [
                'id'    => 169,
                'title' => 'contact_access',
            ],
            [
                'id'    => 170,
                'title' => 'contact_form_create',
            ],
            [
                'id'    => 171,
                'title' => 'contact_form_edit',
            ],
            [
                'id'    => 172,
                'title' => 'contact_form_show',
            ],
            [
                'id'    => 173,
                'title' => 'contact_form_delete',
            ],
            [
                'id'    => 174,
                'title' => 'contact_form_access',
            ],
            [
                'id'    => 175,
                'title' => 'static_page_access',
            ],
            [
                'id'    => 176,
                'title' => 'term_create',
            ],
            [
                'id'    => 177,
                'title' => 'term_edit',
            ],
            [
                'id'    => 178,
                'title' => 'term_show',
            ],
            [
                'id'    => 179,
                'title' => 'term_delete',
            ],
            [
                'id'    => 180,
                'title' => 'term_access',
            ],
            [
                'id'    => 181,
                'title' => 'privacy_notice_create',
            ],
            [
                'id'    => 182,
                'title' => 'privacy_notice_edit',
            ],
            [
                'id'    => 183,
                'title' => 'privacy_notice_show',
            ],
            [
                'id'    => 184,
                'title' => 'privacy_notice_delete',
            ],
            [
                'id'    => 185,
                'title' => 'privacy_notice_access',
            ],
            [
                'id'    => 186,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
