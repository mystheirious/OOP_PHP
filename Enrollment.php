<?php
class Course {
    public $courseName;
    public $fee;

    public function __construct($courseName) {
        $this->courseName = $courseName;
        $this->fee = 1450; 
    }
}

class Student {
    public $name;
    private $courses = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addCourse(Course $course) {
        $this->courses[] = $course;
    }

    public function removeCourse($courseName) {
        foreach ($this->courses as $key => $course) {
            if ($course->courseName === $courseName) {
                unset($this->courses[$key]);
                $this->courses = array_values($this->courses); 
                echo "Course '$courseName' removed successfully.\n";
                return;
            }
        }
        echo "Course '$courseName' not found.\n";
    }

    public function calculateTotalFee() {
        $total = 0;
        foreach ($this->courses as $course) {
            $total += $course->fee;
        }
        return $total;
    }

    public function listCourses() {
        echo "Student " . $this->name . " is enrolled to courses:\n";
        foreach ($this->courses as $course) {
            echo " - " . $course->courseName . " (₱" . $course->fee . ")\n";
        }
        echo "Total Fee: ₱" . $this->calculateTotalFee() . "\n";
    }
}

$student1 = new Student("Marithei Villanueva");
$student1->addCourse(new Course("Data Analysis"));
$student1->addCourse(new Course("Thesis Writing"));
$student1->addCourse(new Course("Software Engineering"));
$student1->listCourses();

$student1->removeCourse("Data Analysis");
$student1->listCourses();
?>
