<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        Job::create([
            'title' => 'Website Development Project',
            'description' => 'Build a responsive e-commerce website using modern frameworks. The project requires expertise in React and Laravel.',
            'location' => 'Remote',
            'salary' => 1500, // Payment for the project in USD
            'category' => 'Web Development',
        ]);

        Job::create([
            'title' => 'Mobile App UI/UX Design',
            'description' => 'Design a modern and user-friendly interface for a food delivery mobile application. Experience with Figma or Adobe XD is required.',
            'location' => 'Remote',
            'salary' => 1200, // Payment for the project in USD
            'category' => 'Design',
        ]);

        Job::create([
            'title' => 'Data Analysis and Reporting',
            'description' => 'Analyze sales data and provide actionable insights through reports and visualizations. Proficiency in Python and Tableau is preferred.',
            'location' => 'Remote',
            'salary' => 1000, // Payment for the project in USD
            'category' => 'Data Analysis',
        ]);

        Job::create([
            'title' => 'Content Writing for Blogs',
            'description' => 'Write 10 SEO-optimized blog posts on technology trends and innovations. Each post should be between 800-1000 words.',
            'location' => 'Remote',
            'salary' => 500, // Payment for the project in USD
            'category' => 'Content Writing',
        ]);

        Job::create([
            'title' => 'Logo and Branding Design',
            'description' => 'Create a logo and branding materials for a startup. Deliverables include logo files, color schemes, and font styles.',
            'location' => 'Remote',
            'salary' => 800, // Payment for the project in USD
            'category' => 'Design',
        ]);

        Job::create([
            'title' => 'Social Media Marketing Campaign',
            'description' => 'Plan and execute a social media marketing campaign for a product launch. Experience with Facebook Ads and Instagram promotions is a must.',
            'location' => 'Remote',
            'salary' => 900, // Payment for the project in USD
            'category' => 'Marketing',
        ]);

        Job::create([
            'title' => 'Custom WordPress Plugin Development',
            'description' => 'Develop a custom WordPress plugin with unique functionality for an e-commerce website. Proficiency in PHP and WordPress development is required.',
            'location' => 'Remote',
            'salary' => 1100, // Payment for the project in USD
            'category' => 'Web Development',
        ]);

        Job::create([
            'title' => 'Online Course Video Editing',
            'description' => 'Edit and enhance video content for an online course platform. Experience with Adobe Premiere Pro or Final Cut Pro is required.',
            'location' => 'Remote',
            'salary' => 700, // Payment for the project in USD
            'category' => 'Video Editing',
        ]);

        Job::create([
            'title' => 'SEO Audit and Recommendations',
            'description' => 'Conduct a comprehensive SEO audit of a company website and provide actionable recommendations to improve search engine ranking.',
            'location' => 'Remote',
            'salary' => 600, // Payment for the project in USD
            'category' => 'SEO',
        ]);

        Job::create([
            'title' => 'Translation of Business Documents',
            'description' => 'Translate 20 pages of business documents from English to French. Fluency in both languages is required.',
            'location' => 'Remote',
            'salary' => 400, // Payment for the project in USD
            'category' => 'Translation',
        ]);
    }
}
