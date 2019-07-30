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
