<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PaginatedImagesController extends Controller
{
    public function activities() {

        $images = collect([
            "https://iili.io/32fv0an.jpg",
            "https://iili.io/32fL8Qe.jpg",
            "https://iili.io/32fLvj9.jpg",
            "https://iili.io/32fLkT7.jpg",
            "https://iili.io/32fLr4j.jpg",
            "https://iili.io/32fLivV.jpg",
            "https://iili.io/32fLZj1.jpg",
            "https://iili.io/32fLp6J.jpg",
            "https://iili.io/32fLkT7.jpg",
            "https://iili.io/32fQ93v.jpg",
            "https://iili.io/32fQ3uI.jpg",
            "https://iili.io/32fQHaR.jpg",
            "https://iili.io/32fQdyN.jpg",
            "https://iili.io/32fQoFf.jpg",
            "https://iili.io/32fQxa4.jpg",
            "https://iili.io/32fLr4j.jpg",
            "https://iili.io/32fLp6J.jpg",
            "https://iili.io/32fQT92.jpg",
            "https://iili.io/32fQAw7.jpg",
            "https://iili.io/32fQlFj.jpg",
            "https://iili.io/32fQ18Q.jpg",
            "https://iili.io/32fQa6b.jpg",
            "https://iili.io/32fQ0cx.jpg",
            "https://iili.io/32fQG9V.jpg",
            "https://iili.io/32fQwPa.jpg",
            "https://iili.io/32fQOKJ.jpg",
            "https://iili.io/32fQecv.jpg",
            "https://iili.io/32fQkSR.jpg",
            "https://iili.io/32fQUNI.jpg",
            "https://iili.io/32fQSAN.jpg",
            "https://iili.io/32fQgtt.jpg",
            "https://iili.io/32fQ4oX.jpg",
            "https://iili.io/32fQ6Vn.jpg",
            "https://iili.io/32fQPPs.jpg",
            "https://iili.io/32fQPPs.jpg",
            "https://iili.io/32fQQS4.jpg",
            "https://iili.io/32fQmD7.jpg",
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
            ["images" => "https://iili.io/32fZuUv.jpg", "name" => "Suh Pierra Lum", "occupation" => "FIRST STUDENT OF THE CURE FOUNDATION, MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My experience at THE CURE FOUNDATION was life-changing. Their exceptional guidance, resources, and support empowered me to secure admission to my dream school, setting me on the path to becoming a medical doctor. I am deeply grateful for their belief in me and their role in turning my aspirations into reality."],
            ["images" => "https://iili.io/32fZ7ON.jpg", "name" => "Paterson Andang", "occupation" => "MEDICAL DOCTOR AND TUTOR AT THE CURE FOUNDATION", "testimony" => "As both a medical doctor and a teacher at THE CURE FOUNDATION, I am proud to be part of an organization that transforms lives. Having once been a student here, I experienced firsthand the dedication and support that helped me achieve my dreams. Now, I am honored to give back by guiding the next generation of aspiring doctors, just as I was guided. THE CURE FOUNDATION is not just a place of learning—it's a family that nurtures dreams and turns them into reality."],
            ["images" => "https://iili.io/32fZ5Rp.jpg", "name" => "Nfor Ntala", "occupation" => "MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My journey with THE CURE FOUNDATION was incredible. Their mentorship, study materials, and encouragement helped me gain admission to my dream medical school. Thanks to their support, I am now pursuing my goal of becoming a doctor and making a difference in healthcare. I am truly thankful for their impact on my life."],
            ["images" => "https://iili.io/32fZvqu.jpg", "name" => "Annalisa", "occupation" => "MEDICAL STUDENT", "testimony" => "My experience at THE CURE FOUNDATION was transformative. Their guidance, resources, and unwavering support helped me gain admission to my dream school, paving the way for my journey to become a medical doctor. I am forever grateful for their role in shaping my future and inspiring my passion for medicine."],
            ["images" => "https://iili.io/32fZhe2.jpg", "name" => "Deffo Branham", "occupation" => "MEDICAL STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "My experience with THE CURE FOUNDATION was truly inspiring. Their resources, guidance, and unwavering support played a key role in helping me secure admission to my dream medical school. Now, as I work toward becoming a doctor, I am deeply grateful for their contribution to my academic and professional journey."],
            ["images" => "https://iili.io/32fZsX1.jpg", "name" => "Mfonfu Wesley Bikoma", "occupation" => "SOFTWARE ENGINEER, ENGINEERING STUDENT AND TUTOR AT THE CURE FOUNDATION", "testimony" => "As a software engineer and now a teacher at THE CURE FOUNDATION, I am grateful for the incredible journey this organization has provided me. As a former student, I benefited from their resources and mentorship, which helped me build a strong foundation in technology. Now, I am passionate about giving back by teaching and inspiring the next generation of innovators. THE CURE FOUNDATION is more than an institution—it's a platform that empowers dreams and fosters growth, both for students and teachers alike."],
            ["images" => "https://iili.io/3KokJnf.jpg", "name" => "Asheri Veronique", "occupation" => "SOFTWARE ENGINEERING STUDENT", "testimony" => "Attending THE CURE Preparatory Class was a transformative experience. The program's comprehensive resources and expert tutors prepared me for both nursing and software engineering concourses, which I successfully passed. The structured curriculum, practice exams, and personalized guidance made learning efficient and effective.Choosing Software engineering was a life-changing decision, inspired by THE CURE's emphasis on problem-solving and critical thinking. The program not only equipped me with academic knowledge but also instilled confidence and time management skills. THE CURE's support was invaluable in helping me achieve my goals. I'm deeply grateful for their role in shaping my future. Highly recommended!"],
            ["images" => "https://iili.io/3Koeyjs.jpg", "name" => "Tab Betrand", "occupation" => "NURSING STUDENT", "testimony" => "THE CURE Preparatory Class played a pivotal role in my success in the Nursing concourse. Their comprehensive resources, including practice exams and detailed study guides, covered every aspect of the syllabus. The tutors were exceptional, offering personalized support and clarifying doubts promptly. The mock exams simulated the real concourse environment, helping me manage time and stress effectively. Thanks to THE CURE, I passed the Nursing concourse and am now pursuing my dream career. The program not only prepared me academically but also built my confidence and resilience. I’m deeply grateful for their guidance and highly recommend THE CURE to future nursing students."],
            ["images" => "https://iili.io/3Kok9ZG.jpg", "name" => "Yuin Elisha Afumbom", "occupation" => "Medical Laboratory Science(MLS)", "testimony" => "THE CURE Preparatory Class was a game-changer for me. Their well-structured program and extensive study materials prepared me thoroughly for the Medical Laboratory Sciences (MLS) concourse. The practice exams and revision questions mirrored the actual test, boosting my confidence. The tutors were incredibly supportive, breaking down complex topics into understandable concepts. Their guidance helped me stay focused and motivated throughout the preparation. Thanks to THE CURE, I passed the MLS concourse with flying colors. The program not only helped me achieve my academic goals but also instilled discipline and perseverance. I’m grateful for their unwavering support and highly recommend THE CURE to aspiring MLS professionals."],
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
