<?php

namespace App\Controller;

use App\Model\Table\PointsTable;

/**
 * Points Controller
 *
 * @property SettingsTable $Points
 */
class PointsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        $pointsArr = $this->Points->find()->toArray();
        $points = [];
        //$pointsArr = mysqli_fetch_array($pointsArr);
        
       
        $this->set(compact('pointsArr', 'points'));
    }
}
