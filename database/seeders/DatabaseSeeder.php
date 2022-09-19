<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\bookmark;
use App\Models\Category;
use App\Models\comment;
use App\Models\Follow;
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
        Admin::create([
            'name'=>'M Sihabudin',
            'bio'=>'i love nabilah',
            'email'=>'sihab@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/sihab.jpg',
        ]);
        User::create([
            'name'=>'fathul',
            'username'=>'kirara09',
            'bio'=>'im kirara',
            'status'=>'free',
            'email'=>'fathul@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/fathul.jpg'
        ]);
        User::create([
            'name'=>'nabilah',
            'username'=>'nabilah09',
            'bio'=>'im nabilah',
            'status'=>'free',
            'email'=>'nabilah@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/buku4.jpg'
        ]);
        User::create([
            'name'=>'raihan',
            'username'=>'raihan09',
            'bio'=>'im raihan',
            'status'=>'free',
            'email'=>'raihan@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/buku6.jpg'
        ]);
        User::create([
            'name'=>'sahrul',
            'username'=>'sahrul09',
            'bio'=>'im sahrul',
            'status'=>'free',
            'email'=>'sahrul@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/buku5.jpg'
        ]);
        User::create([
            'name'=>'silvia',
            'username'=>'silvia09',
            'bio'=>'im silvia09',
            'status'=>'free',
            'email'=>'silvia@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/buku3.jpg'
        ]);
        User::create([
            'name'=>'restu',
            'username'=>'najmi09',
            'bio'=>'i love najmi',
            'status'=>'premium',
            'email'=>'restu@gmail.com',
            'password'=>bcrypt(12345),
            'image'=>'post/restu.jpg'
        ]);
        Category::create([
            'category_id'=>'1',
            'category_name'=>'Adventur'
        ]);
        Category::create([
            'category_id'=>'2',
            'category_name'=>'Romantis'
        ]);
        Post::create([
            'title'=>'Malaikat Malam',
            'category_id'=>1,
            'user_id'=>1,
            'star'=>0,
            'bookmark'=>0,
            'look'=>0,
            'status'=>'free',
            'isi'=>'is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!            ',
            'img'=>'post/buku6.jpg'
        ]);
        Post::create([
            'title'=>'Malaikat Siang',
            'category_id'=>2,
            'user_id'=>1,
            'star'=>0,
            'bookmark'=>0,
            'look'=>0,
            'status'=>'free',
            'isi'=>'is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!            ',
            'img'=>'post/buku2.jpg'
        ]);
        Post::create([
            'title'=>'Malaikat Sore',
            'category_id'=>1,
            'user_id'=>1,
            'star'=>0,
            'bookmark'=>0,
            'look'=>0,
            'status'=>'premium',
            'isi'=>'is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid! is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!is ctetur, cum suscipit sapiente laudantium aperiam odit tempora nihil rem consequuntur iste perspiciatis alias? Aliquam inventore impedit quis ullam ut saepe nesciunt perferendis debitis expedita ipsam voluptatem, rem facere aliquid!',
            'img'=>'post/buku4.jpg'
        ]);
        comment::create([
            'user_id'=>1,
            'isi_comment'=>'wah mantap tuh ceritanya menginspirasi banget wkwk',
            'post_id'=>3,
        ]);
        comment::create([
            'user_id'=>2,
            'isi_comment'=>'ekhem',
            'post_id'=>3,
        ]);
    }
    
}
