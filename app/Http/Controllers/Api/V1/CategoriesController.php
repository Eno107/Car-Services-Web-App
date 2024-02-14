<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Repositories\Contracts\CategoryRepositoryContract;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoriesController extends ApiController
{
    /**
     * @var CategoryRepositoryContract
     */
    private $categoryRepository;

    /**
     * @param CategoryRepositoryContract $categoryRepository
     */
    public function __construct(CategoryRepositoryContract $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $categories = $this->categoryRepository
            ->all();

        return CategoryResource::collection($categories);
    }
}
