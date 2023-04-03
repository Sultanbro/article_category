<?php


namespace App\Repository;


use App\Models\Article;
use App\Repository\BaseRepository;
use App\Repository\Interface\ArticleRepositoryInterface;

class ArticleRepository extends BaseRepository implements ArticleRepositoryInterface
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
     * @param int $categoryId
     * @return mixed
     */
    public function getByCategoryId(int $categoryId): mixed
    {
        return $this->model->where('category_id', $categoryId)->get();
    }
}
