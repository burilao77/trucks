<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersPart Entity.
 *
 * @property int $id
 * @property int $order_id
 * @property \App\Model\Entity\Order $order
 * @property int $part_id
 * @property \App\Model\Entity\Part $part
 */
class OrdersPart extends Entity
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
        'id' => false,
    ];
}
