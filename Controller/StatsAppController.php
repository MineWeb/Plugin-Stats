<?php class StatsAppController extends AppController {    public function beforeFilter() {        parent::beforeFilter();        $this->set('title_for_layout', 'Statistiques');    }}