<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inquilino".
 *
 * @property string $idNome
 * @property int $idade
 * @property string $telefone
 * @property string $sexo
 * @property string $email
 */
class InquilinoModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inquilino';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idNome', 'idade', 'telefone', 'sexo', 'email'], 'required'],
            [['idade'], 'integer'],
            [['telefone', 'sexo', 'email'], 'string'],
            [['idNome'], 'string', 'max' => 255],
            [['idNome'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idNome' => 'Nome',
            'idade' => 'Idade',
            'telefone' => 'Telefone',
            'sexo' => 'Sexo',
            'email' => 'E-mail',
        ];
    }
}
