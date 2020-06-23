<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orientadore $orientadore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Orientadore'), ['action' => 'edit', $orientadore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Orientadore'), ['action' => 'delete', $orientadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orientadore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orientadores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Orientadore'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orientadores view content">
            <h3><?= h($orientadore->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($orientadore->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($orientadore->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Areas') ?></th>
                    <td><?= h($orientadore->areas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orientadore->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
