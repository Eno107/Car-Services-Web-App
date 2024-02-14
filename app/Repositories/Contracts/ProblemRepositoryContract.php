<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface ProblemRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get the category associated with this problem.
     *
     * @return CategoryContract|null
     */
    public function category();

    /**
     * Set the category for this problem.
     *
     * @param int|null $categoryId
     */
    public function setCategory(int $categoryId = null);

    /**
     * Get the user who owns this problem.
     *
     * @return UserContract|null
     */
    public function user();
}
