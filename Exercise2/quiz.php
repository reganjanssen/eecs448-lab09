<style><?php include 'quiz.css';?></style>
<?php 
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];

    echo "<h1>Quiz Results</h1>";
    echo "<div class='php'>";
    echo "Question 1: What is Taylor Swift's best album?<br>";
    echo "Your answer was: ". $Q1 . "<br>";
    echo "The correct answer is: Red (Taylor's Version)<br><br>";

    echo "Question 2: What show does Jason Sudeikis star in?<br>";
    echo "Your answer was: ". $Q2 . "<br>";
    echo "The correct answer is: Ted Lasso<br><br>";

    echo "Question 3: What is the capital of Texas?<br>";
    echo "Your answer was: ". $Q3 . "<br>";
    echo "The correct answer is: Austin<br><br>";

    echo "Question 4: Who is the founder of Facebook?<br>";
    echo "Your answer was: ". $Q4 . "<br>";
    echo "The correct answer is: Mark Zuckerberg<br><br>";

    echo "Question 5: What year was Netflix created?<br>";
    echo "Your answer was: ". $Q5 . "<br>";
    echo "The correct answer is: 1997<br><br>";

    $correct = 0;
    if ($Q1 == "Red (Taylor's Version)") {
        $correct++;
    }
    if ($Q2 == "Ted Lasso") {
        $correct++;
    }
    if ($Q3 == "Austin") {
        $correct++;
    }
    if ($Q4 == "Mark Zuckerberg") {
        $correct++;
    }
    if ($Q5 == "1997") {
        $correct++;
    }

    echo "Total correct: " .$correct. "<br>";
    echo "Overall score: " .($correct * 20)."%";
    echo "</div>";
    echo "<br><br><br>";
    echo "<a href='../index.html'>Home page</a>";

    ?>
    


