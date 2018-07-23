<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180722_204517_migration5
 */
class m180722_204517_migration5 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->addColumn('{{%book}}','book_desc', Schema::TYPE_STRING.'(256)');
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
        echo "m180722_204517_migration5 cannot be reverted.\n";

        return false;
    }
    */
}
