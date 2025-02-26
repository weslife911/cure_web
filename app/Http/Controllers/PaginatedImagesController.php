<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginatedImagesController extends Controller
{
    public function activities() {

        $images = collect([
            "/images/bg/book.jpg",
            "/images/bg/group_2.jpg",
            "/images/bg/group_1.jpg",
            "/images/bg/group_3.jpg",
            "/images/bg/group_4.jpg",
            "/images/bg/group_5.jpg",
            "/images/bg/group_6.jpg",
            "/images/bg/group_7.jpg",
            "/images/bg/group_8.jpg",
            "/images/bg/group_9.jpg",
            "/images/bg/group_10.jpg",
            "/images/bg/group_11.jpg",
            "/images/bg/group_12.jpg",
            "/images/bg/group_13.jpg",
            "/images/bg/group_14.jpg",
            "/images/bg/group_15.jpg",
            "/images/bg/group_16.jpg",
            "/images/bg/group_17.jpg",
            "/images/bg/group_18.jpg",
            "/images/bg/group_19.jpg",
            "/images/bg/group_20.jpg",
            "/images/bg/group_21.jpg",
            "/images/bg/group_22.jpg",
            "/images/bg/group_23.jpg",
            "/images/bg/group_24.jpg",
            "/images/bg/group_25.jpg",
            "/images/bg/group_26.jpg",
            "/images/bg/group_27.jpg",
            "/images/bg/group_28.jpg",
            "/images/bg/group_29.jpg",
            "/images/bg/group_30.jpg",
            "/images/bg/group_31.jpg",
            "/images/bg/group_32.jpg",
            "/images/bg/group_33.jpg",
            "/images/bg/group_34.jpg",
            "/images/bg/group_35.jpg",
            "/images/bg/group_36.jpg",
        ]);

        $page = request()->get("page", 1);
        $perPage = 6;
        $paginatedItems = new LengthAwarePaginator(
            $images->forPage($page, $perPage), // Items for the current page
            $images->count(), // Total number of items
            $perPage, // Items per page
            $page, // Current page
            [
                'path' => request()->url(), // Base URL for pagination links
                'query' => request()->query(), // Query parameters
            ]
        );

        return view("guest.activities", compact("paginatedItems"));
    }

    public function testimonials() {
        $testimonies = [
            ["images" => "/images/testimonials/1.jpg", "name" => "Suh Pierra Lum", "occupation" => "FIRST STUDENT OF THE CURE FOUNDATION, MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My experience at THE CURE FOUNDATION was life-changing. Their exceptional guidance, resources, and support empowered me to secure admission to my dream school, setting me on the path to becoming a medical doctor. I am deeply grateful for their belief in me and their role in turning my aspirations into reality."],
            ["images" => "/images/testimonials/2.jpg", "name" => "Paterson Andang", "occupation" => "MEDICAL DOCTOR AND TUTOR AT THE CURE FOUNDATION", "testimony" => "As both a medical doctor and a teacher at THE CURE FOUNDATION, I am proud to be part of an organization that transforms lives. Having once been a student here, I experienced firsthand the dedication and support that helped me achieve my dreams. Now, I am honored to give back by guiding the next generation of aspiring doctors, just as I was guided. THE CURE FOUNDATION is not just a place of learning—it's a family that nurtures dreams and turns them into reality."],
            ["images" => "/images/testimonials/3.jpg", "name" => "Nfor Ntala", "occupation" => "MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My journey with THE CURE FOUNDATION was incredible. Their mentorship, study materials, and encouragement helped me gain admission to my dream medical school. Thanks to their support, I am now pursuing my goal of becoming a doctor and making a difference in healthcare. I am truly thankful for their impact on my life."],
            ["images" => "/images/testimonials/4.jpg", "name" => "Annalisa", "occupation" => "MEDICAL STUDENT", "testimony" => "My experience at THE CURE FOUNDATION was transformative. Their guidance, resources, and unwavering support helped me gain admission to my dream school, paving the way for my journey to become a medical doctor. I am forever grateful for their role in shaping my future and inspiring my passion for medicine."],
            ["images" => "/images/testimonials/5.jpg", "name" => "Deffo Branham", "occupation" => "MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My experience with THE CURE FOUNDATION was truly inspiring. Their resources, guidance, and unwavering support played a key role in helping me secure admission to my dream medical school. Now, as I work toward becoming a doctor, I am deeply grateful for their contribution to my academic and professional journey."],
            ["images" => "/images/testimonials/6.jpg", "name" => "Mfonfu Wesley Bikoma", "occupation" => "SOFTWARE ENGINEER, ENGINEERING STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "As a software engineer and now a teacher at THE CURE FOUNDATION, I am grateful for the incredible journey this organization has provided me. As a former student, I benefited from their resources and mentorship, which helped me build a strong foundation in technology. Now, I am passionate about giving back by teaching and inspiring the next generation of innovators. THE CURE FOUNDATION is more than an institution—it's a platform that empowers dreams and fosters growth, both for students and teachers alike."],
        ];

        $testimonies = collect($testimonies);

        $page = request()->get('page', 1); // Get the current page or default to 1
        $perPage = 3; // Number of items per page
        $paginatedItems = new LengthAwarePaginator(
        $testimonies->forPage($page, $perPage), // Items for the current page
        $testimonies->count(), // Total number of items
        $perPage, // Items per page
        $page, // Current page
        [
            'path' => request()->url(), // Base URL for pagination links
            'query' => request()->query(), // Query parameters
        ]
        );


        return view("guest.testimonials", compact("paginatedItems"));

    }
}
