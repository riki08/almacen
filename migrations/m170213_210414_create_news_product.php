<?php

use yii\db\Migration;

class m170213_210414_create_news_product extends Migration
{
    public function up()
    {
      $this->createTable("producto",
      [
        "id_product" => $this->primaryKey(),
        "name_product" => $this->string()->notNull(),
        "referencia" => $this->text()->notNull()
      ]);
    }

    public function down()
    {
      $this->dropTable("producto");
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
