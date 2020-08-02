<?php
    if($_POST['agree']==="on") {
        header('Location:../instructions/instructions.php');
    }
    else { //if the subject clicks "don't agree" or doesn't click a thing
        header('Location:../index/index.php');
    }
?>