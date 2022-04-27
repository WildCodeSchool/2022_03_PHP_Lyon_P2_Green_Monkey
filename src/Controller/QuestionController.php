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
            "fact" => "La production mondiale de viande représente plus de 60 % des
            émissions de CO2 liées à l'industrie agroalimentaire'.",
            "source" => "https://www.nature.com/articles/s43016-021-00358-x.epdf",
        ],
        [
            "title" => "Vous consommez des boissons froides (sodas, sirops, alcool) :",
            "choice1" => "plus de 10 verres par semaine",
            "choice2" => "entre 5 et 10 verres par semaine",
            "choice3" => "moins de 5 verres",
            "choice4" => "je ne sais pas",
            "fact" => "La production d’un seul verre de vin nécessite l’utilisation de 109 litres d’eau.",
            "source" => "https://hess.copernicus.org/articles/15/1577/2011/hess-15-1577-2011.html",
        ],
        [
            "title" => "À quelle fréquence jetez-vous de la nourriture ?",
            "choice1" => "plusieurs fois par semaine",
            "choice2" => "de temps en temps",
            "choice3" => "jamais",
            "choice4" => "je ne sais pas",
            "fact" => "Chaque année en France, près de 10 millions de tonnes de nourriture consommable
            sont gaspillées, soit l’équivalent de 150 kg/hab./an.",
            "source" => "shorturl.at/dqxFI",
        ],
        [
            "title" => "Quel type de petit-déjeuner vous correspond le plus ?",
            "choice1" => "viennoiserie, baguette",
            "choice2" => "lait et céréales",
            "choice3" => "pas de petit-déjeuner",
            "choice4" => "ça dépend",
            "fact" => "Ajouter du lait animal à un bol de céréales multiplie par 4 son empreinte carbone.",
            "source" => "shorturl.at/jsGV7",
        ],
        [
            "title" => "Quel moyen de transport utilisez-vous au quotidien ?",
            "choice1" => "la voiture",
            "choice2" => "les transports en commun",
            "choice3" => "le vélo",
            "choice4" => "mes pieds ou un autre type",
            "fact" => "Par rapport à la voiture, se déplacer chaque jour à vélo permet de
            réduire son impact de 84 % et en transports en commun de 71 %.",
            "source" => "shorturl.at/elIJS",
        ],
        [
            "title" => "Combien de fois prenez-vous l'avion par an ?",
            "choice1" => "plus de 15 fois",
            "choice2" => "plus de 5 fois",
            "choice3" => "1 à 2 fois",
            "choice4" => "je ne prends jamais l'avion",
            "fact" => "Les émissions d'un vol Paris-New York correspondent à peu près aux émissions annuelles
            que devraient respecter les Français pour lutter contre le réchauffement climatique.",
            "source" => "https://www.hellocarbo.com/blog/calculer/empreinte-carbone-avion/",
        ],
        [
            "title" => "Quel moyen de transport utilisez-vous pour partir en vacances (le plus souvent) ?",
            "choice1" => "Avion",
            "choice2" => "Voiture",
            "choice3" => "Train",
            "choice4" => "Je ne pars pas en vacances",
            "fact" => "Le train émet 14 grammes de CO2/passager/km, contre 285 grammes pour l'avion",
            "source" => "shorturl.at/nvPZ7",
        ],
        [
            "title" => "Avez-vous acheté un moyen de transport cette année ?",
            "choice1" => "oui, une voiture",
            "choice2" => "oui, une trottinette électrique",
            "choice3" => "oui, un vélo",
            "choice4" => "non",
            "fact" => "La production d'un véhicule neuf équivaudrait à 720 kg de CO2
            rejeté tous les 1000 euros dépensés.",
            "source" => "shorturl.at/gjJN0",
        ],
        [
            "title" => "Comment est chauffé votre logement ?",
            "choice1" => "fioul",
            "choice2" => "gaz",
            "choice3" => "électricité",
            "choice4" => "bois",
            "fact" => "Le chauffage représente en moyenne 60 % de la consommation énergétique des ménages.",
            "source" => "https://www.choisir.com/energie/articles/124022/quel-est-limpact-environnemental-du-chauffage",
        ],
        [
            "title" => "Quel âge a votre logement ?",
            "choice1" => "récent (moins de 10 ans)",
            "choice2" => "entre 10 et 50 ans",
            "choice3" => "plus de 50 ans",
            "choice4" => "je ne sais pas",
            "fact" => "Les fuites par la toiture représentent environ 25 à 30%
            de la consommation d’énergie dans un logment mal isolé.",
            "source" => "https://www.compteco2.com/article/comment-reduire-emissions-co2-en-isolation-combles",
        ],
        [
            "title" => "Quelle est la surface de votre logement ?",
            "choice1" => "grande maison (plus de 160m²)",
            "choice2" => "maison",
            "choice3" => "appartement (3 pièces/environ 70m²)",
            "choice4" => "je ne sais pas",
            "fact" => "le remplacement de chauffage est l’amélioration qui présente le meilleur
            retour sur investissement et le meilleur retour carbone.",
            "source" => "shorturl.at/vxGW1",
        ],
        [
            "title" => "Quelle est votre énergie de cuisson ?",
            "choice1" => "gaz en bouteille",
            "choice2" => "gaz de ville",
            "choice3" => "électrique",
            "choice4" => "je ne sais pas",
            "fact" => "Jusqu’à 60 % de l’impact climatique des aliments peut provenir de la cuisson, en particulier
            pour les aliments les plus respectueux du climat comme les légumes.",
            "source" => "https://www.nature.com/articles/s43016-020-00200-w",
        ],
        [
            "title" => "Quel âge a votre ordinateur portable ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 2 an(s)",
            "choice3" => "entre 3 et 5 ans",
            "choice4" => "plus de 5 ans",
            "fact" => "La fabrication d'un ordinateur portable est responsable à 75-85 % de son
            empreinte carbone totale, y compris lors de son usage.",
            "source" => "https://circularcomputing.com/news/carbon-footprint-laptop/",
        ],
        [
            "title" => "Quel âge a votre smartphone ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 2 an(s)",
            "choice3" => "entre 3 et 5 ans",
            "choice4" => "je n'en ai pas",
            "fact" => "Un smartphone fait quatre fois le tour du monde avant d'atterrir dans nos mains.",
            "source" => "https://www.greenly.earth/blog-fr/lempreinte-carbone-dun-smartphone",
        ],
        [
            "title" => "Quel âge a votre TV ?",
            "choice1" => "moins d'un an",
            "choice2" => "entre 1 et 5 ans",
            "choice3" => "plus de cinq ans",
            "choice4" => "je ne sais pas",
            "fact" => " La fabrication d’une télévision de 47 pouces émet 479 kg
            de CO2 et nécessite 26 000 litres d’eau.",
            "source" => "shorturl.at/oBCVZ",
        ],
        [
            "title" => "Combien d'heures passez-vous sur internet (hors travail) ?",
            "choice1" => "plus de 5h par jour",
            "choice2" => "environ 5h par jour",
            "choice3" => "environ 2h par jour",
            "choice4" => "je ne sais pas",
            "fact" => "En 2020, le numérique est à lui seul responsable de
            l'émission de 24 millions de tonnes équivalent CO2.",
            "source" => "shorturl.at/fkmA7",
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
