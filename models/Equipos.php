<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipos".
 *
 * @property integer $id
 * @property string $marca
 * @property string $serial
 * @property string $estado
 * @property string $bien_nacional
 */
class Equipos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marca', 'serial', 'estado', 'bien_nacional'], 'required'],
            [['marca'], 'string', 'max' => 100],
            [['serial', 'estado', 'bien_nacional'], 'string', 'max' => 50],
            [['serial'], 'unique'],
            [['bien_nacional'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca' => 'Marca del Equipo',
            'serial' => 'Serial',
            'estado' => 'Estado',
            'bien_nacional' => 'Bien Nacional',
        ];
    }
}
