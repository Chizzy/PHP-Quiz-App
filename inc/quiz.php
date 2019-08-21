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

session_start();


// Include questions
include 'questions.php';

$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
if (empty($page)) {
    $page = 1;
}

$total = count($questions);
shuffle($questions);

if ($page > $total) {
    exit;    
}

// Show random question
echo '<div id="quiz-box">';
// Show which question they are on
echo '<p class="breadcrumbs">Question ' . $page . ' of ' . $total . ' </p>';
echo '<p class="quiz">What is ' . $questions[$page - 1]['leftAdder'] . ' + ' . $questions[$page - 1]['rightAdder'] . '?</p>';
echo '<form action="index.php?p=' . ($page + 1) . '" method="post">';
echo '<input type="hidden" name="id" value="0" />';
// Shuffle answer buttons
$answers = [
    $questions[$page - 1]['correctAnswer'], 
    $questions[$page - 1]['firstIncorrectAnswer'], 
    $questions[$page - 1]['secondIncorrectAnswer']
];
shuffle($answers);
echo '<input type="submit" class="btn" name="answer" value="' . $answers[0] . '" />';
echo '<input type="submit" class="btn" name="answer" value="' . $answers[1] . '" />';
echo '<input type="submit" class="btn" name="answer" value="' . $answers[2] . '" />';
echo '</form>';
echo '</div>';

// Keep track of which questions have been asked
// Keep track of answers
if (isset($_POST['answer'])) {
    $_SESSION['answer'] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
    if ($_SESSION['answer'] == $questions[$page - 1]['correctAnswer']) {
        echo '<h2>Correct</h2>';
    } else {
        echo '<h2>Incorrect, answer is ' . $questions[$page - 1]['correctAnswer'] . '</h2>';
    }
}


// Toast correct and incorrect answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score