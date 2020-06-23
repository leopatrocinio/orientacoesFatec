<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabalho[]|\Cake\Collection\CollectionInterface $trabalhos
 */
?>
<div class="trabalhos index content">
    <?= $this->Html->link(__('New Trabalho'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trabalhos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('entrega_anteprojeto') ?></th>
                    <th><?= $this->Paginator->sort('previsao') ?></th>
                    <th><?= $this->Paginator->sort('formato_id') ?></th>
                    <th><?= $this->Paginator->sort('aluno_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trabalhos as $trabalho): ?>
                <tr>
                    <td><?= $this->Number->format($trabalho->id) ?></td>
                    <td><?= h($trabalho->titulo) ?></td>
                    <td><?= h($trabalho->entrega_anteprojeto) ?></td>
                    <td><?= h($trabalho->previsao) ?></td>
                    <td><?= $trabalho->has('formato') ? $this->Html->link($trabalho->formato->id, ['controller' => 'Formatos', 'action' => 'view', $trabalho->formato->id]) : '' ?></td>
                    <td><?= $trabalho->has('aluno') ? $this->Html->link($trabalho->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $trabalho->aluno->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trabalho->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trabalho->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalho->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
