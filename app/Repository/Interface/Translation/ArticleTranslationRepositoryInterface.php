<?php
namespace App\Repository\Interface\Translation;

use Ramsey\Collection\Collection;
use App\Repository\Interface\EloquentRepositoryInterface;

interface ArticleTranslationRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * @param $articleId
     * @return mixed
     */
    public function getByArticleId($articleId): mixed;
}
