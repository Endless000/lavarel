<?php

namespace App\Http\Controllers;

use App\Repositories\DetailRepository;
use App\Repositories\ApartmentRepository;
use App\Repositories\CityRepository;


class mainController extends Controller
{
    public function index(
        ApartmentRepository $apartmentRepository,
        DetailRepository $detailRepository,
        CityRepository $cityRepository
    )
    {
        $newApartments = $apartmentRepository->newApartment();
        $detail = $detailRepository->all();
        $city = $cityRepository->lastArticle();

        return view('main',
            compact('detail', 'city', 'newApartments'));
    }
}
