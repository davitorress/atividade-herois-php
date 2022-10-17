<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Fatec Registro | Atividade Heróis PHP</title>

		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/header.css" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/heroes.css" />
	</head>
	<body>
		<?php
			error_reporting(false);

			$universeMarvel = ["marvel", "https://i.pinimg.com/originals/e6/01/46/e60146b3187908f5a06c17620d9a027e.png", "Logo da Marvel", "150px"];
			$marvelHeroes = [
				["ironMan", "homem de ferro", [
					"O Homem de Ferro (Iron Man) foi um personagem dos quadrinhos publicados pela Marvel Comics. Sua verdadeira identidade é o empresário e bilionário Tony Stark, que usou armaduras de alta tecnologia no combate ao crime.",
					"Foi criado em 1963 pelo escritor Stan Lee, o roteirista Larry Lieber e os desenhistas Jack Kirby e Don Heck. Stan Lee aceitou o desafio de fazer um personagem ser odiado e depois amado pelo público, criando um dos super-heróis mais marcantes de todos os tempos.",
				]],
				["doctorStrange", "doutor estranho", [
					"O doutor Stephen Vincent Strange, mais conhecido como Doutor Estranho, é um super-herói que aparece nos quadrinhos publicados pela Marvel Comics. Criado pelo desenhista Steve Ditko e pelo roteirista Stan Lee, o personagem apareceu pela primeira vez em Strange Tales #110 (julho de 1963).",
					"O Doutor Estranho serve como o Mago Supremo, o principal protetor da Terra contra ameaças mágicas e místicas. Inspirado por histórias de magia negra e o programa de rádio Chandu, the Magician, Strange foi criado durante a Era de Prata das histórias em quadrinhos e trouxe temas de misticismo para a Marvel Comics.",
				]],
				["scarletWitch", "feiticeira escarlate", [
					"Feiticeira Escarlate (Scarlet Witch no original) é uma super-heroína que aparece nos quadrinhos americanos publicados pela Marvel Comics. A personagem foi criada pelo roteirista Stan Lee e pelo desenhista Jack Kirby. Sua primeira aparição foi em 'X-Men' # 4 (março de 1964) na Era de prata das histórias em quadrinhos americanas.",
					"Dizia originalmente que tinha a capacidade de alterar a probabilidade, a Feiticeira Escarlate foi retratada como uma feiticeira poderosa desde os anos 1980 e mais tarde foi considerada poderosa o suficiente para alterar a realidade. Na maior parte de sua história em quadrinhos, ela é retratada como uma mutante, um membro de uma subespécie fictícia de humanos nascidos com um 'gene X' que concede habilidades e características sobre-humanas, mas no Universo Cinematográfico Marvel, a Marvel revisou suas características sobre-humanas sendo magia natural amplificada por uma experimentação de Hidra quando ela era criança.",
				]],
				["thor", "thor", [
					"Thor Odinson, geralmente simplesmente Thor, é um personagem fictício que aparece nos quadrinhos americanos publicados pela Marvel Comics. O personagem é baseado no deus mitológico nórdico de mesmo nome, o deus asgardiano do trovão, cujo martelo encantado Mjolnir lhe permite voar e manipular o clima, entre outros atributos sobre-humanos. Um membro fundador da equipe de super-heróis dos Vingadores, Thor tem uma série de personagens coadjuvantes e inimigos.",
					"Estreando na Era de Prata dos Quadrinhos, o personagem apareceu pela primeira vez em Journey into Mystery #83 (agosto de 1962) e foi criado pelo artista Jack Kirby, escritor Stan Lee e roteirista Larry Lieber.",
				]],
				["groot", "groot", [
					"Groot é um personagem fictício que aparece nas histórias em quadrinhos publicadas pela Marvel Comics. Sua primeira versão foi criada por Stan Lee, Jack Kirby e Dick Ayers, aparecendo pela primeira vez em 'Tales to Astonish' #13 (Novembro de 1960). Nessa versão Groot era uma criatura com a aparência de uma árvore Humanoide, que buscava seres alienígenas para usá-las em experimentos científicos.",
					"O personagem foi reformulado em 2006 por Keith Giffen e Timothy Green II para ser um nobre herói, aparecendo pela primeira vez no enredo Annihilation: Conquest (Setembro de 2007). Groot passou a estrelar sua série spin-off, Guardiões da Galáxia, juntando-se à equipe de mesmo nome.",
				]]
			];

			$heroPosition = $_POST["heroId"];
		?>

		<div id="page">
			<header>
				<div class="title">
					<h1>Fatec Comics</h1>
					<span>Sua escolha nos universos dos quadrinhos!</span>
				</div>

				<form action="index.php" method="post">
					<select name="heroId" id="heroId" required>
						<option value="" selected disabled>Selecione o herói</option>
						<option value="0">Homem de Ferro</option>
						<option value="1">Doutor Estranho</option>
						<option value="2">Feiticeira Escarlate</option>
						<option value="3">Thor</option>
						<option value="4">Groot</option>
					</select>

					<button type="submit">Escolher Herói</button>
				</form>
			</header>

			<main id="main">
				<div class="hero-img">
					<div id="<?php echo $marvelHeroes[$heroPosition][0] ?>"></div>
				</div>

				<div class="hero-text">
					<h2 id="hero-name">
						<?php echo $marvelHeroes[$heroPosition][1] ?>
					</h2>

					<div class="content">
						<p><?php echo $marvelHeroes[$heroPosition][2][0] ?></p>
						<p><?php echo $marvelHeroes[$heroPosition][2][1] ?></p>
					</div>

					<div class="universe">
						<span>Pertence ao universo:</span>

						<img id="universe-logo" src="<?php echo $universeMarvel[1] ?>" alt="<?php echo $universeMarvel[2] ?>" width="<?php echo $universeMarvel[3] ?>" />
					</div>
				</div>
			</main>
		</div>
	</body>
</html>
