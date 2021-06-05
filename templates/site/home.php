<?php
ob_start();
?>
<div class="carousel"></div>
<ul class="presentation">
    <li>Développement commerciale & communication</li>
    <li>Conception graphique & web</li>
    <li>Organisation d'événement</li>
    <li><a href="#">Portfolio</a></li>
</ul>

<ul class="artWork" id="artwork">
    <li>
        <ul>
            <li>Art <span> prints</span></li>
            <li>Tableau à exposer</li>
            <li><span>MINIMALISTE</span><br>& <span>personnalisable</span></li>
            <li>
                <a href="#">Art work</a>
            </li>
        </ul>
    </li>
    <li> <img src="./asset/img/cadres.jpg" alt="Exemples de tableaux">
    </li>
</ul>

<ul class="services" id="service">
    <li>
        <div class="line"></div>
    </li>
    <li>
        <ul>
            <li>
                <ul>
                    <li>1.</li>
                    <li>Étude & <br><span> Stratégie </span></li>
                    <li>Identification des besoins<br> & objectifs commerciaux</li>
                    <li>Étude d'une stratégie<br> & identité de marque</li>
                    <li><a href="#">Se démarquer</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>2.</li>
                    <li><span>Créativité</span> <br>Passion & Émotions </li>
                    <li>MISE EN AVANT & ILLUSTRATION
                        <br>DES VALEURS DE LA MARQUE
                    </li>
                    <li>IMAGINATION, AUDACE <br> & professionnalisme</li>
                    <li><a href="#">ÊTRE UNIQUE
                        </a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>3.</li>
                    <li>RÉPONSES & SOLUTIONS</li>
                    <li>MARQUE PERTINENTE,
                        <br> CIBLÉE & INTEMPORELLE
                    </li>
                    <li>COHÉRENCE & ESTHÉTISME
                    </li>
                    <li> <a href="#">ÊTRE INOUBLIABLE
                        </a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="#">Services</a></li>
    <li>
        <div class="line"></div>
    </li>
</ul>


<?php
$content = ob_get_clean();
require '../templates/base.php';
?>