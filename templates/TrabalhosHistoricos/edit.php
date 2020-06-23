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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trabalhosHistorico->trabalho_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trabalhosHistorico->trabalho_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trabalhos Historicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trabalhosHistoricos form content">
            <?= $this->Form->create($trabalhosHistorico) ?>
            <fieldset>
                <legend><?= __('Edit Trabalhos Historico') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
