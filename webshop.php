<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webshop</title>
    <link rel="stylesheet" href="assets/css/webshop.css" />
</head>

<body>
    <div class="container">
        <div id="header">
            <span id="h-txt">Webshop</span><span id="h-punt">.</span>
            <div id="verstreep1"></div>
            <a href="">
                <p id="acount-balk">Acount</p>
            </a>
            <a href="">
                <p id="winkelwagen">Winkel<br />wagen</p>
                <p></p>
            </a>
            <img id="headerimg" src="assets/images/milky-way-full-stars-space.jpg" alt="" />
        </div>
        <div id="content">
            <div id="top-right">
                <span id="planeten-h">Planeten</span>
            </div>
            <div id="hrright"></div>
            <style>
            a{
              text-decoration: none;
              color: black;
              }
            
            .product-flex-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                align-items: center;
                gap: 1.5rem;
                margin-top: 1rem;
            }

            .product-card {
                /* background-color: rgb(210, 210, 210); */
                max-height: 300px;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
                font-weight: bold;
            }

            .img {
                max-height: 280px;
                max-height: 200px;
                margin-top: 1rem;
            }

            @media screen and (max-width: 768px) {
                .product-flex-container {
                    grid-template-columns: repeat(1, 1fr);
                }
            }

            @media screen and (max-width: 480px) {
                .product-flex-container {
                    grid-template-columns: 1fr;
                }
            }
            </style>
            <div class="product-flex-container">
                <?php include 'connect.php';

try {
    $stmt = $conn->query("SELECT id, product, price, img FROM productdata");
    
    while ($row = $stmt->fetch()) {
        echo '<a href="detail.php?id='.$row['id'].'"><div class="product-card">';
        echo '<img class="img" src="'. $row['img'].' "> <br>';
        echo $row['product'].'<br> €'.$row['price']. '<br>' . "\n";
        echo '</div></a>';
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

            </div>
            <!-- <div class="row1">
          <div class="kaart1">
            <img
              class="imgk1"
              src="assets/images/planet-jupiter-vector-11088916.jpeg"
              alt="jupiter"
            /><br />
            <a href="assets/hmtl/jupiter1.html"
              ><br /><span class="k1txt">Jupiter(1)</span></a
            >
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;28,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart2">
            <img
              class="imgk1"
              src="assets/images/planet-jupiter-vector-11088916.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Jupiter(2)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;49,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart3">
            <img
              class="imgk1"
              src="assets/images/planet-jupiter-vector-11088916.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Jupiter(3)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;108,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
        </div>
        <div class="row2">
          <div class="kaart1">
            <img
              class="imgk1"
              src="assets/images/planet-earth-vector-11088906.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Earth(1)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;43,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart2">
            <img
              class="imgk1"
              src="assets/images/planet-earth-vector-11088906.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Earth(2)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;52,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart3">
            <img
              class="imgk1"
              src="assets/images/planet-earth-vector-11088906.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Earth(3)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;111,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
        </div>
        <div class="row3">
          <div class="kaart1">
            <img
              class="imgk1"
              src="assets/images/planet-saturn-vector-11088920.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(1)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;63,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart2">
            <img
              class="imgk1"
              src="assets/images/planet-saturn-vector-11088920.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(2)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;72,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart3">
            <img
              class="imgk1"
              src="assets/images/planet-saturn-vector-11088920.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(3)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;121,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
        </div>
        <div class="row4">
          <div class="kaart1">
            <img
              class="imgk1"
              src="assets/images/planet-venus-vector-10652806.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(1)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;23,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart2">
            <img
              class="imgk1"
              src="assets/images/planet-venus-vector-10652806.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(2)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;35,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span>
          </div>
          <div class="kaart3">
            <img
              class="imgk1"
              src="assets/images/planet-venus-vector-10652806.jpeg"
              alt="jupiter"
            /><br />
            <br /><span class="k1txt">Saturn(3)</span>
            <div class="kline"></div>
            <br /><span class="k1prijs">&euro;99,99</span>
            <span class="k1winkel"
              >voeg toe
              <img
                class="k1shopimg"
                src="assets/images/shopping-cart.png"
                alt=""
            /></span> -->
        </div>
    </div>
    </div>
    <div id="menuleft">
        <div id="blok1">
            <span id="subspace">Space</span><br />
            <hr />
            <span id="catopijl">></span><span id="cato">Subcategorie 1</span><br />
            <span id="catopijl">></span><span id="cato">Subcategorie 2</span><br />
            <span id="catopijl">></span><span id="cato">Subcategorie 3</span><br />
        </div>
        <div id="blok2">
            <span id="selectiefijn">Uw selectie verfijnen</span>
            <hr />
            <br />
            <div id="matalign">
                <span id="matriaal">Matriaal</span><br />
                <span id="matpijl">></span><span id="matrialen">Venus (8)</span><br />
                <span id="matpijl">></span><span id="matrialen">Aarde (3)</span><br />
                <span id="matpijl">></span><span id="matrialen">Jupiter (7)</span><br />
                <span id="matpijl">></span><span id="matrialen">Saturnus (2)</span>
            </div>
        </div>
        <div id="blok3">
            <span id="prijs-txt">Prijs</span>
            <hr />
            <div class="slider-container">
                <input type="range" class="slider" min="0" max="1000" step="1" value="0" />
            </div>
            <div id="prijs0-1000">
                <span id="nul-euro">&euro;0</span><span id="duizend-euro">&euro;1000</span>
            </div>
        </div>
        <div id="blok4">
            <span id="recentbekeken">Recent bekeken</span>
            <hr />

            <span><img id="jupiterrecent"
                    src="https://i.pinimg.com/originals/9d/d3/3b/9dd33b6db5a889db5d344baea1107671.jpg"
                    alt="jupiter" /></span>
            <span id="eurojuprec">&euro;35</span>
        </div>
        <div id="blok5">
            <span id="nieuwsbrief">Nieuwsbrief</span>
            <hr />
            <form action="">
                <input id="nieuwsemail" type="email" placeholder="E-mail*" /><br />
                <input id="nieuwsbtn" type="submit" value="Inschrijven" />
            </form>
        </div>
        <div id="blok6">
            <div id="product">
                <span>Producten</span><br />
                <span>vergelijken(4)</span>
            </div>
            <hr />
            <form>
                <div id="selectdiv">
                    <select>
                        <option>Jupiter</option>
                        <option>Venus</option>
                        <option>Saturnus</option>
                        <option>Aarde</option>
                    </select>
                    <br />
                    <select>
                        <option>Venus</option>
                        <option>Jupiter</option>
                        <option>Saturnus</option>
                        <option>Aarde</option>
                    </select>
                    <br />
                    <br />
                    <br />
                    <hr />
                </div>
                <input type="submit" value="Vergelijk" id="vergelijkbtn" /><br />
                <span id="alleswis">Alles wissen</span>
            </form>
        </div>
    </div>
    </div>
</body>

</html>