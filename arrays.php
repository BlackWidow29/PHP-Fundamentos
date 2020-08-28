<?php

$linguagens = ["PHP", "C#", "Java", "JavaScript"];

echo $linguagens[2];

$linguagens[] = "Python";

echo "<br>";

echo var_dump($linguagens);

echo "<br>";

$curso = ["Curso de PHP Fundamentos", 7.4, 40, true];

$curso = [
    "nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true
];

$curso["Pre-Requisitos"] = "Lógica de Programação";

echo "<br>";
echo $curso["nome_curso"];
echo "<br>";
echo $curso["versao_ferramenta"];
echo "<br>";
echo $curso["carga_horaria"];
echo "<br>";
echo $curso["status"];
echo "<br>";
echo $curso["Pre-Requisitos"];
echo "<br>";
echo "<br>";

echo "Arrays Multidimensionais";
echo "<br>";
echo "<br>";

$numeros = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

echo $numeros[0][2];
echo "<br>";
echo $numeros[2][1];

$curso = [
   "php" => ["nome_curso" => "Curso de PHP Fundamentos",
    "versao_ferramenta" => 7.4,
    "carga_horaria" => 40,
    "status" => true],
    "Java" => ["nome_curso" => "Curso de Java Fundamentos",
    "versao_ferramenta" => 11.4,
    "carga_horaria" => 40,
    "status" => false]
];

echo "<br>";
echo $curso["Java"]["nome_curso"];
echo "<br>";
echo $curso["Java"]["versao_ferramenta"];
echo "<br>";
echo $curso["Java"]["carga_horaria"];
echo "<br>";
echo $curso["Java"]["status"];
echo "<br>";
echo "<br>";