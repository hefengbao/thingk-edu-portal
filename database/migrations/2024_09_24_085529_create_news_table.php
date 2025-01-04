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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('category')->comment('分类');
            $table->string('image')->nullable()->comment('图片');
            $table->string('title')->comment('标题');
            $table->string('introduction')->comment('简介');
            $table->string('url')->comment('URL');
            $table->dateTime('published_at')->comment('发布日期');
            $table->tinyInteger('status')->default(1)->comment('状态');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};