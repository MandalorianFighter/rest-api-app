<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CovidCase;
use App\Http\Resources\V1\CovidCaseResource;
use Illuminate\Support\Facades\Cache;

class CovidCaseController extends Controller
{
    public function index() 
    {
        return CovidCaseResource::collection(Cache::remember('cases', 60*60*24, function () {
            return CovidCase::all();
        }));
    }
 }
