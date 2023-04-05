<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web proraming";
        //$this -> load -. view ('view-latihan);
    }
    public function penjumlahan($n1, $n2)
    {
        $this -> load -> model('model_latihan1');
        $hasil = $this-> model_latihan1 ->jumlah($n1, $n2);
        echo "hasil perjumlaha dari".$n1 ."+". $n2 ."=".$hasil;
    }
}