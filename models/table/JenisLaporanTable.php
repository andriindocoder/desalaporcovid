<?php

namespace app\models\table;

use Yii;

/**
 * This is the model class for table "jenis_laporan".
 *
 * @property int $id
 * @property string|null $nama_laporan
 * @property string|null $keterangan
 * @property int|null $status
 * @property string|null $kode
 */
class JenisLaporanTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_laporan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['nama_laporan', 'keterangan', 'kode'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama_laporan' => Yii::t('app', 'Nama Laporan'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'status' => Yii::t('app', 'Status'),
            'kode' => Yii::t('app', 'Kode'),
        ];
    }
}
