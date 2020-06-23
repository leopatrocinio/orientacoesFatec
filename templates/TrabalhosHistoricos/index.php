<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrabalhosHistorico[]|\Cake\Collection\CollectionInterface $trabalhosHistoricos
 */
?>
<div class="trabalhosHistoricos index content">
    <?= $this->Html->link(__('New Trabalhos Historico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Trabalhos Historicos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('trabalho_id') ?></th>
                    <th><?= $this->Paginator->sort('historico_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trabalhosHistoricos as $trabalhosHistorico): ?>
                <tr>
                    <td><?= $trabalhosHistorico->has('trabalho') ? $this->Html->link($trabalhosHistorico->trabalho->id, ['controller' => 'Trabalhos', 'action' => 'view', $trabalhosHistorico->trabalho->id]) : '' ?></td>
                    <td><?= $trabalhosHistorico->has('historico') ? $this->Html->link($trabalhosHistorico->historico->id, ['controller' => 'Historicos', 'action' => 'view', $trabalhosHistorico->historico->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $trabalhosHistorico->trabalho_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trabalhosHistorico->trabalho_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trabalhosHistorico->trabalho_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalhosHistorico->trabalho_id)]) ?>
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
