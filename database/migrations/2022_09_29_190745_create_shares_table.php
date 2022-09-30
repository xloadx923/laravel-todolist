<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD:database/migrations/2022_09_29_190745_create_shares_table.php
use App\Models\Task;
use App\Models\User;
=======
use App\Models\User;
use App\Models\Task;
>>>>>>> c032df60d38480138c0320c935045594034e4ce1:database/migrations/2022_09_29_142929_create_shares_table.php

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shares', function (Blueprint $table) {
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Task::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shares');
    }
};
