<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;
    public static $order;

    public static function savePurchaseOrder($request)
    {
        self::$order = new PurchaseOrder();
        self::$order->vendor_id= $request->vendor_id;
        self::$order->warehouse_id= $request->warehouse_id;
        self::$order->category_id= $request->category_id;
        self::$order->purchase_date= $request->purchase_date;
        self::$order->purchase_number= $request->purchase_number;
        self::$order->item_id= $request->item_id;
        self::$order->quantity= $request->quantity;
        self::$order->price= $request->price;
        self::$order->discount= $request->discount;
        self::$order->description= $request->description;
        self::$order->save();
    }

    public static function updatePurchaseOrder($request)
    {
        self::$order = PurchaseOrder::find($request->id);
        self::$order->vendor_id= $request->vendor_id;
        self::$order->warehouse_id= $request->warehouse_id;
        self::$order->category_id= $request->category_id;
        self::$order->purchase_date= $request->purchase_date;
        self::$order->purchase_number= $request->purchase_number;
        self::$order->item_id= $request->item_id;
        self::$order->quantity= $request->quantity;
        self::$order->price= $request->price;
        self::$order->discount= $request->discount;
        self::$order->description= $request->description;
        self::$order->save();
    }
}
