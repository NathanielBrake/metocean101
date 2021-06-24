<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetOceanDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('met_ocean_data', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Time', 2);
            $table->decimal('lev', 4, 2);
            $table->decimal('hs', 3, 1);
            $table->decimal('hx', 3, 1);
            $table->decimal('tp', 3, 1);
            $table->decimal('tm01', 3, 1);
            $table->decimal('tm02', 3, 1);
            $table->integer('dp');
            $table->integer('dpm');
            $table->decimal('hs_sw1', 3, 1);
            $table->decimal('hs_sw8', 3, 1);
            $table->decimal('tp_sw1', 3, 1);
            $table->decimal('tp_sw8', 3, 1);
            $table->integer('dpm_sw8');
            $table->integer('dpm_sw1');
            $table->decimal('hs_sea8', 3, 1);
            $table->decimal('hs_sea', 3, 1);
            $table->decimal('tp_sea8', 3, 1);
            $table->decimal('tp_sea', 3, 1);
            $table->decimal('tm_sea', 3, 1);
            $table->integer('dpm_sea8');
            $table->integer('dpm_sea');
            $table->decimal('hs_ig', 3, 1);
            $table->decimal('hs_fig', 3, 1);
            $table->integer('wsp');
            $table->integer('gst');
            $table->integer('wd');
            $table->integer('wsp100');
            $table->integer('wsp50');
            $table->integer('wsp80');
            $table->decimal('precip', 4, 2);
            $table->decimal('tmp', 4, 1);
            $table->integer('rh');
            $table->decimal('vis', 4, 1);
            $table->integer('cld');
            $table->integer('cb');
            $table->decimal('csp0', 3, 1);
            $table->integer('cd0');
            $table->decimal('ss', 4, 2);
            $table->decimal('sst', 4, 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('met_ocean_data');
    }
}
