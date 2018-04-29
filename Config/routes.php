<?php

Router::connect('/stats', array('controller'=>'stats', 'action'=>'index', 'plugin'=>'stats'));

Router::connect('/admin/stats', array('controller'=>'stats', 'action'=>'index', 'plugin'=>'stats', 'admin' => true));

Router::connect('/admin/stats/ajouterRang', array('controller'=>'stats', 'action'=>'addRank', 'plugin'=>'stats', 'admin' => true));

Router::connect('/admin/stats/modifierRang/:id', array('controller'=>'stats', 'action'=>'modifyRank', 'plugin'=>'stats', 'admin' => true), array('id'=>'[0-9]+'));

Router::connect('/admin/stats/supprimerRang/:id', array('controller'=>'stats', 'action'=>'deleteRank', 'plugin'=>'stats', 'admin' => true), array('id'=>'[0-9]+'));

Router::connect('/admin/stats/ajouterStaff', array('controller'=>'stats', 'action'=>'addStaff', 'plugin'=>'stats', 'admin' => true));

Router::connect('/admin/stats/modifierStaff/:id', array('controller'=>'stats', 'action'=>'modifyStaff', 'plugin'=>'stats', 'admin' => true), array('id'=>'[0-9]+'));

Router::connect('/admin/stats/supprimerStaff/:id', array('controller'=>'stats', 'action'=>'deleteStaff', 'plugin'=>'stats', 'admin' => true), array('id'=>'[0-9]+'));
