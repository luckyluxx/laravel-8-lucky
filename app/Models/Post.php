<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Sukses Hidup Dengan Berhemat",
            "slug" => "sukses-hidup-dengan-berhemat",
            "author" => "Loki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores totam officia sequi aperiam provident hic id voluptatibus? Ratione corrupti animi assumenda quos sunt rem natus dolorum labore, accusamus numquam at earum fuga quaerat esse dolorem! A totam eius quasi. Vero facilis culpa ea officia magnam est quo? Odio praesentium blanditiis ipsam accusamus. Quidem modi temporibus nihil. Officia praesentium, labore veritatis possimus eveniet expedita ea sapiente quidem explicabo assumenda reprehenderit dolorum sed blanditiis alias eaque voluptatibus quae."
        ],
        [
            "title" => "Motif Penipuan Melalui Badan Amal",
            "slug" => "motif-penipuan-melalui-badan-amal",
            "author" => "Lucky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores totam officia sequi aperiam provident hic id voluptatibus? Ratione corrupti animi assumenda quos sunt rem natus dolorum labore, accusamus numquam at earum fuga quaerat esse dolorem! A totam eius quasi. Vero facilis culpa ea officia magnam est quo? Odio praesentium blanditiis ipsam accusamus. Quidem modi temporibus nihil. Officia praesentium, labore veritatis possimus eveniet expedita ea sapiente quidem explicabo assumenda reprehenderit dolorum sed blanditiis alias eaque voluptatibus quae."
        ]
    ];


    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}
