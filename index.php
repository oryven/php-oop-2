<!-- /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->

     <?php

class Persona {

private $nome;
private $cognome;
private $dataDiNascita;

public function __construct($nome, $cognome, $dataDiNascita) {

    $this -> setNome($nome);
    $this -> setCognome($cognome);
    $this -> setDataDiNascita($dataDiNascita);

}

public function getNome() {

    return $this -> nome;
}
public function setNome($nome) {

    $this -> nome = $nome;
}
public function getCognome() {

    return $this -> cognome;
}
public function setCognome($cognome) {

    $this -> cognome = $cognome;
}

public function getDataDiNascita() {

return $this -> dataDiNascita;
}
public function setDataDiNascita($dataDiNascita) {

$this -> dataDiNascita = $dataDiNascita;
}

public function printFullPerson(){

    return $this -> getNome() . $this -> getCognome() . $this -> getDataDiNascita();
}

public function __toString(){
    return "persona" . $this -> nome . $this -> cognome . $this -> dataDiNascita;
}
} 

$p1 = new Persona("mario", "rossi", "01/01/2000");
$p2 = new persona("paolo", "bianchi","02/03/2010");
echo $p1 . "<br>";
echo $p2;
echo "<br> -------------------- <br>";

class Employee extends persona {

private $stipendio;
private $dataAssunzione;

public function __construct($nome, $cognome, $stipendio) {

    $this -> setNome($nome);
    $this -> setDataDiNascita($stipendio);

    public function getStipendio() {

        return $this -> stipendio;
    }
    public function setStipendio($nome) {

            $this -> nome = $nome;
    }
}

}

?>