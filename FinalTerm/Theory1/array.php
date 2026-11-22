<?php
// indexed array
$int_arr = [1, 2, 3, "str", [4, 5]]; // supports multi type
// $int_arr = array(1,2,3);

// associative array (works like JS objects)

// JS object sample -> property-value pair
// let person = {
// 	name: "ABC",
// 	age: 12,
//  courses: ["WT", "IP"]
// }

// php -> key-value pair
$person = [
	"name" => "ABC",
	"age" => 12,
	"courses" => ["WT", "IP"]
];

// interating indexed array -> for loop
// for ($i=0; $i<4; $i++) {
// 	echo($int_arr[$i]);
// }

// interating associative array -> foreach loop
foreach ($person as $k => $v) {
	// echo($key . "<br>");
	// echo($value . "<br>");
	// echo($k . ": " . $v . "<br>");
	echo ("$k: $v<br>");
}


function addNumInt(int $a, int $b)
{
	return $a + $b;
}

function addNum($a, $b)
{
	return $a + $b;
}

// echo (addNumInt(1, 2));
// echo(addNumInt("abc",2));
echo addNum(1.2, 3.5);
echo "<br>";
echo addNum(1, 3);
