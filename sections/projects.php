<?php

require_once 'projectsData.php';

?>

<h2 class="text-center pt-5">Projekty</h2>

<?php
foreach($projects as $project) {
?>

<section class="box mt-4 py-4 bg-white">

    <div id="carouselExampleControls" class="carousel slide mx-auto" data-bs-ride="carousel">
        <?php if(count($project['images']) > 0) { ?>
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
                        <!-- big screens -->
                        <source srcset="<?= $image['src'] ?>.webp" type="image/jpg" media="(min-width: 450px)" width="400" height="264">
                        <source srcset="<?= $image['src'] ?>.jpg" type="image/jpg" media="(min-width: 450px)" width="400" height="264">
                        <!-- small screens -->
                        <source srcset="<?= $image['src'] ?>-min.webp" type="image/jpg" width="900" height="445">
                        <source srcset="<?= $image['src'] ?>-min.jpg" type="image/jpg" width="900" height="445">
                        <img src="<?= $image['src'] ?>-min.webp" alt="<?= $image['alt'] ?>" width="900" height="445" class="d-block w-100 img-fluid" <?= ($key > 0 ? 'loading="lazy"' : '') ?>>
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
    <?php } // close if images count is bigger than 0 ?> 


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