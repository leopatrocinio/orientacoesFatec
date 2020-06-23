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
            <?= $this->Html->link(__('List Trabalhos Historicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trabalhosHistoricos form content">
            <?= $this->Form->create($trabalhosHistorico) ?>
            <fieldset>
                <legend><?= __('Add Trabalhos Historico') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
