<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Experience Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $experiencename
 * @property string $experienceyearstart
 * @property string $experienceyearend
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Experience extends Entity
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
        'employee_id' => true,
        'experiencename' => true,
        'experienceyearstart' => true,
        'experienceyearend' => true,
        'employee' => true,
    ];
}
