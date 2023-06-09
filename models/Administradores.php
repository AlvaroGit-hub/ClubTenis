<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administradores".
 *
 * @property int $codigo_a
 * @property string|null $nombre
 * @property string|null $apellidos
 *
 * @property Reservas[] $reservas
 */
class Administradores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'administradores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
            'codigo_a' => 'Codigo A',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reservas::class, ['codigo_a' => 'codigo_a']);
    }
}
