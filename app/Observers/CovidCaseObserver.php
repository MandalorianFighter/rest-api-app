<?php

namespace App\Observers;

use App\Models\CovidCase;
use Illuminate\Support\Facades\Cache;

class CovidCaseObserver
{
    /**
     * Handle the CovidCase "created" event.
     *
     * @param  \App\Models\CovidCase  $covidCase
     * @return void
     */
    public function created(CovidCase $covidCase)
    {
        Cache::forget('cases');
    }
}
