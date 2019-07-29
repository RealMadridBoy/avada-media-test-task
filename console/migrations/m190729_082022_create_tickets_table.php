<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tickets}}`.
 */
class m190729_082022_create_tickets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $row = [
            1 => 12,
            2 => 14,
            3 => 15,
            4 => 13,
            5 => 13,
            6 => 13,
            7 => 13,
            8 => 13,
            9 => 13,
            10 => 20,
        ];

        $this->createTable('{{%tickets}}', [
            'id' => $this->primaryKey(),
            'row' => $this->integer(),
            'place' => $this->integer(),
            'status' => $this->string(10),
        ]);

        for ($i = 1; $i <=10; $i++)
        {
            for ($j = 1; $j <= $row[$i]; $j++) {
                $this->insert('tickets', [
                    'row' => $i,
                    'place' => $j,
                    'status' => 'free',
                ]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tickets}}');
    }
}
