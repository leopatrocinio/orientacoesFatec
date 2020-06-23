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
            <?= $this->Html->link(__('Edit Formato'), ['action' => 'edit', $formato->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Formato'), ['action' => 'delete', $formato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formato->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Formatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Formato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="formatos view content">
            <h3><?= h($formato->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($formato->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($formato->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Trabalhos') ?></h4>
                <?php if (!empty($formato->trabalhos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Entrega Anteprojeto') ?></th>
                            <th><?= __('Previsao') ?></th>
                            <th><?= __('Formato Id') ?></th>
                            <th><?= __('Aluno Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($formato->trabalhos as $trabalhos) : ?>
                        <tr>
                            <td><?= h($trabalhos->id) ?></td>
                            <td><?= h($trabalhos->titulo) ?></td>
                            <td><?= h($trabalhos->entrega_anteprojeto) ?></td>
                            <td><?= h($trabalhos->previsao) ?></td>
                            <td><?= h($trabalhos->formato_id) ?></td>
                            <td><?= h($trabalhos->aluno_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Trabalhos', 'action' => 'view', $trabalhos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Trabalhos', 'action' => 'edit', $trabalhos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trabalhos', 'action' => 'delete', $trabalhos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalhos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
