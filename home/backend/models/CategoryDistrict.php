<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category_district".
 *
 * @property string $id
 * @property string $parentid
 * @property string $categoryname
 * @property integer $category_order
 */
class CategoryDistrict extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category_district';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentid', 'category_order'], 'integer'],
            [['categoryname'], 'required'],
            [['categoryname'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parentid' => 'Parentid',
            'categoryname' => 'Categoryname',
            'category_order' => 'Category Order',
        ];
    }
}
