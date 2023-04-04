<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterChamadasTableAddPresenteEnum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chamadas', function (Blueprint $table) {
            $table->enum('presente', ['presente', 'falta'])->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chamadas', function (Blueprint $table) {
            $table->string('presente')->change();
        });
    }
}

