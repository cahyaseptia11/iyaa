<?php 
class db{
    private $koneksi;
    function __construct()
    {
        $this->koneksi= $koneksi=new mysqli("localhost", "root", "", "db_pelatihan" );
    }
    function get_user($username, $password){
        $data=$this->koneksi->query("SELECT * FROM tbl_user where username='$username' AND password='$password'");
        return $data;
    }   
    public function get_show (){
        $mahasiswa = "SELECT * FROM tbl_mahasiswa";                       
        while ($d = mysqli_fetch_array($mahasiswa)){
            $result[] = $d;
        }           
        return $result;                    
    }
}

?>