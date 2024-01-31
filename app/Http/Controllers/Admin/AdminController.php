<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $week = Carbon::now()->startOfWeek();
        $chart_data = [];
        $this_week = [];
        $dates = [];
        $next_week = [];
        $dates_next = [];
        $table_names = [];
        $table_count = [];
        for ($i=0; $i < 12; $i++) { 
            $chart_data[$i] = Reservation::whereYear('res_date', Carbon::now())->whereMonth('res_date', $i+1)->count();
        }
        $this_week[0] = Reservation::whereDay('res_date', $week)->count();
        for ($i=0; $i < 7; $i++) { 
            $dates[$i] = $week->isoFormat('dddd D.M.');
            $this_week[$i+1] = Reservation::whereDay('res_date', $week->addDays(1))->count();
        }
        $next_week[0] = Reservation::whereDay('res_date', $week)->count();
        for ($i=0; $i < 7; $i++) { 
            $dates_next[$i] = $week->isoFormat('dddd D.M.');
            $next_week[$i+1] = Reservation::whereDay('res_date', $week->addDays(1))->count();
        }

        $tables = Reservation::join('tables', 'reservations.table_id', '=', 'tables.id')->select('tables.name', DB::raw('COUNT(*) as count'))->groupBy('table_id')->get();

        
        foreach ($tables as $table) {
            $table_names[] = $table->name;
            $table_count[] = $table->count;
        }
        
        
        return view('admin.index', compact('chart_data', 'this_week', 'dates', 'next_week', 'dates_next', 'table_names', 'table_count'));
    }

    public function show(Request $request){
        if ($request->input('date')){
            $selected_date = $request->input('date');
        } else {
            $selected_date = Carbon::now();
        }
        $tables = Table::all();
        return view('admin.calendar', compact('tables'));
    }
}
