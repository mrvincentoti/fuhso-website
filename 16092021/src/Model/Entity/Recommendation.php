<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recommendation Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property string $firstname
 * @property string $lastname
 * @property string $organization
 * @property string $position
 * @property string $relationship
 * @property string $telephone
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $postalcode
 * @property string $address
 * @property int $leadership
 * @property int $creativity
 * @property int $resourcefulness
 * @property int $energy
 * @property int $team
 * @property int $oral
 * @property int $written
 * @property int $preference
 * @property int $thinking
 * @property \Cake\I18n\FrozenTime $date_created
 *
 * @property \App\Model\Entity\Employee $employee
 */
class Recommendation extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'organization' => true,
        'position' => true,
        'relationship' => true,
        'telephone' => true,
        'email' => true,
        'country' => true,
        'city' => true,
        'postalcode' => true,
        'address' => true,
        'leadership' => true,
        'creativity' => true,
        'resourcefulness' => true,
        'energy' => true,
        'team' => true,
        'oral' => true,
        'written' => true,
        'preference' => true,
        'thinking' => true,
        'date_created' => true,
        'employee' => true,
    ];
}
