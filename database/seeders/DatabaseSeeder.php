<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Job::create([
            'name' => 'Converge ICT Solutions INC.',
            'description' => "Converge provides the absolute premium fiber 
            internet experience for home, businesses and 
            in the corporate world, we are the brand of choice.",
            'requirements' => "WE'RE HIRING!!
                        SALES AGENT
                        QUALIFICATIONS:
                        - Must have sales related working
                        - Can work in field independently
                        - Can negotiate to Company's Top Management
                        EMPLOYMENT DETAILS
                        Unlimited Income
                        FREE Training (Online)
                        Life Insurance
                        REQUIREMENTS:
                        Resume/Bio-data
                        (1) Valid ID
                        Brgy. Clearance/Police or NBI Clearance (1 only).",
            'image' => 'images/converge_cover.jpg',
        ]);

        \App\Models\Job::create([
            'name' => 'Aeon Credit Service',
            'description' => "Aeon Philippines is the best online lending company in the Philippines. 
            Minimum requirements needed and low interest rates.",
            'requirements' => "WE'RE HIRING‼
            We are looking for professional and passionate individuals to join our team as:
            SALES PROMOTER
            for AEON CREDIT SERVICES INC.
            Qualifications:
            With at least 6 monts to 1 year Sales Experience
            High School Graduate / College Level
            NO Pending Itime
            NO Visible Tattoo
            Employment Details:
            610/day (Metro Manila) | 550/day (Province)
            Paid Training (5 days)
            Laptop & Pocket Wifi Provided
            Life Insurance
            You may send your resume at:
            Email: recruitment.trismanpower@gmail.com
            Subject: (Input here your preferred POSITION - AREA)
            0910-717-1958 or message us here.",
            'image' => 'images/aeon.png',
            
        ]);
    }
}
