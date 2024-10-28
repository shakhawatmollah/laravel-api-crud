<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends ApiController implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth:sanctum', except: ['index', 'show'])
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return $this->successResponse($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request)
    {
      //  $article = Article::create($request->validated());

        $article = $request->user()->articles()->create($request->validated());

        return $this->successResponse($article, "Article created successfully.", 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return $this->errorResponse("Article not found.", 404);
        }

        return $this->successResponse($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, $id)
    {

        $article = Article::find($id);

        if (!$article) {
            return $this->errorResponse("Article not found.", 404);
        }

        Gate::authorize('update', $article);

        $article->update($request->validated());

        return $this->successResponse($article, "Article updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return $this->errorResponse("Article not found.", 404);
        }

        Gate::authorize('update', $article);

        $article->delete();
        return $this->successResponse(null, "Article deleted successfully.");
    }

}
