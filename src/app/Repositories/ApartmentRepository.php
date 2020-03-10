<?php

namespace App\Repositories;


use App\Models\Apartment;
use Carbon\Carbon;

/**
 * Class ApartmentRepository.
 */
class ApartmentRepository extends BaseRepository

    /**
     * @return string
     *  Return the model
     */
{
    public function getModel()
    {
        return Apartment::getModel();
    }

    public function selectedApartment($id)
    {
        return $this->model->whereId($id)->first();
    }

    public function newApartment()
    {
        return $this->model->where('created_at', '>', Carbon::now()->subHour())->get();
    }

    public function searchApartment()
    {
        return $this->model->select('apartments.*');
    }

    public function paginate()
    {
        return $this->model->paginate(15);
    }
}
