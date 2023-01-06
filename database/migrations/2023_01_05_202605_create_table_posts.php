<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->string('subtitle')->nullable(false);
            $table->text('body')->nullable(false);
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });
        Schema::dropIfExists('posts');
    }
};
