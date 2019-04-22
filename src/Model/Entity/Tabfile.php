<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tabfile Entity
 *
 * @property int $file_id
 * @property int $tab_id
 *
 * @property \App\Model\Entity\File $file
 * @property \App\Model\Entity\Tab $tab
 */
class Tabfile extends Entity
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
        'file' => true,
        'tab' => true
    ];
}
