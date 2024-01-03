<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 50);
            $table->string('slug');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('sku', 50)->nullable();
            $table->integer('category_id')->default(0)->nullable();
            $table->integer('quantity')->default(0)->nullable();
            $table->double('weight', 10, 2)->default(0)->nullable();
            $table->double('length', 10, 2)->default(0)->nullable();
            $table->double('width', 10, 2)->default(0)->nullable();
            $table->double('height', 10, 2)->default(0)->nullable();
            $table->double('price', 10, 2)->default(0)->nullable();
            $table->double('discount', 10, 2)->default(0)->nullable();
            $table->integer('minimum_order')->default(0)->nullable();
            $table->integer('manufacturer_id')->default(0)->nullable();
            $table->integer('brand_id')->default(0)->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->integer('sort_order')->default(0)->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->softDeletes();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
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
}
