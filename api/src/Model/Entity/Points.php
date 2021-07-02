<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Points Entity
 *
 * @property int $id
 * @property boolean $male
 * @property int $initialPoints
 * @property int $sendMessage
 * @property int $readMessage
 * @property int $sendImage
 *
 */
class Points extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'male' => true,
        'initialPoints' => true,
        'sendMessage' => true,
        'readMessage' => true,
        'sendImage' => true,
    ];
}
