<?php 
    include("./bd-connect.php");

    $search = '';
    if (isset($_GET) && $_GET && $_GET['search']){
        $search = $_GET['search'];
        $sql = "SELECT * FROM `produit` WHERE `titre` LIKE '%" . $_GET['search'] . "%' or `description` LIKE '%" . $_GET['search'] . "%';";
    }else {
        $sql = "SELECT * FROM `produit`";
    }

    $result = $conn->query($sql);
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Produit</title>
    
</head>
<body>
<?php include("./Nav.php")?>
<section>
<br><br><br><br></section>
<section>
        <form  method="get">
        <label for="search">Search</label>
        <input type="text" name="search" id="search" placeholder="Search" value="<?= $search ?>">
        <input type="submit" value="Search"/>
    </form>
</section>
<section class="products" id="products">
    <style>
form{
    flex: 1 1 40rem;
    padding: 2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1) ;
    border: .1rem solid rgba(0, 0, 0, .1);
    background: #fff;
    border-radius: .5rem;
    grid-template-columns:0.4fr 0.0fr;
}
label{
    padding: 1rem;
    font-size: 1.7rem;
    color: #347934;
}

input{
    padding: 1rem;
    font-size: 1.7rem;
    color: #333;
    text-transform: none;
    border: .1rem solid rgba(0, 0, 0, .1);
    border-radius: .5rem;
    margin: .7rem 0;
}
</style>

        <h1 class="heading">latest <span>products</span></h1>
        <div class="box-container">
        
        <?php 
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="<?= $row["image"] ?>" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                
                <div class="content">
                    <h3><?= $row["titre"] ?></h3>
                    <div class="price"><?= $row["prix"] ?> <span>$15.99</span></div>
                </div>
            </div>
            <?php }
            } else {
                echo "0 results";
            }
        ?>



</section>
</body>
</html>