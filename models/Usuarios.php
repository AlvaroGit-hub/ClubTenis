<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $codigo_u
 * @property string|null $dni
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property float|null $saldo
 * @property int|null $codigo_r
 *
 * @property Reservas $codigoR
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['saldo'], 'number'],
            [['codigo_r'], 'integer'],
            [['dni'], 'string', 'max' => 9],
            [['nombre'], 'string', 'max' => 20],
            [['apellidos'], 'string', 'max' => 30],
            [['codigo_r'], 'exist', 'skipOnError' => true, 'targetClass' => Reservas::class, 'targetAttribute' => ['codigo_r' => 'codigo_r']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_u' => 'Codigo U',
            'dni' => 'Dni',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'saldo' => 'Saldo',
            'codigo_r' => 'Codigo R',
        ];
    }

    /**
     * Gets query for [[CodigoR]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoR()
    {
        return $this->hasOne(Reservas::class, ['codigo_r' => 'codigo_r']);
    }
}
