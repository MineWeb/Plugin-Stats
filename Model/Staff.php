<?php 
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 26/12/2017
 * Time: 16:39
 */

class Staff extends StatsAppModel {
    public $hasMany = array(
        'StaffUser' => array(
            'foreignKey' => 'staff_id'
        )
    );
}