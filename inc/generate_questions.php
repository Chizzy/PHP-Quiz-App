<?php
// Generate random questions
$questions = [];
// Loop for required number of questions
for ($i = 0; $i <= 9; $i++) {
    // Get random numbers to add
    $leftAdder = rand(1, 100);
    $rightAdder = rand(1, 100);
    if ($leftAdder == $rightAdder) {
        $rightAdder = rand(1, 100);
    }

    // Calculate correct answer
    $correctAnswer = $leftAdder + $rightAdder;

    // Get incorrect answers within 10 numbers either way of correct answer
    // Make sure it is a unique answer
    $firstIncorrectAnswer = $correctAnswer + rand(-10, 10);
    if ($correctAnswer == $firstIncorrectAnswer) {
        $firstIncorrectAnswer = $correctAnswer + rand(-10, 10);
    }

    $secondIncorrectAnswer = $correctAnswer + rand(-10, 10);
    if ($firstIncorrectAnswer == $secondIncorrectAnswer || $correctAnswer == $secondIncorrectAnswer) {
        $secondIncorrectAnswer = $correctAnswer + rand(-10, 10);
    }

    // Add question and answer to questions array
    $questions[] = [
        'leftAdder' => $leftAdder,
        'rightAdder' => $rightAdder,
        'correctAnswer' => $correctAnswer,
        'firstIncorrectAnswer' => $firstIncorrectAnswer,
        'secondIncorrectAnswer' => $secondIncorrectAnswer
    ];
}