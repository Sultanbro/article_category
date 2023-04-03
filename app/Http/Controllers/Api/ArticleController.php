<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Http\Requests\CategoryIdRequest;
use App\Repository\Interface\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private ArticleRepositoryInterface $articleRepository;

    /**
     * ArticleController constructor.
     * @param ArticleRepositoryInterface $articleRepository
     */
    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(CategoryIdRequest $request): mixed
    {
        return $this->articleRepository->getByCategoryId($request->validated());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleStoreRequest $request): \Illuminate\Database\Eloquent\Model
    {
        return $this->articleRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): ?\Illuminate\Database\Eloquent\Model
    {
        return $this->articleRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleUpdateRequest $request, int $id): bool
    {
        return $this->articleRepository->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): bool
    {
        return $this->destroy($id);
    }
}
