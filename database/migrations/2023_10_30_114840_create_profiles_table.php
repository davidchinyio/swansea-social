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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email');
            $table->timestamps();
            $table->bigInteger('supporters_group_id')->unsigned();
            // $table->bigInteger('football_teams_profile_id')->unsigned();
            
            // $table->foreign('football_teams_profile_id')->references('id')->on('football_teams')
            //     ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('supporters_group_id')->references('id')->on('supporters_groups')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
