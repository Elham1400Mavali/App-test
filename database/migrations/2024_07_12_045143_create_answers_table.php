<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('advertisement_id')->nullable();
            $table->text('education')->nullable();
            $table->text('old')->nullable();
            $table->text('gender')->nullable();
            $table->text('marital_status')->nullable();
            $table->text('income')->nullable();
            $table->text('job')->nullable();
            $table->text('number_phone')->nullable();

            $table->text('neo1')->nullable();
            $table->text('neo2')->nullable();
            $table->text('neo3')->nullable();
            $table->text('neo4')->nullable();
            $table->text('neo5')->nullable();
            $table->text('neo6')->nullable();
            $table->text('neo7')->nullable();
            $table->text('neo8')->nullable();
            $table->text('neo9')->nullable();
            $table->text('neo10')->nullable();
            $table->text('neo11')->nullable();
            $table->text('neo12')->nullable();
            $table->text('neo13')->nullable();
            $table->text('neo14')->nullable();
            $table->text('neo15')->nullable();
            $table->text('neo16')->nullable();
            $table->text('neo17')->nullable();
            $table->text('neo18')->nullable();
            $table->text('neo19')->nullable();
            $table->text('neo20')->nullable();
            $table->text('neo21')->nullable();
            $table->text('neo22')->nullable();
            $table->text('neo23')->nullable();
            $table->text('neo24')->nullable();
            $table->text('neo25')->nullable();
            $table->text('neo26')->nullable();
            $table->text('neo27')->nullable();
            $table->text('neo28')->nullable();
            $table->text('neo29')->nullable();
            $table->text('neo30')->nullable();
            $table->text('neo31')->nullable();
            $table->text('neo32')->nullable();
            $table->text('neo33')->nullable();
            $table->text('neo34')->nullable();
            $table->text('neo35')->nullable();
            $table->text('neo36')->nullable();
            $table->text('neo37')->nullable();
            $table->text('neo38')->nullable();
            $table->text('neo39')->nullable();
            $table->text('neo40')->nullable();
            $table->text('neo41')->nullable();
            $table->text('neo42')->nullable();
            $table->text('neo43')->nullable();
            $table->text('neo44')->nullable();
            $table->text('neo45')->nullable();
            $table->text('neo46')->nullable();
            $table->text('neo47')->nullable();
            $table->text('neo48')->nullable();
            $table->text('neo49')->nullable();
            $table->text('neo50')->nullable();
            $table->text('neo51')->nullable();
            $table->text('neo52')->nullable();
            $table->text('neo53')->nullable();
            $table->text('neo54')->nullable();
            $table->text('neo55')->nullable();
            $table->text('neo56')->nullable();
            $table->text('neo57')->nullable();
            $table->text('neo58')->nullable();
            $table->text('neo59')->nullable();
            $table->text('neo60')->nullable();

            $table->timestamps();

            $table->foreign('advertisement_id')->references('id')->on('advertisements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
