<?php

include("conexao.php");
include("gravar.php");

$sql = "SELECT * FROM arquivos";

$result = $conexao->query($sql);

if (isset($msg) && $msg != false) {
    echo "<p>$msg</p>";
}


?>

<div style="margin-left: 50px; margin-top:50px ;">

    <table>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <?php echo '<img src="/images/' . $row['image'] . '" style="width:150px; height:150px; margin: 15px; border-radius: 10px ;">'; ?>
            </tr>
        <?php
        }
        ?>
    </table>

    <br><br>

    <button> <a href="index.php">Voltar</a></button>

</div>
