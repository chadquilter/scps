<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('links')->insert(
        [
        'type' => 'about',
        'subtype' => '',
        'name' => 'School History',
        'url' => '/about/schoolhistory',
        'img_url' => '/images/about/schoolhistory',
        'description' => 'Describes our rich school history',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'about',
        'subtype' => '',
        'name' => 'Vision',
        'url' => '/about/vision',
        'img_url' => '/images/about/vision',
        'description' => 'vision',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'about',
        'subtype' => '',
        'name' => 'Core Values',
        'url' => '/about/values',
        'img_url' => '/images/about/values',
        'description' => 'Our beliefs and core values',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'about',
        'subtype' => '',
        'name' => 'ESLRs',
        'url' => '/about/eslrs',
        'img_url' => '/images/about/eslrs',
        'description' => 'ESLRs',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'about',
        'subtype' => '',
        'name' => 'Testimonials',
        'url' => '/about/testemony',
        'img_url' => 'images/about/testemony',
        'description' => 'Testimonials and Quotes',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'about',
        'subtype' => 'vision',
        'name' => 'Vision',
        'url' => '/about/vision',
        'img_url' => '/images/about/vision',
        'description' => 'vision',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => '',
        'name' => 'Academic Calendar',
        'url' => '/academic/academiccalendar',
        'img_url' => '/images/academic/calendar',
        'description' => 'Academic Calendar',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => '',
        'name' => 'Daily Schedule',
        'url' => '/academic/academiccalendar',
        'img_url' => '/images/academic/calendar',
        'description' => 'Daily Schedules',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => '',
        'name' => 'Departments',
        'url' => '/academic/departments',
        'img_url' => '/images/academic/departments',
        'description' => 'School Departments',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => '',
        'name' => 'PowerSchool',
        'url' => '/academic/powerschool',
        'img_url' => '/images/academic/powerschool',
        'description' => 'Accelerated Learning',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => '',
        'name' => 'Administration',
        'url' => '/academic/administration',
        'img_url' => '/images/academic/administration',
        'description' => 'School Administration and Faculty',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'English',
        'url' => '/academic/departments/english',
        'img_url' => '/images/academic/departments/english',
        'description' => 'School Department: English',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'Foreign Language',
        'url' => '/academic/foreignlanguage',
        'img_url' => '/images/academic/departments/foreignlanguage',
        'description' => 'School Department: Foreign Language',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'History',
        'url' => '/academic/departments/history',
        'img_url' => '/images/academic/departments/history',
        'description' => 'School Department: History',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'Mathematics',
        'url' => '/academic/departments/math',
        'img_url' => '/images/academic/departments/math',
        'description' => 'School Department: Mathematics',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'Science',
        'url' => '/academic/departments/science',
        'img_url' => '/images/academic/departments/science',
        'description' => 'School Department: Science',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'Visual Performing Arts',
        'url' => '/academic/departments/vpa',
        'img_url' => '/images/academic/departments/vpa',
        'description' => 'School Department: Visual Performing Arts',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'academic',
        'subtype' => 'departments',
        'name' => 'Departments',
        'url' => '/academic/departments',
        'img_url' => '/images/academic/departments',
        'description' => 'School Departments',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'admissions',
        'subtype' => '',
        'name' => 'Admission',
        'url' => '/admissions/admission',
        'img_url' => '/images/admissions/admission',
        'description' => 'Admission Info and Tools',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'admissions',
        'subtype' => '',
        'name' => 'Tuition and Fees',
        'url' => '/admissions/tuition',
        'img_url' => '/images/admissions/tuition',
        'description' => 'Tuition and Fee Info and Tools',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'admissions',
        'subtype' => '',
        'name' => 'Application',
        'url' => '/admissions/aplication',
        'img_url' => '/images/admissions/application',
        'description' => 'Application Info and Forms',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'admissions',
        'subtype' => '',
        'name' => 'e-tuition',
        'url' => '/admissions/etuition',
        'img_url' => '/images/admissions/e-tuition',
        'description' => 'E-Tution Services',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'admissions',
        'subtype' => '',
        'name' => 'Contact Admissions',
        'url' => '/admissions/contactadmissions',
        'img_url' => '/images/admissions/contactadmissions',
        'description' => 'Admission Contact Form and Info',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'student',
        'subtype' => '',
        'name' => 'Athletics',
        'url' => '/studentlife/athletics',
        'img_url' => '/images/student/athletics',
        'description' => 'Availble School Athletics',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'student',
        'subtype' => '',
        'name' => 'Personal Growth',
        'url' => '/student/personalgrowth',
        'img_url' => '/images/studentlife/personalgrowth',
        'description' => 'School services for student growth',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'international',
        'subtype' => '',
        'name' => 'Fees and Admissions',
        'url' => '/international/admissions',
        'img_url' => '/images/international/admissions',
        'description' => 'International Fees and Admissions',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'international',
        'subtype' => '',
        'name' => 'The Academy',
        'url' => '/international/academy',
        'img_url' => '/images/international/academy',
        'description' => 'The Academy',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'international',
        'subtype' => '',
        'name' => 'International Services',
        'url' => '/international/services',
        'img_url' => '/images/international/services',
        'description' => 'International Services',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'international',
        'subtype' => '',
        'name' => 'Accelerated English Camp',
        'url' => '/international/acceleratedenglish',
        'img_url' => '/images/international/accelerated',
        'description' => 'Accelerated English Courses and Camps',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ],[
        'type' => 'international',
        'subtype' => '',
        'name' => 'International Partners',
        'url' => '/international/partners',
        'img_url' => '/images/international/partners',
        'description' => 'International Fees and Admissions',
        'navmenu' => 'Y',
        'sidebar' => 'Y',
        'active' => 'Y'
      ]
    );
    }
}
