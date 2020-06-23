<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabalho $trabalho
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trabalho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trabalho->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Trabalhos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trabalhos form content">
            <?= $this->Form->create($trabalho) ?>
            <fieldset>
                <legend><?= __('Edit Trabalho') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('entrega_anteprojeto', ['empty' => true]);
                    echo $this->Form->control('previsao', ['empty' => true]);
                    echo $this->Form->control('formato_id', ['options' => $formatos]);
                    echo $this->Form->control('aluno_id', ['options' => $alunos]);
                    echo $this->Form->control('historicos._ids', ['options' => $historicos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
