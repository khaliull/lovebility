<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Fact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $facts = Fact::select('facts.content')->inRandomOrder()->limit(3)->get();

        return view('welcome', [
          'title' => 'Пройти тесты онлайн: совместные для пар, логические, IQ, психологические',
          'metaDescription' => 'Совместные для пар покажут на сколько хорошо вы знаете друг друга, психологические тесты раскроют ваш характер и проверят уровень депрессии, а онлайн тесты на IQ и логику потренируют мышление.',
          'metaKeywords' => 'совместные тесты, совместные тесты для пары, совместные тесты, тесты на совместимость, онлайн тесты для двоих, совместные тесты для двоих',
          'facts' => $facts,
        ]);
    }

    public function articles()
    {
        $articles = Article::where('status', 1)->latest()->get();

        return view('articles.index', [
          'title' => 'Последние новости сервиса lovebility',
          'articles' => $articles
        ]);
    }

    public function articlesShow($slug)
    {

        $article = Article::where('slug', $slug)->latest()->first();

        abort_unless($article, 404);

        return view('articles.show', [
          'title' => $article->title,
          'article' => $article
        ]);
    }
}
