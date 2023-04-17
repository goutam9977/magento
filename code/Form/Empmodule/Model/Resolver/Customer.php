<?php 
declare(strict_types = 1);

namespace Form\Empmodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

class Customer implements ResolverInterface{

    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        Array $value = null,
        array $args = null
    ) {
        $customer =[
            [
            'firstname' => 'goutam',
            'Lastname'  => 'itagi',
            'email'     => 'goutam@emb.com',
            'mobile'    => '7385698560',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'
            
        ],

        [   'firstname' => 'Ab de',
            'Lastname'  => 'villers',
            'email'     => 'abdev@emb.com',
            'mobile'    => '8858754857',
            'city'      => 'Bangalore',
            'state'     => 'Karnataka',
            'country'   => 'India'

    ],

    [
           'firstname' => 'rahul',
           'Lastname'  => 'kl',
           'email'     => 'rahul@emb.com',
           'mobile'    => '7598686581',
           'city'      => 'Bangalore',
           'state'     => 'Karnataka',
           'country'   => 'India'

    ]
    ];

    return [
        'total_count' => count($customer),
        'items' => $customer
    ];
     
    
    }
    }

