<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Moje portfolio - umiejętności i doświadczenie udokumentowane dziesiątkami projektów w różnych technologiach. Tech stack: PHP/Laravel, HTML/CSS/Bootstrap, JS/Vue/Cordova/Pixi.js">

    <title>Adam Czwordon - Programista FullStack</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="./src/index.css" rel="stylesheet">


</head>

<body class="bg-light">

    <div class="container pt-5">

        <header class="pb-4 header">
            <h1 style="line-height:35px;">Adam Czwordon<br><span class="h4">Programista <span class="d-inline-block ms-1" style="border:2px solid black;border-radius:20px;padding:1px 8px;"><span style="color:#474A8A;">Full</span>-<span style="color:#e0ca3e;">Stack</span></span></span></h1>
        </header>

        <!-- Skills -->
        <?php include "./sections/skills.php"; ?>


        <!-- Projects -->
        <?php include "./sections/projects.php"; ?>
        


        <footer class="text-center py-4 text-muted">
            &copy; Made by <a href="mailto:adamczwordon@wp.pl" class="text-secondary">Adam Czwordon</a> | <a href="https://github.com/Smokolisz" class="text-secondary" target="_blank">GitHub</a>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>