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
        Schema::table('trains', function (Blueprint $table) {

            $table->boolean('restaurant_wagon')->deafult(0)->after('coaches');
            // $table->enum('company', ['Trenitalia', 'Italo'])->default('Trenitalia')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->dropColumn('restaurant_wagon');
            // $table->string('company', 150)->default('Trenitalia');
        });
    }
};
