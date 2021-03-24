<?php

$PageTitle = "Accueil AANEP";

function customPageHeader()
{ ?>
    <!--Head personnalisé (propre à cette page)-->
    <script type="text/javascript" src='js.js'></script>
    <link rel="stylesheet" href="./css/home.css">
<?php }

include_once('header.php');

?>


<div class="aanep">
    <div class="cover">
        AANEP
    </div>
    <img src="./img/visuel-fb.jpg" style="width: 100%; height: 1000px">
</div>

<h1 class="titre_actu"> Actualités du moment</h1>
<div class="content-home" role="main">
    <section>
        <div class="mosaic">
            <a href="https://www.instagram.com/emf.poitiers/?hl=fr" class="card">
                <span class="image">
                    <img src="./img/emf.jpg" alt="">
                </span>
                <h3 class="h-link">Association EMF</h3>
                <span class="text">
                    <strong> Distribution de repas aux étudiants en situation de précarité</strong>
                    <br>
                    <p style="font-size: smaller; padding-right: 8px; padding-left: 8px; font-family: -webkit-pictograph">"Aider, servir et défendre l'étudiant!", c'est leur devise! </br> </br>
                        En collaboration avec l'association Entraide Cytoyen 86, l'EMF organise des distributions de repas à destination des étudiants en situation de précarité.
                        </br>Et tout cela GRATUITEMENT!
                        </br>Un repas chaud composé d'une entrée + repas + dessert, pour réchauffer les coeurs de nos étudiants dans le besoin.
                        </br>
                        Si vous voulez bénéficier ou même aider l'EMF lors de leur aventure, n'hesitez pas les suivre via leur instgram.
                    </p>
                    <p style="font-size: small; text-align: right; padding-right: 8px;">
                        <strong> 17/03/2021 par Hylia B. </strong>
                    </p>
                </span>
            </a>

            <a href="https://www.clickandcrous.fr/" class="card">
                <span class="image">
                    <img src="./img/crous.jpg" alt="">
                </span>
                <h3 class="h-link">Le CROUS présente </h3>
                <span class="text">
                    <strong>Repas à 1€ pour tous les étudiants!</strong> <br> </br>
                    <p style="font-size: smaller; padding-right: 8px;padding-left: 8px;font-family:-webkit-pictograph">
                        Ne l'oubliez pas! Le CROUS vous propose les repas à un euro seulement disponible en restaurant universitaire. Retrouvez l'ensemble des RU proposant l'offre en cliquant sur la section.
                        </br> </br>
                    </p>
                    <p style="font-size: small; text-align: right; padding-right: 8px;"><strong> 20/03/2021 par Lisa B. </strong> </p>
                </span>
            </a>

            <a href="#" class="card">
                <span class="image">
                    <img src="./img/uneuro.jpeg" alt="logo uneuro">
                </span>
                <h3 class="h-link">Ca arrive bientôt!</h3>
                <span class="text">
                    <strong> Amènage ton appart' pour 1€</strong>
                    <p style="font-size: smaller; padding-right: 8px; padding-left: 8px; font-family: -webkit-pictograph;">
                        Une équipe de jeunes étudiants sont entrain de vous développer un super concept qui arrivera fin d'année 2021!
                        Tu connais l'application Geev? C'est le même concept mais pour l'ameublement de ton appart'.
                        Tu déménges bientôt? Publie les meubles dont tu as plus besoin, tu en ferra profiter d'autre qui pourront leur donner une seconde vie!
                        </br> On te tiendra au courant lors de leur lancement! Suis-nous sur notre instagram.
                        </br> </br>
                    </p>
                    <p style="font-size: small; text-align: right; padding-right: 8px;"><strong> 20/03/2021 par Nesrine B. </strong> </p>
                </span>
            </a>
        </div>
    </section>
</div>

<?php
include_once('footer.php');
?>