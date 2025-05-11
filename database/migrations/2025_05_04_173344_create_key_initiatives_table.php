<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyInitiativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_initiatives', function (Blueprint $table) {
            Schema::create('key_initiatives', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->enum('status', ['draft', 'published']);
                $table->text('description');
                $table->string('banner');
                $table->text('impact')->nullable();
                $table->year('year')->nullable();
                $table->timestamps();
            });
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('key_initiatives');
    }
}
