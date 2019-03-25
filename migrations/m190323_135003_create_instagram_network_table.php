<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%instagram_network}}`.
 */
class m190323_135003_create_instagram_network_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%instagram_network}}', [
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
        $this->dropTable('{{%instagram_network}}');
    }
}
