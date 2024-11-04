<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller{

public function index()
{

      return view('articles.index', compact('articles'));
}
}
