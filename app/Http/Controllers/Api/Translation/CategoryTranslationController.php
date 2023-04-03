<?php

namespace App\Http\Controllers\Api\Translation;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryIdRequest;
use App\Http\Requests\Translation\CategoryTranslationStoreRequest;
use App\Http\Requests\Translation\CategoryTranslationUpdatedRequest;
use App\Repository\Interface\Translation\CategoryTranslationRepositoryInterface;
use Illuminate\Http\Request;

class CategoryTranslationController extends Controller
{
    private CategoryTranslationRepositoryInterface $translationRepository;

    /**
     * CategoryTranslationController constructor.
     * @param CategoryTranslationRepositoryInterface $translationRepository
     */
    public function __construct(CategoryTranslationRepositoryInterface $translationRepository)
    {
        $this->translationRepository = $translationRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CategoryIdRequest $request): \Illuminate\Database\Eloquent\Model
    {
        return $this->translationRepository->getByCategoryId($request->validated());
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
    public function update(CategoryTranslationUpdatedRequest $request, int $id): bool
    {
        return $this->translationRepository->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): bool
    {
        return $this->translationRepository->deleteById($id);
    }
}
