<?php

class Izypayment {
    protected $key;
    const END_POINT = 'http://localhost:8000/api/v1';

    public function __construct($key) {
        $this->key = $key;
    }

    /**
    * Make a payment
    *
    * @param $params array of POST parameters
    *
    */
    public function pay($params = []) {
        $paymentUrl = self::END_POINT . '/pay';
        $data = [];
        $data = $this->apiCurl($url, $params);

        $response_json = (array)json_decode($data['response'], true);
        $response = $response_json['content'];
        $statusCode = $response_json['statusCode'];

        if ($statusCode != 1) {
            $error = $response_json['content']
            /**
             * TODO when error in the transaction
             */
        }
    }


    /**
     * Curl POST
     * @param  [type] $headers         [description]
     * @param  [type] $curl_postfields [description]
     * @param  [type] $url             [description]
     * @return [type]                  [description]
     */
    private function apiCurl($url, $params)
    {
        $curl = curl_init();

        $curl_params = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($params),
            CURLOPT_HTTPHEADER => array(
                "key: " . $this->key
            ),
        );
        curl_setopt_array($curl, $curl_params);

        $data['response'] = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $data['status'] = $httpcode;
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $data;
        }
    }

?>
