<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Historico $historico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Historico'), ['action' => 'edit', $historico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Historico'), ['action' => 'delete', $historico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Historicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Historico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="historicos view content">
            <h3><?= h($historico->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($historico->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conclusao') ?></th>
                    <td><?= $this->Number->format($historico->conclusao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atualizacao') ?></th>
                    <td><?= h($historico->atualizacao) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Trabalhos') ?></h4>
                <?php if (!empty($historico->trabalhos)) : ?>
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
                        <?php foreach ($historico->trabalhos as $trabalhos) : ?>
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
