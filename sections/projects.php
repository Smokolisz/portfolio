<?php

$projects = [
    [
        "title" => "Sklep Internetowy",
        "link" => "https://firanywitex.pl/",
        "linkText" => "Firany Witex",
        "description" => 
            "<p>W pełni funkcjonalny sklep e-commerce, który stworzyłem od podstaw z wykorzystaniem najnowszych technologii.</p>
            <p>Wszystko zarządzane przez mój autorski CMS. Łatwe śledzenie zamówień, produktów, kategorii, artykułów na blogu. Przyjazny dla SEO i bardzo dobra wydajność, dzięki zastosowanym przeze mnie najlepszym praktykom, takim jak automatyczna optymalizacja obrazów (mała waga i dopasowana rozdzielczość), zminimalizowany kod. Użyłem też Cloudflare CDN, aby nawet przyspieszyć stronę jeszcze.</p>",
        'techStack' => ['HTML5', 'CSS3', 'JavaScript', 'Vue.js', 'Laravel', 'Bootstrap', 'Webpack', 'CloudFlare'],
        'images' => [
            [
                [
                    'pc' => './images/firany-witex/home-page.jpg',
                    'mobile' => './images/firany-witex/home-page-min.jpg',
                ],
                'alt' => 'home page',
                'heading' => 'Strona Główna',
                'description' => '',
            ],
            [
                [
                    'pc' => './images/firany-witex/category-page.jpg',
                    'mobile' => './images/firany-witex/category-page-min.jpg',
                ],
                'alt' => 'category page',
                'heading' => 'Kategorie',
                'description' => '',
            ],
            [
                [
                    'pc' => './images/firany-witex/addresses-page.jpg',
                    'mobile' => './images/firany-witex/addresses-page.jpg',
                ],
                'alt' => 'addresses page',
                'heading' => 'Książka adresowa klienta',
                'description' => 'Wygodny sposób zarządzania adresem dostawy',
            ],
            [
                [
                    'pc' => './images/firany-witex/orders-page.jpg',
                    'mobile' => './images/firany-witex/orders-page.jpg',
                ],
                'alt' => 'orders page',
                'heading' => 'Zamówienia klienta',
                'description' => 'Przejrzysta tabelka ze szczegółami zamówienia',
            ],
        ],
        'githubLink' => 'https://github.com/Smokolisz/simple-cpp-console-shooter',
    ],
];


?>



<style>

    .carousel {
        border-radius: 10px;
        overflow: hidden;
        width:80%;
    }

    .carousel::after {
        content:"";
        position:absolute;
        width: 100%;
        height: 100%;
        z-index: 9;
        pointer-events: none;
        top:0; left:0;
        -webkit-box-shadow: inset 0px -130px 40px -50px rgba(33, 37, 41, .9);
        -moz-box-shadow: inset 0px -130px 40px -50px rgba(33, 37, 41, .9);
        box-shadow: inset 0px -150px 70px -60px rgba(33, 37, 41, .9);
    }
    .carousel-caption {
        z-index: 10;
    }
    .carousel-indicators {
        z-index: 11;
    }

    @media screen and (max-width:1000px) {
        .carousel {
            width: 100%;
        }
    }

</style>

<h2 class="text-center pt-5">Projekty</h2>

<?php
foreach($projects as $project) {
?>

<section class="box mt-4 py-4 bg-white">

    <div id="carouselExampleControls" class="carousel slide mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php
            foreach($project['images'] as $key => $image) {
                echo '<button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="'.$key.'" class="'.($key == 0 ? 'active' : '').'" aria-current="true" aria-label="Slide '.$key.'"></button>';
            } ?>
        </div>
        <div class="carousel-inner">
            <?php
            foreach($project['images'] as $key => $image) {
            ?>

            <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>">
                <picture class="d-block w-100">
                    <source srcset="<?= $image[0]['pc'] ?>" type="image/jpg" media="(min-width: 450px)">
                    <source srcset="<?= $image[0]['mobile'] ?>" type="image/jpg">
                    <img src="<?= $image[0]['pc'] ?>" alt="<?= $image['alt'] ?>" height="445" width="900" class="d-block w-100 img-fluid" <?= ($key > 0 ? 'loading="lazy"' : '') ?>>
                </picture>
                <div class="carousel-caption d-none d-md-block pb-3">
                    <h5><?= $image['heading'] ?></h5>

                    <?php if($image['description'] != '') {
                        echo '<p>'.$image['description'].'</p>';
                    }
                    ?>
                    </div>
            </div>
            <?php } ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <h3 class="text-center pt-3"><?= $project['title'] ?> <span><a href="<?= $project['link'] ?>" target="_blank"><?= $project['linkText'] ?></a></span></h3>

    <?= $project['description'] ?>

    <?= 
    ($project['githubLink'] != null ? 
    '<p><a href="'.$project['githubLink'].'" target="_blank">Repozytorium</a></p>' 
    : ''
    )?>

    <?php
    foreach($project['techStack'] as $tech) {
        echo '<span class="badge bg-secondary">'.$tech.'</span> ';
    }
    ?>

</section>

<?php } ?>