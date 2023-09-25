<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProcessStatusToPelayananInputs extends Migration
{
    public function up()
    {
        Schema::table('pelayanan_inputs', function (Blueprint $table) {
            $table->string('process_status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pelayanan_inputs', function (Blueprint $table) {
            $table->dropColumn('process_status');
        });
    }
};
