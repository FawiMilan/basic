<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $jurusan
 * @property string $angkatan
 * @property string $alamat
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'jurusan', 'angkatan', 'alamat'], 'required'],
            [['alamat'], 'string'],
            [['nim'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 50],
            [['jurusan'], 'string', 'max' => 30],
            [['angkatan'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'jurusan' => 'Jurusan',
            'angkatan' => 'Angkatan',
            'alamat' => 'Alamat',
        ];
    }
}
