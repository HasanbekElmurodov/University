<?php

use yii\db\Migration;

/**
 * Class m210808_142028_create_user
 */
class m210808_142028_create_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash("123456"),
            'password_reset_token' => NULL,
            'email' => 'admin@gmail.com',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210808_142028_create_user cannot be reverted.\n";
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210808_142028_create_user cannot be reverted.\n";

        return false;
    }
    */
}
