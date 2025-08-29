<?php

class Student {
    private $studentId;
    private $name;
    private $courses;
    private $coursePrice = 1450;
    
    public function __construct($studentId, $name) {
        $this->studentId = $studentId;
        $this->name = $name;
        $this->courses = array(); 
    }
    
    // get student ID
    public function getStudentId() {
        return $this->studentId;
    }
    
    // get student name
    public function getName() {
        return $this->name;
    }
    
    // add a course for student
    public function addCourse($courseCode, $courseName) {
        // check if course already exists
        if (!isset($this->courses[$courseCode])) {
            $this->courses[$courseCode] = $courseName;
            echo "Course added: {$courseCode} - {$courseName}\n";
        } else {
            echo "Course {$courseCode} is already enrolled!\n";
        }
    }
    
    // remove a course from student
    public function deleteCourse($courseCode) {
        if (isset($this->courses[$courseCode])) {
            $courseName = $this->courses[$courseCode];
            unset($this->courses[$courseCode]);
            echo "Course removed: {$courseCode} - {$courseName}\n";
        } else {
            echo "Course {$courseCode} not found in enrollment!\n";
        }
    }
    
    // get all enrolled courses
    public function getCourses() {
        return $this->courses;
    }
    
    // get total number of courses enrolled
    public function getTotalCourses() {
        return count($this->courses);
    }
    
    // get total enrollment fee
    public function getTotalEnrollmentFee() {
        return $this->getTotalCourses() * $this->coursePrice;
    }
    
    // display student enrollment summary
    public function displayEnrollmentSummary() {
        echo "\n=== ENROLLMENT SUMMARY ===\n";
        echo "Student ID: " . $this->studentId . "\n";
        echo "Student Name: " . $this->name . "\n";
        echo "Total Courses Enrolled: " . $this->getTotalCourses() . "\n";
        
        if (!empty($this->courses)) {
            echo "\nEnrolled Courses:\n";
            foreach ($this->courses as $code => $name) {
                echo "- {$code}: {$name}\n";
            }
        } else {
            echo "\nNo courses enrolled yet.\n";
        }
        
        echo "\nCourse Fee: PHP " . number_format($this->coursePrice, 2) . " per course\n";
        echo "TOTAL ENROLLMENT FEE: PHP " . number_format($this->getTotalEnrollmentFee(), 2) . "\n";
        echo "===========================\n\n";
    }
}

echo "=== STUDENT ENROLLMENT SYSTEM ===\n\n";

// create a new student
$student = new Student("2025-011", "Mary J Blige");
echo "Student created: " . $student->getName() . " (ID: " . $student->getStudentId() . ")\n\n";

// Add courses/subjects
echo "--- ADDING COURSES ---\n";
$student->addCourse("CS101", "Introduction to Computer Science");
$student->addCourse("MATH101", "College Algebra");
$student->addCourse("ENG101", "English Communication");
$student->addCourse("PHYS101", "General Physics");
$student->addCourse("CHEM101", "General Chemistry");

// add duplicate course
echo "\nTry adding duplicate course:\n";
$student->addCourse("CS101", "Introduction to Computer Science");

// display current enrollment
$student->displayEnrollmentSummary();

// delete some courses
echo "--- REMOVING COURSES ---\n";
$student->deleteCourse("PHYS101");
$student->deleteCourse("CHEM101");

// delete non-existing course
echo "\nTry removing non-existing course:\n";
$student->deleteCourse("BIO101");

// display final enrollment
$student->displayEnrollmentSummary();

// creating another student
echo "\n" . str_repeat("=", 50) . "\n";
echo "STUDENT 2\n";
echo str_repeat("=", 50) . "\n\n";

$student2 = new Student("2024-002", "Maria Santos");
echo "Student created: " . $student2->getName() . " (ID: " . $student2->getStudentId() . ")\n\n";

echo "--- ADDING COURSES ---\n";
$student2->addCourse("IT101", "Introduction to Information Technology");
$student2->addCourse("WEB101", "Web Development Fundamentals");

$student2->displayEnrollmentSummary();

?>
