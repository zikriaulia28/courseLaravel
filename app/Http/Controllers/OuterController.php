<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class OuterController extends Controller
{
    public function index()
    {
        $articles = Articles::orderBy('id', 'desc')->paginate(6);
        $lastItem = $articles->lastPage();
        return view('home', [
            'title' => 'Ini adalah Seluruh Articles',
            'articles' => $articles,
            'meta'     => [
                'currentPage'   => $articles->currentPage(),
                'nextPage'      => $articles->nextPageUrl(),
                'prevPage'      => $articles->previousPageUrl(),
            ],
            'test'          => $articles->getUrlRange(1, $lastItem),
        ]);
    }

    public function article_detail($id)
    {
        return view('article', [
            'title' => 'ARTIKEL ' . $id,
            'article' => Articles::find($id)
        ]);
    }
}
