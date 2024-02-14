<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Services\ProblemService;
use App\Http\Requests\CommentStoreRequest;
use App\Http\Requests\ProblemStoreRequest;
use App\Repositories\Eloquent\MakeRepository;
use App\Repositories\Contracts\CommentRepositoryContract;
use App\Repositories\Contracts\ProblemRepositoryContract;
use App\Repositories\Contracts\CategoryRepositoryContract;

class ProblemsController extends Controller
{

    /**
     * @var ProblemRepositoryContract
     */
    private $problemRepository;
    private $commentRepository;
    private $categoryRepository;
    private $makeRepository;

    /**
     * Create a new controller instance.
     *
     * @param ProblemRepositoryContract $problemRepository
     * @param CommentRepositoryContract $commentRepository
     * @param CategoryRepositoryContract $categoryRepository
     * @param MakeRepositoryContract $makeRepository
     */
    public function __construct(ProblemRepositoryContract $problemRepository, CommentRepositoryContract $commentRepository, CategoryRepositoryContract $categoryRepository, MakeRepository $makeRepository)
    {
        $this->problemRepository = $problemRepository;
        $this->commentRepository = $commentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->makeRepository = $makeRepository;
    }

    /**
     * Display a paginated list of problems.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {

        $problems = $this->problemRepository
            ->with(['user.cars.make', 'comments', 'category'])
            ->paginate($request->get('per_page', 12));


        $categories = $this->categoryRepository
            ->all();
        $makes = $this->makeRepository
            ->all();

        return view('problems/index', ['problems' => $problems, 'categories' => $categories, 'makes' => $makes]);
    }

    /**
     * Display the specified problem.
     *
     * @param Problem $problem
     * @return View
     */
    public function show(Problem $problem)
    {
        $comments = $this->commentRepository
            ->with(['user'])
            ->where('problem_id', $problem->id)
            ->orderBy('created_at', 'desc')
            ->get();


        return view('problems/problem', ['problem' => $problem, 'comments' => $comments]);
    }


    public function store(ProblemStoreRequest $request)
    {

        $data = $request->validated();

        $response = ProblemService::store($data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        return back();
    }

    public function destroy(Problem $problem)
    {

        $comments = $problem->comments;

        foreach ($comments as $comment) {
            $response = CommentService::delete($comment->id);

            if (!$response->success()) {
                return response()->json(null, 400);
            }
        }

        $response = ProblemService::delete($problem->id);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your problem has been deleted');

        return redirect('/problems');
    }
}
