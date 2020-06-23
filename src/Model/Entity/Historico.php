<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Historico Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $atualizacao
 * @property int|null $conclusao
 *
 * @property \App\Model\Entity\Trabalho[] $trabalhos
 */
class Historico extends Entity
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
        'atualizacao' => true,
        'conclusao' => true,
        'trabalhos' => true,
    ];
}
