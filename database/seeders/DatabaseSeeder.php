<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@coreunity.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
            ]
        );

        $this->call([
            HeroSectionSeeder::class,
            ServicesSectionSeeder::class,
            CoreStrengthsSectionSeeder::class,
            OurWorkSectionSeeder::class,
            OurClientsSectionSeeder::class,
            TeamSectionSeeder::class,
            TestimonialSectionSeeder::class,
            BlogSectionSeeder::class,
            ClientReviewsSectionSeeder::class,
            FooterSectionSeeder::class,
            PageSeeder::class,
            HomePageSectionSeeder::class,
            AboutHeroSectionSeeder::class,
            AboutIntroSectionSeeder::class,
            AboutValuesSectionSeeder::class,
            AboutIndustriesSectionSeeder::class,
            AboutPageSectionSeeder::class,
            ServicesHeroSectionSeeder::class,
            ServicesListSectionSeeder::class,
            ServicesIndustriesSectionSeeder::class,
            ServicesSmmSectionSeeder::class,
            ServicesPageSectionSeeder::class,
            CaseStudyHeroSectionSeeder::class,
            CaseStudyPageSectionSeeder::class,
            BlogHeroSectionSeeder::class,
            BlogPageSectionSeeder::class,
            ContactHeroSectionSeeder::class,
            ContactDetailsSectionSeeder::class,
            ContactPageSectionSeeder::class,
            ServiceSeeder::class,
            CaseStudySeeder::class,
            PostSeeder::class,
            GlobalSeoSettingSeeder::class,
        ]);
    }
}
