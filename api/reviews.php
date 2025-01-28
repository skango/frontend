<?php
header("Content-Type: application/json");

// მომხმარებლის შეფასებების მონაცემები
$reviews = [
    [
        "name" => "Corqueboard",
        "rating" => 5,
        "comment" => "Skango Games-ის თამაში ძალიან მაგარი იყო! ნამდვილად ვისიამოვნე.",
        "date" => "2025-01-27"
    ],
    [
        "name" => "Retro Fusion Games",
        "rating" => 5,
        "comment" => "საუკეთესო კომპანია!",
        "date" => "2025-01-26"
    ],
    [
        "name" => "Mariam Cimintia",
        "rating" => 5,
        "comment" => "საუკეთესო გამოცდილება!",
        "date" => "2025-01-25"
    ]
];

// JSON ფორმატით მონაცემების დაბრუნება
echo json_encode($reviews);
?>
