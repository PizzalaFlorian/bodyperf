<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $login
 * @property string $nom
 * @property string $prenom
 * @property int $credit_sceance
 * @property int $credit_duo
 * @property \Cake\I18n\Time $fin_abonnement
 *
 * @property \App\Model\Entity\Client $client
 */
class Client extends Entity
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
        '*' => true,
        'client_id' => false
    ];
}
