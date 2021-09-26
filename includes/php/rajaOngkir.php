<?php
    class rajaOngkir {

        var $tipe;
        var $key;
        
        public function rajaOngkir($tipe, $key) {             
            $this->tipe = $tipe;
            $this->key = $key;
        }

        public function getPropinsi($id = "") {            
            return $this->doRequest("http://".$this->tipe.".rajaongkir.com/api/province".(strlen($id)>0?"?id=$id":""));            
        }
        
        public function getKota($prop, $id = "") {             
            return $this->doRequest("http://".$this->tipe.".rajaongkir.com/api/city?province=$prop".(strlen($id)>0?"&id=$id":""));
        }
        
        public function getKecamatan($city) {
            return $this->doRequest("http://".$this->tipe.".rajaongkir.com/api/subdistrict?city=".$city);
        }
        		
        public function getWaybill($waybill, $courier) {
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://".$this->tipe.".rajaongkir.com/api/waybill",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "waybill=".$waybill."&courier=".$courier,
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/x-www-form-urlencoded",
                    "key: ".$this->key
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                //echo "cURL Error #:" . $err;
                return array();
            } else {
                $result =  json_decode($response, true);
                return $result["rajaongkir"]["result"];
            }			

        }
		
        public function getCost($origin, $originType, $destination, $destinationType, $weight, $courier) {
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://".$this->tipe.".rajaongkir.com/api/cost",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "origin=".$origin."&originType=".$originType."&destination=".$destination."&destinationType=".$destinationType."&weight=".$weight."&courier=".$courier,
                CURLOPT_HTTPHEADER => array(
                  "content-type: application/x-www-form-urlencoded",
                    "key: ".$this->key
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                //echo "cURL Error #:" . $err;
                return array();
            } else {
                //die($response);
                $result =  json_decode($response, true);
//                foreach ($result["rajaongkir"] as $key => $value) {
//                    echo("key: ".$key."<br />");
//                }
                return $result["rajaongkir"]["results"][0]["costs"];
            } 
        }
        
        function doRequest($url) {
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "key: ".$this->key
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                //echo "cURL Error #:" . $err;
                return array();
            } else {
                //die($response);
                $result =  json_decode($response, true);
//                foreach ($result["rajaongkir"] as $key => $value) {
//                    echo("key: ".$key."<br />");
//                }
                return $result["rajaongkir"]["results"];
            } 

        }
		function waybill($resi,$kurir){
			
			$jasa = strtolower($kurir);
			
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://pro.rajaongkir.com/api/waybill",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "waybill=".$resi."&courier=".$jasa,
			  CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				"key: ".$this->key
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			$result =  json_decode($response, true);
            return $result["rajaongkir"]["result"];
		}
    }