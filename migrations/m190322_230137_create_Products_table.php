<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Products}}`.
 */
class m190322_230137_create_Products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Products}}', [
            'id' => $this->primaryKey(),
            'Product1' => $this->string(150),
            '$product2' => $this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Products}}');
    }
}
