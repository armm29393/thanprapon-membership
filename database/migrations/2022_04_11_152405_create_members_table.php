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
            $table->integer('member_id');
            $table->enum('title', ['mr', 'mrs', 'miss', 'boy', 'girl']);
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->string('nname', 100);
            $table->string('tel', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('lineid', 100)->nullable();
            $table->date('dob');
            $table->date('weddingdate')->nullable();
            $table->string('baptism', 100);          
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