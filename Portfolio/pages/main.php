<?php include "header.php";
print('<link rel="stylesheet" href="../CSS/style.css" type="text/css">');
?>
<main>

    <div id="container_info">
        <div id="container_photo">
            <img src="../medias/photo.JPG" height="200px" width="200px" style="border-radius: 150px">
        </div>
        <h3 id="titre_info">BONJOUR,</h3>
        <p class="paragraphe paragraphe-info"> Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged
        </p>
    </div>

    <h3 class="hr">Mes compétences</h3>


    <div id="forme_1">
        <img class="card" style="margin-top: 125px;margin-left: 50px" src="../medias/card.png">
        <h3 class="card_description">Réalisation de sites web réactifs et responsive en HTML, CSS et modules en Javascript</h3>
    </div>

    <div>
      <img class="card"  style="top:1620px; right: 120px" src="../medias/card.png">
      <h3 class="card_description3">Réalisation maquettes sur figma et canva dans le cadre de Posters ou d'affiches pour les entreprises</h3>
    </div>

    <div id="forme_2">
        <img class="card" style="margin-top: 255px;margin-left: 50px" src="../medias/card.png">
        <h3 class="card_description2">Création et administration de bases de données, permettant de gérer efficacement les informations importantes pour mes projets.</h3>
    </div>

    <h3 class="hr" id="projet">Mes derniers projets</h3>

    <div class="grid">
        <div class="grid_card"></div>
        <div class="grid_card"></div>
        <div class="grid_card"></div>
    </div>

</main>

<?php include "footer.php"; ?>