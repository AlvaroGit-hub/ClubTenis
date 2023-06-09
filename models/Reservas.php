<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reservas".
 *
 * @property int $codigo_r
 * @property string|null $quien
 * @property string|null $cuando
 * @property int|null $pista
 * @property int|null $codigo_a
 *
 * @property Administradores $codigoA
 * @property Pistas[] $pistas
 * @property Usuarios[] $usuarios
 */
class Reservas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reservas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pista', 'codigo_a'], 'integer'],
            [['quien'], 'string', 'max' => 20],
            [['cuando'], 'string', 'max' => 40],
            [['codigo_a'], 'exist', 'skipOnError' => true, 'targetClass' => Administradores::class, 'targetAttribute' => ['codigo_a' => 'codigo_a']],
             [['codigo_p'], 'required'],
            [['quien'], 'string', 'max' => 255]
            
        ];
    }
    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_r' => 'Codigo R',
            'quien' => 'Quien',
            'cuando' => 'Cuando',
            'pista' => 'Pista',
            'codigo_a' => 'Codigo A',
        ];
    }

    /**
     * Gets query for [[CodigoA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodigoA()
    {
        return $this->hasOne(Administradores::class, ['codigo_a' => 'codigo_a']);
    }

    /**
     * Gets query for [[Pistas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPistas()
    {
        return $this->hasMany(Pistas::class, ['codigo_r' => 'codigo_r']);
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['codigo_r' => 'codigo_r']);
    }
    
    public $codigo_p;
    
    
}
