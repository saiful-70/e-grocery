<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- icon font -->
    <script src="https://use.fontawesome.com/c0bbe922da.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-grocery</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Otomanopee+One&display=swap" rel="stylesheet">
<!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- stylesheet -->
        <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>

    <!-- Nav Bar -->
    <div class="container-fluid">
        <div class="row">
            <nav class="nav">
                <div class="col col-md-3 logo">
                <a href="#"><span>e</span>-Grocery</a>
                </div>
                <div class="col col-md-9">
                    <ul class="nav-bar">
                        <li class="navbar__item"> <a href="#" class="navbar__item--link"> Home </a> </li>
                        <li class="navbar__item"> <a href="#services" class="navbar__item--link"> Services </a> </li>
                        <li class="navbar__item"> <a href="#products" class="navbar__item--link"> Products </a> </li>
                        <li class="navbar__item"> <a href="#about" class="navbar__item--link"> About </a> </li>
                        <li class="navbar__item"> <a href="#contact" class="navbar__item--link"> Contact </a> </li>
                        <?php 
                            unset($_SESSION['count']);
                            $verify = 0;
                            $destroySessionFlag = filter_input(INPUT_POST, 'destroySession');
                            if ($destroySessionFlag == 1) {
                                session_destroy();
                                header("Location: index.php");
                                exit();
                            }
                            if(isset($_SESSION["username"])) {
                                $verify = 1;
                                echo '<li class="navbar__item">';
                                echo    '<a href="#" class="navbar__item--link">' . $_SESSION["username"] . '</a>';
                                echo '</li>';

                                echo '<li class="navbar__item">';
                                echo '<form action="" method="POST">';
                                    echo '<input type="hidden" name="destroySession" value="1">';
                                    echo '<input type="submit" value="Log out" class="btn-logout"/>';
                                echo '</form>';
                                echo '</li>';
                                
                            } else {
                                echo '<li class="navbar__item">';
                            echo '<a href="login.php" class="navbar__item--link"> Login </a>';
                        echo '</li>';
                        echo '<li class="navbar__item" >';
                            echo '<a href="admin" class="navbar__item--link" target="_blank"> Admin? </a>';
                        echo '</li>';
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- modal start -->
    <div class="cart" id="cart" data-toggle="modal" data-target="#cart-modal">
            <div class="cart-items" id="cart-items">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <br>
                <span>0 items</span>
            </div>
            <div class="cart-price" id="cart-price">
                <span>৳ 0</span>
            </div>
        </div>

    <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Selected Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Quantity</th>
            <th scope="col">Product Price</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody id="modal-tbody">

        </tbody>
      </table>
      </div>
      <div class="modal-footer">
      <a href="order.php" type="button" class="btn-logout">Confirm Order</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->

    <header class="header">
        <h1 class="heading-primary">
            <span class="head-span">
                <i class="fa fa-check-circle" aria-hidden="true"></i> Meats & Fish.
            </span>
            <span class="head-span"><i class="fa fa-check-circle" aria-hidden="true"></i>
                Groceries.</span>
            <span class="head-span"><i class="fa fa-check-circle" aria-hidden="true"></i>
                Vegetables.</span>
            <span class="head-span"><i class="fa fa-check-circle" aria-hidden="true"></i> Fruits.</span>
            <?php
            if( $verify === 0)
            {
                echo "<a href='register.php' class='btn' target='_blank'>
                Sign Up Now </a>";
            }
            else 
            {
                echo "<a href='#' class='btn' >
                Sign Up Now </a>";
            }
           
            ?>
        </h1>
    </header>
    <div class="fluid-container responsive">
                                    <!-- Services -->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading-secondary">
                        Our Services
                    </h2>
                </div>
            </div>
    
            <div class="row d-flex justify-content-between">
                <div class="col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <h3 class="heading-tirtiary">
                            Fastest Delivery
                        </h3>
                        <p class="para-1 text-center">
                            Just order your products and sit back. You will receive your products in one hour.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <h3 class="heading-tirtiary">
                            Home Delivery
                        </h3>
                        <p class="para-1 text-center">
                            You will get your order in your home by only one hour with some little charges.
                        </p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box">
                        <div class="box-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <h3 class="heading-tirtiary">
                            Pick Up Point
                        </h3>
                        <p class="para-1 text-center">
                            Recieve your products in your nearest pick up point, there is no delivery charge.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="products h-100" id="products">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="heading-secondary">
                        Popular Products
                    </h2>
                </div>
            </div>

            <div class="row">
            <?php
                    // Include config file
                    require_once "./admin/config.php";
                    // Attempt select query execution
                    $sql = "SELECT * FROM products limit 4";
                    if($result = mysqli_query($link, $sql)) {
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_array($result)){
                                echo '<div class="col-md-3">';

                                    echo '<div class="product-card">';

                                        echo '<img src="./admin/uploads/products/' . $row['image'] . '" alt="' . $row['image']. '" class="product-image">';

                                        echo '<h5 class="product-name" id="product-name">'. $row['name']. '</h5>';

                                        echo '<h6 class=""> <span class="product-price" id="product-price">&#2547; ' . $row['price']. '</span>/'. $row['unit'] .'</h6>';

                                        echo '<p class="product-description">'. $row['description'] .'</p>';

                                        echo '<div class="product-qty">
                                        <label for="qty">Quantity : </label>
                                        <input type="number" id="product-qty" name="qty" value="1" />
                                        </div>';

                                        echo '<button type="button" class="btn-product" id="add-item">
                                        Add to Cart <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </button>';

                                    echo '</div>';

                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="products.php" class="btn" target="_blank">
                        Order More...
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2 class="heading-secondary">
                        Who We Are
                    </h2>
                </div>
            </div> 

            <div class="row d-flex justify-content-center">

                <div class="col-md-2">
                    <div class="person">
                        <img class="person-image" src="./images/avatar/rakib.jpg" alt="rakib">
                        <div class="person-body">
                            <h4 class="heading-4 font-weight-bold">
                                Rakib Uddin
                            </h4>
                            <p>
                                Department of ICT, <br> Comilla University
                            </p>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/profile.php?id=100021893520734"  target = "_blank"class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" target = "_blank" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" target = "_blank" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2">
                    <div class="person">
                        <img class="person-image" src="./images/avatar/saiful.jpeg" alt="saiful">
                        <div class="person-body">
                            <h4 class="heading-4 font-weight-bold">
                                Saiful Islam
                            </h4>
                            <p>
                                Department of ICT, <br> Comilla University
                            </p>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/saiful70.me/" target = "_blank" class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="person">
                        <img class="person-image" src="./images/avatar/babu.jpg" alt="babu">
                        <div class="person-body">
                            <h4 class="heading-4 font-weight-bold">
                                Saheb Babu Sheikh
                            </h4>
                            <p>
                                Department of ICT, <br> Comilla University
                            </p>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/saheb.babu.921230" target = "_blank" class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="person">
                        <img class="person-image" src="./images/avatar/imran.jpg" alt="imran">
                        <div class="person-body">
                            <h4 class="heading-4 font-weight-bold">
                                Mahmud Imran
                            </h4>
                            <p>
                                Department of ICT, <br> Comilla University
                            </p>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/mahmud.imran.90834" target = "_blank" class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="person">
                        <img class="person-image" src="./images/avatar/shuvo.jpg" alt="shuvo">
                        <div class="person-body">
                            <h4 class="heading-4">
                                Ahad Hossain
                            </h4>
                            <p>
                                Department of ICT, <br> Comilla University
                            </p>
                            <ul class="social">
                                <li class="social-item"><a href="https://www.facebook.com/shuvo.user22" target = "_blank" class="social-link"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="social-item"><a href="#about" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    

    <footer class="footer" id="contact">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 offset-md-3">
                    <div>
                        <h3 class="heading-4 footer-heading">
                            Contact With Us
                        </h3>
                        <ul>
                            <li> <i class="fa fa-envelope"></i> saiful70.me@gmail.com</li>
                            <li><i class="fa fa-phone"></i> 01689740070 </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">

                    <div>
                        <h3 class="heading-4 footer-heading">
                            Social Links
                        </h3>
                        <ul>
                            <li><i class="fa fa-facebook"></i> Facebook</li>
                            <li><i class="fa fa-instagram"></i> Instragram</li>
                            <li><i class="fa fa-youtube"></i> Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>

        <div class="footer-line m-4"></div>

        <div class="copy-right text-center">
            All rights reserved &copy;<a href="https://github.com/saiful-70/" class="text-success" target="_blank">E-grocery's</a> team, 2023.
        </div>

        </div>

    </footer>

    <script src="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>