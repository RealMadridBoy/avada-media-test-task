<?php

use yii\db\Migration;

/**
 * Class m190730_123726_drop_email_column
 */
class m190730_123726_drop_email_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user', 'email');

        $this->insert('user', [
            'username' => 'admin',
            'auth_key' => 'WwlIDrgMCLsUxZH2vIsTLM9U894c_MAJ',
            'password_hash' => '$2y$13$AtlpZYSQVt.TzwJahbdcp.CvRDlH1Mkvh4ZykRW3aMFeOMjlNnZb2',
            'password_reset_token' => '',
            'status' => 10,
            'created_at' => 1000000000,
            'updated_at' => 1000000000,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('user', 'email', $this->string()->notNull()->unique());
        /*
        echo "m190730_123726_drop_email_column cannot be reverted.\n";

        return false;
        */
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190730_123726_drop_email_column cannot be reverted.\n";

        return false;
    }
    */
}
