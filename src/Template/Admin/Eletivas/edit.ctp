<?php
    $this->Form->setTemplates([
        'dateWidget' => '{{day}}{{month}}{{year}}{{hour}}{{minute}}{{second}}{{meridian}}'
    ]);
?>
<style>
    .date-control { width: 20%;background-color: #fffcf5;border: medium none;border-radius: 4px;color: #66615b;font-size: 14px;transition: background-color 0.3s ease 0s;padding: 7px 18px;height: 40px;-webkit-box-shadow: none;box-shadow: none;margin: 0 3px; }
</style>
<div class="col-md-12">
<nav class="form-inline">
        <h5><?= __('Ações') ?></h5>
        <div class="form-group mb-2">
            <?= $this->Form->postLink(__('Apagar'),['action' => 'delete', $eletiva->id],['class' => 'btn btn-danger btn-fill','confirm' => __('Você tem certeza que quer apagar o registro #{0}?', $eletiva->id)]) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Eletivas'), ['action' => 'index'], ['class' => 'btn btn-primary btn-fill']) ?>
        </div>
        <div class="form-group mb-2">
            <?= $this->Html->link(__('Listar Inscricoes'), ['controller' => 'Inscricoes', 'action' => 'index'], ['class' => 'btn btn-primary']) ?>
        </div>
</nav>
<hr>
<div class="form">
    <?= $this->Form->create($eletiva) ?>
        <div class="form-group">
            <h5><?= __('Editar Eletiva') ?></h5>
        </div>
        <div class="form-group">
        <?= $this->Form->control('dia_da_semana', 
            ['class' => 'form-control', 'notEmpty' => true, 'required' , 'autocomplete' => 'off', "type" => "select", "options" => 
            [
            "Segunda-feira"=> "SEGUNDA-FEIRA",
             "Terça-feira"=>"TERÇA-FEIRA",
             "Quarta-feira"=>"QUARTA-FEIRA",
             "Quinta-feira"=>"QUINTA-FEIRA",
             "Sexta-feira"=>"SEXTA-FEIRA",
             ]]) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('titulo', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('semestre', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('descricao', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('professor_id', ['class' => 'form-control','options' => $professores, 'empty' => true]) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('vagas', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <?= $this->Form->control('status', ['class' => 'form-control', 'type' => 'select', 'options' => ['Aberto' => 'Aberto', 'Fechado' => 'Fechado']]) ?>
            </div>
    <div class="form-group text-center">
        <?= $this->Form->button(__('Submeter'), ['class' => 'btn btn-success btn-fill']) ?>
        <?= $this->Html->link(__('Cancelar'), ['action' => 'index'], ['class' => 'btn btn-danger btn-fill']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
</div>