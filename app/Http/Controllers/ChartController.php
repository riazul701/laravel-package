<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\CountryUser;

class ChartController extends Controller
{

    public function getLaraChart()
    {
        $lava = new Lavacharts; // See note below for Laravel

        $popularity = $lava->DataTable();
        $data = CountryUser::select("name as 0","total_users as 1")->get()->toArray();

        $popularity->addStringColumn('Country')
            ->addNumberColumn('Popularity')
            ->addRows($data);

        $lava->GeoChart('Popularity', $popularity);

        return view('laracharts',compact('lava'));
    }

}
