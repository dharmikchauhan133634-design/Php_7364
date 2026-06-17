<?php
define("COLLEGE_NAME", "marwadi university ");
$studentName = "dharmik";
$rollNo = 1106;
$semester = "Semester 4";
$totalMarks = 600;
$obtainedMarks = 425;

$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "<h2>" . COLLEGE_NAME . "</h2>";
echo "<h3>Previous Semester Result</h3>";

echo "Student Name: " . $studentName . "<br>";
echo "Roll No: " . $rollNo . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Total Marks: " . $totalMarks . "<br>";
echo "Obtained Marks: " . $obtainedMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>