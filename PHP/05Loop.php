<?php

// echo "Aatman";
// echo "Aatman";
// echo "Aatman";
// echo "Aatman";
// echo "Aatman";



// for (init; condi ; process) { 
for ($i=0; $i < 5; $i++) {
    echo "Aatman";
}
$a = 0;
while ($a <= 10) {
    # code...
    echo "called";
    // $a--;
    $a++;
}

echo "<br>";
$variable = array("test","checking");
// 90% we use for accessing array element
foreach ($variable as $key => $value) {
    echo $value;
}

// Exit Control loop

$dowhile = 50;
do {
    $dowhile++;
    echo "Called";
} while ($dowhile <= 10);
?>