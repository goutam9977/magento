<?php

namespace Form\Empmodule\Api;
/** 
 * Interface for managing Test API
 * @api
*/

interface TestInterface
{
    /**
     * Get name
     * 
     * @return string
     */
    public function getprofile();
    /**
     * set data 
     * 
     * @param string[] $postdata
     * @return array
     */

     public function setCustomerdetails($postdata);

}