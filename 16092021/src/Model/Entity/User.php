<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $applicant_id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property int $role_id
 *
 * @property \App\Model\Entity\Applicant $applicant
 * @property \App\Model\Entity\Role[] $roles
 */
class User extends Entity
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
        'username' => true,
        'email' => true,
        'password' => true,
        'created' => true,
        'role_id' => true,
        'applicant' => true,
        'roles' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    //password hashing method
    protected function _setPassword($value){
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
