<?php
// Titre et Auteur
$title = "L'Odyssée d'un Développeur : Des Bits aux Racines";
$author = "Taciclei Sousa Hortencio";

// Introduction
$introduction = <<<INTRO
Titre : $title

Auteur : $author

Introduction :
Ce livre raconte l'évolution d'un développeur, de ses débuts jusqu'à l'exploration des technologies modernes. De la découverte de l'ordinateur à la maîtrise du code, chaque version raconte une étape cruciale de son parcours, mêlant découvertes personnelles et avancées technologiques.
INTRO;

// Table des versions et sous-versions
$versions = [
    "Alpha" => [
        "title" => "Genesis",
        "sub_versions" => [
            ["number" => "0.1", "title" => "1982 : L’année des débuts"],
            ["number" => "0.2", "title" => "L’ancêtre 8086 : Le premier de la lignée"],
            ["number" => "0.3", "title" => "L’oublié 80186 : Le père dépassé"],
            ["number" => "0.4", "title" => "Le i286 : Une révolution (presque) comme moi"],
            // Ajoutez les autres sous-versions de Alpha ici
        ]
    ],
    "Beta" => [
        "title" => "Le P5 – Tout est Nouveau",
        "sub_versions" => [
            ["number" => "0.1", "title" => "Bienvenue dans le monde du Pentium : France, 1995"],
            ["number" => "0.2", "title" => "Un “P5” qui laisse peu de place"],
            ["number" => "0.3", "title" => "Une mise à jour complexe… surtout pour moi"],
            ["number" => "0.4", "title" => "Téléphones, Minitel et camembert : bienvenue en France !"],
            ["number" => "0.5", "title" => "Mon premier argent de poche et l’art de la baguette"],
            // Ajoutez les autres sous-versions de Beta ici
        ]
    ],
    "v1" => [
        "title" => "L’adaptation en France",
        "sub_versions" => [
            ["number" => "1.1", "title" => "Découverte de la langue et des coutumes"],
            ["number" => "1.2", "title" => "Les premières amitiés et le choc culturel"],
            // Ajoutez les sous-versions de v1 ici
        ]
    ],
    "v2" => [
        "title" => "Les premières réussites",
        "sub_versions" => [
            ["number" => "2.1", "title" => "Mon premier projet personnel"],
            ["number" => "2.2", "title" => "Les défis techniques"],
            // Ajoutez les sous-versions de v2 ici
        ]
    ],
    "v3" => [
        "title" => "Vers la professionnalisation",
        "sub_versions" => [
            ["number" => "3.1", "title" => "Premier emploi dans le domaine"],
            ["number" => "3.2", "title" => "Perfectionnement des compétences"],
            // Ajoutez les sous-versions de v3 ici
        ]
    ]
];

// Affichage du titre et de l'introduction
echo "<h1 style='color: #5569c4;'>$title</h1>";
echo "<p style='color: #dcdcdc;'>Auteur : $author</p>";
echo "<pre style='font-family: monospace; color: #666;'>$introduction</pre>";

// Affichage des versions avec sous-versions
echo "<ul style='font-family: monospace;'>";
foreach ($versions as $version => $data) {
    echo "<li><strong style='color: #87bd7d;'>$version</strong> - <span style='color: #9cdfe9;'>{$data['title']}</span>";
    echo "<ul>";
    foreach ($data['sub_versions'] as $sub_version) {
        echo "<li>$version {$sub_version['number']} - <span style='color: #cfcfcf;'>{$sub_version['title']}</span></li>";
    }
    echo "</ul></li>";
}
echo "</ul>";
?>