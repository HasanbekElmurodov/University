<?php

use common\models\constants\GeneralStatus;
use yii\db\Migration;

/**
 * Class m210808_210347_lesson
 */
class m210808_210347_lesson extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lesson}}', [
            'id' => $this->primaryKey(),
            'teacher_id' => $this->integer()->notNull(),
            'group_id' => $this->integer()->notNull(),
            'room_id' => $this->integer()->notNull(),
            'status' => $this->integer()->defaultValue(GeneralStatus::STATUS_ACTIVE),
            'started_at' => $this->integer()->notNull(),
            'ended_at' => $this->integer()->notNull(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()

        ]);

        $this->createIndex('lesson_index_1', '{{%lesson}}', 'teacher_id');
        $this->createIndex('lesson_index_2', '{{%lesson}}', 'group_id');
        $this->createIndex('lesson_index_3', '{{%lesson}}', 'room_id');


        $this->addForeignKey('lesson_fk_1', '{{%lesson}}', 'teacher_id', '{{%teacher}}', 'id', 'restrict', 'cascade');
        $this->addForeignKey('lesson_fk_2', '{{%lesson}}', 'group_id', '{{%group}}', 'id', 'restrict', 'cascade');
        $this->addForeignKey('lesson_fk_3', '{{%lesson}}', 'room_id', '{{%room}}', 'id', 'restrict', 'cascade');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('lesson_fk_1', '{{%lesson}}');
        $this->dropForeignKey('lesson_fk_2', '{{%lesson}}');
        $this->dropForeignKey('lesson_fk_3', '{{%lesson}}');
        $this->dropIndex('lesson_index_1', '{{%lesson}}');
        $this->dropIndex('lesson_index_2', '{{%lesson}}');
        $this->dropIndex('lesson_index_3', '{{%lesson}}');

        $this->dropTable('{{%lesson}}');
    }
}
