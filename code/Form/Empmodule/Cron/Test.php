<?php

namespace Form\Empmodule\Cron;

class Test
{

	public function execute()
	{

        $current_date=date("YMd_his");
        $file_name='customer'.$current_date.'.csv';
        $header_info=array(
            'FirstName',
            'LastName',
            'Email',
            'Telephone'
        );
        $header_info=array_combine($header_info,$header_info);
        $data=[];
        $data[] = $header_info;
        $data[] = [
            'FirstName' => 'goutam',
            'LastName' => 'itagi',
            'Email' => 'goutam17@gmail.com',
            'Telephone' => 7348446724
        ];

        $data[] = [
            'FirstName' => 'rahul',
            'LastName' => 'K L',
            'Email' => 'lkrahul4@gmail.com',
            'Telephone' => 7478466578
        ];

        $tn = fopen('/var/www/html/magento2/var/export/'.$file_name,'w');
        foreach ($data as $fields){
            fputcsv($tn, $fields);
        }


		// $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
		// $logger = new \Zend\Log\Logger();
		// $logger->addWriter($writer);
		// $logger->info(__METHOD__);

		// return $this;

	}
}