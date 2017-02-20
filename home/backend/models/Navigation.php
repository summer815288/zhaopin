<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "navigation".
 *
 * @property string $id
 * @property string $alias
 * @property integer $urltype
 * @property integer $display
 * @property integer $list_id
 * @property string $title
 * @property string $pagealias
 * @property string $tag
 * @property string $target
 * @property string $navigationorder
 */
class Navigation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'navigation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alias', 'title', 'pagealias', 'tag', 'target'], 'required'],
            [['urltype', 'display', 'list_id', 'navigationorder'], 'integer'],
            [['alias', 'title', 'pagealias', 'tag', 'target'], 'string', 'max' => 100]
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
            'urltype' => 'Urltype',
            'display' => 'Display',
            'list_id' => 'List ID',
            'title' => 'Title',
            'pagealias' => 'Pagealias',
            'tag' => 'Tag',
            'target' => 'Target',
            'navigationorder' => 'Navigationorder',
        ];
    }
}
