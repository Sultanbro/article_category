<?php
namespace App\Repository\Interface;

use Ramsey\Collection\Collection;
use App\Repository\Interface\EloquentRepositoryInterface;

interface ArticleRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @param int $categoryId
     * @return mixed
     */
    public function getByCategoryId(int $categoryId): mixed;
}
