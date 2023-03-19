<?php

class Client
{
    private string $nom;
    private string $prenom;
    private array $reservationsClient;
    

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservationsClient = [];
    }

    
    public function get_Nom()
    {
        $this->nom;
    }
    public function set_Nom($nom)
    {
        $this->nom = $nom;
        
    }
    
    public function get_Prenom()
    {
        $this->prenom;
    }
    public function set_Prenom($prenom)
    {
        $this->prenom = $prenom;
        
    }

    
    public function ajouter_ReservationClient($reservationClientTotal)
    {
        $this->reservationsClient[] = $reservationClientTotal;
    }

    
    public function afficher_ReservationClient()
    {
        foreach($this->reservationsClient as $reservation)
        {
            echo $reservation;
        }
    }

    
    public function infos_ClientReservation()
    {
        echo "<h2>Réservation de $this->nom $this->prenom</h2>";

        if (count($this->reservationsClient) > 0)
        {
            echo '<span class="Reservs">'.count($this->reservationsClient).' Réservations</span><br>';
            foreach($this->reservationsClient as $reservation)
            {
                echo "<strong>Hotel: ".$reservation->get_Hotel()->get_Nom()."</strong> / Chambre: ".$reservation->get_Chambre()->get_Numero()." (".$reservation->get_Chambre()->get_NbLit()." Lits - ".$reservation->get_Chambre()->get_Prix()." € - Wifi:".$reservation->get_Chambre()->get_Wifi().") du ".$reservation->get_DateDebut()." au ".$reservation->get_DateFin()."<br>";
            }
        }
        else
        {
            echo "<span>Aucune réservation !</span><br>";
        }
        echo "Total: ".$reservation->calcul_Prix()." €<br>";
    }

    public function __toString()
    {
        return "$this->nom $this->prenom";
    }
}

?>