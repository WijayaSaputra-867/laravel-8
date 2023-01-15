<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Andriansyah",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, earum hic facilis molestias eveniet at? Modi quasi nisi alias sunt reiciendis nesciunt perspiciatis quidem, sapiente error id aspernatur quae dicta dignissimos doloribus soluta exercitationem. Quam eligendi sint minus quas, voluptates deleniti delectus blanditiis facilis incidunt numquam tenetur maxime, quo unde laborum doloremque reiciendis libero illum maiores repudiandae? Sapiente ut incidunt, nisi culpa obcaecati natus rem dolore blanditiis, error tempora maiores sit consectetur dignissimos repellat hic dolores accusamus quas. Deleniti, totam iste explicabo delectus accusantium assumenda voluptatum doloremque adipisci laboriosam amet itaque eius eveniet ea, nihil quasi aperiam. Culpa, maxime sit."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dimas Cahyo Nugroho",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa natus et facilis aliquam consequuntur. Dolor labore sit accusantium. Laudantium harum quae nobis adipisci molestiae sequi voluptatem repudiandae itaque explicabo vel repellendus maiores quod impedit quidem, ipsum voluptates, deleniti magni iure facilis eos consequatur tenetur minima quo aliquid. Optio temporibus cum culpa, esse illum blanditiis, id iusto iure voluptates nihil eum, nesciunt libero! Quos quidem quis magni repudiandae aliquid reiciendis, hic quod rerum corporis aperiam iste laudantium asperiores magnam totam perspiciatis expedita dolor blanditiis, eius quisquam dolorem ab rem accusantium officiis. Distinctio sequi itaque ab totam facere eum cumque culpa earum deleniti hic! Culpa repellendus maxime tempora quia! Sed possimus sequi, dolorum culpa libero harum. Veritatis quisquam, soluta fuga vero ab quasi incidunt delectus beatae modi deleniti illum iure ipsam rem dolor! Harum, temporibus distinctio. Doloribus, sunt distinctio corrupti reiciendis possimus, dignissimos, accusantium cupiditate consectetur ipsum provident libero. Magnam, obcaecati quos?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    public static function findtitle($slug){
        $posts = static::all();
        $post = $posts->firstWhere('slug', $slug);
        $title = $post['title'];
        return $title;
    }
}
