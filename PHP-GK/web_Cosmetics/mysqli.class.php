<?php
/**
 * Copyright NguoiLeoNui.Net
 * Coder: Phan Thanh Tùng
 * Date: 06/02/2012
 * Time: 20:04
 */
    class db{

        public function select($connection,$sql){
            $query=mysqli_query($connection,$sql);
            while($num=mysqli_fetch_array($query, MYSQLI_ASSOC)){
                $data[]=$num;
            }
            return $data;
        }
        public function insert($connection,$sql){
            $query=mysqli_query($connection,$sql);
            $check=false;
            if($query) $check=true;

            return $check;
        }
        public function select_check($connection,$sql){
            $query=mysqli_query($connection,$sql);
            $check=false;
            if(mysqli_num_rows($query)>0){
                $check=true;
            }
            return $check;
        }
        public function select_return_one($connection,$sql,$return){
            $data_category=$this->select($connection,$sql);
            foreach($data_category as $value){
                $data_num=$value[$return];
            }
            return $data_num;
        }
    }
?>