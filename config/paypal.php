<?php
return array(
    // set your paypal credential
    //AR2lOLDSCD9p5AACgFvstwQNMA-SlNsJEFhvalkikHTkm3244N_c66Agk33Oc4MHv7EJqKc1rqE2aeGD

    //sandbox -> Ad4Sxbmn8wz742FSTYw50gcERXpj78lFTx_m2Vzv-mIReuf1Ft6sHv3vDAy3HOA0Dgamp6CLziiDcFx_
    'client_id' => 'AR2lOLDSCD9p5AACgFvstwQNMA-SlNsJEFhvalkikHTkm3244N_c66Agk33Oc4MHv7EJqKc1rqE2aeGD',
    //sandbox-> EPATBZ1-DFavCWYzLbhq-YeICrgxBNljR5jRHm8AHVphn7bYoVmEVyI315ue0ZTEvcXVW3kEp3V9Z-KM
    'secret' => 'EB6Cs9Tb1xH9CJuJJqhwqOs8BjhD4DktSvaPXK67vP0yNluf6IRrLX1zVNBKF8NgkosOlp88_IEbVP4j',
 
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',
 
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
