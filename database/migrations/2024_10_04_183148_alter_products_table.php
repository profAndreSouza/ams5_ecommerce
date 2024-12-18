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
        Schema::table('products', function (Blueprint $table) {
            $table->string('observ')->nullable();
            $table->string('observ1')->nullable();
            $table->string('observ2')->nullable();
            $table->string('observ3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('observ');
            $table->dropColumn('observ1');
            $table->dropColumn('observ2');
            $table->dropColumn('observ3');
        });
    }
};
