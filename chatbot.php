<?php
session_start();
// session_destroy();
require 'dictionary.php';

function findKeyWord($dictionary, $question)
{
  foreach ($dictionary as $keywords => $message) {
    $keywordsArray = explode('|', $keywords);
    foreach ($keywordsArray as $keyword) {
      if (strpos($question, $keyword) !== false) {
        return $message;
      }
    }
  }
  return 'Niestety nie znam odpowiedzni na wiadomość.';
};

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['userMessage'])) {
  $question = mb_strtolower(trim($_POST['userMessage']));

  $response = findKeyWord($dictionary, $question);
  $_SESSION['responses'][$question] = $response;
}

include 'chatbot.html.php';
