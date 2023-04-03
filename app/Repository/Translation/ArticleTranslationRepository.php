<?php


namespace App\Repository\Translation;


use App\Models\Article;
use App\Repository\BaseRepository;
use App\Repository\Interface\Translation\ArticleTranslationRepositoryInterface;

class ArticleTranslationRepository extends BaseRepository implements ArticleTranslationRepositoryInterface
{
    /**
     * UserRepository constructor.
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param $articleId
     * @return mixed
     */
    public function getByArticleId($articleId): mixed
    {
        return $this->model->where('article_id', $articleId)->get();
    }
}
