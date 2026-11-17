<?php
class Exam
{
    public string $title;

    private int $totalQuestions;

    protected int $duration;

    public function __construct(
        string $title,
        int $totalQuestions,
        int $duration
    ) {
        $this->title = $title;
        $this->totalQuestions = $totalQuestions;
        $this->duration = $duration;
    }

    public function getTotalQuestions(): int
    {
        return $this->totalQuestions;
    }
}

$exam = new Exam("BCS Model Test", 100, 60);

echo $exam->title; 
echo "\n";
echo $exam->getTotalQuestions();
?>