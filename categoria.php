<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>

<?php include("verificar-session.php"); ?>
<?php include("menu.php"); ?>
<section>
    <?php 
		include("conexao.php");

		echo "<h1> Categoria </h1>";
	?>
</section>

<section>
    <form action="categoria-inserir.php" method="post">

        <div>
            <input type="text" placeholder="Categoria" name="txCategoria"/>
        </div><br>
        

        <div class="button-submit">
            <input type="submit" value="Salvar"/>
        </div>
    </form>
</section>

<section>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id Categoria</th>
                <th scope="col">Categoria</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
			$stmt = $pdo->prepare("select * from tbcategoria");	
			$stmt ->execute();
			
			while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
				echo "<tr class='celula'>";
					echo "<td> $row[0] </td>";						
					echo "<td> $row[1] </td>";						
					echo "<td> 
							<a href='categoria-excluir.php?id=$row[0]'> Excluir </a> 
						 </td>";
				echo "</tr>";
			}	
		?>
        </tbody>
    </table>
</section>