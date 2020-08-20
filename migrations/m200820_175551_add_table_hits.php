<?php

use yii\db\Migration;

/**
 * Class m200820_175551_add_table_hits
 */
class m200820_175551_add_table_hits extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hits}}', [
            'hit_id' => $this->primaryKey(),
            'user_agent' => $this->string()->notNull(),
            'ip' => $this->string()->notNull(),
            'target_group' => $this->string()->notNull(),
            'target_pk' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200820_175551_add_table_hits cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200820_175551_add_table_hits cannot be reverted.\n";

        return false;
    }
    */
}
