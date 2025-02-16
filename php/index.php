<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year";
    } else {
        return "This year is not a leap year";
    }
}


$year = 2013;
echo isLeapYear($year);
?>

</br>

</br>


<?php
function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}


$temperature = 27;
echo checkSeason($temperature);
?>


</br>
</br>






<?php
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    
    if ($firstInteger == $secondInteger) {
        return "($firstInteger + $secondInteger) * 3 = " . ($sum * 3);
    } else {
        return "$firstInteger + $secondInteger = $sum";
    }
}

echo calculateSum(2, 2) . "<br>";


echo calculateSum(3, 5);
?>


</br>

</br>









<?php
function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;

    if ($sum == 30) {
        return $sum;
    } else {
        return "false";
    }
}


echo checkSum(10, 1) . "<br>"; 


echo checkSum(15, 15) . "<br>"; 
?>


</br>
</br>

<?php
function checkRange($number) {
    if ($number >= 20 && $number <= 50) {
        return "true";
    } else {
        return "false";
    }
}


echo checkRange(50) . "<br>"; 


echo checkRange(10) . "<br>"; 


echo checkRange(30) . "<br>"; 
?>


</br>
</br>


<?php
function findLargest($a, $b, $c) {
    return max($a, $b, $c);
}


echo findLargest(1, 5, 9); 
?>


</br>
</br>


<?php
function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return "Total Electricity Bill: " . number_format($bill, 2) . " JOD";
}


echo calculateElectricityBill(270);
?>


</br>

</br>


<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero!";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation!";
    }
}


echo "10 + 5 = " . calculator(10, 5, '+') . "<br>";  
echo "10 - 5 = " . calculator(10, 5, '-') . "<br>";  
echo "10 * 5 = " . calculator(10, 5, '*') . "<br>";  
echo "10 / 5 = " . calculator(10, 5, '/') . "<br>";  
echo "10 / 0 = " . calculator(10, 0, '/') . "<br>";  
?>


</br>
</br>


<?php
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "Eligible to vote";
    } else {
        return "Not eligible to vote";
    }
}


echo checkVotingEligibility(15) . "<br>"; 
echo checkVotingEligibility(20) . "<br>"; 
?>

</br>
</br>

<?php
function checkNumber($num) {
    if ($num > 0) {
        return "Positive";
    } elseif ($num < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}


echo checkNumber(-60); 
?>


</br>

</br>


<?php
function calculateGrade($scores) {
    
    $average = array_sum($scores) / count($scores);

    
    if ($average < 60) {
        return "F";
    } elseif ($average < 70) {
        return "D";
    } elseif ($average < 80) {
        return "C";
    } elseif ($average < 90) {
        return "B";
    } else {
        return "A";
    }
}


$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo "The grade is: " . calculateGrade($scores); 
?>










