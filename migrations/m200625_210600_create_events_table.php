<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%events}}`.
 */
class m200625_210600_create_events_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%events}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'image' => $this->string()->defaultValue(null),
            'status' => $this->integer(1),
            'description' => $this->string()->defaultValue(null),
            'created_at' => $this->integer(11)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%events}}');
    }
}
