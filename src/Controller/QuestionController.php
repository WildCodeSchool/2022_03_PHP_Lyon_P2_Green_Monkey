<?php

namespace App\Controller;

use App\Model\QuestionManager;

class QuestionController extends AbstractController
{
    private array $questions = [
        [
            "title" => "Vous mangez de la viande :",
            "choice1" => "plus de 3x par semaine",
            "choice2" => "moins de 3x par semaine",
            "choice3" => "je suis végétarien.ne",
            "choice4" => "je suis vegan",
            "fact" => "Ut lobortis rhoncus mi id maximus. In tincidunt sed turpis in egestas.
            Integer odio ipsum, lobortis nec commodo vel, congue vitae erat. Fusce ac sollicitudin
            dolor."
        ],
        [
            "title" => "Vous consommez des boissons froides (sodas, sirops, alcool) :",
            "choice1" => "plus de 10 verres par semaine",
            "choice2" => "entre 5 et 10 verres par semaine",
            "choice3" => "moins de 5 verres",
            "choice4" => "je ne sais pas",
            "fact" => "Ut lobortis rhoncus mi id maximus. In tincidunt sed turpis in egestas.
            Integer odio ipsum, lobortis nec commodo vel, congue vitae erat. Fusce ac sollicitudin
            dolor."
        ],
        [
            "title" => "À quelle fréquence jetez-vous de la nourriture ?",
            "choice1" => "plusieurs fois par semaine",
            "choice2" => "de temps en temps",
            "choice3" => "jamais",
            "choice4" => "je ne sais pas",
            "fact" => "Ut lobortis rhoncus mi id maximus. In tincidunt sed turpis in egestas.
            Integer odio ipsum, lobortis nec commodo vel, congue vitae erat. Fusce ac sollicitudin
            dolor."
        ],
        [
            "title" => "Quel type de petit-déjeuner vous correspond le plus ?",
            "choice1" => "viennoiserie, baguette",
            "choice2" => "lait et céréales",
            "choice3" => "pas de petit-déjeuner",
            "choice4" => "ça dépend",
            "fact" => ""
        ],
        [
            "title" => "Quel moyen de transport utilisez-vous au quotidien ?",
            "choice1" => "la voiture",
            "choice2" => "les transports en commun",
            "choice3" => "le vélo",
            "choice4" => "mes pieds ou un autre type",
            "fact" => ""
        ],
        [
            "title" => "Combien de fois prenez-vous l'avion par an ?",
            "choice1" => "plus de 15 fois",
            "choice2" => "plus de 5 fois",
            "choice3" => "1 à 2 fois",
            "choice4" => "je ne prends jamais l'avion",
            "fact" => ""
        ],
        [
            "title" => "Quel moyen de transport utilisez-vous pour partir en vacances (le plus souvent) ?",
            "choice1" => "Avion",
            "choice2" => "Voiture",
            "choice3" => "Train",
            "choice4" => "Je ne pars pas en vacances",
            "fact" => ""
        ],
        [
            "title" => "Avez-vous acheté un moyen de transport cette année ?",
            "choice1" => "oui, une voiture",
            "choice2" => "oui, une trottinette électrique",
            "choice3" => "oui, un vélo",
            "choice4" => "non",
            "fact" => ""
        ],
        [
            "title" => "Comment est chauffé votre logement ?",
            "choice1" => "fioul",
            "choice2" => "gaz",
            "choice3" => "électricité",
            "choice4" => "bois",
            "fact" => ""
        ],
        [
            "title" => "Quel âge a votre logement ?",
            "choice1" => "récent (moins de 10 ans)",
            "choice2" => "entre 10 et 50 ans",
            "choice3" => "plus de 50 ans",
            "choice4" => "je ne sais pas",
            "fact" => ""
        ],
        [
            "title" => "Quelle est la surface de votre logement ?",
            "choice1" => "grande maison (plus de 160m²)",
            "choice2" => "maison",
            "choice3" => "appartement (3 pièces/environ 70m²)",
            "choice4" => "je ne sais pas",
            "fact" => ""
        ],
        [
            "title" => "Quelle est votre énergie de cuisson ?",
            "choice1" => "gaz en bouteille",
            "choice2" => "gaz de ville",
            "choice3" => "électrique",
            "choice4" => "je ne sais pas",
            "fact" => ""
        ],
        [
            "title" => "Quel âge a votre ordinateur portable ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 2 an(s)",
            "choice3" => "entre 3 et 5 ans",
            "choice4" => "plus de 5 ans",
            "fact" => ""
        ],
        [
            "title" => "Quel âge a votre smartphone ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 2 an(s)",
            "choice3" => "entre 3 et 5 ans",
            "choice4" => "je n'en ai pas",
            "fact" => ""
        ],
        [
            "title" => "Quel âge a votre TV ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 5 ans",
            "choice3" => "plus de cinq ans",
            "choice4" => "je ne sais pas",
            "fact" => ""
        ],
        [
            "title" => "Combien d'heures passez-vous sur internet (hors travail) ?",
            "choice1" => "plus de 5h par jour",
            "choice2" => "environ 5h par jour",
            "choice3" => "environ 2h par jour",
            "choice4" => "je ne sais pas",
            "fact" => ""
        ]
    ];

    /**
     * Display home page
     */
    public function index(): string
    {
        $questions = $this->questions;
        return $this->twig->render('Calculator/calculator.html.twig', ['questions' => $questions]);
    }
}
