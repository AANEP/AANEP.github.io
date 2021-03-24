<?php

$PageTitle = "Découvrir Poitiers";

function customPageHeader()
{ ?>
    <!--Head personnalisé (propre à cette page)-->
    <link rel="stylesheet" href="./css/discover.css">
<?php }

include_once('header.php');

?>

<div class="intro">
    <div class="message">
        <div class="message1">
            Découvrez avec nous tout ce qu'il y a à visiter à Poitiers
        </div>
        Naviguez simplement dans les différentes sections </br>
        Cliquez sur un lieu pour le voir sur la carte </br>
        Cliquez sur l'icône <div class="fa fa-info"></div> pour avoir plus d'informations sur le lieu à visiter
    </div>
</div>

<div class="menu-container">
    <div class="menu-section">
        <button id="200" onclick=switchSection(100) style="background-color: #f00340; color: white"> Églises </button>
        <button id="201" onclick=switchSection(101)> Châteaux </button>
        <button id="202" onclick=switchSection(102)> Jardins & Forêts </button>
        <button id="203" onclick=switchSection(103)> Fleuve & Rivière</button>
        <button id="204" onclick=switchSection(104)> Parcs d'attraction </button>
        <button id="205" onclick=switchSection(105)> Musées </button>
        <button id="206" onclick=switchSection(106)> Grottes </button>
    </div>
</div>

<div class="content">

    <div class="sites-container">

        <div class="section" id="100" style="display: block;">
            <!-- _____________________Section 1 : Eglises ______________________-->

            <div class="section-title">
                Églises
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(0)> Église Notre-Dame la Grande </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/%C3%89glise_Notre-Dame-la-Grande_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(1)> Baptistère Saint-Jean </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Baptist%C3%A8re_Saint-Jean_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(2)> Église Sainte-Radegonde </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/%C3%89glise_Sainte-Radegonde_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(3)> Cathédrale Saint-Pierre </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Cath%C3%A9drale_Saint-Pierre_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(4)> Église Saint-Hilaire le Grand </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/%C3%89glise_Saint-Hilaire_le_Grand" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(5)> Église Saint-Porchaire </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/%C3%89glise_Saint-Porchaire_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(6)> Abbaye Saint-Jean de Montierneuf </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Abbaye_Saint-Jean_de_Montierneuf_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(7)> Abbaye Saint-Martin de Ligugé </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Abbaye_Saint-Martin_de_Ligug%C3%A9" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- _____________________Section 2 : Châteaux ______________________-->

        <div class="section" id="101">
            <div class="section-title">
                Châteaux
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(8)> Palais des comtes de Poitiers </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Palais_des_comtes_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(9)> Château du Bois-Doucet </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Ch%C3%A2teau_du_Bois-Doucet" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
            
            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(10)> Château-Couvert </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Ch%C3%A2teau-Couvert" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(11)> Châteaux forts de Chauvigny </button>
                    </div>
                    <div class="info-icon">
                        <a href="http://www.chauvigny-patrimoine.fr/Decouvrir/chateaux_chauvigny.php" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ______________________Section 3 : Jardins et Forêts_________________________ -->

        <div class="section" id="102">
            <div class="section-title">
                Jardins & Forêts
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(12)> Parc de Blossac </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Parc_de_Blossac" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(13)> Parc floral de la Roseraie </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://www.poitiers.fr/c__229_886__parc_floral_de_la_roseraie.html" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(14)> Jardin des plantes de Poitiers </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Jardin_des_plantes_de_Poitiers" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(15)> Forêt de Moulière </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/For%C3%AAt_de_Mouli%C3%A8re" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(16)> Forêt de Saint-Sauvant </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://www.grandpoitiers.fr/sport-culture-et-loisirs/tourisme-et-loisirs/se-balader/foret-de-saint-sauvant" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ______________________Section 4 : Fleuve & Rivière_________________________ -->

        <div class="section" id="103">
            <div class="section-title">
                Fleuve & Rivière
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(17)> Boivre (affluent du Clain) </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Boivre_(affluent_du_Clain)" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(18)> Clain (rivière) </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Clain_(rivi%C3%A8re)" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ______________________Section 5 : Parcs d'attraction_________________________ -->

        <div class="section" id="104">
            <div class="section-title">
                Parcs d'attraction
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(19)> Futuroscope de Poitiers </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://www.futuroscope.com/fr/attractions-et-spectacles" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(20)> La Gyrotour </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Gyrotour" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ______________________Section 6 : Musées_________________________ -->

        <div class="section" id="105">
            <div class="section-title">
                Musées
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(21)> Musée Sainte-Croix </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Mus%C3%A9e_Sainte-Croix" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(22)> Musée d'Art Populaire Migné-Auxances </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://www.tourisme-vienne.com/fr/activite/198/chez-manuel-musee-d-art-populaire" class="fa fa-info "></a>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(23)> Musée Rupert-de-Chièvres </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://fr.wikipedia.org/wiki/Mus%C3%A9e_Rupert-de-Chi%C3%A8vres" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ______________________Section 7 : Grottes_________________________ -->

        <div class="section" id="106">
            <div class="section-title">
                Grottes
            </div>

            <div class="section-content">
                <div class="section-element">
                    <div class="address">
                        <button onclick=switchLocation(24)> Grottes de la Norée </button>
                    </div>
                    <div class="info-icon">
                        <a href="https://www.grandpoitiers.fr/sport-culture-et-loisirs/tourisme-et-loisirs/grottes-de-la-noree" class="fa fa-info "></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-container">
        <div class="map-content">
            <div id="map">

                <!-- églises -->

                <div id="0" style="display: block">
                    <iframe src="https://maps.google.com/maps?q=notre%20dame%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="1" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Baptist%C3%A8re%20Saint-Jean%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                
                <div id="2" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Eglise%20sainte%20radegonde%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                
                <div id="3" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=cath%C3%A9drale%20saint%20pierre%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="4" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=%C3%89glise%20Saint-Hilaire%20le%20Grand%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="5" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=%C3%89glise%20Saint-Porchaire%20de%20Poitiers%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="6" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Abbaye%20Saint-Jean%20de%20Montierneuf%20de%20Poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="7" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Abbaye%20Saint-Martin%20de%20Ligug%C3%A9%20Poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                
                <!-- châteaux -->

                <div id="8" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=palais%20des%20comptes%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="9" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=chateau%20bois-doucet%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="10" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Ch%C3%A2teau-Couvert%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
                
                <div id="11" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Ch%C3%A2teaux%20forts%20de%20Chauvigny&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!-- jardins -->

                <div id="12" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Parc%20de%20Blossac&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="13" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Parc%20floral%20de%20la%20Roseraie%20poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="14" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Jardin%20des%20plantes%20de%20Poitiers&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="15" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=For%C3%AAt%20de%20Mouli%C3%A8re&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="16" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=For%C3%AAt%20de%20Saint-Sauvant&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!-- fleuves -->

                <div id="17" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Boivre%20(affluent%20du%20Clain)&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="18" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Clain%20(rivi%C3%A8re)&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!-- parcs -->

                <div id="19" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Futuroscope&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="20" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=La%20Gyrotour%20Futuroscope&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!-- musées -->

                <div id="21" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Mus%C3%A9e%20Sainte-Croix&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="22" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Mus%C3%A9e%20d'Art%20Populaire%20Mign%C3%A9-Auxances&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <div id="23" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Mus%C3%A9e%20Rupert-de-Chi%C3%A8vres&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>

                <!-- grottes -->

                <div id="24" style="display: none">
                    <iframe src="https://maps.google.com/maps?q=Grottes%20de%20la%20Nor%C3%A9e&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include_once('footer.php');
?>

<script>
    var currentLoc = document.getElementById(0);

    function switchLocation(map) {
        var newLoc = document.getElementById(map);
        currentLoc.style.display = "none";
        newLoc.style.display = "block";
        currentLoc = newLoc;
    }

    var currentSec = document.getElementById(100);
    var currentButton = document.getElementById(200);

    function switchSection(sec) {
        var newButton = document.getElementById(sec+100);
        var newSec = document.getElementById(sec);
        currentButton.style.color = "black";
        currentButton.style.backgroundColor = "#f9f9f9";

        newButton.style.color = "white";
        newButton.style.backgroundColor = "#f00340";

        currentSec.style.display = "none";
        newSec.style.display = "block";
        currentSec = newSec;
        currentButton = newButton;
    }
</script>