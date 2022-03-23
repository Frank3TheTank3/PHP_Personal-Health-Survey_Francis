<?php
session_start();

$nextQuestion = $_SESSION['Question'];

$_SESSION['GaveQuestion'] = false;

if(array_key_exists('reset', $_POST)) {
    unset($_POST);
    $_POST = array();
    session_unset();
    echo 'Page reset' . "<br>";
    ShowQuestion(-1);
    
}



if(array_key_exists('slider'.$nextQuestion, $_POST)) {

    $range_slider_value = $_POST["slider".$nextQuestion];
    if ($range_slider_value > 1)
    {
    
    $_SESSION['slider'.$nextQuestion] = $range_slider_value;
    $_SESSION['Answer'.$nextQuestion] = $range_slider_value;
    $_SESSION['GaveQuestion'] = true;
    }


    /*
    else
    {

        echo '<script>alert("Feld leer")</script>';
        $_SESSION['GaveQuestion'] = false;
        $_SESSION['Question']--;
        ShowQuestion($nextQuestion-1);
        
    }
    */

}

if(array_key_exists('radioBtn', $_POST)) {

    $radioVal = $_POST["radioBtn"];

    
        $_SESSION['GaveQuestion'] = true;
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
   

    $numberVal = $_POST["quantity"];
    if ($numberVal != null)
    {
        $_SESSION['Answer'.$nextQuestion] = $numberVal;
        $_SESSION['GaveQuestion'] = true;
    
    }
   
    
}


if(isset($_POST['next'])){

    if(!empty($_POST['checkBoxes'])) {
        $_QuestCheck = true;
        $array = array();
        $_SESSION['CheckboxAnswer'.$nextQuestion] = 0;
        foreach($_POST['checkBoxes'] as $value)
        {
           
            array_push($array,$value);
            $_SESSION['CheckboxAnswer'.$nextQuestion]++;

            
        }

        $_SESSION['Answer'.$nextQuestion] = $array;
        $_SESSION['GaveQuestion'] = true;

        
        

    }

}

if(array_key_exists('next', $_POST)) {

    
    if($_SESSION['Question']==0 || $_SESSION['Question']>=11)
    {
        //echo '<script>alert('.$nextQuestion.')</script>';
        //echo '<script>alert("Start")</script>';
        $nextQuestion = $_SESSION['Question'];
        ShowQuestion($nextQuestion);
    }
  
    else if($_SESSION['Question'] > 0 &&  $_SESSION['GaveQuestion'] == true)
    {
        //echo '<script>alert('.$nextQuestion.')</script>';
        $nextQuestion = $_SESSION['Question'];
        ShowQuestion($nextQuestion);
    }
    else if($_SESSION['Question'] > 0 &&  $_SESSION['GaveQuestion'] == false)
    {
        echo '<script>alert("Feld leer")</script>';
        $_SESSION['GaveQuestion'] = false;
        $_SESSION['Question']--;
        ShowQuestion($nextQuestion-1);  
    }

    
}






?>