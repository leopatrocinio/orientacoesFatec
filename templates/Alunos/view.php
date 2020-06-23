<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alunos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aluno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alunos view content">
            <h3><?= h($aluno->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($aluno->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($aluno->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Turno') ?></th>
                    <td><?= h($aluno->turno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Semestre Ingresso') ?></th>
                    <td><?= h($aluno->semestre_ingresso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= $aluno->has('curso') ? $this->Html->link($aluno->curso->id, ['controller' => 'Cursos', 'action' => 'view', $aluno->curso->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Orientadore') ?></th>
                    <td><?= $aluno->has('orientadore') ? $this->Html->link($aluno->orientadore->id, ['controller' => 'Orientadores', 'action' => 'view', $aluno->orientadore->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aluno->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Trabalhos') ?></h4>
                <?php if (!empty($aluno->trabalhos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Entrega Anteprojeto') ?></th>
                            <th><?= __('Previsao') ?></th>
                            <th><?= __('Formato Id') ?></th>
                            <th><?= __('Aluno Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aluno->trabalhos as $trabalhos) : ?>
                        <tr>
                            <td><?= h($trabalhos->id) ?></td>
                            <td><?= h($trabalhos->titulo) ?></td>
                            <td><?= h($trabalhos->entrega_anteprojeto) ?></td>
                            <td><?= h($trabalhos->previsao) ?></td>
                            <td><?= h($trabalhos->formato_id) ?></td>
                            <td><?= h($trabalhos->aluno_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Trabalhos', 'action' => 'view', $trabalhos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Trabalhos', 'action' => 'edit', $trabalhos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trabalhos', 'action' => 'delete', $trabalhos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalhos->id)]) ?>
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
