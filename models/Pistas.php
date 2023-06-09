<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pistas".
 *
 * @property int $codigo_p
 * @property string|null $nombre
 * @property string|null $tipo
 * @property string|null $ubicacion
 * @property int|null $codigo_r
 *
 * @property Reservas $codigoR
 */
class Pistas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pistas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo_r'], 'integer'],
            [['nombre', 'tipo', 'ubicacion'], 'string', 'max' => 20],
            [['codigo_r'], 'exist', 'skipOnError' => true, 'targetClass' => Reservas::class, 'targetAttribute' => ['codigo_r' => 'codigo_r']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_p' => 'Codigo P',
            'nombre' => 'Nombre',
            'tipo' => 'Tipo',
            'ubicacion' => 'Ubicacion',
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
    
    public $image_url;

    // Getter method for image_url
    public function getImageUrl()
    {
        return $this->image_url;
    }

    // Setter method for image_url
    public function setImageUrl($url)
    {
        $this->image_url = $url;
    }
    
    public static function getList()
{
    $pistas = Pistas::find()->all();
    $list = [];
    foreach ($pistas as $pista) {
        $list[$pista->codigo_p] = $pista->nombre;
    }
    return $list;
}

}
