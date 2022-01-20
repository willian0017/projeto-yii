<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidade".
 *
 * @property string $identificacao
 * @property string $proprietario
 * @property string $condominio
 * @property string $endereco
 */
class UnidadeModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['identificacao', 'proprietario', 'condominio', 'endereco'], 'required'],
            [['identificacao', 'proprietario', 'condominio', 'endereco'], 'string', 'max' => 255],
            [['identificacao'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'identificacao' => 'Identificação',
            'proprietario' => 'Proprietário',
            'condominio' => 'Condomínio',
            'endereco' => 'Endereço',
        ];
    }
}
