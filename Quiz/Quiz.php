<?php
$Q1 = $_POST["one"];
$Q2 = $_POST["two"];
$Q3 = $_POST["three"];
$Q4 = $_POST["four"];
$Q5 = $_POST["five"];

$Q1A = array("", "1861", "1867", "1848", "1849", "1861");
$Q2A = array("", "1787", "1788", "1790", "1776", "1787");
$Q3A = array("", "1819", "1818", "1846", "1792", "1818");
$Q4A = array("", "1820", "1792", "1821", "1845", "1821");
$Q5A = array("", "1846", "1867", "1863", "1845", "1845");

$CorrectAnswers = 0;
if($Q1A[intval($Q1)] == $Q1A[5])
{
  $CorrectAnswers++;
}
if($Q2A[intval($Q2)] == $Q2A[5])
{
  $CorrectAnswers++;
}
if($Q3A[intval($Q3)] == $Q3A[5])
{
  $CorrectAnswers++;
}
if($Q4A[intval($Q4)] == $Q4A[5])
{
  $CorrectAnswers++;
}
if($Q5A[intval($Q5)] == $Q5A[5])
{
  $CorrectAnswers++;
}

echo "<h2>Question 1: When was Kansas granted statehood?</h2>";
echo "You answered: " . $Q1A[intval($Q1)] . "<br>";
echo "Correct answer: " . $Q1A[5] . "<br>";

echo "<h2>Question 2: When was Delaware granted statehood?</h2>";
echo "You answered: " . $Q2A[intval($Q2)] . "<br>";
echo "Correct answer: " . $Q2A[5] . "<br>";

echo "<h2>Question 3: When was Illinois granted statehood?</h2>";
echo "You answered: " . $Q3A[intval($Q3)] . "<br>";
echo "Correct answer: " . $Q3A[5] . "<br>";

echo "<h2>Question 4: When was Missouri granted statehood?</h2>";
echo "You answered: " . $Q4A[intval($Q4)] . "<br>";
echo "Correct answer: " . $Q4A[5] . "<br>";

echo "<h2>Question 5: When was Florida granted statehood?</h2>";
echo "You answered: " . $Q5A[intval($Q5)] . "<br>";
echo "Correct answer: " . $Q5A[5] . "<br>";

echo "<br><br>You answered " . $CorrectAnswers . " questions correctly.<br>";
echo "Score: " . $CorrectAnswers / 5 * 100 . "%";
?>
