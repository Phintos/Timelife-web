<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;
use App\Chart;

class ChartController extends Controller
{
	public function index()
	{
		$population = Lava::DataTable();

			$population->addDateColumn('Year')
			           ->addNumberColumn('Number of People')
			           ->addRow(['2006', 623452])
			           ->addRow(['2007', 685034])
			           ->addRow(['2008', 716845])
			           ->addRow(['2009', 757254])
			           ->addRow(['2010', 778034])
			           ->addRow(['2011', 792353])
			           ->addRow(['2012', 839657])
			           ->addRow(['2013', 842367])
			           ->addRow(['2014', 873490]);

			Lava::AreaChart('Population', $population, [
			    'title' => 'Population Growth',
			    'legend' => [
			        'position' => 'in'
		    	]
			]);
	        

	    //Country Chart
	    $popularity = Lava::DataTable();

			$popularity->addStringColumn('Country')
			           ->addNumberColumn('Popularity')
			           ->addRow(array('Germany', 200))
			           ->addRow(array('United States', 300))
			           ->addRow(array('Brazil', 400))
			           ->addRow(array('Canada', 500))
			           ->addRow(array('France', 600))
			           ->addRow(array('RU', 700));

			Lava::GeoChart('Popularity', $popularity);

		//Gender chart
		$reasons = Lava::DataTable();

			$reasons->addStringColumn('Reasons')
			        ->addNumberColumn('Percent')
			        ->addRow(['Check Reviews', 5])
			        ->addRow(['Watch Trailers', 2])
			        ->addRow(['See Actors Other Work', 4])
			        ->addRow(['Settle Argument', 89]);

			Lava::PieChart('IMDB', $reasons, [
			    'title'  => 'Gender Chart',
			    'is3D'   => true,
			    'slices' => [
			        ['offset' => 0.2],
			        ['offset' => 0.25],
			        ['offset' => 0.3]
			    ]
			]);


		//Mood Chart
		$reasons = Lava::DataTable();

			$reasons->addStringColumn('Reasons')
			        ->addNumberColumn('Percent')
			        ->addRow(['Check Reviews', 5])
			        ->addRow(['Watch Trailers', 2])
			        ->addRow(['See Actors Other Work', 4])
			        ->addRow(['Settle Argument', 89]);

			Lava::DonutChart('IMDB', $reasons, [
			    'title' => 'Mood Chart'
			]);

			
			return view('admin');
	}
}
