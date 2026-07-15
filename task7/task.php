
<?php

    $students = [ 
                ["Ahmed", 95],
                ["Mohamed", 82],
                ["Ali", 74],
                ["Sara", 61],
                ["Mona", 48]
    ];

    echo "students' grades are: <br>";
    $passedStudents = 0;
    $failedStudents = 0;
    $highestGradeStudent = 0;
    $totalScores = 0;
    foreach ($students as $student) {
        $totalScores += $student[1];
        if ($student[1] > $highestGradeStudent) {
            $highestGradeStudent = $student[0];
        }
        if ($student[1] >= 90)
            {
                echo $student[0] . " got an A grade and scored " . $student[1] . "<br>";
            }
        elseif ($student[1] >= 80)
            {
                echo $student[0] . " got a B grade and scored " . $student[1] . "<br>";
                
            }
        elseif ($student[1] >= 70)
            {
                echo $student[0] . " got a C grade and scored " . $student[1] . "<br>";
                
            }
        elseif ($student[1] >= 60)
            {
                echo $student[0] . " got a D grade and scored " . $student[1] . "<br>";
            }
        else
            {
                echo $student[0] . " got an F grade and scored " . $student[1] . "  <br>";
                $failedStudents++;
            }
    }
    $passedStudents = count($students) - $failedStudents;
    echo "<br>Number of passed students: " . $passedStudents . "<br>";

    echo "Number of failed students: " . $failedStudents . "<br>";
    echo "Highest grade Student: " . $highestGradeStudent . "<br>";
    echo "Average score: " . ($totalScores / count($students)) . "<br>";
?>