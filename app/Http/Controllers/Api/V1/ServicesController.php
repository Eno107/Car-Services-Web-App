<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Resources\ServiceResource;
use App\Repositories\Contracts\ServiceRepositoryContract;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServicesController extends ApiController
{
    /**
     * @var ServiceRepositoryContract
     */
    private $serviceRepository;

    /**
     * @param ServicemRepositoryContract $serviceRepository
     */
    public function __construct(ServiceRepositoryContract $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $services = $this->serviceRepository
            ->paginate($request->get('per_page', 4));


        return ServiceResource::collection($services);
    }

    /**
     * Display specified problem.
     */
    public function show(Service $service)
    {
        return new ServiceResource($service);
    }
}
