<?php

    $conn = mysqli_connect('localhost:3306', 'debian-sys-maint', 'Bamo0jocYUM0NHKo', 'banco');

    if(!$conn){
        die("Could not connect to the database due to the following error -->".mysqli_connect_error());
    }
?>