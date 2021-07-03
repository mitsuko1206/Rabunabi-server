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
        //$pointsArr = mysqli_fetch_array($pointsArr);
        
        $points = [
            'initialPointsMale' => $pointsArr[0]['initialPoints'],
            'sendMessageMale' => $pointsArr[0]['sendMessage'],
            'readMessageMale' => $pointsArr[0]['readMessage'],
            'sendImageMale' => $pointsArr[0]['sendImage'],
            'initialPointsFemale' => $pointsArr[1]['initialPoints'],
            'sendMessageFemale' => $pointsArr[1]['sendMessage'],
            'readMessageFemale' => $pointsArr[1]['readMessage'],
            'sendImageFemale' => $pointsArr[1]['sendImage'],
        ];
        $this->set('points', $points);
    }
}
