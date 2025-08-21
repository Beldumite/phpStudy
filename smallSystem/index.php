<?php
    $studentName = $_POST["studentName"];
    $midtermScore = $_POST["midtermScore"];
    $midtermWeight = $_POST["midtermWeight"];
    $finalExamScore = $_POST["finalExamScore"];
    $finalExamWeight = $_POST["finalExamWeight"];
    
    $finalGrade = ($midtermScore * $midtermWeight) + ($finalExamScore * $finalExamWeight);
    $result = ($finalGrade >= 70) ? "Pass":"Fail";
    
    echo ($result == "Pass") ? "Congrats $studentName your grade is : $finalGrade <br> SOOOOO you PASSEDDDD YIPPEEEE":"I'm sorry $studentName but your grade is : $finalGrade <br> so unfortunately you did not pass, you failed";
?>  