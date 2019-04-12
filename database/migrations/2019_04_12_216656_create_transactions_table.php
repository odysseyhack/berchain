<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->decimal('amount', 36,18);
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('coin_id');
            $table->timestamps();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('coin_id')->references('id')->on('coins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $t) {
            $t->dropForeign(['project_id']);
        });

        Schema::table('transactions', function (Blueprint $t) {
            $t->dropForeign(['coin_id']);
        });

        Schema::dropIfExists('transactions');
    }
}
