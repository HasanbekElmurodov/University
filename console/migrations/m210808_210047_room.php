<?php

use common\models\constants\GeneralStatus;
use yii\db\Migration;

/**
 * Class m210808_210047_room
 */
class m210808_210047_room extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%room}}', [
            'id' => $this->primaryKey(),
            'room_number' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(GeneralStatus::STATUS_ACTIVE),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%room}}');
    }
}
