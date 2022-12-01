
<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond');
            @font-face {
                font-family: 'Garamond';
                src: url('CormorantGaramond-Regular.ttf');
            }
            body {    
                font-family: 'Cormorant Garamond';
            }
            .float-left { float: left; }
            .text-center { text-align: center; }
            .col-1 { width: 20%; }
            .col-2 { width: 60%; }
            header div { margin: 20px 0 20px 0; }
            .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            .table td, .table th { border: 1px solid #000; padding: 4px; }
        </style>
    </head>
    <body>
        <section>
            <table>
                <tr>
                    <td rowspan="2" width="65%" style="text-align: center;">
                        <?= $this->Html->image('pdf.png') ?>
                    </td>
                  
                </tr>
            </table>
            <br/>
            <br>
            <table width="100%">
                <tr>
                    <td colspan="2" style="font-weight:bold">RELAÇÃO DOS ALUNOS DA ELETIVA: <?= $eletiva->titulo ?></td>

                </tr>
                <tr>
                    <td style="font-weight:bold">PROFESSOR(A): <?= $eletiva->professor->nome ?></td>
                </tr>
                <tr>

                <td colspan="2" style="font-weight:bold">SEMESTRE: <?= $eletiva->semestre ?></td>
                <td style="text-align:center;font-weight:bold">DATA: <?= $eletiva->dia_da_semana ?></td>


                </tr>
            </table>
            <div>
                <table class="table">
                    <colgroup>
                        <col width="28"/>
                        <col width="548"/>
                        <col width="132"/>
                    </colgroup>
                    <tbody>
                        <tr style="background-color:lightgreen">
                            <td style="text-align:center">
                                <p dir="ltr">Nº</p>
                            </td>
                            <td style="text-align:center">
                                <p dir="ltr">MATRÍCULA</p>
                            </td>
                            <td style="text-align:center">
                                <p dir="ltr">NOME</p>
                            </td>
                            <td style="text-align:center">
                                <p dir="ltr">TURMA</p>
                            </td>
                        </tr>
                        <?php $k = 1; foreach($eletivas->inscricoes as $value): ?>
                            <tr>
                                <td style="text-align:center"><?= $k ?></td>
                                <td style="text-align:center"><?= $value->aluno->matricula ?></td>
                                <td><?= $value->aluno->nome ?></td>
                                <td style="text-align:center"><?= $value->aluno->turma->full_name ?></td>
                            </tr>
                        <?php $k++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
        <footer class="rodape" style="text-align: center;">
    <p><b>EEMTI - Escola de Ensino Médio Capelão Frei Orlando - <?php echo date("d/m/Y"); ?></b></p>
    <p>Rua Paulino Barroso, 1289, Imaculada Conceição, Canindé - Ceará - CEP: 62700-000</p>
    <p>Contato: (85) 3343-6814 / 99856-2141  <?= $this->Html->image('whatsapp (1).png') ?> / 99298-6948 <?= $this->Html->image('whatsapp (1).png') ?></p>

</footer>
    </body>
</html>

<style>

    footer.rodape {
      width: 100%;
      position: fixed;
      bottom: 0;
      right: 0;
      height: 80px;
      display: flex;
      
    }

</style>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf = new \Mpdf\Mpdf(['default_font' => 'Cormorant Garamond']);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    exit;
?>