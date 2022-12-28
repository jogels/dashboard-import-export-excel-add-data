<?php

namespace App\Models;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelrtd extends Model
{
    use HasFactory;

    protected $table = 'rtd_masterdata';
    protected $primaryKey = 'No';
    public $timestamps = false;
    protected $guarded = ['No'];

    protected $fillable =
    [ // 'No',
        'IDVENDOR',
        'VendorName',
        'kodeAREA',
        'Help_Urut_Lama',
        'Help_Urut',
        'NamaArea',
        'Status',
        'Divisi',
        'Metode',
        'ID_INTV_LAMA',
        'ID_INTV',
        'Password_Login',
        'Nama',
        'Jenis_Kelamin',
        'Tanggal_Bergabung',
        'Alamat_Saat_Ini',
        'Kota',
        'Provinsi',
        'Nomor_Handphone',
        'Nomor_WA',
        'Email',
        'Tempat_Kelahiran',
        'Tanggal_Lahir',
        'KTP',
        'Alamat',
        'Status_Pernikahan',
        'Nomor_Rekening',
        'Nama_Bank',
        'NPWP',
        'Pendidikan_Terakhir',
        'NamaKeluargaAlternative',
        'NoTELPKeluargaAlternative',
        'RiwayatVaksinCovid',
        'AlasanBelumVaksin',
        'Jenis_Vaksin',
        'Tanggal_Vaksin_Ke_1',
        'Tanggal_Vaksin_Ke_2',
        'Beneficiary_Name',
        'Status_Active',
        'Tanggal_Blacklist_Suspend',
        'Tanggal_Selesai_Suspend',
        'Judul_Training',
        'Tgl_Training'
    ];
    // 'Mentor_Training',
    // 'Mentor_Training1']




}
