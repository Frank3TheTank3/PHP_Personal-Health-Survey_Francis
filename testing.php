<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body style="text-align: center;">

<p style="color:black;"> This is a PHP Array Test 
<?php
echo "<br>";
echo "Hello again". "<br>";


//Initialize Arrays

//Standart Array
$Names = array("Frank", "Richard", "Anna");

//Indexed Array
$NamesAndAge = array("Frank" => 31, "Richard" => 22, "Anna" => 28 );

//Multidimensional Array
$MultiName = array(

    array(
        "firstname" => "Francis", 
        "lastname" => "Nicholls", 
        "age" => 31, 
        "nationality" => "swiss"
    ),

    array(
        "firstname" => "Muster", 
        "lastname" => "Man", 
        "age" => 99, 
        "nationality" => "swasi"
    ),
    array(
        "firstname" => "Tea", 
        "lastname" => "Drinker", 
        "age" => 55, 
        "nationality" => "british"
    ),

);

//Echo all names in normal Array
for ($i=0; $i < 3; $i++) { 
    echo $Names[$i] . "<br>";
}

foreach($NamesAndAge as $nameage )
if($nameage > 30)
{
    echo "Frank is " . $nameage . " years old.";

}
echo "<br><br>";
//Print Multidimensional Array
print_r($MultiName);
echo "<br><br>";
//Get First Person in Multidimensional Array
$personData = $MultiName[1];
echo "<br><br>";

//Print First Person in Multidimensional Array
print_r($personData);
echo "<br><br>";

//Get Last Name from First Person in Multidimensional Array
$lastName = $personData['lastname'];
print_r("The last name is: " . $lastName . "<br>");
echo "<br><br>";
//Directly get Last Name from First Person in Multidimensional Array
$directname = $MultiName[1]['lastname'];
echo "<br><br>";
//Print the last name from the first person
print_r("The direct name is " . $directname);


?>

</p>
<p>

Multidimensionale Arrays


<?php



?>

</p>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>