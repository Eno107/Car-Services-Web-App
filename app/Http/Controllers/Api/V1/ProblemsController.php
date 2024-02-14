<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Problem;
use Illuminate\Http\Request;
use App\Http\Resources\ProblemResource;
use App\Repositories\Contracts\ProblemRepositoryContract;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ProblemsController extends ApiController
{
    /**
     * @var ProblemRepositoryContract
     */
    private $problemRepository;

    /**
     * @param ProblemRepositoryContract $problemRepository
     */
    public function __construct(ProblemRepositoryContract $problemRepository)
    {
        $this->problemRepository = $problemRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $problems = $this->problemRepository
            ->with(['user.cars.make', 'comments', 'category'])
            ->paginate($request->get('per_page', 4));

        return ProblemResource::collection($problems);
    }

    /**
     * Display specified problem.
     */
    public function show(Problem $problem)
    {
        return new ProblemResource($problem);
    }
}
