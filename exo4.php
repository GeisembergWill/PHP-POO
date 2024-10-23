<?php

        Class Ordinateur{
            private$_marque;
            private$_cpuClock;
            private$_hdd;


            Const HDD_SMALL ="250Go";
            // mot clé constante dans la classe ordinateur
            Const HDD_MEDIUM ="500Go";
            Const HDD_BIG ="1To";


            public function __construct($marque,$cpuClock){
                $this->_marque = $marque;
                $this->_cpuClock;
            }
            public function getHdd(){
                return $this->_hdd;
            }
            Public function setHdd($capacite){
                // on verifie qu'on nous donne bien une des trois capacité predefinies plus haut.
                if(in_array($capacite,[self::HDD_SMALL,self::HDD_MEDIUM,self::HDD_BIG])){
                    :: est l'operateur d'acces
                    $this->_hdd=$capacite;
                }

            }

        }
        //l'objet est instancie avec un processeur de 2.4 GHZ et ojny installe un petit disque dur

        $poste = new Ordinateur("Samsung",2.4);
        $poste->setHdd(Ordinateur::HDD_BIG);
        echo "le disque dur est d'une capacité de ".$poste->getHdd();
        // affiche 250 go















        