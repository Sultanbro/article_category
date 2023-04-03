<?php

namespace App\Http\Controllers\Api\Translation;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleIdRequest;
use App\Http\Requests\Translation\ArticleTranslationStoreRequest;
use App\Http\Requests\Translation\CategoryTranslationStoreRequest;
use App\Repository\Interface\Translation\ArticleTranslationRepositoryInterface;
use Illuminate\Http\Request;

class ArticleTranslationController extends Controller
{

    private ArticleTranslationRepositoryInterface $translationRepository;

    /**
     * ArticleTranslationController constructor.
     * @param ArticleTranslationRepositoryInterface $translationRepository
     */
    public function __construct(ArticleTranslationRepositoryInterface $translationRepository)
    {
        $this->translationRepository = $translationRepository;
    }

    /**
     * Display a listing of the resource.
     * @param ArticleIdRequest $request
     */
    public function index(ArticleIdRequest $request)
    {
        return $this->translationRepository->getByArticleId($request->validated());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryTranslationStoreRequest $request): \Illuminate\Database\Eloquent\Model
    {
        return $this->translationRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): ?\Illuminate\Database\Eloquent\Model
    {
        return $this->translationRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleTranslationStoreRequest $request, int $id): bool
    {
        return $this->translationRepository->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): mixed
    {
        return $this->translationRepository->deleteById($id);
    }
}
