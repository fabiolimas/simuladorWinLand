<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdCorrecoesIdToBancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bancos', function (Blueprint $table) {
            $table->foreignId('correcaos_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bancos', function (Blueprint $table) {
            $table->foreignId('correcaos_id')
            ->constrained()
            ->onDelete('restrict');
        });
    }
}
