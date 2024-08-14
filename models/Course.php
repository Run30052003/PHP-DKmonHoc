<?php
class Course {
    private $id;
    private $name;
    private $credits;

    public function __construct($id, $name, $credits) {
        $this->id = $id;
        $this->name = $name;
        $this->credits = $credits;
    }

    public function getCourses() {
        // Code to retrieve courses from the database
    }

    public function addCourse($name, $credits) {
        // Code to add a new course to the database
    }
}
?>
