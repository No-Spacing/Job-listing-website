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
            'name' => 'Votehub.',
            'description' => "An IT specialist is responsible for the maintenance, 
            configuration, and reliable operation of computer systems and servers. 
            They make sure that the technical infrastructure of an organisation runs smoothly and efficiently. 
            They support business operations by helping other employees troubleshoot technical problems.",
            'requirements' => "WE'RE HIRING!!
                        IT Specialist
                        QUALIFICATIONS:
                        - Windows Server administration 
                        - Windows operating systems 
                        - Basic knowledge of networking and Citrix.",
            'image' => 'images/job-search-cover.jpeg',
        ]);

        \App\Models\Job::create([
            'name' => 'V Solutions',
            'description' => "A network administrator is a person designated in an organization 
            whose responsibility includes maintaining computer infrastructures with emphasis on 
            local area networks up to wide area networks.",
            'requirements' => "WE'RE HIRING!!
                        Network Administrator
                        QUALIFICATIONS:
                        - Install, configure, and maintain network hardware and software such as routers, firewalls, and switches
                        - Protect networks from unauthorized users through physical and technical means
                        - Maintain and troubleshoot storage networks",
            'image' => 'images/job-search-cover.jpeg',
            
        ]);
    }
}
