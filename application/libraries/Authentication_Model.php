<?php
/**
 * Created by PhpStorm.
 * User: Ricky Patel
 * Date: 10/01/15
 * Time: 11:35 AM
 */

class Authentication_model extends MY_Model {

    protected $_table_name = 'users';
    protected $_order_by = 'name';

    function __construct(){
        parent::__construct();
    }


} 