<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property int $categoriaid
 * @property string $nombrecat
 *
 * @property Productos[] $productos
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoriaid', 'nombrecat'], 'required'],
            [['categoriaid'], 'default', 'value' => null],
            [['categoriaid'], 'integer'],
            [['nombrecat'], 'string', 'max' => 50],
            [['categoriaid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'categoriaid' => 'ID Categoria',
            'nombrecat' => 'Nombre de la Categoria',
        ];
    }

    /**
     * Gets query for [[Productos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductos()
    {
        return $this->hasMany(Productos::class, ['categoriaid' => 'categoriaid']);
    }
}
