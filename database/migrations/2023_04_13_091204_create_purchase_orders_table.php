<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_id');
            $table->string('warehouse_id');
            $table->string('category_id');
            $table->string('purchase_date');
            $table->string('purchase_number');
            $table->string('item_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('discount');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=pending,1=approved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
