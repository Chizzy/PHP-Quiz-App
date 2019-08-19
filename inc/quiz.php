<?php
/*
 * PHP Techdegree Project 2: Build a Quiz App in PHP
 *
 * These comments are to help you get started.
 * You may split the file and move the comments around as needed.
 *
 * You will find examples of formating in the index.php script.
 * Make sure you update the index file to use this PHP script, and persist the users answers.
 *
 * For the questions, you may use:
 *  1. PHP array of questions
 *  2. json formated questions
 *  3. auto generate questions
 *
 */


// Include questions
include 'questions.php';
shuffle($questions);
$total = count($questions);

// Show random question
foreach ($questions as $question) {
    echo '<div id="quiz-box">';
    echo '<p class="breadcrumbs">Question # of ' . $total . ' </p>';
    echo '<p class="quiz">What is ' . $question['leftAdder'] . ' + ' . $question['rightAdder'] . '?</p>';
    echo '<form action="quiz.php" method="post">';
    echo '<input type="hidden" name="id" value="0" />';
    $answer1 = '<input type="submit" class="btn" name="answer" value="' . $question['correctAnswer'] . '" />';
    $answer2 = '<input type="submit" class="btn" name="answer" value="' . $question['firstIncorrectAnswer'] . '" />';
    $answer3 = '<input type="submit" class="btn" name="answer" value="' . $question['secondIncorrectAnswer'] . '" />';
    $answers = [$answer1, $answer2, $answer3];
    shuffle($answers);
    echo implode(' ', $answers);
    echo '</form>';
    echo '</div>';
}



// Keep track of which questions have been asked

// Show which question they are on
// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score