<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBemorlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bemorlars', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('author_id');
            $table->string('harorat');
            $table->text('shikoyat');
            $table->text('kurik');
            $table->text('tashxis');
            $table->text('tavsiya');
            $table->text('Surunkali_kasalliklari');
            $table->string('Analiz_natijalari');
            $table->text('Davolash_usuli');
            $table->text('Qabul_qilgan_dori_vositalari');
            $table->text('Holatining_o’zgarishi');
            $table->text('Bemorning_holati');
            $table->text('Davolashning_tugash_sanasi');
            $table->text('Bemor_davolangan');
            $table->text('Davolovchi_shifokorlar');
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
        Schema::dropIfExists('bemorlars');
    }
}
