<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IndexResource;
use App\Repository\Interface\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private CategoryRepositoryInterface $categoryRepository;

    /**
     * IndexController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return IndexResource::collection($this->categoryRepository->all());
    }
}
