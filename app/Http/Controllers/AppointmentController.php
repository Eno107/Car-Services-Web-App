<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentStoreRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Services\AppointmentService;
use App\Repositories\Contracts\AppointmentRepositoryContract;

class AppointmentController extends Controller
{
    /**
     * @var AppointmentRepositoryContract
     */
    private $appointmentRepository;

    /**
     * Create a new controller instance.
     *
     * @param AppointmentRepositoryContract $AppointmentRepository
     */
    public function __construct(AppointmentRepositoryContract $appointmentRepository)
    {
        $this->appointmentRepository = $appointmentRepository;
    }


    /**
     * Delete an appointment record
     * 
     * @param Appointment $appointment
     * @return RedirectRespsonse
     */
    public function destroy(Appointment $appointment)
    {

        $response = AppointmentService::delete($appointment->id);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your appointment has been canceled');

        return back();
    }

    /**
     * Store a new appointment record.
     *
     * @param AppointmentStoreRequest $request
     * @return RedirectResponse
     */
    public function store(AppointmentStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $response = AppointmentService::store($data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your appointment is set');

        return back();
    }
}
