<?php

namespace App\Repositories\Eloquent;

use App\Models\Comment;
use App\Repositories\Contracts\CommentRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CommentRepository extends BaseRepository implements CommentRepositoryContract
{
    protected function model()
    {
        return Comment::class;
    }

    /**
     * Get the user who owns this comment.
     *
     * @return UserContract|null
     */
    public function user()
    {
        return $this->model->user;
    }

    /**
     * Get the comments owned by a user.
     *
     * @param int $user_id
     * @return Builder|Model
     */
    public function ofUser(int $user_id)
    {
        return $this->model->where('user_id', $user_id);
    }

    /**
     * Get the comments owned by a user, excluding one comment.
     *
     * @param int $user_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofUserExcept(int $user_id, int $id)
    {
        return $this->model->where('user_id', $user_id)->where('id', '!=', $id);
    }

    /**
     * Get the comments owned by a problem.
     *
     * @param int $problem_id
     * @return Builder|Model
     */
    public function ofProblem(int $problem_id)
    {
        return $this->model->where('problem_id', $problem_id);
    }

    /**
     * Get the comments owned by a problem, excluding one comment.
     *
     * @param int $problem_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofProblemExcept(int $problem_id, int $id)
    {
        return $this->model->where('problem_id', $problem_id)->where('id', '!=', $id);
    }
}
