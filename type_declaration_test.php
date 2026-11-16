<?php

declare(strict_types=1);

$student = [
    "id" => 101,
    "name" => "Sadman",
    "subjects" => ["Bangla", "English", "Math"],
    "correct_answers" => 80,
    "wrong_answers" => 10,
    "is_registered" => true,
    "phone" => null
];

function calculateScore(int $correct, int $wrong): float
{
    return ($correct * 1.0) - ($wrong * 0.25);
}

$score = calculateScore(
    $student["correct_answers"],
    $student["wrong_answers"]
);

$phone = $student["phone"] ?? "Not Provided";

echo "Student: " . $student["name"];
echo "\nScore: " . $score;
echo "\nPhone: " . $phone;

?>