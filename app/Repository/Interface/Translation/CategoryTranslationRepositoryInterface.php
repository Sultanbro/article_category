<?php
namespace App\Repository\Interface\Translation;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;
use App\Repository\Interface\EloquentRepositoryInterface;

interface CategoryTranslationRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * @param int $categoryId
     * @return Model
     */
    public function getByCategoryId(int $categoryId): model;
}
