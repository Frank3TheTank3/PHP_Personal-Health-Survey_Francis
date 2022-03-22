<?php
session_start();



function ShowQuestion($CurrentQuestion)
{
    

$Questions = array(
    // Question 1 - Slider 1-5
    "Wie gesund bist du körperlich?",
    // Question 2 - Radio Ja / Nein
    "Nimmst du Nahrungsergänzungsmittel?",
    // Question 3 - Slider 1-5
    "Wie wichtig ist köperliche Aktivität für
    dich?",
    // Question 4 - Checkboxes 12
    "Welche zusätzliche körperliche Aktivität
    betreibst du am meisten?",
    // Question 5 - Slider 1-5
    "Hast du das Gefühl, zu wenig, genügend
    oder viel zu viel zusätzliche körperliche
    Aktivitäten zu betreiben?",
    // Question 6 - Input Number
    "An einem typischen Tag: Wie viele deiner
    Malzeiten oder Snacks enthalten
    Kohlenhydrate?",
    // Question 7 - Input Number
    "An einem typischen Tag: Wie viele deiner
    Malzeiten oder Snacks enthalten Protein?",
    // Question 8 - Input Number
    " An einem typischen Tag: Wie viele deiner
    Malzeiten oder Snacks enthalten
    Gemüse?",
    // Question 9 - Input Number
    "An einem typischen Tag: Wie viele deiner
    Malzeiten oder Snacks enthalten Früchte?",
    // Question 10 - Input Number
    "An einem typischen Tag: Wie viele deiner
    Malzeiten kommen aus der Mikrowelle
    oder sind schon fertig zubereitet?"
);

$ContentHolder_Index = array(
    // Question 1 - Slider 1-5
    0,
    // Question 2 - Radio Ja / Nein
    1,
    // Question 3 - Slider 1-5
    0,
    // Question 4 - Checkboxes 12
    2,
    // Question 5 - Slider 1-5
    0,
    // Question 6 - Input Number
    3,
    // Question 7 - Input Number
    3,
    // Question 8 - Input Number
    3,
    // Question 9 - Input Number
    3,
    // Question 10 - Input Number
    3,
);

$ContentCheckBox = array(
    "Keine zusätzliche körperliche Aktivität",
    "Gewichte heben",
    "Gehen",
    "Wandern",
    "Joggen",
    "Rennen",
    "Schwimmen",
    "Tanzen",
    "Aerobics",
    "Pilates",
    "Team Sport",
    "Andere"
);


$sliderNum = $_SESSION['Question'];



$ContentHolders = array(

    
    // Slider
    "<input type='range' min='1' max='5' 
    value='1' class='slider' id='input' name='slider". $sliderNum+1 ."'>",

    // RadioButton
    "
    <input type='radio' id='input' name='radioBtn'
     value='Ja'> <label for='html'>Ja</label><br>
     
     <input type='radio' id='input' name='radioBtn'
     value='Nein'> <label for='html'>Nein</label><br>",

     // Checkbox x 12
    "<input type='checkbox' name='checkBoxes[]' id='input' ",

    // Numberfield - 1-10
    "
    
        <input type='number' id='input' name='quantity' min='1' 
        max='10'>
        "

    

);

if($CurrentQuestion >= -1 && $CurrentQuestion < 12)
{
    echo "<input type='submit' name='next' id='next' value='Next' /> <br/>";
    //echo "<br>";
    //echo "<input type='submit' name='reset' id='reset' value='Back to Start' />";
    
    
}     


if($CurrentQuestion == -1)
{

    echo "Start" .  "<br>";
}

if($CurrentQuestion >= 0 && $CurrentQuestion  < 10)
{
    echo "Frage: " . $CurrentQuestion+1 . "<br>";

}


//$currentQuestion = $_SESSION['Question'];
if($CurrentQuestion <= 10 )
{
echo "$Questions[$CurrentQuestion]" . "<br>" . "<br>";
}

if($CurrentQuestion == 3 )
{   $indexCheckbox = 0;
    $c = 0;
    foreach ($ContentCheckBox as $CheckBoxvalue)
     {
        echo $ContentCheckBox[$indexCheckbox] . " ";
        echo $ContentHolders[$ContentHolder_Index[$CurrentQuestion]] . "value='$ContentCheckBox[$c]'>" . "<br>" ;
        $indexCheckbox++;
        $c++;


     }  
}
else if($CurrentQuestion <= 10 )
{
    echo $ContentHolders[$ContentHolder_Index[$CurrentQuestion]]. "<br>";
    
}

if($CurrentQuestion == 10 )
{
    
    echo "You have completed the survey! Congratulations!!!";

}


if($CurrentQuestion == 11 )
{


    if($_SESSION['RadioAnswer2'] == null)
    {

        $_SESSION['RadioAnswer2'] = 0;
    }
    
    if($_SESSION['CheckboxAnswer4'] == null)
    {

        $_SESSION['CheckboxAnswer4'] = 0;
    }

    for ($i=1; $i < 11; $i++) { 

        if( $_SESSION['Answer' . $i] == null && $i != 2 && $i != 4)
        {$_SESSION['Answer' . $i] = 0;}
        
    }

    echo "This is the place for all the data". "<br>";
    echo "Answer 1 " . $currentQuestion . ": " . $_SESSION['Answer1']. "<br>";
    echo "Answer 2" . $currentQuestion . ": " . $_SESSION['Answer2']. "<br>";
    echo "Value: " . $_SESSION['RadioAnswer2']. "<br>";
    echo "Answer 3" . $currentQuestion . ": " . $_SESSION['Answer3']. "<br>";
    echo "Answer 4: ";
    foreach($_SESSION['Answer4'] as $arrayvalue)
    {

        echo  $arrayvalue . ", ";
    }
    echo "<br>";
    echo "Value: " . $_SESSION['CheckboxAnswer4']. "<br>";
    echo "Answer 5" . $currentQuestion . ": " . $_SESSION['Answer5']. "<br>";
    echo "Answer 6" . $currentQuestion . ": " . $_SESSION['Answer6']. "<br>";
    echo "Answer 7" . $currentQuestion . ": " . $_SESSION['Answer7']. "<br>";
    echo "Answer 8" . $currentQuestion . ": " . $_SESSION['Answer8']. "<br>";
    echo "Answer 9" . $currentQuestion . ": " . $_SESSION['Answer9']. "<br>";
    echo "Answer 10" . $currentQuestion . ": " . $_SESSION['Answer10']. "<br>";

    
    
}

if($CurrentQuestion == 12 )
{
    
    
    

    $score = $_SESSION['Answer1'] + $_SESSION['RadioAnswer2'] + $_SESSION['Answer3'] + $_SESSION['CheckboxAnswer4'] + $_SESSION['Answer5']
    + $_SESSION['Answer6'] + $_SESSION['Answer7'] + $_SESSION['Answer8'] + $_SESSION['Answer9'] + $_SESSION['Answer10'];

    if($score > 0)
    {
        echo "Dein score ist:" . $score . "<br>";
        echo "<input type='submit' name='reset' id='reset' value='Back to Start' />";

        if($score <= 20)
        {
            echo "<img id='healthimage' src='img/fat.jpg' alt=''>";
            
        }
        else if ($score > 21){

            echo "<img id='healthimage' src='img/healthy.jpg' alt=''>";
        }
    }

    



}


$CurrentQuestion++;
$_SESSION['Question'] = $CurrentQuestion;
/*
$index = 0;
foreach ($Questions as $value) {
    
    echo "$value" . "<br>" . "<br>";
    if($index == 3 )
    {   $indexCheckbox = 0;
        foreach ($ContentCheckBox as $CheckBoxvalue)
         {
             echo $ContentCheckBox[$indexCheckbox] . " ";
            echo $ContentHolders[$ContentHolder_Index[$index]]. "<br>" . "<br>";
            $indexCheckbox++;

         }  
    }
    else
    {
        echo $ContentHolders[$ContentHolder_Index[$index]]. "<br>" . "<br>";
        
    }
    $index++;
  } 
*/
     
    
}















?>