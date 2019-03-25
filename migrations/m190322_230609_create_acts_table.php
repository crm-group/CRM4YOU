<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%acts}}`.
 */
class m190322_230609_create_acts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%acts}}', [
            'id' => $this->primaryKey(),
            'call back'=> $this->string(100),
            'send email' => $this->string(150),
            'conversation' => $this -> string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%acts}}');
    }
}
