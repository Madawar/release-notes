<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readmes', function (Blueprint $table) {
            $table->id();
            $table->string('semver_version');
            $table->date('release_date');
            $table->text('description')->nullable();
            $table->text('release_notes')->nullable();
            $table->json('notify')->nullable();
            $table->boolean('notify_all')->nullable()->default(0);
            $table->boolean('notified')->nullable()->default(0);
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
        Schema::dropIfExists('readmes');
    }
}
