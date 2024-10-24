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
                $this->_cpuClock =$cpuClock;
            }
            public function getHdd(){
                return $this->_hdd;
            }
            public function setHdd($capacite){
                // on verifie qu'on nous donne bien une des trois capacité predefinies plus haut.
                if(in_array($capacite,[self::HDD_SMALL,self::HDD_MEDIUM,self::HDD_BIG])){
                    // "::" est l'operateur d'acces a une constante a l'interieur de la classe
                    // ce n'est plus le "$this" qu'il faut utiliser pour obtenir la valeur mais "self" suivi des "::"
                    // ex:HDD_SMALL pour obtenir la valeur associé
                    $this->_hdd=$capacite;
                }
            }
            public function getCpuClock(){
                return $this->_cpuClock;
            }    
            public function setCpuClock($speed){
                $this->_cpuClock = $speed;

            }
            public function getMarque(){
                return $this->_marque;
            }
            public function setMarque($marque){
                $this->_marque = $marque;
            }


            public function __toString():string{
              
            
                return "Cet ordinateur de marque : $this->_cpuClock;
             
             }
             }  
               
          
            
        
            // //  l'objet est instancie avec un processeur de 2.4 GHZ et ojny installe un petit disque dur

                  $poste = new Ordinateur("Samsung",2.4);
            // //  $poste->setHdd(Ordinateur::HDD_SMALL);
            // //  echo $poste->getCpuClock()."<br>";
            // //  echo $poste->getMarque()."<br>";
            // //  echo $poste->getHdd()."<br>";

 
            // //  $poste->setCpuClock(3);

            // //  echo $poste->getCpuClock();

            // echo $poste;

    
   
             















        