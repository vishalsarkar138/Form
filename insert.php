<?php
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con)
    {
        echo 'Not Connected to Server';
    }
    if(!mysqli_select_db($con,'courier'))
    {
        echo 'Database not Found';
    }
    $ship_name = $_POST['ship_name'];
    $ship_phone = $_POST['ship_phone'];
    $ship_add = $_POST['ship_add'];
    $rev_name = $_POST['rev_name'];
    $rev_phone = $_POST['rev_phone'];
    $rev_add = $_POST['rev_add'];
    $type_of_ship = $_POST['type_of_ship'];
    $ship_weight = $_POST['ship_weight'];
    $ship_qty = $_POST['ship_qty'];
    $book_mode =$_POST['book_mode'];
    $book_date =$_POST['book_date'];
    $freight = $_POST['freight'];
    $ship_mode = $_POST['ship_mode'];
    $pick_date = $_POST['pick_date'];
    $pick_time = $_POST['pick_time'];
    $comments = $_POST['comments'];



    $sql = "INSERT INTO trans_courier (ship_name,ship_phone,ship_add,rev_name,rev_phone,rev_add,type_of_ship,ship_weight,ship_qty,book_mode,book_date,freight,ship_mode,pick_date,pick_time,comments) VALUES ('$ship_name','$ship_phone','$ship_add','$rev_name','$rev_phone','$rev_add','$type_of_ship','$ship_weight','$ship_qty','$book_mode','$book_date','$freight','$ship_mode','$pick_date','$pick_time','$comments')";
    if(!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        echo 'Values Inserted';
    }
    header("refresh:4; url=Form.html");
?>