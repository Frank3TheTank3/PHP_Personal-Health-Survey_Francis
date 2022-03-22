<?php
session_start();


if(array_key_exists('reset', $_POST)) {
    unset($_POST);
    $_POST = array();
    session_unset();
    echo 'Page reset' . "<br>";
    ShowQuestion(-1);
    
}






if(array_key_exists('slider'.$nextQuestion, $_POST)) {

   
    $range_slider_value = $_POST["slider".$nextQuestion];
    $_SESSION['slider'.$nextQuestion] = $range_slider_value;
    $_SESSION['Answer'.$nextQuestion] = $range_slider_value;

}

if(array_key_exists('radioBtn', $_POST)) {

    $radioVal = $_POST["radioBtn"];

    if($radioVal == "Ja")
    {
        $_SESSION['Answer'.$nextQuestion] = $radioVal;
        $_SESSION['RadioAnswer'.$nextQuestion] = 5;
    }
    else if ($radioVal == "Nein")
    {
        $_SESSION['Answer'.$nextQuestion] = $radioVal;
        $_SESSION['RadioAnswer'.$nextQuestion] = 0;
    }
}

if(array_key_exists('quantity', $_POST)) {
    if($_POST['quanitity'] == null)
    {

    $numberVal = $_POST["quantity"];
    $_SESSION['Answer'.$nextQuestion] = $numberVal;
    }
    
}

if(isset($_POST['next'])){

    
       
        
    $nextQuestion = $_SESSION['Question'];
    ShowQuestion($nextQuestion);






        

        
        

    }





    



/*

function ToNextPage()
{

    
}

 if($nextQuestion == 0)
        {ToNextPage();}

        if(!empty($_POST['checkBoxes'])) {
        $array = array();
        $_SESSION['CheckboxAnswer'.$nextQuestion] = 0;
        foreach($_POST['checkBoxes'] as $value)
        {
           
            array_push($array,$value);
            $_SESSION['CheckboxAnswer'.$nextQuestion]++;  
        }
        $_SESSION['Answer'.$nextQuestion] = $array;
        }


        if(!empty($_POST['slider']))
        {
            if(array_key_exists('slider'.$nextQuestion, $_POST) != null)
            {
                ToNextPage();
            }
            else
            {
                echo '<script>alert("Nichts ist ausgewählt")</script>';
    
            }
        }
       
        if(!empty($_POST['radioBtn']))
        {
            if(array_key_exists('radioBtn'.$nextQuestion, $_POST) != null)
            {
                ToNextPage();
            }
            else
            {
                echo '<script>alert("Nichts ist ausgewählt")</script>';
    
            }
        }
        if(!empty($_POST['quantity']))
        {
            if(array_key_exists('quantity'.$nextQuestion, $_POST) != null)
            {
                ToNextPage();
            }
            else
            {
                echo '<script>alert("Du hast nichts eingegeben")</script>';
    
            }
        }
        if(!empty($_POST['checkboxes']))
        {
            
                ToNextPage();
        }
        else
        {
            echo '<script>alert("Keine Checkbox ausgewählt)</script>';

        }
*/

?>