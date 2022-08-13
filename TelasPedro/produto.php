<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
                <!-- Font Awesome -->
                <link
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                rel="stylesheet"
                />
                <!-- Google Fonts -->
                <link
                href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
                rel="stylesheet"
                />
                <!-- MDB -->
                <link
                href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
                rel="stylesheet"
                />
    </head>


	<?php include("verificar-session.php"); ?>
	<?php include("menu.php"); ?>
<section>
	<?php 
		include("conexao.php");

		echo "<h1> Exibir produtos </h1>";
	?>
</section>

<section>
	<form action="produto-inserir.php" method="post">
		<div>
			<input type="text" placeholder="Produto" name="txProduto" />
		</div>
		
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

		<div>
			<input type="text" placeholder="Valor" name="txValor" />
		</div>		

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
					echo "<td> 
							<a href='produto-excluir.php?id=$row[0]'> Excluir </a> 
						 </td>";
				echo "</tr>";
			}	
		?>
		</tbody>
	</table>
</section>
