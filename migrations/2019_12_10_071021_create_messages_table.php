<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('消息标题');
            $table->string('content')->default('')->comment('消息正文');
            $table->integer('user_id')->default(0)->comment('用户ID');
            $table->tinyInteger('message_type')->default(0)->comment('消息类型(1: 系统 | 2: 活动 | 3: 事件 | 4: 评论 | 5: 点赞 )');

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
        Schema::dropIfExists('messages');
    }
}
