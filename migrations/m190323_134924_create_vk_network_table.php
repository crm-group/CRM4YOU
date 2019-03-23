<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vk_network}}`.
 */
class m190323_134924_create_vk_network_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vk_network}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'activity' => $this->integer(),
            'avatar' => $this->string(),
            'comment' => $this->string(250),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vk_network}}');
    }
}
