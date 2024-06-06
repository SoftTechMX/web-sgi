<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proveedores".
 *
 * @property int $proveedorid
 * @property string $nombreprov
 * @property string $contacto
 * @property string|null $celuprov
 * @property string|null $fijoprov
 *
 * @property Productos[] $productos
 */
class Proveedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['proveedorid', 'nombreprov', 'contacto'], 'required'],
            [['proveedorid'], 'default', 'value' => null],
            [['proveedorid'], 'integer'],
            [['nombreprov', 'contacto'], 'string', 'max' => 50],
            [['celuprov', 'fijoprov'], 'string', 'max' => 12],
            [['proveedorid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'proveedorid' => 'ID Proveedor',
            'nombreprov' => 'Nombre Proveedor',
            'contacto' => 'Contacto',
            'celuprov' => 'Celular',
            'fijoprov' => 'Fijo',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Producto::class, ['proveedorid' => 'proveedorid']);
    }
}
