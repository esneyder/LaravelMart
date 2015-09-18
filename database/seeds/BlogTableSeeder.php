<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogTableSeeder extends DatabaseSeeder {

    public function run() {
        
        $faker = $this->getFaker();
        
        
        $blogs = [ "Sample Blog" => "sample-blog" ];
        

        foreach($blogs as $title => $url )
        {
             Blog::create([
                    "title" => $title,
                    "url"  => $url,
                    "status"  => "live",
                    "visibility"  => "public",
                    "body"  =>  $faker->realtext(3000,4),
                    "type"  => "html",
                    ]);
        }


    }

}
