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
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function index()
    {
        if (isset($_GET['type'])) {
            $type = $_GET['type'];

            switch ($type) {
                case 'cpu':
                    $cat = CategoryCPU::all();
                    return view('admin.search.cpu', compact('cat'));
                    break;
                case 'gpu':
                    $cat = CategoryGPU::all();

                    return view('admin.search.gpu', compact('cat'));
                    break;
                case 'ram':
                    $cat = CategoryRAM::all();

                    return view('admin.search.ram', compact('cat'));
                    break;
                case 'manufacturer':
                    $cat = CategoryManufacturer::all();

                    return view('admin.search.manufacturer', compact('cat'));
                    break;
                case 'usage':
                    $cat = CategoryUsage::all();

                    return view('admin.search.usage', compact('cat'));
                    break;
                case 'screen':
                    $cat = CategoryScreen::all();

                    return view('admin.search.screen', compact('cat'));
                    break;

                case 'storage':
                    $cat = CategoryStorage::all();

                    return view('admin.search.storage', compact('cat'));
                    break;
                case 'device':
                    $cat = CategoryDevice::all();

                    return view('admin.search.device', compact('cat'));
                    break;
                case 'barcode':

                    return view('admin.search.barcode', compact('cat'));
                    break;
            }
        } else {
            return redirect('/home');
        }
    }
}
