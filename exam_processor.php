<?php

declare(strict_types=1);

$student = [
    "student_id" => 101,
    "name" => "Sadman",
    "email" => "sadman@example.com",
    "correct_answers" => 80,
    "wrong_answers" => 10,
    "is_active" => true,
    "phone_number" => null
];

function calculateScore(int $correct, int $wrong): float
{
    return $correct - ($wrong * 0.25);
}

$score = calculateScore(
    $student["correct_answers"],
    $student["wrong_answers"]
);

if ($score >= 80) {
    $result = "Excellent";
} elseif ($score >= 50) {
    $result = "Passed";
} else {
    $result = "Failed";
}

$phone = $student["phone_number"] ?? "Not Provided";

echo "Student ID: " . $student["student_id"];
echo "\nName: " . $student["name"];
echo "\nEmail: " . $student["email"];
echo "\nActive: " . ($student["is_active"] ? "Yes" : "No");
echo "\nScore: " . $score;
echo "\nResult: " . $result;
echo "\nPhone: " . $phone;
