<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%managers}}`.
 */
class m190323_125102_create_managers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%managers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150)->notNull(),
            'role' => $this->integer()->notNull(),
        ]);
        $this->createIndex('FK_managers_role', 'tbl_managers', 'role');
        $this->addForeignKey('fk_managers_role','tbl_managers', 'role', 'tbl_roles', 'id', 'CASCADE');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tbl_managers}}');
    }
}
