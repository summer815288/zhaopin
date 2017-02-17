<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news_list".
 *
 * @property integer $news_id
 * @property integer $nc_id
 * @property string $news_title
 * @property string $news_content
 * @property string $news_author
 * @property string $news_time
 * @property string $news_img
 */
class NewsList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nc_id'], 'integer'],
            [['news_time'], 'safe'],
            [['news_title', 'news_content', 'news_author', 'news_img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'News ID',
            'nc_id' => 'Nc ID',
            'news_title' => 'News Title',
            'news_content' => 'News Content',
            'news_author' => 'News Author',
            'news_time' => 'News Time',
            'news_img' => 'News Img',
        ];
    }
}
