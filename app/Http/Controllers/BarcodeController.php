<?php




namespace App\Http\Controllers;



use App\ScanBarcode;
use App\Inventory;
use Illuminate\Http\Request;




class BarcodeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $codes = Inventory::all();
        return view('admin.barcodes.index', compact('codes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barcode = Inventory::findOrFail($id);
        return view('admin.barcodes.print' , compact('barcode'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Barcode $barcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barcode $barcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barcode  $barcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barcode $barcode)
    {
        //
    }

    public function download($code)
    {
        $pathToFile = storage_path() . "/app/" . "public/".$code.".svg";
        return response()->download($pathToFile);
    }
}
