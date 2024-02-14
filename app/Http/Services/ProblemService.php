<?php

namespace App\Http\Services;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Support\Classes\ServiceResponse;
use App\Repositories\Contracts\ProblemRepositoryContract;

class ProblemService
{
    /**
     * @var ProblemepositoryContract
     */
    private static $problemRepository;

    /**
     * @param ProductRepositoryContract $productRepository
     */
    public function __construct(ProblemRepositoryContract $problemRepository)
    {
        self::$problemRepository = $problemRepository;
    }

    /**
     * @param array $data
     * @return ServiceResponse
     */
    public static function store(array $data)
    {
        try {
            DB::beginTransaction();

            $data['user_id'] = auth()->id();
            $data['slug'] = Str::slug($data['title']);
            $data['category_id'] = $data['category'];
            unset($data['category']);
            $data['make_id'] = $data['make'];
            unset($data['make']);

            $problem = self::$problemRepository->create(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $problem);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('ProblemService::store Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false, null, 'An error occurred while storing the problem.');
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

            $problem = self::$problemRepository->findOrFail($id);

            $problem->update(
                Arr::only($data, self::fields())
            );
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('ProductService::update Exception Error: ' . $e->getMessage());
            Log::error($e->getTraceAsString());
            return new ServiceResponse(false);
        }
    }

    public static function delete(int $id)
    {

        try {
            DB::beginTransaction();

            $problem = self::$problemRepository->findOrFail($id);

            $problem->delete();

            DB::commit();

            return new ServiceResponse(true);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('ProductService::delete Exception Error: ' . $e->getMessage());
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
            'category_id',
            'make_id',
            'title',
            'body',
            'slug',
        ];
    }
}
