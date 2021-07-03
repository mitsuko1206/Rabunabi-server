<?php

namespace App\Controller;

use App\Model\Table\PointsTable;
use Cake\ORM\TableRegistry;

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
        if ($this->request->is(['POST', 'PUT'])) { 

            $postData = $this->request->getData();

            $pointsTable = TableRegistry::getTableLocator()->get('Points');
            $point = $pointsTable->get(1); // Return point with id 1

            $article->initialPoints = $postData['initialPointsMale'];
            $article->sendMessage = $postData['sendMessageMale'];
            $article->readMessage = $postData['readMessageMale'];
            $article->sendImage = $postData['sendImageMale'];
            $pointsTable->save($article);

            $point = $pointsTable->get(2); // Return point with id 2

            $article->initialPoints = $postData['initialPointsFemale'];
            $article->sendMessage = $postData['sendMessageFemale'];
            $article->readMessage = $postData['readMessageFemale'];
            $article->sendImage = $postData['sendImageFemale'];
            $pointsTable->save($article);
        }
        $pointsArr = $this->Points->find()->toArray();
        
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
        $this->set(compact('points', 'pointsArr'));
    }
}
