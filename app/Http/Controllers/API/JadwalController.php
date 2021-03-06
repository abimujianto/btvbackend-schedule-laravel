<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\jadwal;
// use Validator;


class JadwalController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = jadwal::all();


        return $this->sendResponse($jadwal->toArray(), 'Products retrieved successfully.');
    }
}