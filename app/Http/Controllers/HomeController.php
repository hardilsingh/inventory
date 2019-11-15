<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Inventory;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paid = Bill::sum('paid');
        $total = Bill::sum('total');
        $balance = $total - $paid;
        $inventory = Inventory::count();
        $collection = Bill::where('date',  now()->toDateString())->sum('paid');
        $bills = Bill::orderBy('created_at' , 'DESC')->paginate(10);
        $inventories = Inventory::orderBy('updated_at' , 'DESC')->paginate(10);
        return view('home' , compact([
            'paid',
            'total',
            'balance',
            'inventory',
            'collection',
            'bills',
            'inventories'
        ]));
    }
}
