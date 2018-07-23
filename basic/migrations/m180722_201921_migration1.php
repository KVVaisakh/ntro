<?php

use yii\db\Migration;

/**
 * Class m180722_201921_migration1
 */
class m180722_201921_migration1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColoumn('{{%book}}','book_desc', Schema::TYPE_STRING.'(256)');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColoumn('{{%book}}','book_desc');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180722_201921_migration1 cannot be reverted.\n";

        return false;
    }
    */
}
