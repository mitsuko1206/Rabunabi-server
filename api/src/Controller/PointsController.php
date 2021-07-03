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
            'initialPointsMale' => $pointsArr[0]['initialPoint'],
            'sendMessageMale' => $pointsArr[0]['Points']['sendMessage'],
            'readMessageMale' => $pointsArr[0]['Points']['readMessage'],
            'sendImageMale' => $pointsArr[0]['Points']['sendImage'],
            'initialPointsFemale' => $pointsArr[1]['Points']['initialPoint'],
            'sendMessageFemale' => $pointsArr[1]['Points']['sendMessage'],
            'readMessageFemale' => $pointsArr[1]['Points']['readMessage'],
            'sendImageFemale' => $pointsArr[1]['Points']['sendImage'],
        ];
        dd($pointsArr[0]['initialPoints']);
        $this->set('pointsArr', compact('pointsArr'));
    }
}
