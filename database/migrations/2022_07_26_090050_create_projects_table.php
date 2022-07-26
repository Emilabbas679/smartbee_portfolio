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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->default(0);
            $table->text('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->dateTime('delivery_date')->nullable();
            $table->string('domain')->nullable();
            $table->string('image')->nullable();
            $table->string('background')->nullable();
            $table->text('gallery')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('project_categories');
            $table->index('category_id');
            $table->index('delivery_date');
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
        Schema::dropIfExists('projects');
    }
};
