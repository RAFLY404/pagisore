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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('branch_id');
            $table->string('invoice_no');
            $table->decimal('sub total', 19, 4);
            $table->decimal('ppn', 19, 4);
            $table->decimal('service_charge', 19, 4);
            $table->decimal('vip_charge', 19, 4);
            $table->decimal('discount', 19, 4);
            $table->string('discount_unit_type');
            $table->decimal('total', 19, 4);
            $table->string('customer_name');
            $table->string('table_no');
            $table->string('payment_status');
            $table->unsignedBigInteger('payment_method_id');
            $table->decimal('cash_paid', 19, 4);
            $table->unsignedBigInteger('shift_id');
            $table->timestamps();
            $table->string('created_by');
            $table->string('updated_by');

            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
