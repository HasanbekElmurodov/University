<?php

use common\models\constants\GeneralStatus;
use yii\db\Migration;

/**
 * Class m210808_151648_teacher
 */
class m210808_151648_teacher extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teacher}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'subject' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(GeneralStatus::STATUS_ACTIVE),
            'avatar_photo' => $this->string(255)->notNull()->defaultValue('/no-photo.png'),
            'phone_number' => $this->string()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teacher}}');

    }
}
