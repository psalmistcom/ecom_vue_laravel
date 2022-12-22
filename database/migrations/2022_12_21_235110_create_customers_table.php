<?php

use App\Models\User;
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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string(column:'first_name');
            $table->string(column:'last_name');
            $table->string(column:'phone')->nullable();
            $table->string(column:'status', length: 45)->nullable();
            $table->timestamps();
            $table->foreignIdFor(model: User::class, column:'created_at')->nullable();
            $table->foreignIdFor(model: User::class, column:'updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
