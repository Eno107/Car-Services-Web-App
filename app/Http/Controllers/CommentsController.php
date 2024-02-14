<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Problem;
use Illuminate\Http\Request;
use App\Http\Services\CommentService;
use App\Http\Resources\ServiceResource;
use App\Http\Requests\CommentStoreRequest;
use App\Repositories\Contracts\CommentRepositoryContract;

class CommentsController extends Controller
{

    /**
     * @var CommentRepositoryContract
     */
    private $commentRepository;

    /**
     * Create a new controller instance.
     *
     * @param CommentRepositoryContract $commentRepository
     */
    public function __construct(CommentRepositoryContract $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * Store a new comment record 
     *
     * @param CommentStoreRequest $request
     * @param Problem problem
     * @return RedirectResponse
     */
    public function store(CommentStoreRequest $request, Problem $problem)
    {
        $data = $request->validated();
        $data['problem_id'] = $problem->id;
        $data['user_id'] = auth()->id();

        $response = CommentService::store($data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        return back();
    }

    /**
     * Update an existing comment record.
     *
     * @param CommentStoreRequest $request
     * @param Comment $comment
     * @return RedirectResponse
     */
    public function update(CommentStoreRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $response = CommentService::update($comment->id, $data);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your comment has been updated');

        return back();
    }

    /**
     * Delete a comment record.
     *
     * @param Comment $comment
     * @return  RedirectResponse
     */
    public function delete(Comment $comment)
    {
        $response = CommentService::delete($comment->id);

        if (!$response->success()) {
            return response()->json(null, 400);
        }

        session()->flash('success', 'Your comment has been updated');

        return back();
    }
}
