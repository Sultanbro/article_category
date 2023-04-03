<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repository\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryRepository $categoryRepository;

    /**
     * CategoryController constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->categoryRepository->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request): \Illuminate\Database\Eloquent\Model
    {
        return $this->categoryRepository->create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): ?\Illuminate\Database\Eloquent\Model
    {
        return $this->categoryRepository->find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, int $id): bool
    {
        return $this->categoryRepository->update($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): bool
    {
        return $this->categoryRepository->deleteById($id);
    }
}
