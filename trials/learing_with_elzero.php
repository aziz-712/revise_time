<?php

echo "Hi from PHP<br>";

class student
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$ahmed = new student('Ahmed');
echo nl2br($ahmed->name . '
');

$username = 'Aziz';
echo $username . "<br>";

function sum(int $a, int $b): int | null
{
    // echo gettype($a) . " ";
    // echo gettype($b) . "</br>";
    if (gettype($a) != 'integer' and gettype($b) != 'integer') {
        return null;
    }

    $sum = $a + $b;
    return $sum;
}

echo sum('1 ', "2") . "</br>";

/**
 * Returns the semantic major.minor numbers of a version string.
 *
 * @param string $version
 *   The version string.
 *
 * @return string
 *   The major.minor numbers of the version string. For example, if $version
 *   is 8.9.1, '8.9' will be returned.
 */

/** Hi! My name is Ahmed Aziz.
 * This is my first contribution to Drupal

 * My function called add PHP memory readiness checker

 * @param string $username
 *
 * @param string $password
 *
 * @return string
 */

function uandp(string $username, string $password): string
{
    return "Hi $username! your password is $password";
}

echo uandp("zizou", "P@$$") . "</br>";

print_r(["fistName" => "Ahmed",
    "secondName" => "Aziz",
    "lastName" => "ABBASSI"]);

echo "</br>";

$t = array(1, 2, 4);
print_r($t);

echo "<h1>12 April 2023</h1>";
echo "<h2>Variable variable</h2>";
$a = "osama";
$$a = "elzero";
$$$a = "school";

echo $a;
echo "</br>";
echo $$a;
echo "</br>";
echo $osama;
echo "</br>";
echo $$$a;
echo "</br>";
echo $elzero;
echo "</br>";
echo "Hello $$a";
echo "</br>";
echo "Hello ${$a}";
echo "</br>";

echo "<h2>Assign Variable By Reference</h2>";
$a = "Osama";
// $b = $a;  this is by value
$b = &$a; // this is by reference
$b = "Elzero";
$a = "School";

echo $a;
echo "</br>";
echo $b;
echo "</br>";
echo $b;
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
