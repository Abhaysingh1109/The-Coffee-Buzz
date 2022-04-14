<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {
	
	$fname = $_SESSION['fname'];
	$lname = $_SESSION['lname'];
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Coffee Buzz- Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">The Coffee Buzz</div>
    <div class="address-bar">13/1688 Bhujauli Colony | Deoria,Uttar Pradesh | 26.5024° N, 83.7791° E</div>

    <!-- Navigation --> 
    <?php require_once 'nav.php'?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcome <?php echo $fname; echo " ";echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Coffee Buzz
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./img/image4.jpeg" alt="">
                    <h2>AFFOGATO
                        <br>
                        <small>September 11, 2002</small>
                    </h2>
                    <p>An affogato /ˌɑːfəˈɡɑːtəʊ/, /ˌæfəˈɡɑːtəʊ/ or more traditionally known as "affogato al caffe" is an Italian coffee-based dessert. It usually takes the form of a scoop of plain milk-flavored or vanilla gelato or ice cream topped or "drowned" with a shot of hot espresso.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal0">Read More</button>
                    <hr> 
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./img/image1.jpeg" alt="">
                    <h2>Cappuccino
                        <br>
                        <small>September 11, 2000</small>
                    </h2>
                    <p>A cappuccino is an espresso-based coffee drink that originated in Austria with later development taking place in Italy, and is prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr> 
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./img/image2.jpg" alt="">
                    <h2>Americano
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="./img/image3.jpeg" alt="">
                    <h2>Latte
                        <br>
                        <small>October 13, 2013</small>
                    </h2>
                    <p>A latte is sometimes served in a bowl; in Europe, particularly Scandinavia, this is referred to as a café au lait.
                    Increasingly common in the United States and Europe, latte art has led to the stylization of coffee making, and the creation of which is now a popular art form. Created by pouring steaming, and mostly frothed, milk into the coffee, that liquid is introduced into the beverage in such a way that patterns are distinguishable on the top of coffee. Popular patterns can include hearts, flowers, trees and other forms of simplistic representations of images and objects.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
                                        <!-- Model0 -->

    <div class="modal fade" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CAPPUCCINO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Though restaurants and cafes in Italy categorize the affogato as a dessert, some restaurants and cafes outside of Italy categorize it as a beverage.[7] Whether a dessert or beverage, restaurants and cafes usually serve the affogato in a tall narrowing glass, allowing the fior di latte, vanilla gelato, or ice cream melt and combine with espresso into the hollowed space in the bottom of the glass.[6] Occasionally, coconut, berries, honeycomb and multiple flavors of ice cream are added.[8] A biscotto or cookie can also be served and enjoyed alongside this beverage.[9] Affogati are often enjoyed as a post-meal coffee dessert combo eaten and or drunk with a spoon or straw.</p>

        <p>While the recipe of the affogato is more or less standard in Italy, consisting of a scoop of vanilla gelato topped with a shot of espresso, variations exist in European and American restaurants.</p>
       <p> In Italy, it is known as "gelato al fior di latte" with the translation to English "flower of milk".[12] Typically the ingredients in the ice cream includes dairy, starch, and sugar. It is popular in countries where they dress it with chocolate syrup, cantuccini, or biscotti to provide extra flavors</p>

      <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                                <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CAPPUCCINO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Cappuccino originated as the coffee beverage kapuziner in the Viennese coffee houses in the 1700s, at the same time as the counterpart coffee beverage named Franziskaner: kapuziner shows up on coffee house menus all over the Habsburg Monarchy around this time, and is in 1805 described in a Wörterbuch (dictionary) as "coffee with cream and sugar" (although it does not say how it is composed). Kapuziner is mentioned again in writings in the 1850s, described as "coffee with cream, spices and sugar". Around the same time, the coffee beverage melange is mentioned in writings, explained as a blend of coffee and milk, presumably similar to the modern day caffè latte or Wiener Melange. Other coffees containing cream surfaced in Vienna, and outside Austria these are referred to as "Viennese coffee" or "café Viennois", coffee with whipped cream. Predecessors of Irish coffee, sweetened coffee with different alcohols, topped with whipped cream also spread out from Vienna.</p>

        <p>Kapuziner took its name from the colour of coffee with a few drops of cream, so nicknamed because the Capuchin monks in Vienna and elsewhere wore vestments with this colour.[13] Another popular coffee was Franziskaner, with more cream, referring to the somewhat lighter brown colour of the robes of monks of the Franciscan order. Kapuziner coffee spread throughout Central Europe and thus also in the Italian-speaking parts of the Habsburg monarchy. The main port of the empire, the city of Trieste, already had many Viennese coffee houses back then.</p> 

       <p> Cappuccino as we write it today (in Italian) is first mentioned in northern Italy in the 1930s, and photographs from that time depict the drink resembling "Viennese", a coffee topped with whipped cream sprinkled with cinnamon or chocolate. The Italian cappuccino evolved and developed in the following decades: the steamed milk atop is a later addition, and in the US a slight misunderstanding has led to the naming of this "cap" of milk foam "monk's head", although it originally had nothing to do with the name of the beverage.</p>

      <p>Although coffee was brewed differently all over Europe after the Second World War, in Italy, espresso machines became widespread only during the 1950s, and "cappuccino" was redefined, now made from espresso and frothed milk (although far from the quality of "microfoam" steamed milk today). As the espresso machines improved, so did the dosing of coffee and the heating of the milk. Outside Italy, cappuccino spread but was generally made from dark coffee with whipped cream, as it still is in large parts of Europe even in 2014.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            <!-- End of the Modal 1 -->

                                <!-- Modal 2 -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Americano</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The drink consists of a single or double shot of espresso brewed with added water. Typically in the UK (and in Italy) between 1 and 16 imperial fluid ounces or 28 and 455 ml of hot water is added to the double espresso</p>

        <p>
        The hot water can be drawn directly from the same espresso machine that is used to brew the espresso, or from a separate water heater or kettle. Using the same heater makes a second one unnecessary, and the water can be drawn directly into the glass, either before (for a Long Black) or after (for an Americano) the espresso. Some espresso machines have a separate hot water spout for this purpose, while on others, the steam wand dispenses it. Using a separate water heater is more practical in a commercial setting, as it frees the machine for other baristas, avoids disrupting the brew water's temperature, and reduces wear on specialized equipment.
       </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                            <!-- End of the Modal 2 -->

                                <!-- Modal 3 -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Latte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
        In Italy, caffè latte is almost always prepared at home, for breakfast only. The coffee is brewed with a stovetop moka pot and poured into a cup containing heated milk. (Unlike the "international" latte drink, the milk in the Italian original is generally not foamed, and sugar is added by the drinker, if at all).

        Outside Italy, a caffè latte is typically prepared in a 240 mL (8 US fl oz) glass or cup with one standard shot of espresso (either single, 30 mL or 1 US fl oz, or double, 60 mL or 2 US fl oz) and filled with steamed milk, with a layer of foamed milk approximately 12 mm (1⁄2 in) thick on the top. In the US, a latte is often heavily sweetened, with 3 % or even more sugar.[13] When ordering this drink in Italy, one should ask for a latte macchiato.


        A cup of latte with lunch at Merewether Beach, Australia
        The drink is related to a cappuccino, the difference being that a cappuccino consists of espresso and steamed milk with a 20-millimetre-thick (0.79 in) layer of milk foam. A variant found in Australia and New Zealand similar to the latte is the flat white, which is served in a smaller ceramic cup with warmed milk (without the layer of foam). In the United States this beverage is sometimes referred to as a wet cappuccino.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                            <!-- End of the Modal 3 -->
                   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Coffee Buzz | 2022 </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
	header("location:login.php");
}

?>