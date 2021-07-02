<?php

namespace App\Controller;

use App\Model\Table\PointsTable;

/**
 * Points Controller
 *
 * @property \App\Model\Table\PointsTable $Points
 *
 */
class PointsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        $points = $this->Points->find();
      
        $this->set(compact("points"));
    }
}
