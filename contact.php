<?php
    if (isset($_POST) && $_POST){
        include_once("bd-connect.php");

        $sql = "INSERT INTO `contact` (`nom`, `email`,`number`, `message`) 
        VALUES ('" . $_POST['nom'] . "', '" . $_POST['email'] . "','" . $_POST['number'] . "', '" . $_POST['message'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("./nav.php")?>
    <br><br><br><br><br><br>
<section class="contact" id="contact">
        <h1 class="heading"><span>contact </span> us</h1>
        <div class="row">
            <form action=""  method="post">
                <input type="text" name="name" placeholder="name" class="box">
                <input type="email" name="email" placeholder="email" class="box">
                <input type="number" name="number" placeholder="number" class="box">
                <textarea name="message" class="box" placeholder="message" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
            <div class="image">
            <img src="echeyeb.jpg" alt="">
        </div>
        </div>

</section>


    
</body>
</html>