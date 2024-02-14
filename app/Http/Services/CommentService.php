<?php

namespace App\Http\Services;

use App\Repositories\Contracts\CommentRepositoryContract;
use App\Support\Classes\ServiceResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class CommentService
{
    /**
     * @var CommentRepositoryContract
     */
    private static $commentRepository;

    /**
     * @param CommentRepositoryContract $commentRepository
     */
    public function __construct(CommentRepositoryContract $commentRepository)
    {
        self::$commentRepository = $commentRepository;
    }

    /**
     * @param array $data
     * @return ServiceResponse
     */
    public static function store(array $data)
    {
        try {
            DB::beginTransaction();

            $comment = self::$commentRepository->create(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $comment);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CommentService::store Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }


    /**
     * @param int $id
     * @param array $data
     * @return ServiceResponse
     */
    public static function update(int $id, array $data)
    {
        try {
            DB::beginTransaction();

            $comment = self::$commentRepository->findOrFail($id);


            $comment->update(
                Arr::only($data, self::fields())
            );

            DB::commit();


            return new ServiceResponse(true);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CommentService::update Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }


    /**
     * @param int $id
     * @return ServiceResponse
     */
    public static function delete(int $id)
    {
        try {
            DB::beginTransaction();

            $comment = self::$commentRepository->findOrFail($id);

            $comment->delete();

            DB::commit();

            return new ServiceResponse(true);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('CommentService::delete Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }

    /**
     * @return array
     */
    public static function fields()
    {
        return [
            'user_id',
            'body',
            'problem_id',
        ];
    }
}
