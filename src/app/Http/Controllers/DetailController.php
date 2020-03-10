<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DetailRepository;

class DetailController extends Controller
{
    public function index(int $detail_id, DetailRepository $detailsRepository)
    {
        return response()->json([
            'result' => true,
            'data' => $detailsRepository->getByDetailId($detail_id)
        ]);
    }
}
