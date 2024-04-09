<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColorTagline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('taglines', function (Blueprint $table) {
            $table->string('color', 7)->default('#000000')->after('link');
            // Using string type with length 7 to store hex color codes.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('taglines', function (Blueprint $table) {
            $table->dropColumn('color');
        });
    }
}
