<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/socmed/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

        public function getdpSRA(){
            $user = new user();
            return $user->data()->dp;
        }

        public function getMmSRA(){
            $user = new user();
             return $user->data()->mm;
        }

        public function getnames(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_accounts`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($result as $data) {
                echo "<div class='mt-3 rounded-pill pt-3 pl-1 w-75 hr pb-3 text-light bg-dark'>";
                echo profilePic();
                echo $data['username'];
                echo "</div>";
            }
        }
}


