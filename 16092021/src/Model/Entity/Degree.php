<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Degree Entity
 *
 * @property int $id
 * @property int $applicant_id
 * @property string $name
 * @property string $year
 * @property string $subject
 * @property string $classofbsc
 *
 * @property \App\Model\Entity\Applicant $applicant
 */
class Degree extends Entity
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
        'applicant_id' => true,
        'name' => true,
        'year' => true,
        'subject' => true,
        'classofbsc' => true,
        'applicant' => true,
    ];
}
