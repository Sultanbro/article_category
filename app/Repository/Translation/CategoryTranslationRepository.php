<?php


namespace App\Repository\Translation;


use App\Models\CategoryTranslation;
use App\Repository\BaseRepository;
use App\Repository\Interface\Translation\CategoryTranslationRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CategoryTranslationRepository extends BaseRepository implements CategoryTranslationRepositoryInterface
{
    /**
     * UserRepository constructor.
     * @param CategoryTranslation $model
     */
    public function __construct(CategoryTranslation $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }
    /**
     * @param $categoryId
     * @return model
     */
    public function getByCategoryId($categoryId): model
    {
        return $this->model->where('category_id', $categoryId)->get();
    }
}
