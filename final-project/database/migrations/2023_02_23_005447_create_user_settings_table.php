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
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('show_my_gender')->default(false);
            $table->boolean('show_my_bio')->default(false);
            $table->boolean('allow_notifications')->default(true);
            $table->string('location_preference')->nullable();
            $table->boolean('allow_profile_visibility')->default(true);
            $table->unsignedInteger('minimum_age_preference')->nullable();
            $table->unsignedInteger('maximum_age_preference')->nullable();
            $table->boolean('allow_account_deletion')->default(false);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
