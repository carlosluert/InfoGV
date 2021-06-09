<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="UTF-8">
		<title>InfoGV | Formulário</title>
		<link rel="stylesheet" href="css/bulma.min.css">
		<link rel="stylesheet" href="css/login.css">
	</head>

	<body>
		<section class="section">
			<div class="container">
				<div class="columns is-centered">
					<div class="column is-half">
						<h1 class="title has-text-centered">Formulário de Mensagem</h1>
						<h1 class="title has-text-centered" >InfoGV</h1>

						<form action="enviar.php" method="POST"  enctype="multipart/form-data">
							<div class="field">
								<label class="label">Nome</label>
								<div class="control">
									<input name="nome" class="input" type="text" placeholder="Seu nome completo">
								</div>
							</div>

							<div class="field">
								<label class="label">Email*</label>
								<div class="control">
									<input name="email" class="input" type="email" placeholder="Seu email">
								</div>
							</div>

							<div class="field">
								<label class="label">Assunto</label>
								<div class="control">
									<div class="select is-fullwidth">
										<select name="assunto">
											<option>Dúvidas</option>
											<option>Sugestões</option>
											<option>Outro</option>
										</select>
									</div>
								</div>
							</div>

							<div class="field">
								<label class="label">Mensagem*</label>
								<div class="control">
									<textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
								</div>
							</div>

								<div class= "field">
										<label>Imagem de perfil: <input type="file" name="arquivo"></label>
								</div>

							<div class="field is-grouped">
								<div class="control">
							
									<button class="button is-link is-medium">Enviar</button>
								</div>

							</div>
						</form>
						<br>
						<div>
						<a href="materias.html"><button class="button is-link is-medium">Voltar</button></a>
						</div>

					</div>
				</div>
			</div>
		</section>
	</body>
</html>