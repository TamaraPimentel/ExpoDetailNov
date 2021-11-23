<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
        $this->call(ContactCompaniesTableSeeder::class);
        $this->call(ContactContactsTableSeeder::class);
        $this->call(HeaderPhotosTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(CompanyQuestionsTableSeeder::class);
        $this->call(CompanyVideosTableSeeder::class);
        $this->call(DescriptionsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(PhotoDescriptionGralsTableSeeder::class);
        $this->call(PrivacyNoticesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ServicePhotosTableSeeder::class);
        $this->call(ServiceVideosTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(TestimonialsTableSeeder::class);
        $this->call(ThruTimesTableSeeder::class);
        $this->call(ThruVideoTimesTableSeeder::class);
        $this->call(VideoFaqsTableSeeder::class);
        $this->call(BenefitsTableSeeder::class);
        $this->call(BrandVideosTableSeeder::class);
        $this->call(ContactFormsTableSeeder::class);
        $this->call(ExhibitorImagesTableSeeder::class);
        $this->call(ExponentsTableSeeder::class);
        $this->call(ExposerImagesTableSeeder::class);
        $this->call(LecturersTableSeeder::class);
        $this->call(MademeAnExhibitorsTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(MastersTableSeeder::class);
        $this->call(MasterFormPaymentsTableSeeder::class);
        $this->call(RegistrationFormsTableSeeder::class);
    }
}
