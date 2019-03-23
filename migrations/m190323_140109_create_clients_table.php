<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m190323_140109_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(150)->notNull(),
            'manager' => $this->integer(),
            'act' => $this->integer(),
            'status' => $this->integer()->notNull(),
            'interest' => $this->integer()->notNull(),
            'created_date' => $this->date(),
            'vk_id' =>$this->integer(),
            'instagram_id' => $this->integer(),
        ]);
        $this->createIndex('manager_id', 'tbl_clients', 'manager');
        $this->createIndex('act_id', 'tbl_clients', 'act');
        $this->createIndex('client_status', 'tbl_clients', 'status');
        $this->createIndex('client_interest', 'tbl_clients', 'interest');
        $this->createIndex('client_vk_id', 'tbl_clients', 'vk_id');
        $this->createIndex('client_instagram_id', 'tbl_clients', 'instagram_id');

        $this->addForeignKey('manager_id', 'tbl_clients', 'manager', 'tbl_managers', 'id', 'CASCADE');
        $this->addForeignKey('act_id', 'tbl_clients', 'act', 'tbl_acts', 'id', 'CASCADE');
        $this->addForeignKey('client_status_id', 'tbl_clients', 'status', 'tbl_clients_status', 'id', 'CASCADE');
        $this->addForeignKey('client_product_id', 'tbl_clients', 'interest', 'tbl_products', 'id', 'CASCADE');
        $this->addForeignKey('client_vk_id', 'tbl_clients', 'vk_id', 'tbl_vk_network', 'id', 'CASCADE');
        $this->addForeignKey('instagram_client_id', 'tbl_clients', 'instagram_id', 'tbl_instagram_network', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
