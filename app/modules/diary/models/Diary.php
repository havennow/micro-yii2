<?php

namespace base\modules\diary\models;

use yii\db\ActiveRecord;

/**
 * Class Diary - Represent table "diary" on database
 * @package base\modules\diary\models
 */
class Diary extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{diary}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
          [['name','telephone'],'required'],
        ];
    }
}
