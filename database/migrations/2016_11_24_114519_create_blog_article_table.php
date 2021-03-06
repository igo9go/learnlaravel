<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateBlogArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_article', function (Blueprint $table) {
            $table->increments('art_id');
            $table->string('art_title', 100)->nullable()->comment('//文章标题');
            $table->string('art_tag', 100)->nullable()->comment('//关键词');
            $table->string('art_description', 255)->nullable()->comment('//描述');
            $table->string('art_thumb', 255)->nullable()->comment('//缩略图');
            $table->text('art_content')->nullable()->comment('//内容');
            $table->integer('art_time')->nullable()->comment('//发布时间');
            $table->string('art_editor', 50)->nullable()->comment('//作者');
            $table->integer('art_view')->nullable()->comment('//查看次数');
            $table->integer('cate_id')->nullable()->comment('//分类id');

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_article');
    }
}
