<?php 
    $title = "If Statement";
    include 'includes/header.php'     
?>

    <h1><?php echo $title ?></h1>
    
    <?php
    
    // An If statement that will carry out an action based on the value of the variable,
    
    echo '<h2>If Statement</h2>';

    $grade = 34;
    // ===, ==, >, <, <=, >= 
    if($grade >= 50){
        echo '<h2 style="color: green">YOU HAVE PASSED</h2>';
    }
    else {
        echo '<h2 style="color: red">YOU HAVE FAILED</h2>';           
    }
    $grade = 'Bads';
    // If-Else If-Else
    if ($grade == 'A') {
        echo '<h3 style="color: red">YOU ARE A SUPERSTAR!</h3>'; 
    }
    elseif ($grade == 'B') {
        echo '<h3 style="color: green">YOU DID WELL!</h3>'; 
    }
    else {
        echo '<h3 style="color: blue">YOU HAVE FAILED....</h3>';
    }
    ?>
<?php require 'includes/footer.php' ?>