<section class="box pt-4 pb-5 bg-white">

    <h2>Umiejętności</h2>

    <?php
    $skillMaxPoints = 6;
    $skills = [
        [
            "name" => "PHP",
            "points" => 4
        ],
        [
            "name" => "Laravel",
            "points" => 4
        ],
        [
            "name" => "html/css",
            "points" => 4
        ],
        [
            "name" => "Bootstrap & Tailwind.css",
            "points" => 4
        ],
        [
            "name" => "JavaScript",
            "points" => 3
        ],
        [
            "name" => "Vue",
            "points" => 2
        ],
        [
            "name" => "React",
            "points" => 1
        ],
        [
            "name" => "Pixi.js",
            "points" => 1
        ],
        [
            "name" => "C++",
            "points" => 2
        ],
        [
            "name" => "MySql",
            "points" => 3
        ],
        [
            "name" => "CI/CD",
            "points" => 2
        ],
    ];
    ?>

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
                        <div class="pt-4">
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