<?php

            Class Ordinateur{
                private $_marque;
                private $_cpuClock;


                public function __construct($marque,$cpuClock){
                    $this->_marque = $marque;
                    $this->_cpuClock = $cpuClock;
                }
                public function getMarque(){
                    return $this->_marque;
                }
                // un getter la methode qui permet de recuperer un attribut d'un objet instancié 
                // dans ce cas la il recupere la marque de l'ordinateur
                public function getCpuClock(){
                    return $this ->_cpuClock;
                }
                public function setCpuClock($speed){
                    $this->_cpuClock = $speed;
                }
                //un setter la methode qui permettra la modification d'un attribut et uniquement cela.    
                }
            

            $poste = new Ordinateur("Samsung",2,4);
            $poste->setCpuClock(3);
            echo $poste->getCpuClock()."GHz";
            //Affichera "3GHz"
            var_dump($poste);
             // permets de voir les composantes a ma variable