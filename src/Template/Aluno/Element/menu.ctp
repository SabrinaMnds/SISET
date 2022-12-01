
<ul class="nav">
    <li style="color: red;" <?= $pagina == 'Aluno' ? 'class="active"' : "style='color: white;'" ?>>
        <?= $this->Html->link('<i class="ti ti-notepad"  style="color: white;"></i>'.__('<i class="teste" style="font-size:20px;" > Página inicial </i>' ),['controller' => 'Alunos','action' => 'index'], ['escape' => false])?>
    </li>
    <li <?= $pagina == 'Aluno' ? 'class="active"' : '' ?>>
        <?= $this->Html->link('<i class="ti ti-pencil-alt" style="color: white;"></i>'.__('<i class="teste" style="font-size:20px;"> Minhas inscrições </i>'),['controller' => 'Alunos','action' => 'inscritos'], ['escape' => false])?>
    </li>
</ul>
<style>
    .teste{
        color:#fffcf5 ;
        white-space: nowrap;
    }
</style>