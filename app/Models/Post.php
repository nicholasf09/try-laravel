<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
            [
            "title" => "Title Post Pertama",
            "author" => "Charles Fransisco",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam excepturi consectetur sed quo harum necessitatibus hic possimus, laboriosam ab quos vel eligendi fugit nulla dolore illum quas, nemo temporibus fugiat consequuntur! Maiores fugit iste libero magni, provident reiciendis totam itaque laboriosam, quia consequuntur a iusto repellat dolor eveniet nostrum voluptatem similique, sed blanditiis quidem cumque consectetur minima? Voluptatum molestiae fuga amet quam, inventore necessitatibus error laborum architecto soluta nihil voluptas odit. Laudantium reprehenderit, harum officia optio aperiam ducimus consequuntur veniam?"
            ],
            [
            "title" => "Title Post Kedua",
            "author" => "Felix Sanjaya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam excepturi consectetur sed quo harum necessitatibus hic possimus, laboriosam ab quos vel eligendi fugit nulla dolore illum quas, nemo temporibus fugiat consequuntur! Maiores fugit iste libero magni, provident reiciendis totam itaque laboriosam, quia consequuntur a iusto repellat dolor eveniet nostrum voluptatem similique, sed blanditiis quidem cumque consectetur minima? Voluptatum molestiae fuga amet quam, inventore necessitatibus error laborum architecto soluta nihil voluptas odit. Laudantium reprehenderit, harum officia optio aperiam ducimus consequuntur veniam?"
            ], 
        ];

    public static function all()
    {
        return self::$blog_posts;
    }
}
