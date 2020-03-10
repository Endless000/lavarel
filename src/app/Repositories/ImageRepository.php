<?php

namespace App\Repositories;

use App\Models\Image;

/**
 * Class ImageRepository.
 */
class ImageRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function getModel()
    {
        return Image::getModel();
    }
}
