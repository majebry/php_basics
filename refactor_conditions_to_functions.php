<?php

$grade = 77;

gradeToWord($grade);


function gradeToWord($grade) {

    if ( isInvalid($grade) ) {
        echo "Not valid";
    }
    else if ( isExcellent($grade) ) {
        echo "Excellent";
    }
    else if ( isVeryGood($grade) ) {
        echo "Very Good!";
    }
    else if ( isPassed($grade) ) {
        echo "Passed";
    }
    else {
        echo "Failed";
    }
}

function isExcellent($grade) {
    return $grade >= 85;
}

function isVeryGood($grade){
    return $grade > 75;
}

function isPassed($grade) {
    return $grade > 75;
}

function isInvalid($grade) {
    return $grade > 100 || $grade < 0;
}