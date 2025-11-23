<?php

require __DIR__ . "/header.php";
require __DIR__ . '/ten-percent.php';

?>
<!-- // länken till css ska tas bort när den är kopplad till index -->
<link rel="stylesheet" href="about.css">
<main class="about-main">
    <section class="container-about">
        <div class="about-hero">
            <p class="klubb-kin">Våra arbetsätt</p>
            <img class="team" src="assets/Kinforma_Hero_Final.png" alt="bild på landskap">
            <!-- <button>Våra arbetsätt</button> -->
        </div>
    </section>
    <section class="about-info">
        <div class="persenol-design">
            <h3>PERSONLIG DESIGN</h3>
            <p>Vi skapar produkter som formas efter dig – funktion, stil och material som anpassas till hur du lever och rör dig.</p>
        </div>
        <div class="sustainable-fashion">
            <p>Vi arbetar med regenerativa material och lång livslängd, där varje produkt minskar avtrycket och stöttar en mer hållbar framtid.</p>
            <h3>HÅLLBART MODE</h3>
        </div>
        <div class="smart-textil">
            <h3>SMART <br> TEXTIL</h3>
            <p>Teknik och textil möts i lösningar som värmer, skyddar och presterar – utvecklade för skiftande klimat och aktiva dagar.</p>
        </div>
    </section>
    <div class="smart-textil-container">
        <img src="assets/Material_View_Green.png" alt="bild på teamet">
        <img src="assets/Material_View_Orange.png" alt="bild på teamet">
    </div>
</main>
<?php
require __DIR__ . "/newsletter.php";
require __DIR__ . "/footer.php";

//antingen section med läs mer som dyker upp under, eller en egen sida vid klick på läs mer
