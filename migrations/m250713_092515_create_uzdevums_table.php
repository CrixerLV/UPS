<?php

use yii\db\Migration;

class m250713_092515_create_uzdevums_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('uzdevums', [
            'id' => $this->primaryKey(),
            'nosaukums' => $this->string()->notNull(),
            'termins' => $this->date()->notNull(),
            'statuss' => $this->boolean(),
            'user_id' => $this->integer()->notNull(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('uzdevums');
    }
}
