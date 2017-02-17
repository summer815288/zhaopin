<?php
namespace backend\models;
use yii\base\Model;
class EmailForm extends Model{
    public $email;
    public $subject;
    public $connect;


    public function rules()
    {
        return [
            [['subject', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}