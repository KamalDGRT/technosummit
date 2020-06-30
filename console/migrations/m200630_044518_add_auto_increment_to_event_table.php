<?php

use yii\db\Migration;

/**
 * Class m200630_044518_add_auto_increment_to_events_table
 */
class m200630_044518_add_auto_increment_to_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%event}}', 'id', $this->integer().' NOT NULL AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200630_044518_add_auto_increment_to_events_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200630_044518_add_auto_increment_to_events_table cannot be reverted.\n";

        return false;
    }
    */
}
