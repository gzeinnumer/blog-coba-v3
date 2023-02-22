<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::create([
//         'name' => 'Miftahurrahmi',
//         'email' => "miftahurrahmi@email.com",
//         'password' => bcrypt('123456')
//        ]);
//        User::create([
//         'name' => 'Jeni',
//         'email' => "jeni@email.com",
//         'password' => bcrypt('123456')
//        ]);

//        User::create([
//         'name' => 'Delima',
//         'email' => "delima@email.com",
//         'password' => bcrypt('123456')
//        ]);

//        Category::create([
//             'name' => 'Project Web',
//             'slug' => 'project-web'
//        ]);
//        Category::create([
//         'name' => 'Basis Data',
//         'slug' => 'basis-data'
//    ]);

//    Post::create([
//         'category_id' => 1,
//         'user_id' =>1,
//         'title' => 'Judul Pertama',
//         'slug' =>'judul-pertama',
//         'excerpt' => 'Lorem ipsum dolor sit ',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, architecto expedita. Iure voluptatem illum earum odio beatae esse aliquid, iste quibusdam quae laborum, asperiores quia. Commodi ipsum quasi voluptatibus quis beatae maiores sunt ut repellat doloribus atque ducimus, totam error cumque officia? Eius rem reprehenderit alias iusto quod, sequi repellat, earum est soluta fugiat qui sint atque laboriosam consequuntur saepe omnis quae. Similique minima officia velit ipsum molestias fugiat est asperiores. Sit non suscipit omnis officiis beatae porro nulla dolores autem quasi eum, quos fuga sed dolor dolorem labore voluptate, iste consequuntur aliquid doloremque vero. Totam dicta, exercitationem est voluptas adipisci aperiam quae placeat voluptates nulla sequi vel omnis, id deserunt aliquam tempore sit accusamus explicabo autem perspiciatis? Nostrum officiis commodi iusto ex delectus corrupti architecto doloremque earum, provident rem ad possimus modi. Tempora repellendus soluta assumenda architecto cum esse odio eligendi ab deleniti quia labore veniam vero non ad, minima aut doloremque, eaque obcaecati corrupti facilis dolorem nam officia aspernatur. Necessitatibus quasi earum aspernatur explicabo amet ipsa? Quia optio, enim cupiditate impedit maiores tempora voluptates quam sapiente animi velit quo eaque numquam, obcaecati adipisci saepe ducimus esse pariatur ratione quaerat? Illum rerum placeat quasi inventore eligendi omnis ea nemo.'
//    ]);

//    Post::create([
//     'category_id' => 2,
//     'user_id' =>1,
//     'title' => 'Judul Kedua',
//     'slug' =>'judul-kedua',
//     'excerpt' => 'Lorem ipsum dolor sit amet',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, architecto expedita. Iure voluptatem illum earum odio beatae esse aliquid, iste quibusdam quae laborum, asperiores quia. Commodi ipsum quasi voluptatibus quis beatae maiores sunt ut repellat doloribus atque ducimus, totam error cumque officia? Eius rem reprehenderit alias iusto quod, sequi repellat, earum est soluta fugiat qui sint atque laboriosam consequuntur saepe omnis quae. Similique minima officia velit ipsum molestias fugiat est asperiores. Sit non suscipit omnis officiis beatae porro nulla dolores autem quasi eum, quos fuga sed dolor dolorem labore voluptate, iste consequuntur aliquid doloremque vero. Totam dicta, exercitationem est voluptas adipisci aperiam quae placeat voluptates nulla sequi vel omnis, id deserunt aliquam tempore sit accusamus explicabo autem perspiciatis? Nostrum officiis commodi iusto ex delectus corrupti architecto doloremque earum, provident rem ad possimus modi. Tempora repellendus soluta assumenda architecto cum esse odio eligendi ab deleniti quia labore veniam vero non ad, minima aut doloremque, eaque obcaecati corrupti facilis dolorem nam officia aspernatur. Necessitatibus quasi earum aspernatur explicabo amet ipsa? Quia optio, enim cupiditate impedit maiores tempora voluptates quam sapiente animi velit quo eaque numquam, obcaecati adipisci saepe ducimus esse pariatur ratione quaerat? Illum rerum placeat quasi inventore eligendi omnis ea nemo.'
// ]);

// Post::create([
//     'category_id' => 2,
//     'user_id' =>2,
//     'title' => 'Judul Ketiga',
//     'slug' =>'judul-ketiga',
//     'excerpt' => 'Lorem ipsum dolor ',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, architecto expedita. Iure voluptatem illum earum odio beatae esse aliquid, iste quibusdam quae laborum, asperiores quia. Commodi ipsum quasi voluptatibus quis beatae maiores sunt ut repellat doloribus atque ducimus, totam error cumque officia? Eius rem reprehenderit alias iusto quod, sequi repellat, earum est soluta fugiat qui sint atque laboriosam consequuntur saepe omnis quae. Similique minima officia velit ipsum molestias fugiat est asperiores. Sit non suscipit omnis officiis beatae porro nulla dolores autem quasi eum, quos fuga sed dolor dolorem labore voluptate, iste consequuntur aliquid doloremque vero. Totam dicta, exercitationem est voluptas adipisci aperiam quae placeat voluptates nulla sequi vel omnis, id deserunt aliquam tempore sit accusamus explicabo autem perspiciatis? Nostrum officiis commodi iusto ex delectus corrupti architecto doloremque earum, provident rem ad possimus modi. Tempora repellendus soluta assumenda architecto cum esse odio eligendi ab deleniti quia labore veniam vero non ad, minima aut doloremque, eaque obcaecati corrupti facilis dolorem nam officia aspernatur. Necessitatibus quasi earum aspernatur explicabo amet ipsa? Quia optio, enim cupiditate impedit maiores tempora voluptates quam sapiente animi velit quo eaque numquam, obcaecati adipisci saepe ducimus esse pariatur ratione quaerat? Illum rerum placeat quasi inventore eligendi omnis ea nemo.'
// ]);

// Post::create([
//     'category_id' => 2,
//     'user_id' =>3,
//     'title' => 'Judul Keempat',
//     'slug' =>'judul-keempat',
//     'excerpt' => 'Lorem ipsum dolor ',
//     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, architecto expedita. Iure voluptatem illum earum odio beatae esse aliquid, iste quibusdam quae laborum, asperiores quia. Commodi ipsum quasi voluptatibus quis beatae maiores sunt ut repellat doloribus atque ducimus, totam error cumque officia? Eius rem reprehenderit alias iusto quod, sequi repellat, earum est soluta fugiat qui sint atque laboriosam consequuntur saepe omnis quae. Similique minima officia velit ipsum molestias fugiat est asperiores. Sit non suscipit omnis officiis beatae porro nulla dolores autem quasi eum, quos fuga sed dolor dolorem labore voluptate, iste consequuntur aliquid doloremque vero. Totam dicta, exercitationem est voluptas adipisci aperiam quae placeat voluptates nulla sequi vel omnis, id deserunt aliquam tempore sit accusamus explicabo autem perspiciatis? Nostrum officiis commodi iusto ex delectus corrupti architecto doloremque earum, provident rem ad possimus modi. Tempora repellendus soluta assumenda architecto cum esse odio eligendi ab deleniti quia labore veniam vero non ad, minima aut doloremque, eaque obcaecati corrupti facilis dolorem nam officia aspernatur. Necessitatibus quasi earum aspernatur explicabo amet ipsa? Quia optio, enim cupiditate impedit maiores tempora voluptates quam sapiente animi velit quo eaque numquam, obcaecati adipisci saepe ducimus esse pariatur ratione quaerat? Illum rerum placeat quasi inventore eligendi omnis ea nemo.'
// ]);


         
User::factory(4)->create();
Category::create([
    'name' => 'Project Web',
    'slug' => 'project-web'
]);

Category::create([
        'name' => 'Basis Data',
        'slug' => 'basis-data'
   ]);
   Post::factory(7)->create();
  

    }
}
