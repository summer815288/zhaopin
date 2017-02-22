<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "navigation_category".
 *
 * @property integer $id
 * @property string $alias
 * @property string $categoryname
 * @property integer $admin_set
 */
class NavigationCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'navigation_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'categoryname'], 'required'],
            [['admin_set'], 'integer'],
            [['alias'], 'string', 'max' => 100],
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
            'alias' => 'Alias',
            'categoryname' => 'Categoryname',
            'admin_set' => 'Admin Set',
        ];
    }
}
