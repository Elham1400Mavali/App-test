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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->text('advertise')->nullable();
            $table->text('Ad1Ax1')->nullable();
            $table->text('Ad1Ax2')->nullable();
            $table->text('Ad1Ax3')->nullable();
            $table->text('Ad1Ax4')->nullable();
            $table->text('Ad1Ax5')->nullable();
            $table->text('comment')->nullable();
            $table->text('SC1')->nullable();
            $table->text('SC2')->nullable();
            $table->text('SC3')->nullable();
            $table->text('SC4')->nullable();
            $table->text('SC5')->nullable();
            $table->text('SC6')->nullable();
            $table->text('SC7')->nullable();
            $table->text('SC8')->nullable();
            $table->text('SC9')->nullable();
            $table->text('SC10')->nullable();
            $table->text('SC11')->nullable();
            $table->text('SC12')->nullable();
            $table->text('SC13')->nullable();
            $table->text('SC14')->nullable();
            $table->text('SC15')->nullable();
            $table->text('SC16')->nullable();
            $table->text('SC17')->nullable();
            $table->text('SC18')->nullable();

            $table->text('advertise2')->nullable();
            $table->text('Ad2Ax1')->nullable();
            $table->text('Ad2Ax2')->nullable();
            $table->text('Ad2Ax3')->nullable();
            $table->text('Ad2Ax4')->nullable();
            $table->text('Ad2Ax5')->nullable();
            $table->text('comment2')->nullable();
            $table->text('SCA1')->nullable();
            $table->text('SCA2')->nullable();
            $table->text('SCA3')->nullable();
            $table->text('SCA4')->nullable();
            $table->text('SCA5')->nullable();
            $table->text('SCA6')->nullable();
            $table->text('SCA7')->nullable();
            $table->text('SCA8')->nullable();
            $table->text('SCA9')->nullable();
            $table->text('SCA10')->nullable();
            $table->text('SCA11')->nullable();
            $table->text('SCA12')->nullable();
            $table->text('SCA13')->nullable();
            $table->text('SCA14')->nullable();
            $table->text('SCA15')->nullable();
            $table->text('SCA16')->nullable();
            $table->text('SCA17')->nullable();
            $table->text('SCA18')->nullable();

            $table->text('advertise3')->nullable();
            $table->text('Ad3Ax1')->nullable();
            $table->text('Ad3Ax2')->nullable();
            $table->text('Ad3Ax3')->nullable();
            $table->text('Ad3Ax4')->nullable();
            $table->text('Ad3Ax5')->nullable();
            $table->text('comment3')->nullable();
            $table->text('SCA3_1')->nullable();
            $table->text('SCA3_2')->nullable();
            $table->text('SCA3_3')->nullable();
            $table->text('SCA3_4')->nullable();
            $table->text('SCA3_5')->nullable();
            $table->text('SCA3_6')->nullable();
            $table->text('SCA3_7')->nullable();
            $table->text('SCA3_8')->nullable();
            $table->text('SCA3_9')->nullable();
            $table->text('SCA3_10')->nullable();
            $table->text('SCA3_11')->nullable();
            $table->text('SCA3_12')->nullable();
            $table->text('SCA3_13')->nullable();
            $table->text('SCA3_14')->nullable();
            $table->text('SCA3_15')->nullable();
            $table->text('SCA3_16')->nullable();
            $table->text('SCA3_17')->nullable();
            $table->text('SCA3_18')->nullable();

            $table->text('advertise4')->nullable();
            $table->text('Ad4Ax1')->nullable();
            $table->text('Ad4Ax2')->nullable();
            $table->text('Ad4Ax3')->nullable();
            $table->text('Ad4Ax4')->nullable();
            $table->text('Ad4Ax5')->nullable();
            $table->text('comment4')->nullable();
            $table->text('SCA4_1')->nullable();
            $table->text('SCA4_2')->nullable();
            $table->text('SCA4_3')->nullable();
            $table->text('SCA4_4')->nullable();
            $table->text('SCA4_5')->nullable();
            $table->text('SCA4_6')->nullable();
            $table->text('SCA4_7')->nullable();
            $table->text('SCA4_8')->nullable();
            $table->text('SCA4_9')->nullable();
            $table->text('SCA4_10')->nullable();
            $table->text('SCA4_11')->nullable();
            $table->text('SCA4_12')->nullable();
            $table->text('SCA4_13')->nullable();
            $table->text('SCA4_14')->nullable();
            $table->text('SCA4_15')->nullable();
            $table->text('SCA4_16')->nullable();
            $table->text('SCA4_17')->nullable();
            $table->text('SCA4_18')->nullable();

            $table->text('advertise5')->nullable();
            $table->text('Ad5Ax1')->nullable();
            $table->text('Ad5Ax2')->nullable();
            $table->text('Ad5Ax3')->nullable();
            $table->text('Ad5Ax4')->nullable();
            $table->text('Ad5Ax5')->nullable();
            $table->text('comment5')->nullable();
            $table->text('SCA5_1')->nullable();
            $table->text('SCA5_2')->nullable();
            $table->text('SCA5_3')->nullable();
            $table->text('SCA5_4')->nullable();
            $table->text('SCA5_5')->nullable();
            $table->text('SCA5_6')->nullable();
            $table->text('SCA5_7')->nullable();
            $table->text('SCA5_8')->nullable();
            $table->text('SCA5_9')->nullable();
            $table->text('SCA5_10')->nullable();
            $table->text('SCA5_11')->nullable();
            $table->text('SCA5_12')->nullable();
            $table->text('SCA5_13')->nullable();
            $table->text('SCA5_14')->nullable();
            $table->text('SCA5_15')->nullable();
            $table->text('SCA5_16')->nullable();
            $table->text('SCA5_17')->nullable();
            $table->text('SCA5_18')->nullable();

            $table->text('advertise6')->nullable();
            $table->text('Ad6Ax1')->nullable();
            $table->text('Ad6Ax2')->nullable();
            $table->text('Ad6Ax3')->nullable();
            $table->text('Ad6Ax4')->nullable();
            $table->text('Ad6Ax5')->nullable();
            $table->text('comment6')->nullable();
            $table->text('SCA6_1')->nullable();
            $table->text('SCa6_2')->nullable();
            $table->text('SCA6_3')->nullable();
            $table->text('SCA6_4')->nullable();
            $table->text('SCA6_5')->nullable();
            $table->text('SCA6_6')->nullable();
            $table->text('SCA6_7')->nullable();
            $table->text('SCA6_8')->nullable();
            $table->text('SCA6_9')->nullable();
            $table->text('SCA6_10')->nullable();
            $table->text('SCA6_11')->nullable();
            $table->text('SCA6_12')->nullable();
            $table->text('SCA6_13')->nullable();
            $table->text('SCA6_14')->nullable();
            $table->text('SCA6_15')->nullable();
            $table->text('SCA6_16')->nullable();
            $table->text('SCA6_17')->nullable();
            $table->text('SCA6_18')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisement');
    }
};
