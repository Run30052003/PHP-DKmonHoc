<?php
class Registration {
    private $id;
    private $course_id;
    private $student_id;
    private $date;

    public function __construct($id, $course_id, $student_id, $date) {
        $this->id = $id;
        $this->course_id = $course_id;
        $this->student_id = $student_id;
        $this->date = $date;
    }

    public function registerCourse($student_id, $course_id) {
        // Code to register a course for a student
    }
}
?>
