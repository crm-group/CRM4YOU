<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients_status}}`.
 */
class m190322_223950_create_clients_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients_status}}', [
            'id' => $this->primaryKey(),
            'new' => $this->string(150),
            'first_contact' => $this->string(150),
            'conversation' => $this->string(255),
            'make a decision' => $this->string(255),
            'contract' => $this->string(155),
            'invoice' => $this->string(155),
            'implemented and closed' => $this->string(150),
            'closed and unfulfilled' => $this->string(150),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients_status}}');
    }
}
