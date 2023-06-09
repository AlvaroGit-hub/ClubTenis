<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "torneos".
 *
 * @property int $codigo_t
 * @property string|null $nombre
 * @property string|null $organizadores
 * @property int|null $numero_p
 * @property string|null $fecha
 */
class Torneos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'torneos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero_p'], 'integer'],
            [['nombre'], 'string', 'max' => 20],
            [['organizadores'], 'string', 'max' => 1000],
            [['fecha'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_t' => 'Codigo T',
            'nombre' => 'Nombre',
            'organizadores' => 'Organizadores',
            'numero_p' => 'Numero P',
            'fecha' => 'Fecha',
        ];
    }
    public function getUrl($action)
{
    return \yii\helpers\Url::to([$action, 'codigo_t' => $this->codigo_t]);
}

}
