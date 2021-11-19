<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        return "Executed successfully";
    }

    public function select()
    {
        // $result = DB::select("SELECT * FROM books");
        $result = DB::table('books')->get();

        // $result = DB::table('books')->where('harga', '>', 200000)->orderBy(
        //     'harga',
        //     'desc'
        // )->get();
        // $result = DB::table('books')->select('judul', 'penerbit AS publisher')->get();

        // $result = DB::table('books')->orderBy('harga', 'desc')->skip(1)->take(2)->get();


        // $result = DB::table('books')->first();

        // $result = DB::table('books')->find(3);

        return view('booklist', ['books' => $result]);
    }

    //     public function insert()
    //     {
    //         $result = DB::insert(
    //             "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit) VALUES('The Bench', '9780593434512', 'Growing Up & Facts of Life', 181500, 40,
    // 'Random House Books for Young Readers')"
    //         );
    //         dump($result);
    //     }

    public function insert()
    {
        // ...
        $result = DB::table('books')->insert([
            [
                'judul' => 'The Bench',
                'ISBN' => '9780593434512',
                'kategori' => 'Growing Up & Facts of Life',
                'harga' => 181500,
                'halaman' => 40,
                'penerbit' => 'Random House Books for Young Readers'
            ],
            [
                'judul' => 'Economic Dignity',
                'ISBN' => '9781984879875',
                'kategori' => 'Business & Leadership',
                'harga' => 222900,
                'halaman' => 384,
                'penerbit' => 'Penguin Press'
            ],
            [
                'judul' => 'Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking',
                'ISBN' => '9781592339754',
                'kategori' => 'Meat Cooking',
                'harga' => 310750,
                'halaman' => 208,
                'penerbit' => 'Harvard Common Press'
            ],
            [
                'judul' => 'The 4-Hour Workweek: Escape 9-5, Live Anywhere, and Join the New Rich',
                'ISBN' => '9780307465351',
                'kategori' => 'Self-Improvement',
                'harga' => 253500,
                'halaman' => 448,
                'penerbit' => 'Harmony'
            ]
        ]);
    }


    public function insertTimestamp()
    {
        $result = DB::insert(
            "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit,created_at, updated_at)VALUES ('Economic Dignity', '9781984879875', 'Business & Leadership',
222900, 384, 'Penguin Press', NOW(), NOW())"
        );
        dump($result);
    }

    public function insertPrepared()
    {
        $result = DB::insert(
            "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit) VALUES
(?, ?, ?, ?, ?, ?)",
            [
                'Food by Fire: Grilling and BBQ with Derek Wolf of Over the Fire Cooking',
                '9781592339754',
                'Meat Cooking',
                310750,
                208,
                'Harvard Common Press'
            ]
        );
        dump($result);
    }

    public function insertBinding()
    {
        $result = DB::insert(
            "INSERT INTO books (judul, ISBN, kategori, harga, halaman, penerbit) VALUES
(:title, :isbn13, :category, :price, :pages, :publisher)",
            [
                'title' => 'The 4-Hour Workweek: Escape 9-5, Live Anywhere, and Join the
New Rich',
                'isbn13' => '9780307465351',
                'category' => 'Self-Improvement',
                'price' => 253500,
                'pages' => 448,
                'publisher' => 'Harmony'
            ]
        );
        dump($result);
    }

    public function update()
    {
        // $result = DB::update(
        //     "UPDATE books SET kategori = 'Cooking' WHERE ISBN = ?",
        //     ['9781592339754']
        // );
        // dump($result);

        //

        $result = DB::table('books')->updateOrInsert(
            ['ISBN' => '9784757564558'],
            [
                'judul' => 'あいだいろ画集 地縛少年花子くん',
                'kategori' => '',
                'harga' => 424000,
                'halaman' => 112,
                'penerbit' => 'スクウェア・エニックス'
            ]
        );
        dump($result);
    }


    public function delete()
    {
        // $result = DB::delete("DELETE FROM books WHERE ISBN = ?", ['9781592339754']);
        // dump($result);
        $result = DB::table('books')->where('ISBN', '=', '9781592339754')->delete();
        dump($result);
    }

    public function statement()
    {
        $result = DB::statement("TRUNCATE books");
        return ('Tabel sudah kosong!');
    }
}
