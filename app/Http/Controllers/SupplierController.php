<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $suppliers = Supplier::where('id',1)->select([
            'id',
            'name',
            'platform',
            'price',
            'subscriber_amount',
            'intro'
        ]);

        return Datatables::of($suppliers)
            ->removeColumn('id')
            ->make(true);
    }
}
