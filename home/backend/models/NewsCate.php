<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news_cate".
 *
 * @property integer $nc_id
 * @property string $nc_name
 */
class NewsCate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_cate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nc_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nc_id' => 'Nc ID',
            'nc_name' => 'Nc Name',
        ];
    }
}
