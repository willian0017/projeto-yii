<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "despesa".
 *
 * @property string $descricao
 * @property string $tipo_despesa
 * @property int $valor
 * @property string $vencimento_fatura
 * @property string $status_pagamento
 */
class DespesaModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'despesa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'tipo_despesa', 'valor', 'vencimento_fatura', 'status_pagamento'], 'required'],
            [['descricao', 'status_pagamento'], 'string'],
            [['valor'], 'integer'],
            [['vencimento_fatura'], 'safe'],
            [['tipo_despesa'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'descricao' => 'Descrição',
            'tipo_despesa' => 'Tipo',
            'valor' => 'Valor',
            'vencimento_fatura' => 'Vencimento',
            'status_pagamento' => 'Status',
        ];
    }
}
