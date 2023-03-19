<?php

class Hotel
{
    private string $nom;
    private string $adresse;
    private int $codePostale;
    private string $ville;
    private array $reservationsHotel;
    private array $nbChambres;



    public function __construct($nom, $adresse, $codePostale, $ville)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostale = $codePostale;
        $this->ville = $ville;
        $this->reservationsHotel = [];
        $this->nbChambres = [];
        
    }

    public function get_Nom()
    {
        return $this->nom;
    }
    public function set_Nom($nom)
    {
        $this->nom = $nom;
        $this->nom;
    }

    public function get_CodePostale()
    {
        $this->codePostale;
    }
    public function set_CodePostale($codePostale)
    {
        $this->codePostale = $codePostale;
        $this->codePostale;
    }

    public function get_Adresse()
    {
        $this->adresse;
    }
    public function set_Adresse($adresse)
    {
        $this->adresse = $adresse;
        $this->adresse;
    }

    public function get_Ville()
    {
        $this->ville;
    }
    public function set_Ville($ville)
    {
        $this->ville = $ville;
        $this->ville;
    }

    public function ajouter_ReservationHotel($reservationHotelTotal)
    {
        $this->reservationsHotel[] = $reservationHotelTotal;
    }

    public function add_Chambre($chambre)
    {
        $this->nbChambres[] = $chambre;
    }

    public function afficher_ReservationHotel()
    {
        foreach($this->reservationsHotel as $reservation)
        {
            echo $reservation;
        }
    }

    public function infos_Hotel()
    {
        $calculNbChambre = count($this->nbChambres) - count($this->reservationsHotel);
        echo '<h2>'.$this->nom.'</h2>';
        echo "<span>$this->adresse $this->codePostale $this->ville</span><br>";
        echo "<span>Nombre de chambres : ".count($this->nbChambres)."</span><br>";
        echo "<span>Nombre de chambres réservées : ".count($this->reservationsHotel)."</span><br>";
        echo "<span>Nombre de chambres disponibles : ".$calculNbChambre."</span><br>";
    }

    public function infos_HotelReservation()
    {
        echo "<h2>Réservation de l'hôtel $this->nom</h2>";

        if (count($this->reservationsHotel) > 0)
        {
            echo'<span class="Reservs"> '.count($this->reservationsHotel).' Réservations</span><br>';
            foreach($this->reservationsHotel as $reservation)
            {
                echo $reservation."<br>";
            }
        }
        else
        {
            echo "<span>Aucune réservation !</span><br>";
        }
    }

    public function status_Hotel()
    {
        echo '<table class="table table-hover greyOdd" ><th>Chambre </th><th> Prix</th><th> Wifi</th><th> Etat</th>';
        foreach ($this->nbChambres as $chambre)
        {
            echo '<tr class = "grisODD"><td>'.$chambre.'</td><td>'.$chambre->get_Prix().'</td><td>'.$chambre->wifi_Logo().'</td><td>'.$chambre->status_addReserv().'</td></tr>';
        }
        echo "</table>";
    }
}