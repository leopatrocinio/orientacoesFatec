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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orientadore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orientadore->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Orientadores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orientadores form content">
            <?= $this->Form->create($orientadore) ?>
            <fieldset>
                <legend><?= __('Edit Orientadore') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('areas');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
