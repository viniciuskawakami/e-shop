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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('slug');
            $table->mediumText('description');
            $table-> decimal ('price');
            $table->string('thumbnail');
            $table->string('image01_path');
            $table->string('image02_path');
            $table->string('image03_path');
            $table->string('image04_path');
            $table->string('image05_path');
            $table->string('image06_path');
            $table->longText('details');
            $table->integer('type_id');
            $table->boolean('is_active')->default(1);
            $table->integer('cupon_id')->nullable(true);
            $table->integer('starred');
            
            
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
