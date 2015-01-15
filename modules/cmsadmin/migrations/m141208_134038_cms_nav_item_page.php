<?php

use yii\db\Schema;
use yii\db\Migration;

class m141208_134038_cms_nav_item_page extends Migration
{
    public function up()
    {
        $this->createTable("cms_nav_item_page", [
            "id" => "pk",
            "text" => Schema::TYPE_TEXT,
            "layout_id" => Schema::TYPE_INTEGER,
        ]);

        $this->insert("cms_nav_item_page", [
            "text" => "Welcome to LUYA!"
        ]);
    }

    public function down()
    {
        echo "m141208_134038_cms_nav_item_page cannot be reverted.\n";

        return false;
    }
}