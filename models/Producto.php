<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $productoid
 * @property int $proveedorid
 * @property int $categoriaid
 * @property string|null $descripcion
 * @property float $preciounit
 * @property int $existencia
 *
 * @property Categorias $categoria
 * @property DetalleOrdenes[] $detalleOrdenes
 * @property Proveedores $proveedor
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productoid', 'proveedorid', 'categoriaid', 'preciounit', 'existencia'], 'required'],
            [['productoid', 'proveedorid', 'categoriaid', 'existencia'], 'default', 'value' => null],
            [['productoid', 'proveedorid', 'categoriaid', 'existencia'], 'integer'],
            [['preciounit'], 'number'],
            [['descripcion'], 'string', 'max' => 50],
            [['productoid'], 'unique'],
            [['categoriaid'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::class, 'targetAttribute' => ['categoriaid' => 'categoriaid']],
            [['proveedorid'], 'exist', 'skipOnError' => true, 'targetClass' => Proveedor::class, 'targetAttribute' => ['proveedorid' => 'proveedorid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productoid' => 'ID Producto',
            'proveedorid' => 'ID Proveedor',
            'categoriaid' => 'ID Categoria',
            'descripcion' => 'Descripcion',
            'preciounit' => 'Precio Unitario',
            'existencia' => 'Existencia',
        ];
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categoria::class, ['categoriaid' => 'categoriaid']);
    }

    /**
     * Gets query for [[DetalleOrdenes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleOrdenes()
    {
        return $this->hasMany(DetalleOrden::class, ['productoid' => 'productoid']);
    }

    /**
     * Gets query for [[Proveedor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProveedor()
    {
        return $this->hasOne(Proveedor::class, ['proveedorid' => 'proveedorid']);
    }
}
