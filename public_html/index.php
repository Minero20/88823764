<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
        $number = $_POST['number'];
        if(isset($_POST['submit'])) 
        {
            include 'vars.php';
            $analysis = new Time();
            $analysis->set_number($number);
        }
        if (isset($_POST['clear'])) 
        {
            $number = "";
        } 
        ?>   
        <h2> HTML Forms Input and Display in PHP </h2>
        <form method="post">
        <p>number: <input type="number" name="number" value="<?php echo $number; ?>" autofocus> &nbsp;&nbsp;&nbsp;
        <input type="submit" name="submit" value="Submit" /> &nbsp;&nbsp;&nbsp;
        <input type="submit" name="clear" value="Clear" />
        </form>
        <?php $analysis->Display_Time(); ?>
    </body>
</html>