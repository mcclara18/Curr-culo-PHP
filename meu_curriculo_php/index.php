<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <?php
    $nomeCompleto = "Maria Clara Landim Braz";
    $idade = 20;
    $fotoPerfil = "imagens/sua_foto.jpg";
    ?>
    <div class="perfil">
        <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
        <h1><?php echo $nomeCompleto; ?></h1>
        <p>Idade: <?php echo $idade; ?> anos</p>
    </div>
</header>

<section id="experiencia">
    <h2>Experiência Profissional</h2>
    <p>
        Experiência trabalhando como professora particular, para qualquer idade, focada na área de exatas e computação.<br>
        A Maioria das minhas experiências, por enquanto, são acadêmicas.
         Desenvolvimento de projetos, participação em cursos e 
         trabalhos voluntários, e bom rendimento acadêmico.
         
    </p>
</section>


<section id="cursos">
    <h2>Cursos e Formações</h2>
    <?php
    $cursos = [
    "Graduação em Sistemas de Informação - Ifce campus Cedro (2023 - Presente)",
    "Escola Modelo de Iguatu, Iguatu, CE — Fundamental e Médio",
    "Hackaton Sertão Salgueiro - UPE (Fevereiro de 2024)",
    "Ideathon Sebrae - (Março de 2025)",
    "Encontro de Iniciação Cientifica ENICIT - IFCE (Outubro de 2023)",
    "Maratona Empreendedora - SEBRAE (Novembro de 2024) "
];

    ?>

    <?php if (!empty($cursos)): ?>
        <ul>
            <?php foreach ($cursos as $curso): ?>
                <li><?php echo $curso; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum curso ou formação cadastrada.</p>
    <?php endif; ?>
</section>

<section id="habilidades">
    <h2>Habilidades e Hobbies</h2>
    <?php
    $habilidades = [
        "PHP" => 8,
        "HTML/CSS" => 9,
        "Banco de dados MySQL" => 8,
        "C" => 8,
        "Phyton" => 8,
        "Java" => 7,
        "Hardware" => 9,

    ];

    $hobbies = [
        "Leitura" => 9,
        "Jogar videogame" => 8,
        "Artes Marciais" => 9,
        "Treinos Físicos" => 9,
        "Cultura, filmes e músicas" => 10
    ];
    ?>

    <h3>Habilidades</h3>
    <ul>
        <?php foreach ($habilidades as $habilidade => $nivel): ?>
            <li><?php echo $habilidade . ": "; ?>
                <?php for ($i = 0; $i < $nivel; $i++) echo "★"; ?>
                <?php for ($i = $nivel; $i < 10; $i++) echo "☆"; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Hobbies</h3>
    <ul>
        <?php foreach ($hobbies as $hobbie => $nivel): ?>
            <li><?php echo $hobbie . ": "; ?>
                <?php for ($i = 0; $i < $nivel; $i++) echo "★"; ?>
                <?php for ($i = $nivel; $i < 10; $i++) echo "☆"; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $nomeCompleto; ?></p>
</footer>

</body>
</html>
