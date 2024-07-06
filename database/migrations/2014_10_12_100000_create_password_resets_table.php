<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
return new class extends Migration
=======
class CreatePasswordResetsTable extends Migration
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
<<<<<<< HEAD
};
=======
}
>>>>>>> 519d056291fcfc67a547d63fc1f7bd084e471e1a
