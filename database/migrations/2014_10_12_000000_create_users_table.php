<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('age');
            $table->enum('maritual_status', ['married', 'unmarried']);
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('phone_number');
            $table->enum('interest', ['study', 'work', 'ee', 'pnp', 'investment']);
            $table->string('education');
            $table->string('eca')->nullable();
            $table->enum('ielts', ['gt', 'academic', 'not_applicable'])->nullable();
            $table->string('noc')->nullable();
            $table->string('signature');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
