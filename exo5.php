<?php

        Class Ordinateur{

            private $_marque;
            // fonction pour stocker la marques
            private $_cpuClock;
            // fonction pour stocker la vitesse processeur


            private static $_nbPostes =0;
            // nbPostes est un attribut statique.le mots clé static nous indique que l'attribur appartient a la classe ordinateur 
            // elle meme et pas aux objet qui l'instancieront.pas besoin de creer un poste pour obtenir cette information
            // mais nbPostes de son statut static ne pourra etre reutilisé en dehors de la classe.
            // mais on peut demander le nombre de postes sans avoir a en creer au prealable

            public function __construct($data){

                        $this->_marque=$data[0];
                        $this->_cpuClock= $data[1];
                        self::$_nbPostes++;
                        // le mot clé "self" Le compteur est incrémenté dans le constructeur grace a sa 
                        // $nbPostes est indépendant de tout objet il sera le mem pour tous les ordinateurs.
            }
            public function setMarque($marque){
                $this->_marque=$marque;
                // definition de la marque
            }
            public function setCpuClock($speed){
                $this->_cpuClock =$speed;
                // deginition de la vitesse du processeur
            }
            public static function combien(){
                echo self::$_nbPostes."<br/>";
                // la methode publique statique combien()a pour fonction de l'afficher. 
            }
        }

        Ordinateur::combien();
        // affiche 0
        $poste = new Ordinateur(array("Samsung",2.4));
        $poste2 = new Ordinateur(array("Hitachi",1.6));
        Ordinateur::combien();
        // affiche 2
        var_dump($poste);
         // permets de voir les composantes a ma variable
        var_dump($poste2);
         // permets de voir les composantes a ma variable

