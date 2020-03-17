<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bw_record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100)->comment("备忘记录标题");
            $table->text('content')->comment("备忘记录内容");
            $table->string('tag')->comment("备忘记录内容");
            $table->tinyInteger('is_delete')
                ->comment("记录是否删除 1删除；0未删除。默认0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bw_record');
    }
}
