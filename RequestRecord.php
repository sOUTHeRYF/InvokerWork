<?php
    class RequestRecord
    {
        private $Umeng_Domin = "https://s4.cnzz.com/z_stat.php";
        private $Umeng_ID = "1260798944";
        private $Umeng_WebID = "1260798944";

        public function __construct()
        {

        }
        public function Record()
        {
            Logout("Record Success");
            $ch = curl_init(); 
            $timeout = 5; 
            $url = $this->buildRequestURL();
            curl_setopt ($ch, CURLOPT_URL, $url); 
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
            curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
            $file_contents = curl_exec($ch); 
            curl_close($ch); 
            Logout("AA".$file_contents);
            echo $file_contents; 
        }
        public function buildRequestURL()
        {
            return $this->Umeng_Domin."?"."id=".$this->Umeng_ID."&web_id=".$this->Umeng_WebID;
        }
    }
?>