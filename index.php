<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adam Czwordon Portfolio - umiejętności i doświadczenie udokumentowane dziesiątkami projektów w różnych technologiach. Tech stack: PHP/Laravel, HTML/CSS/Bootstrap, JS/Vue/Cordova/Pixi.js">

    <title>Adam Czwordon - Programista Full Stack</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./src/css/index.css" rel="stylesheet"> -->

    <!-- <link href="./css/index.min.css" rel="stylesheet"> -->

    <link href="./dist/style.css" rel="stylesheet">


    <?php
    require_once './src/sections/projectsData.php';

    $websiteURL = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    foreach($projects as $project) {
        foreach($project['images'] as $image) {
            echo '<link rel="preload" href="'.$websiteURL.$image['src'].'.webp" as="image">';
        }
    }
    ?>

    <script src="./dist/index.js" defer></script>

</head>

<body class="bg-light">

    <main class="container pt-5" itemscope itemtype="http://schema.org/Person">

        <header class="pb-4 header">
            <h1 style="line-height:35px;">
                <span itemprop="name">Adam Czwordon</span>
                <br>
                <span class="h4" itemscope itemtype="http://schema.org/Event/Job">Programista
                    <span class="d-inline-block ms-1 profession" itemprop="name">
                        <span style="color:#474A8A;">Full</span>-<span class="stack">Stack</span>
                    </span>
                </span>
            </h1>
        </header>

        <!-- <p itemprop="description">Strona dokumentująca moje doświadczenie w IT</p> -->

        <!-- Skills -->
        <?php include "./src/sections/skills.php"; ?>


        <!-- Projects -->
        <?php include "./src/sections/projects.php"; ?>


        <footer class="text-center py-4 text-secondary">
            &copy; Made by <a href="mailto:adamczwordon@wp.pl" class="text-secondary" itemprop="email">Adam Czwordon</a> | <a href="https://github.com/Smokolisz" class="text-secondary" target="_blank" itemprop="url" rel="me">GitHub</a>
        </footer>

    </main>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->

</body>

</html>