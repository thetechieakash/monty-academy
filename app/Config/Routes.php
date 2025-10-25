<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('teacher-traning-programs/pg-diploma-in-montessori', "TeacherTraining::PgDiploma");
$routes->get('teacher-traning-programs/diploma-in-montessori', "TeacherTraining::Diploma");
$routes->get('teacher-traning-programs/certified-course-in-montessori', "TeacherTraining::CertificateCourse");
$routes->get('teacher-traning-programs/why-should-i-enroll', "TeacherTraining::Enroll");
$routes->get('teacher-traning-programs/testimonials', "TeacherTraining::Testimonials");
$routes->get('early-learning-programs/our-curriculum', "EarlyLearning::Curriculam");
$routes->get('early-learning-programs/core-values', "EarlyLearning::CoreValues");
$routes->get('early-learning-programs/testimonials', "EarlyLearning::Testimonials");
$routes->get('franchise', "Franchise::index");
$routes->get('franchise/curriculam', "Franchise::Curriculam");
$routes->get('about', "About::About");
$routes->get('about/faq', "About::Faq");
$routes->get('about/what-is-montessori', "About::Montessori");
$routes->get('contact', "Contact::index");
$routes->get('disclaimer', "ImportentLink::disclaimer");
$routes->get('privacy-policy', "ImportentLink::privecyPolicy");
$routes->get('terms-conditions', "ImportentLink::termsConditions");
$routes->get('TeacherTraining/showFull/(:any)', "TeacherTraining::showFull/$1");
$routes->get('EarlyLearning/showFull/(:any)', "EarlyLearning::showFull/$1");

$routes->set404Override(function () {
    return view('fronts/pages/404');
});
