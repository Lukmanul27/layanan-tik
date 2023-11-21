<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pelayanan_inputs', function (Blueprint $table) {
            $table->json('petugas_data')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pelayanan_inputs', function (Blueprint $table) {
            $table->dropColumn('petugas_data');
        });
    }
};
