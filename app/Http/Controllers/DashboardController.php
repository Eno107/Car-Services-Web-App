<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Repositories\Contracts\AppointmentRepositoryContract;

class DashboardController extends Controller
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

    public function uielements()
    {
        return view('DashBoard.ui-elements');
    }

    public function tables()
    {
        return view('DashBoard.tables');
    }

    public function forms()
    {
        return view('DashBoard.forms');
    }

    public function profile()
    {
        return view('DashBoard.profile');
    }

    public function personalCars()
    {
        return view('DashBoard.personal-cars', ['makes' => Make::all()]);
    }

    public function index()
    {
        $appointments = $this->appointmentRepository
            ->with(['service', 'car', 'car.make'])
            ->where('user_id', auth()->user()->id)
            ->get();



        return view('DashBoard.index', ['appointments' => $appointments]);
    }


    public function calendar()
    {

        return view('DashBoard.calendar');
    }
}
