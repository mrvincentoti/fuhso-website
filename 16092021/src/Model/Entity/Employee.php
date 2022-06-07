<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $code
 * @property string $salutation
 * @property string $firstname
 * @property string $surname
 * @property string|null $othername
 * @property int $gender_id
 * @property \Cake\I18n\FrozenDate $dob
 * @property int $age
 * @property int $position_id
 * @property string $qualification
 * @property int|null $degree_id
 * @property string|null $experience
 * @property int|null $yearofteaching
 * @property string|null $lastposition
 * @property int|null $publication
 * @property int $state_id
 * @property int $lga_id
 * @property string $address
 * @property string $phone
 * @property string|null $remark
 *
 * @property \App\Model\Entity\Gender $gender
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Degree $degree
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Lga $lga
 */
class Employee extends Entity
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
        'code' => true,
        'salutation' => true,
        'firstname' => true,
        'surname' => true,
        'othername' => true,
        'gender_id' => true,
        'dob' => true,
        'age' => true,
        'position_id' => true,
        'qualification' => true,
        'degree_id' => true,
        'experience' => true,
        'yearofteaching' => true,
        'lastposition' => true,
        'publication' => true,
        'state_id' => true,
        'lga_id' => true,
        'address' => true,
        'phone' => true,
        'remark' => true,
        'gender' => true,
        'position' => true,
        'degree' => true,
        'state' => true,
        'lga' => true,
        'publicationcategory_id' => true,
    ];
}
