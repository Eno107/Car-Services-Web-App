<?php

namespace App\Repositories\Eloquent;

use App\Models\Problem;
use App\Repositories\Contracts\ProblemRepositoryContract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProblemRepository extends BaseRepository implements ProblemRepositoryContract
{

    protected function model()
    {
        return Problem::class;
    }

    /**
     * Get the category associated with this problem.
     *
     * @return CategoryContract|null
     */
    public function category()
    {
        return $this->model->category;
    }

    /**
     * Set a category for this problem.
     */
    public function setCategory(?int $categoryId = null)
    {
        $this->model->category_id = $categoryId;
        $this->model->save();
    }

    /**
     * Get the user who owns this problem.
     *
     * @return UserContract|null
     */
    public function user()
    {
        return $this->model->user;
    }
}
