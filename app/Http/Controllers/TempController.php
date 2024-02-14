<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\ServiceRepositoryContract;
use App\Repositories\Eloquent\ServiceRepository;

class TempController extends Controller
{
    /**
     * @var ServiceRepositoryContract
     */
    private $serviceRepository;

    /**
     * Create a new controller instance.
     *
     * @param ServiceRepositoryContract $serviceRepository
     */
    public function __construct(ServiceRepositoryContract $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display 5 main services // Guest Page
     * 
     */
    public function index()
    {
        $services = $this->serviceRepository
            ->take(5)
            ->with(['categories', 'makes'])
            ->where([])
            ->get();

        return view('home', ['services' => $services]);
    }

    public function home()
    {
        return view('DashBoard.index');
    }

    public function about()
    {
        return view('about');
    }

    public function test(Request $request)
    {

        $inputData = $request->all();
        var_dump($inputData);
    }
}
