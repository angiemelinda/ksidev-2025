<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id')->constrained('karyawans')->onDelete('cascade');
            $table->decimal('jumlah', 15, 2);
            $table->string('periode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gajis');
    }
}; 