<?php

namespace App\Http\Services;

use App\Repositories\Contracts\UserRepositoryContract;
use App\Support\Classes\ServiceResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class UserService
{
    /**
     * @var UserRepositoryContract
     */
    private static $userRepository;

    /**
     * @param UserRepositoryContract $userRepository
     */
    public function __construct(UserRepositoryContract $userRepository)
    {
        self::$userRepository = $userRepository;
    }

    /**
     * @param array $data
     * @return ServiceResponse
     */
    public static function store(array $data)
    {
        try {
            DB::beginTransaction();

            $user = self::$userRepository->create(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $user);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UserService::store Exception Error: ' . $e->getMessage());
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

            $user = self::$userRepository->findOrFail($id);
            if ($data['password'] == null)
                unset($data['password']);

            $data['phone_number'] = $data['tel'];
            unset($data['tel']);


            $user->update(
                Arr::only($data, self::fields())
            );

            DB::commit();

            return new ServiceResponse(true, $user);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('UserService::update Exception Error: ' . $e->getMessage());
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
            'name',
            'phone_number',
            'email',
            'password',
        ];
    }
}
