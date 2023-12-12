<header>
    <a href="http://localhost/plante/index.php?" class="logo"><span>V</span>ert <span>U</span>nivers </a>
    <nav class="navbar">
        <a href="http://localhost/plante/index.php?">home</a>
        <a href="http://localhost/plante/index.php?#about">about</a>
        <a href="http://localhost/plante/produit.php?">products</a>
        <a href="http://localhost/plante/index.php?#services">services</a>
        <a href="http://localhost/plante/contact.php?">contact</a>
    </nav>
    <div class="icons">
        
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="http://localhost/plante/login.php" class="fas fa-user"></a>
        <a href="http://localhost/plante/signup.php" class="fas fa-plus"></a>
    </div>
</header>
<style>
    :root{
   --green:#808000;
}
*{
    margin: 0;padding: 0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline:none ;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
html{
   font-size: 62.5%; 
   scroll-behavior: smooth;
   scroll-padding-top: 6rem ;
   overflow-x: hidden;
}
section{
    padding: 2rem 9%;
}
.heading{
    text-align: center;
    font-size: 4rem;
    color: #333;
    padding: 1rem;
    margin: 2rem;
    background: rgba(255, 51, 153, .05);
}
.heading span{
    color: var(--green);
}
.btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background: #333;
    color:#fff;
    padding: .9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
}
.btn:hover{
    background: var(--green);
}
header{
    position: fixed;
    top: 0; left: 0; right: 0;
    background: #d7f5d7;
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
}
header .logo{
    font-size: 3rem;
    color: #333;
    font-weight: bolder;
}
header .logo span{
    color: var(--green);
}
header .navbar a{
    font-size: 2rem;
    padding: 0 1.5rem;
    color: #666;
}
header .navbar a:hover{
    color: var(--green);
}
header .icons a{
    font-size: 2.5rem;
    color: #333;
   

}
header .icons a:hover{
    color: var(--green);
}
.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background: url(zizi.jpg);
    background-size: cover;
    background-position: center;
} 
.home .content{
    max-width: 50rem;
}
.home .content h3{
    font-size:6rem ;
    color: #333;
}
.home .content span{
    font-size: 3.5rem;
    color: var(--green);
    padding: 1rem 0;
    line-height: 1.5;
}
.home .content p{
    font-size: 1.5rem;
    color: #999;
    padding: 1rem 0;
    line-height: 1.5;
}
.about .row{
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    padding: 2rem;
    padding-bottom: 3rem;

}
.about .row .video-container{
    flex: 1 1 40rem;
    position: relative;
}
.about .row .video-container video{
    width: 100%;
    border: 1.5rem solid #fff;
    border-radius: .5rem;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    height: 100%;
    object-fit: cover;

}
.about .row .video-container h3{
    position: absolute;
    top: 50%; transform: translateY(-50%);
    font-size: 3rem;
    background: #fff;
    width: 100%;
    padding: 1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;


}
.about .row .content{
    flex: 1 1 40rem;
}
.about .row .content h3{
    font-size: 3rem;
    color: #333;
}
.about .row .content p{
    font-size: 1.5rem;
    color: #999;
    padding-top: 1rem;
    line-height: 1.5;
}
.icons-container{
    background: #eee;
    display: flex;
    flex-wrap:wrap;
    gap: 1.5rem;
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    background: #fff;
    border: 1rem solid rgba(0, 0, 0, .1);
    padding: 2rem;
    display: flex;
    align-items: center;
    flex: 1 1 25rem;

}
.icons-container .icons img{
   height: 5rem;
   margin-right: 2rem; 
}
.icons-container .icons h3{
    color: #333;
    padding-bottom: .5rem;
    font-size: 1.5rem;
}
.icons-container .icons span{
    color: #555;
    padding-bottom: .5rem;
    font-size: 1.3rem;
}
.products .box-container{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;

}
.products .box-container .box{
    flex: 1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    border-radius: .5rem;
    border: .1rem solid rgba(0, 0, 0, .1);
    position: relative;

}
.products .box-container .box .discount{
    position: absolute;
    top: 1rem;left: 1rem;
    padding:  .7rem 1rem;
    font-size: 2rem;
    color: var(--green);
    background: rgba(255, 51, 153, .05);
    z-index: 1;
    border-radius: .5rem;
}
.products .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 2rem;
    overflow: hidden;
}
.products .box-container .box .image img{
    height: 25rem;
}
.products .box-container .box:hover .image img{
    transform: scale(1.1);
}
.products .box-container .box .image .icons{
    position: absolute;
    bottom: -7rem;left: 0;right: 0;
    display: flex;

}
.products .box-container .box:hover .image .icons{
    bottom: 0;
}
.products .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width: 50%;
    background: var(--green);
    color: #fff;

}
.products .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid#fff7;
    border-right: .1rem solid#fff7;
    width: 100%;
}
.products .box-container .box .image .icons a:hover{
    background: #333;
}
.products .box-container .box .content{
    padding: 2rem;
    text-align: center;
}
.products .box-container .box .content h3{
    font-size: 2.5rem;
    color: #333;
}
.products .box-container .box .content .price{
    font-size: 2.5rem;
    color: var(--green);
    font-weight: bolder;
    padding-top: 1rem;
}
.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color: #999;
    font-weight: lighter;
    text-decoration: line-through;
}
.contact .row{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    
   
}
.contact .row form{
    flex: 1 1 40rem;
    padding: 2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1) ;
    border: .1rem solid rgba(0, 0, 0, .1);
    background: #fff;
    border-radius: .5rem;
}
.contact .row .image{
    flex: 1 1 40rem;
}
.contact .row .image img{
    width: 100%;
}
.contact .row form .box{
    padding: 1rem;
    font-size: 1.7rem;
    color: #333;
    text-transform: none;
    border: .1rem solid rgba(0, 0, 0, .1);
    border-radius: .5rem;
    margin: .7rem 0;
}
.contact .row form .box:focus{
    border-color: var(--green);
}
.contact .row form textarea{
    height: 15rem;
    resize: none;
}
</style>