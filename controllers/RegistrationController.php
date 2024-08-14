<?php
require_once '../models/Course.php';
require_once '../models/Student.php';
require_once '../models/Registration.php';

class RegistrationController {
    public function registerCourse($student_id, $course_id) {
        $courseModel = new Course();
        $studentModel = new Student();
        $registrationModel = new Registration();

        if ($studentModel->validateStudent($student_id) && $courseModel->validateCourse($course_id)) {
            $registrationModel->registerCourse($student_id, $course_id);
            header("Location: ../views/result.php?status=success");
        } else {
            header("Location: ../views/result.php?status=failure");
        }
    }
}
?>
