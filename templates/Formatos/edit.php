<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Formato $formato
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formato->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formato->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Formatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="formatos form content">
            <?= $this->Form->create($formato) ?>
            <fieldset>
                <legend><?= __('Edit Formato') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
