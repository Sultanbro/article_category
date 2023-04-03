<?php


namespace App\Repository;


use App\Models\Category;
use App\Repository\BaseRepository;
use App\Repository\Interface\CategoryRepositoryInterface;
use App\Repository\Interface\Translation\CategoryTranslationRepositoryInterface;
use Illuminate\Support\Facades\App;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    private CategoryTranslationRepositoryInterface $translationRepository;

    /**
     * UserRepository constructor.
     * @param Category $model
     * @param CategoryTranslationRepositoryInterface $translationRepository
     */
    public function __construct(Category $model, CategoryTranslationRepositoryInterface $translationRepository)
    {
        parent::__construct($model);
        $this->model = $model;
        $this->translationRepository = $translationRepository;
    }

}
