<?php

use common\models\constants\GeneralStatus;
use yii\db\Migration;

/**
 * Class m210808_205601_group
 */
class m210808_205601_group extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => $this->primaryKey(),
            'group_name' => $this->string()->notNull(),
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
        $this->dropTable('{{%group}}');
    }
}
