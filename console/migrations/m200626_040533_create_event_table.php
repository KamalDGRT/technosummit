<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200626_040533_create_event_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%event}}', [
            'id' => $this->integer(11)->notNull(),
            'image_id' => $this->string(16)->notNull(),
            'name' => $this->string()->notNull(),
            'short_description' => $this->text()->notNull(),
            'club' => $this->string(100),
            'status' => $this->integer(1),
            'has_image' => $this->boolean(),
            'image_name' => $this->string(512),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey('PK_events_event_id', '{{%event}}', 'id');

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-event-created_by}}',
            '{{%event}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-event-created_by}}',
            '{{%event}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-event-updated_by}}',
            '{{%event}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        $this->alterColumn('{{%event}}', 'id', $this->integer().' NOT NULL AUTO_INCREMENT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-event-created_by}}',
            '{{%event}}'
        );

        $this->dropForeignKey(
            '{{%fk-event-updated_by}}',
            '{{%event}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-event-created_by}}',
            '{{%event}}'
        );

        $this->dropTable('{{%event}}');
    }
}
