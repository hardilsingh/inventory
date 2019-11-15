<?php

namespace App\Http\Controllers;

use App\CategoryCPU;
use App\CategoryDevice;
use App\CategoryGPU;
use App\CategoryManufacturer;
use App\CategoryRAM;
use App\CategoryScreen;
use App\CategoryStorage;
use App\CategoryUsage;
use App\Inventory;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Milon\Barcode\DNS1D;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventories = Inventory::all();
        return view('admin.inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $cpu = CategoryCPU::pluck('name', 'id');
        $gpu = CategoryGPU::pluck('name', 'id');
        $storage = CategoryStorage::pluck('name', 'id');
        $manufacturer = CategoryManufacturer::pluck('name', 'id');
        $ram = CategoryRAM::pluck('name', 'id');
        $devices = CategoryDevice::pluck('name', 'id');
        $screen = CategoryScreen::pluck('name', 'id');
        $usage = CategoryUsage::pluck('name', 'id');
        $suppliers = Supplier::pluck('name', 'id');
        return view('admin.inventory.create', compact([
            'cpu',
            'gpu',
            'manufacturer',
            'ram',
            'devices',
            'screen',
            'usage',
            'storage',
            'suppliers'
        ]));
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
        $inventory = Inventory::create([
            'product_name' => $request->product_name,
            'sale_price' => $request->sale_price,
            'cpu_id' => $request->cpu_id == null ? 0 : $request->cpu_id,
            'gpu_id' => $request->cpu_id == null ? 0 : $request->cpu_id,
            'supplier_id' => $request->supplier_id == null ? 0 : $request->supplier_id,
            'manufacturer_id' => $request->manufacturer_id,
            'device_id' => $request->device_id,
            'usage_id' => $request->usage_id,
            'current_stock' => $request->current_stock,
            'storage_id' => $request->storage_id,
            'ram_id' => $request->ram_id,
            'screen_id' => $request->screen_id,
            'product_code' => $request->product_code,
        ]);
        Inventory::findOrFail($inventory->id)->update([
            'product_code' => substr(number_format(time() * rand(), 0, '', ''), 0, 12),
        ]);
        $product_code = Inventory::findOrFail($inventory->id);
        $barcode = DNS1D::getBarcodeSVG($product_code->product_code, "EAN13");
        Storage::put('/public/' . $product_code->product_code . '.svg', $barcode, 'public');
        $request->session()->flash('created', 'Record Created Successfully');
        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $inventory = Inventory::findOrFail($id);
        $cpu = CategoryCPU::pluck('name', 'id');
        $gpu = CategoryGPU::pluck('name', 'id');
        $storage = CategoryStorage::pluck('name', 'id');
        $manufacturer = CategoryManufacturer::pluck('name', 'id');
        $ram = CategoryRAM::pluck('name', 'id');
        $devices = CategoryDevice::pluck('name', 'id');
        $screen = CategoryScreen::pluck('name', 'id');
        $usage = CategoryUsage::pluck('name', 'id');
        $suppliers = Supplier::pluck('name', 'id');

        return view('admin.inventory.edit', compact([
            'inventory',
            'cpu',
            'gpu',
            'manufacturer',
            'ram',
            'devices',
            'screen',
            'usage',
            'storage',
            'suppliers'
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //


        Inventory::findOrFail($id)->update([
            'product_name' => $request->product_name,
            'sale_price' => $request->sale_price,
            'cpu_id' => $request->cpu_id == null ? 0 : $request->cpu_id,
            'gpu_id' => $request->cpu_id == null ? 0 : $request->cpu_id,
            'supplier_id' => $request->supplier_id == null ? 0 : $request->supplier_id,
            'manufacturer_id' => $request->manufacturer_id,
            'device_id' => $request->device_id,
            'usage_id' => $request->usage_id,
            'current_stock' => $request->add_stock == null ? $request->current_stock : $request->current_stock + $request->add_stock,
            'storage_id' => $request->storage_id,
            'ram_id' => $request->ram_id,
            'screen_id' => $request->screen_id,
        ]);
        $request->session()->flash('updated', 'Updated successfully');
        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Inventory::findOrFail($id)->delete();
        session()->flash('deleted', 'Record deleted successfully');
        return redirect()->back();
    }


    public function getProduct($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::findOrFail($classid);
        echo json_encode($productData);
        exit;
    }

    public function getCPU($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('cpu_id' , $classid)->get();
        echo json_encode($productData);
        exit;
    }
    public function getGPU($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('gpu_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
    public function getRAM($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('ram_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
    public function getStorage($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('storage_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
    public function getManufacturer($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('manufacturer_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
    public function getUsage($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('usage_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
    public function getDevice($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('device_id' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }

    public function getInventory($classid = 0)
    {
        // Fetch Sections by Classid
        $productData['data'] = Inventory::where('product_code' , $classid)->get();
        
        echo json_encode($productData);
        exit;
    }
}
