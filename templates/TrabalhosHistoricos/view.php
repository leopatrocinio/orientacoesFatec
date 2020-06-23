<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrabalhosHistorico $trabalhosHistorico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Trabalhos Historico'), ['action' => 'edit', $trabalhosHistorico->trabalho_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Trabalhos Historico'), ['action' => 'delete', $trabalhosHistorico->trabalho_id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalhosHistorico->trabalho_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trabalhos Historicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Trabalhos Historico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trabalhosHistoricos view content">
            <h3><?= h($trabalhosHistorico->trabalho_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Trabalho') ?></th>
                    <td><?= $trabalhosHistorico->has('trabalho') ? $this->Html->link($trabalhosHistorico->trabalho->id, ['controller' => 'Trabalhos', 'action' => 'view', $trabalhosHistorico->trabalho->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Historico') ?></th>
                    <td><?= $trabalhosHistorico->has('historico') ? $this->Html->link($trabalhosHistorico->historico->id, ['controller' => 'Historicos', 'action' => 'view', $trabalhosHistorico->historico->id]) : '' ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
