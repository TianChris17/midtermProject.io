<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="author" content="Christian Bernardino">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CLothing</title>

    <link rel="stylesheet" href="./CSS/clothingPage.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>


    <div class="header-container">

        <header class="header-class">

            <div class="brand-container">
                <h1>Fashion Forward Apparel</h1>
            </div>

            <div class="nav-container">
                <nav>
                    <a href="./indexDuplicate.php">HOME</a>

                    <a href="./clothing.php">CLOTHING</a>

                    <a href="./SERVER/logoutDB.php">> LOG OUT</a>
                </nav>
            </div>

        </header>

    </div>
    <div class="listProduct">

        <form class="item1" action="./SERVER/dataBase.php" method="$_POST">

            <img id="image1" src="https://www.dad-from-mnl.com/cdn/shop/files/IMG_5456.jpg?v=1696398684&width=1946" alt="Balenciaga">

            <h2 id="name">Balenciaga</h2>

            <p id="price">$1850</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item2" action="./SERVER/dataBase.php" method="post">

            <div class="item2">

                <img src="https://cdn.salla.sa/QlNNV/JPGOZ64JstAO9ueHJJWZkbocPuReeUNVola11lLZ.jpg" alt="Balenciaga">

                <h2 id="name">Balenciaga</h2>

                <p id="price">$1760</p>

                <label for="quantity">
                    <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
                </label>
                
                <br>

                <button type="submit" id="addCart">Add to cart</button>
            
            </div>
            
        </form>

        <form class="item3" action="./SERVER/dataBase.php" method="$_POST">

            <img src="https://media.karousell.com/media/photos/products/2023/3/17/balenciaga_tshirt_1679075233_8b3dd54d_progressive.jpg" alt="Balenciaga">

            <h2 id="name">Balenciaga</h2>

            <p id="price">$1999</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item4" action="./SERVER/dataBase.php">

            <img src="https://cdn.salla.sa/QlNNV/1y7pwbXYiw0NKpnbSbUvHxmaPDdMGCUK4BJGVwbZ.jpg" alt="Balenciaga">

            <h2 id="name">Balenciaga</h2>

            <p id="price">$1890</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item5" action="./SERVER/dataBase.php">


            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/J/T/1708004853_H_24_2_LOOK_030_E07_GHC.jpg?imwidth=1920" alt="Christian Dior Couture">

            <h2 id="name">Christian Dior Couture</h2>

            <p id="price">$2111</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item6" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/Q/F/1706719703_H_24_2_LOOK_016_E07_GHC.jpg?imwidth=1920">

            <h2 id="name">Christian Dior Couture Relaxed-Fit T-Shirt</h2>

            <p id="price">$2000</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item7" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/i/G/1706712460_H_24_2_LOOK_020_E07_GHC.jpg?imwidth=1920" alt="Dior Oblique Polo Shirt">

            <h2 id="name">Dior Oblique Polo Shirt</h2>

            <p id="price">$2500</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item8" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/w/g/1708692497_H_24_2_LOOK_068_E07_GHC.jpg?imwidth=1920" alt="CD Icon Relaxed-Fit T-Shirt">

            <h2 id="name">CD Icon Relaxed-Fit T-Shirt</h2>

            <p id="price">$2234</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item9" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/4/3/1700682427_H_24_1_LOOK_110_E07_GHC.jpg?imwidth=1920">

            <h2 id="name">Christian Dior Couture Relaxed-Fit T-Shirt</h2>

            <p id="price">$2035</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item10" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/x/2/1700682434_H_24_1_LOOK_111_E07_GHC.jpg?imwidth=1920">

            <h2>Christian Dior Oversized T-Shirt</h2>

            <p id="price">$3245</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item11" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/e/z/1706719633_H_24_2_LOOK_011_E01_GHC.jpg?imwidth=1920">

            <h2 id="name">Christian Dior Cardigan</h2>

            <p id="price">$2500</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item12" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/z/J/1698255929_H_24_1_LOOK_029_E07_GHC.jpg?imwidth=1920" alt="Christian Dior Relaxed-Fit Long-Sleeved T-Shirt">

            <h2 id="name">Christian Dior Relaxed-Fit Long-Sleeved T-Shirt</h2>

            <p id="price">$2399</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item13" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/D/H/1703000842_H_24_1_LOOK_064_E07_GHC.jpg?imwidth=1920" alt="Christian Dior Round-Neck Sweater">

            <h2 id="name">Christian Dior Round-Neck Sweater</h2>

            <p id="price">$3000</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item14" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/2/H/1698241597_H_24_1_LOOK_002_E01_GHC.jpg?imwidth=1920" alt="Christian Dior Sleeveless Sweater">

            <h2 id="name">Christian Dior Sleeveless Sweater</h2>

            <p id="price">$2999</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item15" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/H/N/1698248829_H_24_1_LOOK_024_E10_GHC.jpg?imwidth=1920" alt="Christian Dior Couture Hooded Sweatshirt">

            <h2 id="name">Christian Dior Couture Hooded Sweatshirt</h2>

            <p id="price">$2999</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item16" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/w/n/1699534016_H_24_1_LOOK_005_E07_GHC.jpg?imwidth=1920" alt="Regular-Fit Sweater with Stand Collar">

            <h2 id="name">Regular-Fit Sweater with Stand Collar</h2>

            <p id="price">$3500</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item17" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/9/B/1694191515_H_23_4_LOOK_019_E01_GHC.jpg?imwidth=1920" alt="Christian Dior Couture Cardigan">

            <h2>Christian Dior Couture Cardigan</h2>

            <p id="price">$3500</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item18" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/r/X/1682681565_293M832AT396_C580_E11_GHC.jpg?imwidth=1920" alt="Dior Oblique Polo Shirt">

            <h2 id="name">Dior Oblique Polo Shirt</h2>

            <p id="price">$3000</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item19" action="./SERVER/dataBase.php">

            
            <img src="https://www.dior.com/couture/var/dior/storage/images/folder-media/folder-productpage/folder-crossselllook/folder-homme/folder-summer-24/folder-w2/block-h_24_2_look_061/43350520-1-eng-GB/h_24_2_look_061.jpg?imwidth=1920" alt="Christian Dior Bermuda Shorts">

            <h2 id="name">Christian Dior Bermuda Shorts</h2>

            <p id="price">$2000</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

        <form class="item20" action="./SERVER/dataBase.php">

            <img src="https://www.dior.com/couture/ecommerce/media/catalog/product/h/P/1706716055_H_24_2_LOOK_032_E01_GHC.jpg?imwidth=1920" alt="Cannage Jacket">

            <h2 id="name">Cannage Jacket</h2>

            <p id="price">$3999</p>

            <label for="quantity">
                <input type="number" id="quantity" name="quantity" placeholder="Quantity" min="0">
            </label>

            <br>

            <button type="submit" id="addCart">Add to cart</button>

        </form>

    </div>

    <div class="footer-container">

        <footer>

            <div class="address-section">

                <h3>ADDRESS</h3>
    
                <p>#213 Bangkok Ave. Bonifacio Global City, Fort Bonifacio Taguig City </p>
    
            </div>
    
            <div class="email-section">
    
                <h3>EMAIL</h3>
    
                <p>fashionForwardApparel@gmail.com</p>
    
            </div>
    
            <div class="telephone-section">
    
                <h3>TELEPHONE</h3>
    
                <p>(07) 111-701</p>
    
            </div>
    
            <div class="socmed-container">
    
                <img src="./images/facebook.png" alt="facebook icon">
    
                <img src="./images/instagram.png" alt="instagram icon">
                
                <img src="./images/tik-tok.png" alt="tiktok icon">
    
                <img src="./images/youtube.png" alt="youtube icon">
    
            </div>

        </footer>

        <div class="copyright-container">
    
            <p>Copyrights © 2024 Fashion Forward Apparel. All Rights Reserved.</p>

        </div>

    </div>
    
</body>
</html>