<?php 
    $title = "String Manip";
    include 'includes/header.php'     
?>
    <h1><?php echo $title ?></h1>
        <?php
            $phrase1 = "student who came late";
            $phrase2 = "in class, stand with Rock";
            $name = "adrian antosiak";
            echo $phrase1 . ", named Tiffany, " . $phrase2;
            echo '</br>';
            echo '<hr/>';
            // String Transformation
            echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
            echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
            echo 'Upper case: ' . strtoupper($name) . '<br/>';
            echo 'Lower case: ' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
            echo '<hr/>';
            echo 'Repeat String: ' . str_repeat('a', 10) .'<br/>';
            echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
            echo 'Get a Substring: ' . substr($name, 5, 10).'<br/>'; 
            
            echo 'Get position of string: ' . strpos($name, 'a') . '<br/>';
            // Returns NULL
            // echo 'Get position of string: ' . strpos($combine, 'z') . '<br/>;
            echo 'Find Character "A": ' . strchr($name, 'A') . '<br/>';
            echo 'Find Character "d": ' . strchr($name, 'd') . '<br/>';
            echo 'Find Character "n": ' . strchr($name, 'n') . '<br/>';
            echo 'Find Character "a": ' . strchr($name, 'a') . '<br/>';

            echo 'Find Length of String: ' . strlen($name) . '<br/>';

            echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
            echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
            echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';

            echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';
        ?>
<?php require 'includes/footer.php' ?>