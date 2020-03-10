<?php

namespace App\Repositories;

use App\Models\City;


/**
 * Class CityRepository.
 */
class CityRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return City::getModel();
    }
}
