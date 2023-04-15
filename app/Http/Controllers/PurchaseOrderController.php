<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\PurchaseOrder;
use App\Models\Vendor;
use App\Models\WareHouse;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    //
//    Order purchase form start
    public function index()
    {
        return view('dashboard.pages.purchase-order',[
            'vendors'=>Vendor::all(),
            'wareHouses'=>WareHouse::all(),
            'categories'=>Category::all(),
            'items'=>Item::all(),
        ]);
    }
//    Order Purchase form end

//    Order Purchase List start
    public function purchaseList()
    {
        return view('dashboard.pages.purchase-order-list',[
            'orders'=>DB::table('purchase_orders')
            ->join('items','purchase_orders.item_id','items.id')
            ->join('vendors','purchase_orders.vendor_id','vendors.id')
            ->join('categories','purchase_orders.category_id','categories.id')
            ->select('purchase_orders.*','items.item_name','vendors.vendor_name','categories.category_name')
            ->get(),
        ]);
    }
//    Order Purchase List end

//    Get All Order Data start
    public function getItem($item_id)
    {
        $item = Item::find($item_id);
        return response()->json($item);
    }
//    Get All Order Data end

//   Save Purchase Order start
    public function savePurchaseOrder(Request $request)
    {
        PurchaseOrder::savePurchaseOrder($request);
        Alert::toast('Order placed Successfully');

        return back();
    }
//    Save Purchase Order end

//    Delete Purchase Order start
    public function deletePurchaseOrder(Request $request)
    {

        PurchaseOrder::find($request->id)->delete();
        Alert::toast('Order deleted successfully');
        return back();
    }
//    Delete Purchase Order end


//   Purchase Order Edit View Start
    public function editPurchaseOrder($id)
    {
        return view('dashboard.pages.purchase-order-edit', [
            'order' => PurchaseOrder::find($id),
            'vendors' => Vendor::all(),
            'wareHouses' => WareHouse::all(),
            'categories' => Category::all(),
            'items' => Item::all(),
        ]);
    }
    //   Purchase Order Edit View end

    //   Purchase Order Update View start
    public function updatePurchaseOrder(Request $request)
    {
        PurchaseOrder::updatePurchaseOrder($request);
        Alert::toast('Order Updated successfully');
        return back();
    }
    //   Purchase Order Update View end
}
