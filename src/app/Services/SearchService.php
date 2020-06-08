<?php

namespace App\Services;


use App\Repositories\ApartmentRepository;

class SearchService
{
    public function mainSearch($request)
    {
        $select = app(ApartmentRepository::class)->searchApartments();

        if ($request->brand_id) {
            $select
                ->leftJoin('details', 'apartments.detail_id', '=', 'details.id')
                ->where('city_id', $request->city_id);
        }

        if ($request->detail_id) {
            $select->where('detail_id', $request->detail_id);
        }


        return $select->paginate(15);
    }
}
