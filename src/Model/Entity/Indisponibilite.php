<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indisponibilite Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $date_debut
 * @property \Cake\I18n\Time $date_fin
 */
class Indisponibilite extends Entity
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
        'id' => false
    ];
}
