<?php

namespace frontend\controllers;
use frontend\models\NilaiSiswa;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$mhs1 = "Sukma";
    	$mhs2 = "Farras";
    	$mhs3 = "Jennie";
    	$mhs4 = "Yayah";
    	$mhs5 = "Aceng";
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$smt1 = "Semester 1";
    	$smt2 = "Semester 2";
    	$smt4 = "Semester 4";


        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'sukma' => $mhs1,
        	'farras' => $mhs2,
        	'jennie' => $mhs3,
        	'yayah' => $mhs4,
        	'aceng' => $mhs5,
        	'smt1' => $smt1,
        	'smt2' => $smt2,
        	'smt4' => $smt4
        ]);
    }
    public function actionNilai(){
    	$mhs6 = new NilaiSiswa("0110117040","Karina Sukmawati");

    	$mhs6->nilai=84.1;

    	return $this->render('nilai',[
    		'mhs6'=>$mhs6
    	]);
    }

}
