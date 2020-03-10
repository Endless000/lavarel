<?php

namespace App\Http\Controllers;

use App\Repositories\ApartmentRepository;

class ApartmentController extends Controller
{
    public function index($id, ApartmentRepository $apartmentRepository)
    {
        $apartment = $apartmentRepository->selectedApartment($id);
        $newApartments = $apartmentRepository->newApartment();

        return view('apartment', compact('apartment','newApartments'));
    }
}
