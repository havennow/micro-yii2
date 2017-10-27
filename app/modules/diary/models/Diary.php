<?php

namespace base\modules\diary\models;

use yii\db\ActiveRecord;

class Diary extends ActiveRecord
{
    public static function tableName()
    {
        return '{{diary}}';
    }

    public function rules()
    {
        return [
          [['name','telephone'],'required'],
        ];
    }
}
