<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailProfileModel;

class DetailProfileController extends Controller
{
    public function __construct()
    {
        $this->DetailProfileModel = new DetailProfileModel();
    }
    public function index(){
        $data = [
            'data'=> $this->DetailProfileModel->allData()
        ];
        return view('v_detailProfile',$data);
    }
}
