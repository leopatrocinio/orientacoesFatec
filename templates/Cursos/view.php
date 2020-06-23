<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos view content">
            <h3><?= h($curso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($curso->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($curso->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Alunos') ?></h4>
                <?php if (!empty($curso->alunos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Turno') ?></th>
                            <th><?= __('Semestre Ingresso') ?></th>
                            <th><?= __('Curso Id') ?></th>
                            <th><?= __('Orientador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($curso->alunos as $alunos) : ?>
                        <tr>
                            <td><?= h($alunos->id) ?></td>
                            <td><?= h($alunos->nome) ?></td>
                            <td><?= h($alunos->email) ?></td>
                            <td><?= h($alunos->turno) ?></td>
                            <td><?= h($alunos->semestre_ingresso) ?></td>
                            <td><?= h($alunos->curso_id) ?></td>
                            <td><?= h($alunos->orientador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Alunos', 'action' => 'view', $alunos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Alunos', 'action' => 'edit', $alunos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alunos', 'action' => 'delete', $alunos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alunos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
