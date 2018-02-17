<?php include("pkmn.php"); ?>

<html>
 <head>
  <title>MissingPokemons</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
 <body>
 <!-- <iframe scrolling="no" src="https://bulbapedia.bulbagarden.net/wiki/Pikachu_(Pok%C3%A9mon)#Game_locations"> -->
 <?php
        /*$sunIdentifier = '<th style="width: 70px; max-width: 70px; border-top-left-radius: 16px; -moz-border-radius-topleft: 16px; -webkit-border-top-left-radius: 16px; -khtml-border-top-left-radius: 16px; -icab-border-top-left-radius: 16px; -o-border-top-left-radius: 16px; border-bottom-left-radius: 16px; -moz-border-radius-bottomleft: 16px; -webkit-border-bottom-left-radius: 16px; -khtml-border-bottom-left-radius: 16px; -icab-border-bottom-left-radius: 16px; -o-border-bottom-left-radius: 16px; background:#F1912B; border: 2px solid #F1912B; line-height:12pt;"> <a href="/wiki/Pok%C3%A9mon_Sun_and_Moon" title="Pokémon Sun and Moon"><span style="color:#000;">Sun</span></a>
        </th>
        <th style="width: 70px; max-width: 70px; border-top-right-radius: 16px; -moz-border-radius-topright: 16px; -webkit-border-top-right-radius: 16px; -khtml-border-top-right-radius: 16px; -icab-border-top-right-radius: 16px; -o-border-top-right-radius: 16px; border-bottom-right-radius: 16px; -moz-border-radius-bottomright: 16px; -webkit-border-bottom-right-radius: 16px; -khtml-border-bottom-right-radius: 16px; -icab-border-bottom-right-radius: 16px; -o-border-bottom-right-radius: 16px; background:#5599CA; border: 2px solid #5599CA; line-height:12pt;"> <a href="/wiki/Pok%C3%A9mon_Sun_and_Moon" title="Pokémon Sun and Moon"><span style="color:#000">Moon</span></a>
        </th>';
        $sunIdentifier = "sun";
        echo "ICI";
        $data = file_get_contents('https://bulbapedia.bulbagarden.net/wiki/Pikachu_(Pok%C3%A9mon)#Game_locations');
        //echo $data;
        $ii = strpos($data,$sunIdentifier);
        echo "$ ii = ".$ii;
        $str1 = substr($data, $ii, $ii+5000);
        echo "\n".$str;*/
    ?> 
    <h1>Liste des pokémons voulu</h1>
    <h2>Legendaire Saphir</h2>
    <h3>https://www.pokebip.com/page__jeuxvideo__pokemon-rubis-omega-saphir-alpha__legendaires__index.html</h3>
    <font color="green">Les Oiseaux Gardiens : Ho-Oh et Lugia</font>
    <font color="green"><br/>Les bêtes légendaires : Raikou, Entei et Suicune</font>
    <br/>Les Trois Esprits : Créhelf, <font color="green">Créfollet et Créfadet</font>
    <br/>Les Trois Dragons Originels : <font color="green">Dialga</font>, Palkia et Giratina
    <br/>Le Pokemon Lunaire : Cresselia Pokémon
    <font color="green"><br/>Le Pokémon Caldeira : Heatran </font>
    <font color="green"><br/>Le trio du Tao : Reshiram, Zekrom et Kyurem</font>
    <font color="green"><br/>Les Lames de la Justice : Cobaltium, Terrakium</font> et<font color="orange"> Viridium</font>
    <br/>Le trio des génies : Boréas, <font color="green">Fulguris</font> et Démétéros 

    <br> Electhor XY
    
    <h2>Missing <?php echo sizeOf($neededIndex)?> pokemons </h2>
    <table>
        <tr>
            <th>
                Numéro
            </th>
            <th>
                Nom
            </th> 
            <th>
                Nom anglais
            </th>
            <th>
                X/Y
            </th>
            <th>
                Saphir/Rubis
            </th>  
            <th>
                Sun/Moon
            </th>         
        </tr> 
        <?php
        foreach($neededIndex as $i){
            echo "<tr><td>".$i."</td>";
            $i -= 1;
            $pokepediaLink = "http://www.pokepedia.fr/".$allPkmnFr[$i]."#Localisations";
            $bulbapediaLink = "https://bulbapedia.bulbagarden.net/wiki/".$allPkmnEn[$i]."_(Pokémon)#Game_locations";
            echo "<td><a href='".$pokepediaLink."'>".$allPkmnFr[$i]."</a></td>";
            echo "<td><a href='".$bulbapediaLink."'>".$allPkmnEn[$i]."</td>";
            echo "<td id='".$allPkmnEn[$i]."XY'>a</td>";
            echo "<td id='".$allPkmnEn[$i]."RS'>b</td>";
            echo "<td id='".$allPkmnEn[$i]."SM'>c</td>";
        }
        ?>
    </table> 
    <iframe id="ifr" style="display:none"></iframe>
    <!-- <script src="js/fillDescription.js"></script>   -->
 </body>
</html>


