<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Repositories\Contracts\AppointmentRepositoryContract;
use Illuminate\Http\Request;
use App\Repositories\Contracts\ServiceRepositoryContract;

class ServicesController extends Controller
{
    /**
     * @var ServiceRepositoryContract
     * @var AppointmentRepositoryContract 
     */
    private $serviceRepository;
    private $appointmentRepository;

    /**
     * Create a new controller instance.
     *
     * @param ServiceRepositoryContract $serviceRepository
     */
    public function __construct(ServiceRepositoryContract $serviceRepository, AppointmentRepositoryContract $appointmentRepository)
    {
        $this->serviceRepository = $serviceRepository;
        $this->appointmentRepository = $appointmentRepository;
    }

    /**
     * Display a paginated list of services.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $services = $this->serviceRepository
            ->with(['categories', 'makes'])
            ->paginate($request->get('per_page', 12));

        return view('services/index', ['services' => $services]);
    }

    /**
     * Display the specified service.
     *
     * @param Service $service
     * @return View
     */
    public function show(Service $service)
    {
        $appointments = $this->appointmentRepository
            ->with(['user', 'car', 'car.make'])
            ->where('service_id', $service->id)
            ->get();

        return view('services/show', ['service' => $service, 'appointments' => $appointments]);
    }
}
