<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('member_id')->unsigned();
            $table->timestamp('issued_date')->default(\Illuminate\Support\Facades\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('returned_date')->nullable();
            $table->integer('return_status')->default(0);
            $table->timestamps();

            $table->foreign('book_id')->references('id')
                ->on('books')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('member_id')->references('id')
                ->on('members')
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
        Schema::dropIfExists('issued_books');
    }
}
