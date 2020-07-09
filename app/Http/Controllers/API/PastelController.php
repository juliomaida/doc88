<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Model\Pastel;
use App\Http\Controllers\MasterApiController;

class PastelController extends MasterApiController
{
    protected $model;
    protected $path = 'clientes';
    protected $upload = 'image';
    protected $width = 177;
    protected $height = 236;
    protected $totalPage = 20;

     public function __construct(Pastel $pastel, Request $request)
    {
        $this->pastel  = $pastel;
        this->request = $request;
    }


    public function index(Request $request)
    {
        $data = this->pastel->all();
        return response()->json($data);

    }


}