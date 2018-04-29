<?php 
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 26/12/2017
 * Time: 16:39
 */

class StaffUser extends StatsAppModel {
    public $belongsTo = array(
        'User'=> array(
            'foreignKey' => 'user_id'
        )
    );
}