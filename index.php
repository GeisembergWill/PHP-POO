<?php

    
        Class Ordinateur{
            // class sert a décrire objet avec nos caractéristique et ne contient que cela les caractéristiques sont entre accolade
            private$_marque;
            //attribut "marque"
            private$_modele;
            private$_ecran;
            private$_statut =0;


            public function allumer(){
                        $this->_statut =1;
                        // $this fait reference a l'instance de l'objet courant 
                        // sert a modifier lui meme son attribut $_statut lorsqu'on appelera sa methode allumer
                        // // ici statut prend la valeur de 0 "eteint" et 1 pour "allumer"

            }

        }
        $poste = new Ordinateur();
        // un nouvel ordinateur est crée dans une variable $poste avec le mots clé new
        // $poste instancie un objet de classe ordinateur
        $poste->allumer();
        // on allume cet ordinateur $poste en appelant sa methode allumer de la meme maniere qu'une fonction classique en PHP
        // cependant la fleche -> intime l'ordre a l'objet  d'utiliser  SA methode.
     