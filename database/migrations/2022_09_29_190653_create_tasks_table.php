<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
<<<<<<< HEAD:database/migrations/2022_09_29_190653_create_tasks_table.php
            $table->string('description');
            $table->string('color');
            $table->integer('priority');
            $table->date('date_reminder');
            $table->boolean('done');
            $table->foreignIdFor(User::class);
=======
            $table->string('description', 50);
            $table->string('color', 7);
            $table->tinyInteger('priority');
            $table->date('date_reminder');
            $table->boolean('done');
            $table->integer('user_id');
>>>>>>> c032df60d38480138c0320c935045594034e4ce1:database/migrations/2022_09_29_142806_create_tasks_table.php
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
        Schema::dropIfExists('tasks');
    }
};
