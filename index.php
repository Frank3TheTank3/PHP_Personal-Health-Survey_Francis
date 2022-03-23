<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Health Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>


<body data-bs-spy="scroll" data-bs-target=".navbar">

<?php include 'inc/headger.php';?>

<section id="home">

    <div class="container text-center">

        <div id="outerVideoHolder">
            <video autoplay muted loop>
            <source src="vid/vid1.mp4" type="video/mp4">
            </video>
        </div>

        <?php 
        include 'inc/questions.php';
        ?>

        <div id="questionsHolder" class="container text-center">
            <form method='post'>


            <p>
            <?php include 'inc/checker.php';?>
            </p>

            </form>
        </div>


    </div>

</section>

<?php include 'inc/footer.php';
$CurrentQuestion = $_SESSION['Question'];

?>



<script src="js/functions.js">


    if($CurrentQuestion <12)
    {
        RemoveImage();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>