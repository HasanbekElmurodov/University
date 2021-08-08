<?php


namespace common\models\constants;


class GeneralStatus
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 20;

    public static function getString($role)
    {
        if ($role == self::STATUS_INACTIVE) return \Yii::t('app', "In active");
        if ($role == self::STATUS_ACTIVE) return \Yii::t('app', "Active");
        if ($role == self::STATUS_DELETED) return \Yii::t('app', "Deleted");
        return "Noma'lum";
    }

    public static function getList()
    {
        return [
            self::STATUS_ACTIVE => self::getString(self::STATUS_ACTIVE),
            self::STATUS_INACTIVE => self::getString(self::STATUS_INACTIVE),
        ];
    }
}