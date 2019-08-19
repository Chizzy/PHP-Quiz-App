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
if (empty($page)) {
    $page = 1;
}

// Include questions
include 'questions.php';

shuffle($questions);
$total = count($questions);
$page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);

if (!isset($_SESSION['question']) || $_SESSION['question'] > 8) {
    $_SESSION['question'] = 0;
} else {
    $_SESSION['question']++;
}

if (isset($_POST['answer'])) {
    $_SESSION['answer'][$page - 1] = filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_NUMBER_INT);
}

if ($page > $total) {
    exit;    
}

// Show random question
echo '<div id="quiz-box">';
// Show which question they are on
echo '<p class="breadcrumbs">Question ' . $page . ' of ' . $total . ' </p>';
echo '<p class="quiz">What is ' . $questions[$_SESSION['question']]['leftAdder'] . ' + ' . $questions[$_SESSION['question']]['rightAdder'] . '?</p>';
echo '<form action="index.php?p=' . ($page + 1) . '" method="post">';
echo '<input type="hidden" name="id" value="0" />';
$answer1 = '<input type="submit" class="btn" name="answer" value="' . $questions[$_SESSION['question']]['correctAnswer'] . '" />';
$answer2 = '<input type="submit" class="btn" name="answer" value="' . $questions[$_SESSION['question']]['firstIncorrectAnswer'] . '" />';
$answer3 = '<input type="submit" class="btn" name="answer" value="' . $questions[$_SESSION['question']]['secondIncorrectAnswer'] . '" />';
$answers = [$answer1, $answer2, $answer3];
shuffle($answers);
echo implode(' ', $answers);
echo '</form>';
echo '</div>';




// Keep track of which questions have been asked


// Shuffle answer buttons


// Toast correct and incorrect answers
// Keep track of answers
// If all questions have been asked, give option to show score
// else give option to move to next question


// Show score