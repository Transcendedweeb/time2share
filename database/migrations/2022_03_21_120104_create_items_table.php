<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("item_name");
            $table->string("description", 500);
            $table->string("image")->default("/img/other.png");
            $table->string("tag");
            $table->integer("loan_time");
            $table->boolean("is_loaned")->default(FALSE);
            $table->foreignId('id_lender')->constraint('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('id_borrower')->constraint('users')->nullable()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
