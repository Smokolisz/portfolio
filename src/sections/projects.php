<h2 class="text-center pt-5">Projekty</h2>

<?php
foreach($projects as $projectId => $project) {
?>

<section class="box mt-4 py-4 bg-white" itemscope itemtype="http://schema.org/CreativeWork">

    <div id="carousel-<?= $projectId ?>" class="carousel slide mx-auto" data-bs-ride="carousel">
        <?php if(count($project['images']) > 0) { ?>
            <div class="carousel-indicators">
                <?php
                foreach($project['images'] as $key => $image) {
                    echo '<button type="button" data-bs-target="#carousel-'.$projectId.'" data-bs-slide-to="'.$key.'" class="'.($key == 0 ? 'active' : '').'" aria-current="true" aria-label="Slide '.$key.'"></button>';
                } ?>
            </div>
            <div class="carousel-inner">
                <?php
                foreach($project['images'] as $key => $image) {
                ?>

                <div class="carousel-item <?= $key == 0 ? 'active' : '' ?>" itemscope itemtype="http://schema.org/Thing">
                    <picture class="d-block w-100" itemprop="image">
                        <!-- big screens -->
                        <source srcset="<?= $image['src'] ?>.webp" type="image/jpg" media="(min-width: 450px)" width="400" height="264">
                        <source srcset="<?= $image['src'] ?>.jpg" type="image/jpg" media="(min-width: 450px)" width="400" height="264">
                        <!-- small screens -->
                        <source srcset="<?= $image['src'] ?>-min.webp" type="image/jpg" width="900" height="445">
                        <source srcset="<?= $image['src'] ?>-min.jpg" type="image/jpg" width="900" height="445">
                        <img src="<?= $image['src'] ?>-min.webp" alt="<?= $image['alt'] ?>" width="900" height="445" class="d-block w-100 img-fluid" <?= ($key > 0 ? 'loading="lazy"' : '') ?> itemprop="CreativeWork">
                    </picture>
                    <div class="carousel-caption d-none d-md-block pb-3">
                        <h4 class="h5"><?= $image['heading'] ?></h4>

                        <?php if($image['description'] != '') {
                            echo '<p>'.$image['description'].'</p>';
                        }
                        ?>
                        </div>
                </div>
                <?php } ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?= $projectId ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?= $projectId ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php } // close if images count is bigger than 0 ?> 


    <h3 class="text-center pt-3 h3" itemprop="name"><?= $project['title'] ?> <a href="<?= $project['link'] ?>" target="_blank"><?= $project['linkText'] ?></a></h3>

    <?= $project['description'] ?>

    <?= 
    ($project['githubLink'] != null ? 
    '<p><a href="'.$project['githubLink'].'" target="_blank" itemprop="url" rel="me">Repozytorium</a></p>' 
    : ''
    )?>

    <?php
    foreach($project['techStack'] as $tech) {
        echo '<span class="badge bg-secondary" itemprop="keywords">'.$tech.'</span> ';
    }
    ?>

</section>

<?php } ?>