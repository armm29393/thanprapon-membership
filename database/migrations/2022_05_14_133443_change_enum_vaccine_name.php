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
        Schema::table('vaccinations', function (Blueprint $table) {
            $table->dropColumn('vaccine_name');
        });
        Schema::table('vaccinations', function (Blueprint $table) {
            $table->enum('vaccine_name', ['SV', 'SP', 'AZ', 'JJ', 'PZ', 'MD'])->after('dose');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
