<div class="titulo">Desafio Tabela #02</div>

<form method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type="number" min="1" max="15"
            name="linhas" id="linhas"
            value=<?= $_POST['linhas'] ?? 10 ?>>
    </div>
    <div>
        <label for="colunas">Colunas</label>
        <input type="number" min="1" max="15"
            name="colunas" id="colunas"
            value=<?= $_POST['colunas'] ?? 10 ?>>
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
        $linhas = (int)$_POST['linhas'];
        $colunas = (int)$_POST['colunas'];
        $total = $linhas * $colunas;

        $num = 1;
        for ($linha = 1; $linha <= $linhas; $linha++) {
            echo '<tr>';
            for ($celula = 1; $celula <= $colunas; $celula++) {
                echo "<td>{$num}</td>";
                $num++;
            }
        }
        echo '</tr>';
    ?>
</table>

<style>
    form * {
        font-size: 1.8rem;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    .azul-claro {
        background-color: #B0D8FF;
    }
</style>
