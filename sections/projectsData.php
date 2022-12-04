<?php


$projects = [
    // FIRANY WITEX
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
                'src' => './images/firany-witex/home-page',
                'alt' => 'home page',
                'heading' => 'Strona Główna',
                'description' => '',
            ],
            [
                'src' => './images/firany-witex/category-page',
                'alt' => 'category page',
                'heading' => 'Kategorie',
                'description' => '',
            ],
            [
                'src' => './images/firany-witex/addresses-page',
                'alt' => 'addresses page',
                'heading' => 'Książka adresowa klienta',
                'description' => 'Wygodny sposób zarządzania adresem dostawy',
            ],
            [
                'src' => './images/firany-witex/cart-page',
                'alt' => 'orders page',
                'heading' => 'Zamówienia klienta',
                'description' => 'Przejrzysta tabelka ze szczegółami zamówienia',
            ],
            [
                'src' => './images/firany-witex/orders-page',
                'alt' => 'orders page',
                'heading' => 'Zamówienia klienta',
                'description' => 'Przejrzysta tabelka ze szczegółami zamówienia',
            ],
            [
                'src' => './images/firany-witex/admin-orders-page',
                'alt' => 'orders page',
                'heading' => 'Zamówienia klienta',
                'description' => 'Przejrzysta tabelka ze szczegółami zamówienia',
            ],
            [
                'src' => './images/firany-witex/messages-page',
                'alt' => 'orders page',
                'heading' => 'Zamówienia klienta',
                'description' => 'Przejrzysta tabelka ze szczegółami zamówienia',
            ],
            
        ],
        'githubLink' => null,
    ],




    // Zombie Apocalypse
    [
        "title" => "Gra Multiplayer",
        "link" => "https://tim-bunnyhug-29539.herokuapp.com/?nick=xstrikerx",
        "linkText" => "Zombie Apocalypse",
        "description" => 
            "<p>Gra multiplayer dla dwóch osób.</p>
             <p>Gra dla dwóch graczy polegająca na przetrwaniu jak najdłużej w obliczu nadciągającej hordy zombie</p>",
        'techStack' => ['JavaScript', 'Pixi.js', 'Node.js', 'Express', 'Buzzer.js', 'Nipple.js'],
        'images' => [
            [
                'src' => './images/zombie-apocalypse/game',
                'alt' => 'multiplayer gamewith surviovrs and zombies',
                'heading' => 'Gra multiplayer',
                'description' => 'Strzelaj do zombie i nie daj się ugryźć',
            ],
            [
                'src' => './images/zombie-apocalypse/menu',
                'alt' => 'menu and options of the game',
                'heading' => 'Menu gry',
                'description' => 'Wybór nicku i ranking najlepszych graczy',
            ],
        ],
        'githubLink' => 'https://github.com/Smokolisz/Zombie-Apocalypse',
    ],
];

?>