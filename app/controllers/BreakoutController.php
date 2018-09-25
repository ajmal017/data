<?php

class BreakoutController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		//echo "asdfasdfasD";

        return View::make('breakout.5days');
	}

	public function days5()
	{
		$lists = DB::table('csvdata')->select('TIMESTAMP')->distinct('TIMESTAMP')
		->take(5)->orderby('TIMESTAMP','DESC')->get();
        $arr = array();
        foreach ($lists as $key => $list) {
            array_push($arr,$list->TIMESTAMP);
        }
	//echo "<pre>"; print_r($arr); exit();
		//$stock = csvdata::whereIn('TIMESTAMP')->get();
		$stock = DB::table('csvdata')
		// ->select('OPEN as o', 'CLOSE as c', 'HIGH as h', 'LOW as l', 'TIMESTAMP as t')
		->select(DB::raw('SYMBOL, max(HIGH) as maxHIGH' ))
		->where('SERIES','EQ')
		->whereIn('TIMESTAMP',$arr)
		->groupBy('SYMBOL')
		// ->orderby('TIMESTAMP','DESC')
		->take(20)
        ->get();
       echo "<pre>"; print_r($stock); exit();
        return View::make('breakout.5days')->with('lists', $arr);
         //return json_encode($stock);
	}

	
public function last5days($nse)
	{
		$cname = DB::table('company')->select('symbol')
			  ->get();
			   $a = array();
        foreach ($cname as $key => $value) {
            array_push($a, $value->symbol);
		}
		
			  //echo "<pre>"; print_r($cname); exit();
			//   return View::make('stock.view')->with('sname', $nse)->with('cname', $arr);
		$lists = DB::table('csvdata')->select('TIMESTAMP')->distinct('TIMESTAMP')
		->take(5)->orderby('TIMESTAMP','DESC')->get();
        $arr = array();
        foreach ($lists as $key => $list) {
            array_push($arr,$list->TIMESTAMP);
        }
		$stock = DB::table('csvdata')
		->select(DB::raw('SYMBOL, HIGH, LOW' ))
		->where('SERIES','EQ') 
		->whereIn('TIMESTAMP',$arr)
		->groupBy('SYMBOL')
		->take(5)
        ->get();
        echo "<pre>"; print_r($stock); exit();
        return View::make('breakout.last5days')->with('lists', $arr)->with('cname',$a);
         //return json_encode($stock);
	}

}
