<?php

use Illuminate\Database\Seeder;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Article::truncate();
        DB::table('articles')->truncate();

        Article::create([
           'title'          =>  'المقال التجريبي الاول',
           'author'         =>  'سهام',
           'description'    =>  'هذا هو المقال التجريبي الاول هذا هو المقال التجريبي الاول هذا هو المقال التجريبي الاول هذا هو المقال التجريبي الازل هذا هو المقاالمثال التجريبي الاو '
        ]);

        Article::create([
            'title'         =>  'مقال تجريبي ثاني',
            'author'        =>  'أماني',
            'description'   =>  'تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني تفاصيل مقال تجريبي ثاني',
        ]);
        Article::create([
            'title'         =>  'مقال تجريبي ثالث',
            'author'        =>  'ندا',
            'description'   =>  'تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث تفاصيل مقال تجريبي ثالث',
        ]);
        Article::create([
            'title'         =>  'مقال تجريبي رابع',
            'author'        =>  'أحمد',
            'description'   =>  'تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع تفاصيل مقال تجريبي رابع',
        ]);
        Article::create([
            'title'         =>  'مقال تجريبي خامس',
            'author'        =>  'عمر',
            'description'   =>  'تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس تفاصيل مقال تجريبي خامس',
        ]);
        
    }
}

