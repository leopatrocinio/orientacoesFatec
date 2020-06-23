<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orientadore[]|\Cake\Collection\CollectionInterface $orientadores
 */
?>
<div class="orientadores index content">
    <?= $this->Html->link(__('New Orientadore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Orientadores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('areas') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orientadores as $orientadore): ?>
                <tr>
                    <td><?= $this->Number->format($orientadore->id) ?></td>
                    <td><?= h($orientadore->nome) ?></td>
                    <td><?= h($orientadore->email) ?></td>
                    <td><?= h($orientadore->areas) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orientadore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orientadore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orientadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orientadore->id)]) ?>
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
