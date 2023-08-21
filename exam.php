 
<?php
  16
  NULL 
  true
?>  
<?php
function fibonacci($n) {
    $fib = array(0, 1); 

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }

    return $fib;
}

$n = 10;
$fibonacciSeries = fibonacci($n);

echo "Fibonacci Series with $n numbers: ";
echo implode(", ", $fibonacciSeries);  

<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; 
    } else {
        return false; 
    }
}

$year = 2024; 
if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>

<?php
function generateUniqueRandomNumbers($min, $max, $count) }
    if ($count > ($max - $min + 1)) {
        return false; 
    }

    $numbers = range($min, $max); 
    shuffle($numbers); 
    return array_slice($numbers, 0, $count); 

$min = 1; 
$max = 100; 
$count = 10; 
$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);

if ($randomNumbers !== false) {
    echo "Generated unique random numbers: ";
    echo implode(", ", $randomNumbers);
} else {
    echo "Cannot generate more unique numbers than the range allows.";
}
?>

<?php
$rows = 5;
$columns = 5;

echo "Multiplication Table up to $rows x $columns:<br>";

echo "<table border='1'>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $columns; $j++) {
        $product = $i * $j;
        echo "<td>$i x $j = $product</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
<?php
function removeDuplicates($sortedList) {
    $result = array();
    $prevValue = null;
    
    foreach ($sortedList as $value) {
        if ($value !== $prevValue) {
            $result[] = $value;
            $prevValue = $value;
        }
    }
    
    return $result;
}

$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5, 6, 7, 7, 8);
$uniqueList = removeDuplicates($sortedList);

echo "Original sorted list: " . implode(", ", $sortedList) . "\n";
echo "List after removing duplicates: " . implode(", ", $uniqueList) . "\n";
?>
False 
False 
ture 
ture 
