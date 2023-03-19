<?php

class Chambre
{
    private int $numero;
    private float $prix;
    private int $nbLit;
    private bool $wifi;
    private array $reservationsChambre;
    private Hotel $hotel;
    private bool $addReserv;

    public function __construct($numero, $prix, $nbLit, $wifi, $hotel)
    {
        $this->numero = $numero;
        $this->prix = $prix;
        $this->nbLit = $nbLit;
        $this->wifi = $wifi;
        $this->reservationsChambre = [];
        $this->hotel = $hotel;
        $hotel->add_Chambre($this);
        $this->addReserv = false;
    }

    
    public function get_Numero()
    {
        return $this->numero;
    }
    public function set_Numero($numero)
    {
        $this->numero = $numero;
        $this->numero;
    }
    
    public function get_Prix()
    {
        return $this->prix;
    }
    public function set_Prix($prix)
    {
        $this->prix = $prix;
        $this->prix;
    }
    
    public function get_nbLit()
    {
        return $this->nbLit;
    }
    public function set_nbLit($nbLit)
    {
        $this->nbLit = $nbLit;
        $this->nbLit;
    }
    
    public function get_Wifi()
    {
        if ($this->wifi == True)
        {
            return " Oui";
        }
        else 
        {
            return " Non";
        }
    }
    public function set_Wifi($wifi)
    {
        $this->wifi = $wifi;
        $this->wifi;
    }

    
    public function ajouter_ReservationChambre( $reservationChambreTotal)
    {
        $this->reservationsChambre[] = $reservationChambreTotal;
    }

    public function add_Reservations()
    {
        $this->addReserv = true;
    }

    public function afficher_ReservationChambre()
    {
        foreach($this->reservationsChambre as $reservation)
        {
            echo $reservation;
        }
    }

    
    public function wifi_logo()
    {
        if ($this->wifi == true)
        {
            return '<i class="fa-solid fa-wifi"></i>';
        }
    }

    
    public function status_AddReserv()
    {
        if ($this->addReserv == true)
        {
            return '<span class = "Reserv">RÉSERVÉE</span><br>';
        }
        else
        {
            return '<span class = Dispo>DISPONIBLE</span><br>';
        }
    }

    public function __toString()
    {
        return "Chambre $this->numero";
    }
}

?>