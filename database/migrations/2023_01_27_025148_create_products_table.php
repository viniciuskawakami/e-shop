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
            $table->string('description);
            $table->string('thumbnail);
            $table->string('img01_path);
            $table->string('img02_path);
            $table->string('img03_path);
            $table->string('img04_path);
            $table->string('img05_path);
            $table->string('img06_path);
            $table->text('detais');
            $table->integer('type_id');
            $table->boolean('is_active');
            $table-integer('cupon_id');
            $table->integer('starred');
            $table->boolean('is_active')->default(1);
            
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);->nullable();
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
