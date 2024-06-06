<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleados".
 *
 * @property int $empleadoid
 * @property string|null $nombre
 * @property string|null $apellido
 * @property string|null $fecha_nac
 * @property int|null $reporta_a
 * @property int|null $extension
 *
 * @property Empleado[] $empleados
 * @property Ordenes[] $ordenes
 * @property Empleado $reportaA
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empleados';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['empleadoid'], 'required'],
            [['empleadoid', 'reporta_a', 'extension'], 'default', 'value' => null],
            [['empleadoid', 'reporta_a', 'extension'], 'integer'],
            [['fecha_nac'], 'safe'],
            [['nombre', 'apellido'], 'string', 'max' => 30],
            [['empleadoid'], 'unique'],
            [['reporta_a'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::class, 'targetAttribute' => ['reporta_a' => 'empleadoid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'empleadoid' => 'ID Empleado',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'fecha_nac' => 'Fecha de Nacimiento',
            'reporta_a' => 'Reporta A',
            'extension' => 'Extension',
        ];
    }

    /**
     * Gets query for [[Empleados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::class, ['reporta_a' => 'empleadoid']);
    }

    /**
     * Gets query for [[Ordenes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrdenes()
    {
        return $this->hasMany(Orden::class, ['empleadoid' => 'empleadoid']);
    }

    /**
     * Gets query for [[ReportaA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportaA()
    {
        return $this->hasOne(Empleado::class, ['empleadoid' => 'reporta_a']);
    }
}
