<?php

use common\models\constants\GeneralStatus;
use yii\db\Migration;

/**
 * Class m210808_152857_subject
 */
class m210808_152857_subject extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'subject_name' => $this->string()->notNull(),
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
        $this->dropTable('{{%subject}}');
    }

}
