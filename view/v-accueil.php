
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" >
    <title>Portfolio</title>
    <link rel="stylesheet" href="src/style.css">
    <link rel="shortcut icon" href="medias/icone.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="JS/particles.min.js"></script>
    <script src="JS/ensavoirplus.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="JS/scroll.js"></script>
    <script src="JS/cache.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BBSS5X9PTK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-BBSS5X9PTK');
    </script>

</head>
<body>


<div id="particles-js">
    <div>
        <div>
            <h1>BIENVENUE SUR </br>MON SITE</h1></br>
            <h3> Vous pourrez retrouver ici mes informations personnelles ainsi que mes différents projets</h3>
            <a href="#medecouvrir"> <svg width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.72"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#00ff00" stroke-width="0.192"></g><g id="SVGRepo_iconCarrier"> <path d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM16.06 11.17L12.53 14.7C12.38 14.85 12.19 14.92 12 14.92C11.81 14.92 11.62 14.85 11.47 14.7L7.94 11.17C7.65 10.88 7.65 10.4 7.94 10.11C8.23 9.82 8.71 9.82 9 10.11L12 13.11L15 10.11C15.29 9.82 15.77 9.82 16.06 10.11C16.35 10.4 16.35 10.87 16.06 11.17Z" fill="#ffffff"></path> </g></svg></a>
        </div>
    </div>
</div>

<!--La présentation-->

<div id="medecouvrir" class="container_pres ">
        <div>
            <h2>A propos de moi</h2>
            <hr>
        </div>
        <p>
            Je m'appelle Théo et j'ai actuellement 21 ans. Je suis étudiant en BUT Informatique à Amiens et
            je suis passionné par le développement web et le design. Mon objectif professionnel est de devenir développeur
            web ou designer UX/UI, un métier qui me permettra de mettre en pratique mes connaissances et mes compétences dans
            la création de sites internet et en création numérique.</br></br>

            C'est pourquoi j'ai choisi de suivre des études en informatique pour approfondir mes connaissances
            et me spécialiser dans le développement web.</br> J'ai appris à maîtriser plusieurs langages d'intégration
            et de programmation telle que HTML, CSS, Javascript ou encore PHP mais je sais également créer des supports
            graphiques esthétiques et complets comme des affiches ou des maquettes.</br></br>

            Si vous êtes à la recherche d'un stagiaire passionné et motivé, n'hésitez pas à me contacter. Sinon pour en savoir plus
            sur mes compétences et mes réalisations vous pouvez continuer à visiter le site.</br></br>
        </p>
        <a href="../medias/cv.pdf" download="Mon CV">Télécharger mon Cv</a>
</div>

<!--La galerie-->
<div class="box">
<div class="titre_galerie">
    <h2>Mes derniers projets</h2>
    <hr style="width: 26%; margin-top: 0">
    <h3>De la maquette jusqu'au développement</h3>
</div>

<?php foreach ($projets as $projet): ?>
    <div class="galerie">

        <div class="card cache">
            <div class="placeholder-img">
                <img src="../src/medias/projet1.jpg">
            </div>
            <div class="info">
                <h2> <?= htmlspecialchars($projet['titre']) ?></h2>
            </div>
            <div class="description">
                <div class="expandMoreContent" id="showMoreContent1">
                    <p> <?= htmlspecialchars($projet['description']) ?></p>
                </div>
                <div class="expandMoreHolder">
                <span expand-more data-hidetext="Montrer moins" data-showtext="En savoir plus..."
                      data-target="showMoreContent1" class="btn-expand-more">En savoir plus...</span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    <!--Le footer-->

    <footer class="footer">
        <div class="container_footer">
            <div class="row">
                <div class="footer-col">
                    <h4>Liens utiles</h4>
                    <ul>
                        <li><a href="https://www.iut-amiens.fr/" target="_blank">IUT Amiens</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Mes informations</h4>
                    <ul>
                        <li><a href="mailto:theoquennehenpro@gmail.com">Mail: theoquennehenpro@gmail.com</a></li>
                        <li><a>Tel: 06 21 45 75 14</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Suivez-moi !</h4>
                    <div class="social-links">
                        <a href="https://github.com/Theoode" target="_blank"><img src="../medias/github.png"></a>
                        <a href="https://www.linkedin.com/in/th%C3%A9o-quennehen-41939423a/" target="_blank"> <img src="../medias/linkedin.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="../src/JS/particles.min.js"></script>
    <script>
        particlesJS(
            {
                "particles": {
                    "number": {
                        "value": 270,
                        "density": {
                            "enable": true,
                            "value_area": 1024.0252067743202
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            }
        )
    </script>

</body>
</html>
