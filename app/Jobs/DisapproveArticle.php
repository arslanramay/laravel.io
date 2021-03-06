<?php

namespace App\Jobs;

use App\Models\Article;

final class DisapproveArticle
{
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function handle(): Article
    {
        $this->article->approved_at = null;
        $this->article->save();

        return $this->article;
    }
}
