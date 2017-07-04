<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $nombres
 * @property string $apellidos
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'nombres', 'apellidos'], 'required'],
            [['username', 'password', 'email', 'nombres', 'apellidos'], 'string', 'max' => 50],
            [['username'], 'unique'],
            ['email','email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Nombre de Usuario',
            'password' => 'Contraseña',
            'email' => 'Email',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
        ];
    }
}
