<?php
class Exam
{
    public static int $totalExams = 0;

    public function __construct()
    {
        self::$totalExams++;
    }

    public static function getTotalExams(): int
    {
        return self::$totalExams;
    }
}

$exam1 = new Exam();
$exam2 = new Exam();
$exam3 = new Exam();

echo Exam::getTotalExams(); // 3
?>