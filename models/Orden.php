<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenes".
 *
 * @property int $ordenid
 * @property int $empleadoid
 * @property int $clienteid
 * @property string $fechaorden
 * @property int|null $descuento
 *
 * @property Clientes $cliente
 * @property DetalleOrdenes[] $detalleOrdenes
 * @property Empleados $empleado
 */
class Orden extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ordenes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ordenid', 'empleadoid', 'clienteid', 'fechaorden'], 'required'],
            [['ordenid', 'empleadoid', 'clienteid', 'descuento'], 'default', 'value' => null],
            [['ordenid', 'empleadoid', 'clienteid', 'descuento'], 'integer'],
            [['fechaorden'], 'safe'],
            [['ordenid'], 'unique'],
            [['clienteid'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['clienteid' => 'clienteid']],
            [['empleadoid'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::class, 'targetAttribute' => ['empleadoid' => 'empleadoid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ordenid' => 'ID Orden',
            'empleadoid' => 'ID Empleado',
            "nombreDelEmpleado" => 'Nombre del Empleado',
            'clienteid' => 'ID Cliente',
            "nombreDelCliente" => 'Nombre del Cliente',
            'fechaorden' => 'Fecha De Orden',
            'descuento' => 'Descuento',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['clienteid' => 'clienteid']);
    }

    public function getNombreDelCliente()
    {
        return $this->cliente->nombrecontacto;
    }

    /**
     * Gets query for [[DetalleOrdenes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleOrdenes()
    {
        return $this->hasMany(DetalleOrden::class, ['ordenid' => 'ordenid']);
    }

    /**
     * Gets query for [[Empleado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleado()
    {
        return $this->hasOne(Empleado::class, ['empleadoid' => 'empleadoid']);
    }

    public function getNombreDelEmpleado()
    {
        return $this->empleado->nombre . $this->empleado->apellido;
    }
}
