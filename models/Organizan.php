<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organizan".
 *
 * @property int $codigo_o
 * @property int|null $codigo_t
 * @property int|null $codigo_a
 */
class Organizan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organizan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo_t', 'codigo_a'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo_o' => 'Codigo O',
            'codigo_t' => 'Codigo T',
            'codigo_a' => 'Codigo A',
        ];
    }
}
