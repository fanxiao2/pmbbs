<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    
    // 'name' => $faker->name,
    $sentence = $faker->sentence();
    //随机取一个月时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间（更新时间比创建时间永远都晚）
    $created_at = $faker->dateTimeThisMonth($updated_at);
    return [
        'title' => $sentence,
        'body' => $faker->text(),
        'excerpt' => $sentence,
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
