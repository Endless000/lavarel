<?php

namespace App\Repositories;


use App\Models\Detail;

/**
 * Class DetailRepository.
 */
class DetailRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Detail::getModel();
    }

    public function getByDetailId(int $detail_id)
    {
        return $this->model->whereDetailId($detail_id)->get();
    }
}
