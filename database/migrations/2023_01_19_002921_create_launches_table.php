<?php

use App\Models\Congregation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launches', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->date('date');
            $table->foreignId('status');
            $table->float('amount');
            $table->foreignId('user_id');
            $table->foreignId('congregation_id')->constrained('congregations');
            $table->foreignId('input_type_id')->constrained('input_types');
            $table->foreignId('launch_type_id')->constrained('launch_types');
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
        Schema::dropIfExists('launches');
    }
};
