<?php

class Rationnel
{

    private int $numerateur;
    private int $denominateur;

    public function __construct(int $numerateur, int $denominateur)
    {
        $this->numerateur = $numerateur;
        $this->denominateur = $denominateur;
    }

    public function getDenominateur()
    {
        return $this->denominateur;
    }

    public function setDenominateur($denominateur)
    {
        $this->denominateur = $denominateur;

        return $this;
    }

    public function getNumerateur()
    {
        return $this->numerateur;
    }

    public function setNumerateur($numerateur)
    {
        $this->numerateur = $numerateur;

        return $this;
    }


    public function addition(Rationnel $rationnel)
    {
        $numerateurTemp = $this->numerateur * $rationnel->getDenominateur() + $this->denominateur * $rationnel->getNumerateur();
        $denominateurTemp = $this->denominateur * $rationnel->getDenominateur();

        $this->numerateur = $numerateurTemp;
        $this->denominateur = $denominateurTemp;
    }

    public function soustraction(Rationnel $rationnel)
    {
        $numerateurTemp = $this->numerateur * $rationnel->getDenominateur() - $this->denominateur * $rationnel->getNumerateur();
        $denominateurTemp = $this->denominateur * $rationnel->getDenominateur();

        $this->numerateur = $numerateurTemp;
        $this->denominateur = $denominateurTemp;
    }


    public function multiplication(Rationnel $rationnel)
    {
        $numerateurTemp = $this->numerateur * $rationnel->getNumerateur();
        $denominateurTemp = $this->denominateur * $rationnel->getDenominateur();

        $this->numerateur = $numerateurTemp;
        $this->denominateur = $denominateurTemp;
    }
    public function division(Rationnel $rationnel)
    {
        $numerateurTemp = $this->numerateur * $rationnel->getDenominateur();
        $denominateurTemp = $this->denominateur * $rationnel->getNumerateur();
        if($this->denominateur )
        $this->numerateur = $numerateurTemp;
        $this->denominateur = $denominateurTemp;
    }
    
   
}
