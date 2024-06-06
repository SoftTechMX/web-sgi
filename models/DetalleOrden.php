<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalle_ordenes".
 *
 * @property int $ordenid
 * @property int $detalleid
 * @property int $productoid
 * @property int $cantidad
 *
 * @property Ordenes $orden
 * @property Productos $producto
 */
class DetalleOrden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detalle_ordenes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordenid', 'detalleid', 'productoid', 'cantidad'], 'required'],
            [['ordenid', 'detalleid', 'productoid', 'cantidad'], 'default', 'value' => null],
            [['ordenid', 'detalleid', 'productoid', 'cantidad'], 'integer'],
            [['ordenid', 'detalleid'], 'unique', 'targetAttribute' => ['ordenid', 'detalleid']],
            [['ordenid'], 'exist', 'skipOnError' => true, 'targetClass' => Orden::class, 'targetAttribute' => ['ordenid' => 'ordenid']],
            [['productoid'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::class, 'targetAttribute' => ['productoid' => 'productoid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ordenid' => 'ID Orden',
            'detalleid' => 'ID Detalle',
            'productoid' => 'ID Producto',
            'cantidad' => 'Cantidad',
        ];
    }

    /**
     * Gets query for [[Orden]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrden()
    {
        return $this->hasOne(Orden::class, ['ordenid' => 'ordenid']);
    }

    /**
     * Gets query for [[Producto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducto()
    {
        return $this->hasOne(Producto::class, ['productoid' => 'productoid']);
    }
}
