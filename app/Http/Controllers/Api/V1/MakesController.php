<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Make;
use Illuminate\Http\Request;
use App\Http\Resources\MakeResource;
use App\Repositories\Contracts\MakeRepositoryContract;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MakesController extends ApiController
{
    /**
     * @var MakeRepositoryContract
     */
    private $makeRepository;

    /**
     * @param MakeRepositoryContract $makeRepository
     */
    public function __construct(MakeRepositoryContract $makeRepository)
    {
        $this->makeRepository = $makeRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $makes = $this->makeRepository
            ->all();


        return makeResource::collection($makes);
    }
}
