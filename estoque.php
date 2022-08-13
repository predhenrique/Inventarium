<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

<section>
	<?php 
		include("conexao.php");
        include("menu.php");
		echo "<h1> Exibir produtos </h1>";
	?>
</section>

<section>
	<form action="produto-inserir.php" method="post">
		<div>
			<input type="text" placeholder="Produto" name="txProduto" />
		</div>
		<br>
		<?php
			$stmtCat = $pdo->prepare("select * from tbCategoria");	
			$stmtCat ->execute();				
		?>
		<div>
			<select name="txIdCategoria">
				<option value='0'> Escolha uma categoria </option>
				<?php 
					while($rowCat = $stmtCat ->fetch(PDO::FETCH_BOTH)){
						echo "<option value='$rowCat[0]'>" . utf8_encode($rowCat[1]) . "</option>";					
					}
				?>				
			</select>
			<!-- <input type="text" placeholder="idCategoria" name="txIdCategoria" />-->
		</div>
        <br>
        <div>
			<input type="text" placeholder="Fornecedor" name="txFornecedor" />
		</div>
        <br>
		<div>
			<input type="text" placeholder="Valor" name="txValor" />
		</div>		
        <br>
		<div>
			<input type="submit" value="Salvar" />
		</div>
	</form>
</section>

<section>
	<table class="table table-striped">
		<thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Produto</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Valor</th>
			<th scope="col">Excluir</th>
          </tr>
        </thead>
		<tbody>
		<?php
			$stmt = $pdo->prepare("select * from tbproduto");	
			$stmt ->execute();
			
			while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
				echo "<tr class='celula'>";
					echo "<td> $row[0] </td>";						
					echo "<td> $row[1] </td>";						
					echo "<td> $row[2] </td>";						
					echo "<td> $row[3] </td>";	
                    echo "<td> $row[4] </td>";											
					echo "<td> 
							<a href='produto-excluir.php?id=$row[0]'> Excluir </a> 
						 </td>";
				echo "</tr>";
			}	
		?>
		</tbody>
	</table>
</section>
</body>
</html>