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
            <?= $this->Html->link(__('Edit Trabalho'), ['action' => 'edit', $trabalho->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Trabalho'), ['action' => 'delete', $trabalho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabalho->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Trabalhos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Trabalho'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="trabalhos view content">
            <h3><?= h($trabalho->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($trabalho->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Formato') ?></th>
                    <td><?= $trabalho->has('formato') ? $this->Html->link($trabalho->formato->id, ['controller' => 'Formatos', 'action' => 'view', $trabalho->formato->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Aluno') ?></th>
                    <td><?= $trabalho->has('aluno') ? $this->Html->link($trabalho->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $trabalho->aluno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($trabalho->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Entrega Anteprojeto') ?></th>
                    <td><?= h($trabalho->entrega_anteprojeto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Previsao') ?></th>
                    <td><?= h($trabalho->previsao) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Historicos') ?></h4>
                <?php if (!empty($trabalho->historicos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Atualizacao') ?></th>
                            <th><?= __('Conclusao') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($trabalho->historicos as $historicos) : ?>
                        <tr>
                            <td><?= h($historicos->id) ?></td>
                            <td><?= h($historicos->atualizacao) ?></td>
                            <td><?= h($historicos->conclusao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Historicos', 'action' => 'view', $historicos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Historicos', 'action' => 'edit', $historicos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Historicos', 'action' => 'delete', $historicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $historicos->id)]) ?>
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
