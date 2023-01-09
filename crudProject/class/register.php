<?php
include_once 'libery/Database.php';
    class Register{

        public $db;

        public function __construct(){
            $this->db = new Database();
        }
        public function addRegister($data, $file){
            $name = $data['name'];
            $email = $data['email'];
            $phone = $data['phone'];
            $address = $data['address'];
            

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $file['photo']['name'];
            $file_size = $file['photo']['size'];
            $file_temp = $file['photo']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()),0,10).'.'.$file_ext;
            $upload_image = "upload/".$unique_image;

            if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($file_name)){
                $msg = "Filds must not be 'empty'";
                return $msg;
            }elseif($file_size > 1048567){
                $msg = "File size must be '1MB'";
                return $msg;
            }elseif(in_array($file_ext, $permited) == false){
                $msg = "You can uploade only".implode(',', $permited);
                return $msg;
            }else{
                move_uploaded_file($file_temp, $upload_image);

                $query = "INSERT INTO `registration_table`(`name`, `email`, `phone`, `address`, `picture`)
                VALUES('$name', '$email', '$phone', '$address', '$upload_image')";

                $result = $this->db->insert($query);

                if ($result){
                    $msg = "Registration Successfull";
                    return $msg;
                }else{
                    $msg = "Registration Failed";
                    return $msg;
                }
            }
        }
        public function allStudent(){
            $query = "SELECT * FROM registration_table ORDER BY id DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getStdById($id){
            $query = "SELECT * FROM registration_table WHERE id = '$id'";
            $result = $this->db->select($query);
            return $result;
        }
       
    }
?>