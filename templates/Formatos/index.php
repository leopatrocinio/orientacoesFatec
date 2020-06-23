<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formato[]|\Cake\Collection\CollectionInterface $formatos
 */
?>
<div class="formatos index content">
    <?= $this->Html->link(__('New Formato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Formatos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($formatos as $formato): ?>
                <tr>
                    <td><?= $this->Number->format($formato->id) ?></td>
                    <td><?= h($formato->titulo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $formato->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formato->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formato->id)]) ?>
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
