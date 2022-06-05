<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function like(Article $article)
    {
        $article->likes = $article->likes + 1;
        $article->save();
        return response()->json(['likes' => $article->likes]);
    }

    public function show(Article $article)
    {
        $article->shows = $article->shows + 1;
        $article->save();
        return response()->json(['shows' => $article->shows]);
    }

    public function addcomment(Request $request, Article $article)
    {
        $validator   = Validator::make($request->all(), [
            'subject' => 'required|min:2',
            'body' => 'required|min:2',
        ]);
        if ($validator->fails()) {
            return response()->json(['fails' => $validator->errors()], 400);
        }
        $validated = $validator->validated();
        $article->articleComments()->create($validated);
        return response()->json(['success' => 'Ваше сообщение успешно отправлено']);
    }
}
