<?php

$cursos = [
    "php" => [
        "nome_curso" => "Curso de PHP Fundamentos",
        "versao_ferramenta" => 7.4,
        "carga_horaria" => 40,
        "status" => true,
    ],
    "Java" => [
        "nome_curso" => "Curso de Java Fundamentos",
        "versao_ferramenta" => 11.4,
        "carga_horaria" => 40,
        "status" => false,
    ],
    "C#" => [
        "nome_curso" => "Curso de C# Fundamentos",
        "versao_ferramenta" => 5,
        "carga_horaria" => 60,
        "status" => true,
    ],
];

foreach ($cursos as $curso) {
    if ($curso["status"] === false) {
        continue;
    }
    echo "<br>";
    echo "Nome do curso: {$curso["nome_curso"]} <br>";
    echo "Versão da ferramenta: {$curso["versao_ferramenta"]} <br>";
    echo "Carga Horária: {$curso["carga_horaria"]} <br>";
    echo "Status: {$curso["status"]} <br>";
}
