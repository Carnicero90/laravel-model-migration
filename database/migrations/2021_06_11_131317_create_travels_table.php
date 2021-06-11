<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('from', 20); // partenza
            $table->string('to', 20); // destinazione
            $table->tinyInteger('maxGuests'); // numero max di partecipanti
            $table->tinyInteger('minGuests'); // numero minimo di partecipanti
            $table->text('description')->nullable(); // descrizione dettagliata viaggio
            $table->date('start'); // data di partenza
            $table->date('end'); // data di ritorno
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
        Schema::dropIfExists('travels');
    }
}
