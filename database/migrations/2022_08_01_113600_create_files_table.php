<?php

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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('entity_type')->default('project');
            $table->unsignedBigInteger('entity_id')->default(0);
            $table->string('type')->default('image');
            $table->string('url')->nullable();
            $table->timestamps();


            $table->index('entity_type');
            $table->index('entity_id');
            $table->index('type');
            $table->index('created_at');
            $table->index('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
