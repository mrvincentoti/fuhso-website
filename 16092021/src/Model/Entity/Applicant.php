<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Applicant Entity
 *
 * @property int $id
 * @property string $surname
 * @property string $fullname
 * @property string|null $middlename
 * @property string|null $dob
 * @property int $state_id
 * @property int $lga_id
 * @property string $town
 * @property string $phone
 * @property string $email
 * @property int $course_id
 * @property string $gender
 * @property int $status
 *
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Lga $lga
 * @property \App\Model\Entity\Course $course
 */
class Applicant extends Entity
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
        'surname' => true,
        'fullname' => true,
        'middlename' => true,
        'dob' => true,
        'state_id' => true,
        'lga_id' => true,
        'town' => true,
        'phone' => true,
        'email' => true,
        'course_id' => true,
        'gender' => true,
        'status' => true,
        'state' => true,
        'lga' => true,
        'course' => true,
    ];
}
