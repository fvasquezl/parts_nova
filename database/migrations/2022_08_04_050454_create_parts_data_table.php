<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts_data', function (Blueprint $table) {
            $table->id();
            $table->integer('WorkCenterID'); ////////////<<<<<<<
            $table->string('LCN',50);
            $table->string('PartsLCN',50);
            $table->string('Brand',50);
            $table->string('Model',50);
            $table->string('Category',50);
            $table->string('SubCategory',50);
            $table->string('ProductSerialNumber',50);
            $table->string('CountryOrigin',50);
            $table->string('DateManufactured',50);
            $table->boolean('IsComplete');
            $table->float('EstimatedRetailPrice',10,2);
            $table->mediumText('Notes');
            $table->string('LastUpdatedBy',50); ////////////<<<<<<<
            $table->string('KitImageUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts_data');
    }
};
