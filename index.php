<?php
require_once 'controllers/RegistrationController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];

    $controller = new RegistrationController();
    $controller->registerCourse($student_id, $course_id);
}
?>
