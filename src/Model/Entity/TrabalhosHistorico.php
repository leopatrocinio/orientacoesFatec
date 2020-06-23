<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrabalhosHistorico Entity
 *
 * @property int $trabalho_id
 * @property int $historico_id
 *
 * @property \App\Model\Entity\Trabalho $trabalho
 * @property \App\Model\Entity\Historico $historico
 */
class TrabalhosHistorico extends Entity
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
        'trabalho' => true,
        'historico' => true,
    ];
}
