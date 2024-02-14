<?php

namespace App\Repositories\Contracts;

/**
 * Interface BaseQueriesInterface
 */
interface AppointmentRepositoryContract extends BaseRepositoryContract
{

    /**
     * Get the user who owns this appointment.
     *
     * @return UserContract|null
     */
    public function user();


    /**
     * Get the service who owns this appointment.
     *
     * @return ServiceContract|null
     */
    public function service();

    /**
     * Get the users car who owns this appointment.
     * 
     * @return CarContract|null
     */
    public function car();


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
     * @param int $service_id
     * @return Builder|Model
     */
    public function ofService(int $service_id);

    /**
     * @param int $service_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofServiceExcept(int $service_id, int $id);

    /**
     * @param int $car_id
     * @return Builder|Model
     */
    public function ofCar(int $car_id);

    /**
     * @param int $car_id
     * @param int $id
     * @return Builder|Model
     */
    public function ofCarExcept(int $car_id, int $id);
}
