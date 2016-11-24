<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateBlogCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_category', function (Blueprint $table) {
            $table->increments('cate_id');
            $table->string('cate_name', 50)->nullable()->comment('//分类名称');
            $table->string('cate_title', 255)->nullable()->comment('//分类说明');
            $table->string('cate_keywords', 255)->nullable()->comment('//关键词');
            $table->string('cate_description', 255)->nullable()->comment('//描述');
            $table->integer('cate_view')->nullable()->comment('//查看次数');
            $table->tinyInteger('cate_order')->nullable()->comment('//排序');
            $table->integer('cate_pid')->nullable()->comment('//父级id');

            

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_category');
    }
}
