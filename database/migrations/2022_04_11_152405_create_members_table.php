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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->enum('title', ['mr', 'mrs', 'miss', 'boy', 'girl']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname');
            $table->date('birth_date');
            $table->string('address');
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('line_id')->nullable();
            $table->date('wedding_date')->nullable();
            $table->string('baptism_place')->nullable();
            $table->date('baptism_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
