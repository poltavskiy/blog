<?php
$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentences(1, true),
        'preview_text' => $faker->paragraphs(3, true),
        'detail_text' => $faker->paragraphs(20, true),
        'preview_image' => $faker->image('public/uploads/posts/resize', 150, $height = 150, null, false),
        'active' => $faker->boolean,
    ];
});