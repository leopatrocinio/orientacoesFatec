<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $email
 * @property string|null $turno
 * @property string|null $semestre_ingresso
 * @property int $curso_id
 * @property int $orientador_id
 *
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\Orientadore $orientadore
 * @property \App\Model\Entity\Trabalho[] $trabalhos
 */
class Aluno extends Entity
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
        'nome' => true,
        'email' => true,
        'turno' => true,
        'semestre_ingresso' => true,
        'curso_id' => true,
        'orientador_id' => true,
        'curso' => true,
        'orientadore' => true,
        'trabalhos' => true,
    ];
}
