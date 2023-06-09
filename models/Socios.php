<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "socios".
 *
 * @property int $codigo_s
 * @property string|null $dni
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property float|null $saldo
 */
class Socios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'socios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saldo'], 'number'],
            [['dni'], 'string', 'max' => 9],
            [['nombre'], 'string', 'max' => 20],
            [['apellidos'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_s' => 'Codigo S',
            'dni' => 'Dni',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'saldo' => 'Saldo',
        ];
    }
}
