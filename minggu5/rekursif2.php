<?php

$menu =[
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
        [
            "nama" => "Kuliner"
        ],
        [
            "nama" => "Hiburan"
        ]
    ]
        ],
        [
            "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];

    // function tampilkanMenuBertingkat (array $menu){
    // echo "<ul>";
    // foreach ($menu as $key => $item){
    //     echo "<li>{$item['nama']}</li>";
    // }

    // echo "</ul>";
    // }

    
    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $item) {
            echo "<li>{$item['nama']}</li>";
    
            // Cek apakah ada subMenu dan panggil fungsi rekursif
            if (array_key_exists('subMenu', $item) && $item['subMenu'] !== null) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
        }
        echo "</ul>";
    }

tampilkanMenuBertingkat($menu);

?>