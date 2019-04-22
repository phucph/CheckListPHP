<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tab Entity
 *
 * @property int $tab_id
 * @property string $tab_name
 * @property int $tab_parent
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $deadline
 * @property string|null $note
 * @property int $checked
 */
class Tab extends Entity
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
        'tab_name' => true,
        'tab_parent' => true,
        'created' => true,
        'deadline' => true,
        'note' => true,
        'checked' => true
    ];
}
