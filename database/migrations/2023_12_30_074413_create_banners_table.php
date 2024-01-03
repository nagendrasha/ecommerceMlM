<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->integer('category')->default(4);
            $table->text('image')->nullable();       
            $table->text('link')->nullable();       
            $table->integer('sort')->default(0);
            $table->tinyInteger('status')->default(1)->comment('0 = Inactive , 1 = Active');
            $table->tinyInteger('deleted')->default(0)->comment('0 = not deleted , 1 = deleted');
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
        Schema::dropIfExists('banners');
    }
}
