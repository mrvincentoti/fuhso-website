<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $time
 * @property string $venue
 * @property int $status
 * @property int $type
 * @property int $featured
 */
class Event extends Entity
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
        'title' => true,
        'description' => true,
        'image' => true,
        'date' => true,
        'time' => true,
        'venue' => true,
        'status' => true,
        'type' => true,
        'featured' => true,
    ];
}
