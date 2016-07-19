<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $reservation_id
 * @property int $client_id
 * @property \Cake\I18n\Time $date
 *
 * @property \App\Model\Entity\Reservation $reservation
 * @property \App\Model\Entity\Client $client
 */
class Reservation extends Entity
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
        'reservation_id' => false,
        'client_id' => false
    ];
}
