<?php

namespace App\Http\Controllers;

use App\Http\Requests\MainSearchRequest;
use App\Repositories\ApartmentRepository;
use App\Repositories\CityRepository;
use App\Repositories\DetailRepository;
use App\Services\SearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $apartments = app(ApartmentRepository::class)->paginate();
        $cities = app(CityRepository::class)->all();
        $details = app(DetailRepository::class)->all();

        return view('apartments', compact('apartments', 'cities', 'details'));
    }

    public function searchFromMain(MainSearchRequest $request,  SearchService $service)
    {
        $apartments = $service->mainSearch($request);

        $cities = app(CityRepository::class)->all();
        $details = app(DetailRepository::class)->all();

        return view('search', compact('apartments', 'cities', 'details'));
    }

}
