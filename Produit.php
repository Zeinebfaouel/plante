<?php 
    include("./bd-connect.php");

    $search = '';
    if (isset($_GET) && $_GET && $_GET['search']){
        $search = $_GET['search'];
        $sql = "SELECT * FROM `produit` WHERE `title` LIKE '%" . $_GET['search'] . "%' or `description` LIKE '%" . $_GET['search'] . "%';";
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
<section class="products" id="products">
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



            <!--

            <div class="box">
                <span class="discount">-15%</span>
                <div class="image">
                    <img src="e.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-5%</span>
                <div class="image">
                    <img src="i.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <span class="discount">-20%</span>
                <div class="image">
                    <img src="n.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-19%</span>
                <div class="image">
                    <img src="e2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-3%</span>
                <div class="image">
                    <img src="e2.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <span class="discount">-18%</span>
                <div class="image">
                    <img src="i.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="z.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>

            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src="e.jpg" alt="">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>flower pot</h3>
                    <div class="price">$12.99 <span>$15.99</span></div>
                </div>
            </div>
        </div>-->
</section>
</body>
</html>