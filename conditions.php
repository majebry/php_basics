<?php

$grade = 40;

if (($grade > 100) || ($grade < 0)) {
    echo "Invalid";
}
elseif ($grade >= 85) {
    echo "Excellent";
}
elseif ($grade >= 75) {
    echo "Very Good";
}
elseif ($grade >= 50) {
    echo "Passed";
} else {
    echo "Failed";
}