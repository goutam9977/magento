<?php
namespace Form\Empmodule\Model;
use Magento\Customer\Model\GroupFactory;
class TestService implements \Form\Empmodule\Api\TestInterface

{
   
    /**
     * Get name
     * 
     * @return string
     */
    public function getprofile()
    {
        return 
        [
        [

              'Firstname'=>'goutam',
              'Lastname' =>'S I',
              'Email'    =>'goutam@gmail.com',
              'Telephone'=>'2536586925',
              'City'     =>'bengaluru',
              'State'    =>'Karnataka',
              'country'  =>'India',

        ],
        [

            'Firstname'=>'goutam',
            'Lastname' =>'S I',
            'Email'    =>'goutam@gmail.com',
            'Telephone'=>'2536586925',
            'City'     =>'bengaluru',
            'State'    =>'Karnataka',
            'country'  =>'India',

      ],
      [

        'Firstname'=>'goutam',
        'Lastname' =>'S I',
        'Email'    =>'goutam@gmail.com',
        'Telephone'=>'2536586925',
        'City'     =>'bengaluru',
        'State'    =>'Karnataka',
        'country'  =>'India',

  ],

    ];
    }

    protected $_group;

    public function __construct(
    GroupFactory $group)    
    {
        $this->_group = $group;

    }
/**
 * set data 
 * 
 * @param string[] $postdata
 * @return array
 */


 public function setCustomerdetails($postdata){
    try{
        $data=[
            'customer_group_code'=> $postdata['groupName'],
            'tax_class_id' => 3
        ];
        $group = $this->_group->create();
        $group->setData($data);
        $group->save();
        
        return[
            'groupId' => 10,                
            'groupName' => "abc"
           
        ];
        return $postdata['groupName'];
        return "KLAJDH";

    }catch (\Throwable $th) {
        $th->getMessage();
    }
}
}