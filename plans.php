<?php

$PageTitle = "Bons  Plans";

function customPageHeader()
{ ?>
    <link rel="stylesheet" href="./css/plans2.css">
<?php }

include_once('header.php');

?>

<div class="categories-wrap">
    <div id="categories">
        <div id="cat">
            <a href="#nourriture">
                <img src="./img/nourriture.jpg" alt="nourriture">
                <div class="overlay">Les aides alimentaires</div>
                <div class="txt"> Nourriture </div>
            </a>

        </div>


        <div id="cat">
            <a href="#santé">
                <img src="img/santé.jpg" alt="santé">
                <div class="overlay"> Où se soigner gratuitement? </div>
                <div class="txt"> Santé </div>
            </a>
        </div>

        <div id="cat">
            <a href="#magasins">
                <img src="img/magasins.jpg" alt="magasins">
                <div class="overlay">Faire ses courses sans se ruiner!</div>
                <div class="txt"> Magasins </div>
            </a>
        </div>


        <div id="cat">
            <a href="#loisirs">

                <img src="img/loisirs.jpg" alt="loisirs">
                <div class="overlay">Se détendre à Poitiers</div>
                <div class="txt"> Loisirs </div>
            </a>
        </div>


        <div id="cat">
            <a href="#logements">
                <img src="img/logements.jpg" alt="logements">
                <div class="overlay">Recherche et aide au logement</div>
                <div class="txt"> Logements </div>
            </a>
        </div>


        <div id="cat">
            <a href="#transports">
                <img src="img/transports.jpg" alt="transports">
                <div class="overlay">Je me déplace à moindre coûts</div>
                <div class="txt"> Transports</div>
            </a>
        </div>
    </div>
</div>

<div id="desc">

    <div id="nourriture">
        <h2 class="hr"> Nourriture </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <tr>
                                <td>Épiss’campus </td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.univ-poitiers.fr/vivre-les-campus/ressources-vie-etudiante/episscampus/" class="fa fa-info "></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Restaurant du Coeur</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.restosducoeur.org/associations-departementales/les-restos-du-coeur-de-vienne/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Secours Populaire</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.secourspopulaire.fr/86/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>EMF Poitiers</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.facebook.com/emf.poitiers" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>AMAL</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.facebook.com/groups/amal86" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Entraides 86</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.facebook.com/entraidescitoyennes86" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider">
                        <div class="slides">
                            <div class="slide"><img src="img/episs.png" alt="episs'campus"></div>
                            <div class="slide"><img src="img/resto.png" alt="resto du coeur"></div>
                            <div class="slide"><img src="img/secours.jpg" alt="secours populaire"></div>
                            <div class="slide"><img src="img/entraides.jpg" alt="entraides"></div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>




    <div id="santé">
        <h2 class="hr"> Santé </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <tr>
                                <td>Complémentaire santé solidaire (CMU)</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.ameli.fr/assure/droits-demarches/difficultes-acces-droits-soins/complementaire-sante" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Médecine préventive</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://ssu.univ-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider2">
                        <div class="slides2">
                            <div class="slide2"><img src="img/cmu.jpg" alt="cmu"></div>
                            <div class="slide2"><img src="img/med.jpg" alt="medecine préventive"></div>

                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="magasins">
        <h2 class="hr"> Magasins </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <tr>
                                <td>Netto</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://magasin.netto.fr/288-netto-poitiers" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> E.Leclerc</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.e.leclerc/mag/e-leclerc-poitiers" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Action</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.action.com/fr-fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Marchés</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.annuaire-mairie.fr/marche-poitiers.html" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider3">
                        <div class="slides3">
                            <div class="slide3"><img src="img/netto.jpg" alt="netto"></div>
                            <div class="slide3"><img src="img/leclerc.jpg" alt="leclerc"></div>
                            <div class="slide3"><img src="img/action.jpg" alt="action"></div>


                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="loisirs">
        <h2 class="hr"> Loisirs </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <tr>
                                <td>Parc du Futuroscope</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.futuroscope.com/fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Suaps</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://suaps.univ-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Basic Fit</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.basic-fit.com/fr-fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Maison des étudiants (MDE)</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="http://mde.univ-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Coala tuteur</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.facebook.com/Coala.tuteur" class="fa fa-info"></a>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Maison des langues</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://mdl.univ-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Médiatheque</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.bm-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider3">
                        <div class="slides3">
                            <div class="slide3"><img src="img/futuroscope.jpg" alt="futuroscope"></div>
                            <div class="slide3"><img src="img/fit.jpg" alt="fit"></div>
                            <div class="slide3"><img src="img/mediatheque.jpg" alt="mediatheque"></div>


                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="logements">
        <h2 class="hr"> Logements </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <thead>
                                <th> Où trouver un logement : </th>
                            </thead>
                            <tr>
                                <td>Crous</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.crous-poitiers.fr/logements/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Leboncoin</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.leboncoin.fr/annonces/offres/poitou_charentes" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <thead>
                                <th> Aides au logement : </th>
                            </thead>
                            <tr>
                                <td> La CAF</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.caf.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Bric a Brac</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.bric-a-brac-86.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider3">
                        <div class="slides3">
                            <div class="slide3"><img src="img/crous.png" alt="crous"></div>
                            <div class="slide3"><img src="img/caf.jpg" alt="caf"></div>
                            <div class="slide3"><img src="img/bricbrac.jpg" alt="bricabrac"></div>


                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="transports">
        <h2 class="hr"> Transports </h2>
        <table>
            <tr>
                <td>
                    <div class="liste">
                        <table>
                            <tr>
                                <td>Vitalis</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.vitalis-poitiers.fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> TGVmax</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.tgvmax.fr/VSC/fr-FR" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> TER Nouvelle Aquitaine</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.ter.sncf.com/nouvelle-aquitaine" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Comparateur de billets d'autocars</td>
                                <td>
                                    <div class="info-icon">
                                        <a href="https://www.comparabus.com/fr/" class="fa fa-info"></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
                <td>
                    <div class="slider3">
                        <div class="slides3">
                            <div class="slide3"><img src="img/vitalis.jpg" alt="vitalis"></div>
                            <div class="slide3"><img src="img/ter.jpg" alt="ter"></div>
                            <div class="slide3"><img src="img/compar.png" alt="comparabus"></div>


                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>


<?php
include_once('footer.php');
?>