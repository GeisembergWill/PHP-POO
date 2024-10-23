<?php
//ordinateur.class.php

            Class Ordinateur {
                private $marque;



                public function __construct($marque){
                    // construct appelée methode magique doit ettre precédé de __(double underscores) et porte un nom predefini 
                    // le constructeur d'une classe a pour role principal d'initialiser l'objet a creer
                    // // mettre en valeur des attributs soit en assignant directement des valeurs spécifiques
                    // //  soit en appelant diverses méthodes qui ont cette fonction
                        $this->marque = $marque;

                }
                public function getMarque(){
                        return $this->marque;

                }
            }

            $poste = new Ordinateur("Samsung");

           
            // créer un objet Ordinateur de marque Smasung
            echo $poste->getMarque();
           // affichera "Samsung"