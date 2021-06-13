<?php 
    $title = "Home";
    include 'includes/header.php'     
?>

    <!-- comment -->
    <h1><?php echo $title ?></h1>

    <?php 
        /*
        comment
        */
        // Printing to HTML using echo 
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line!';
        echo '<br/>';

        // declare variable
        $name = 'Adrian Antosiak';
        $age = 26;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: ' .$name.' </h1>';
        // shift + opt + down/up
        echo '<h1>My Age Is: ' .$age.' </h1>';
        
        echo "<h1>My Age Is: $age </h1>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>


<?php require 'includes/footer.php' ?>