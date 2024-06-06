<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property int $clienteid
 * @property string $cedula_ruc
 * @property string $nombrecia
 * @property string $nombrecontacto
 * @property string $direccioncli
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $celular
 * @property string|null $fijo
 *
 * @property Ordenes[] $ordenes
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clienteid', 'cedula_ruc', 'nombrecia', 'nombrecontacto', 'direccioncli'], 'required'],
            [['clienteid'], 'default', 'value' => null],
            [['clienteid'], 'integer'],
            [['cedula_ruc'], 'string', 'max' => 10],
            [['nombrecia'], 'string', 'max' => 30],
            [['nombrecontacto', 'direccioncli', 'email'], 'string', 'max' => 50],
            [['fax', 'celular', 'fijo'], 'string', 'max' => 12],
            [['clienteid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'clienteid' => 'ID Cliente',
            'cedula_ruc' => 'Cedula RUC',
            'nombrecia' => 'Nombre CIA',
            'nombrecontacto' => 'Nombre del Contacto',
            'direccioncli' => 'Direccion',
            'fax' => 'FAX',
            'email' => 'Email',
            'celular' => 'Celular',
            'fijo' => 'Fijo',
        ];
    }

    /**
     * Gets query for [[Ordenes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenes()
    {
        return $this->hasMany(Ordenes::class, ['clienteid' => 'clienteid']);
    }
}
