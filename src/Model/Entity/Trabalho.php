<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trabalho Entity
 *
 * @property int $id
 * @property string|null $titulo
 * @property \Cake\I18n\FrozenDate|null $entrega_anteprojeto
 * @property \Cake\I18n\FrozenDate|null $previsao
 * @property int $formato_id
 * @property int $aluno_id
 *
 * @property \App\Model\Entity\Formato $formato
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\Historico[] $historicos
 */
class Trabalho extends Entity
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
        'titulo' => true,
        'entrega_anteprojeto' => true,
        'previsao' => true,
        'formato_id' => true,
        'aluno_id' => true,
        'formato' => true,
        'aluno' => true,
        'historicos' => true,
    ];
}
