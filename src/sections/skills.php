<?php
require_once "skillsData.php";
?>

<section class="box pt-4 pb-5 bg-white" itemscope itemtype="http://schema.org/ItemList">

    <h2 itemprop="name">Umiejętności</h2>
    <p class="text-body">Punkty sygnalizują moje poczucie pewności w danych technologiach</p>

    <div class="row">

        <?php

        $skillsCount = count($skills);
        $columns = 3;
        $skillsInColumns = $skillsCount / $columns;
        $skillIndex = 0;


        for ($i = 0; $i < 3; $i++) {
            echo '<div class="col-12 col-md-6 col-lg-4">';

            for ($j = 0; $j < $skillsInColumns && $skillIndex < $skillsCount; $j++) {

                $skill = $skills[$skillIndex++];

                $pointsHtml = '';
                for ($k = 0; $k < $skillMaxPoints; $k++) {
                    $pointsHtml .= '<div class="me-1 skill-point ' . ($k < $skill['points'] ? 'skill-earned' : '') . '"></div>';
                }

                echo '
                        <div class="pt-4" itemprop="itemListElement">
                            <div class="h5">' . $skill['name'] . '</div>
                            <div class="d-flex">' . $pointsHtml . '</div>
                        </div>
                        ';
            }

            echo '</div>';
        }

        ?>

    </div>

</section>