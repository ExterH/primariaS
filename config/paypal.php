<?php
return array(
    // set your paypal credential
    'client_id' => 'Ad4Sxbmn8wz742FSTYw50gcERXpj78lFTx_m2Vzv-mIReuf1Ft6sHv3vDAy3HOA0Dgamp6CLziiDcFx_',
    'secret' => 'EPATBZ1-DFavCWYzLbhq-YeICrgxBNljR5jRHm8AHVphn7bYoVmEVyI315ue0ZTEvcXVW3kEp3V9Z-KM',
 
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
 
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
 
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
 
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
 
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
