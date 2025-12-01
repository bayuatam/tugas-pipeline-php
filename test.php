<?php
// Simulasi Unit Test
$expected = 1;
$actual = 1;
if ($expected === $actual) {
    echo "Test Passed!\n";
    exit(0); // Exit code 0 artinya sukses
} else {
    echo "Test Failed!\n";
    exit(1); // Exit code 1 artinya gagal (Jenkins akan stop)
}
?>