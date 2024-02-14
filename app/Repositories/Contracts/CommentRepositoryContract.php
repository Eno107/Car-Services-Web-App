<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

interface CommentRepositoryContract extends BaseRepositoryContract
{
    /**
     * Get user who owns this problem
     * 
     * @return UserContract|null     
     */
    public function user();

    /**
     * @param int $user_id
     * @return Builder|Model
     */
    public function ofUser(int $user_id);



    /**
     * @param int $user_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofUserExcept(int $user_id, int $id);


    /**
     * @param int $problem_id
     * @return Builder|Model  
     */
    public function ofProblem(int $problem_id);

    /**
     * @param int $problem_id
     * @param int $id
     * @return Builder|Model  
     */
    public function ofProblemExcept(int $problem_id, int $id);
}
