<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event_registration}}`.
 */
class m200630_062721_create_event_registration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%event_registration}}', [
            'id' => $this->integer(11)->notNull(),
            'image_id' => $this->string(16)->notNull()->unique(),
            'r_salutation' => $this->integer(4)->notNull(),
            'r_name' => $this->string()->notNull(),
            'r_email' => $this->string()->notNull(),
            'r_phone' => $this->string()->notNull(),
            'r_college' => $this->string()->notNull(),
            'r_year' => $this->integer()->notNull(),
            'r_city' => $this->string()->notNull(),
            'r_state' => $this->string()->notNull(),
            'r_event' => $this->integer()->notNull(),
            'r_payment' => $this->integer(11)->notNull(),
            'status' => $this->integer(1),
            'has_image' => $this->boolean(),
            'image_name' => $this->string(512),
            'r_transaction_id' => $this->string()->notNull()->unique(),
            'created_at' => $this->integer(11),
            'created_by' => $this->string(),
            'updated_at' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey('PK_registrations_event_registration_id', '{{%event_registration}}', 'id');

        $this->alterColumn('{{%event_registration}}', 'id', $this->integer().' NOT NULL AUTO_INCREMENT');

        $this->addForeignKey(
            '{{%fk-event-registration-updated_by}}',
            '{{%event_registration}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            '{{%fk-event-updated_by}}',
            '{{%event_registration}}'
        );

        $this->dropTable('{{%event_registration}}');
    }
}
