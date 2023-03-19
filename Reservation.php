<?php

class Reservation
{
    private DateTime $date_DebutReservation;
    private DateTime $date_FinReservation;
    private $chambre;
    private $client;
    private $hotel;

    public function __construct($date_DebutReservation, $date_FinReservation, $chambre, $client, $hotel)
    {
        $this->date_DebutReservation = new DateTime($date_DebutReservation);
        $this->date_FinReservation = new DateTime($date_FinReservation);
        $this->chambre = $chambre;
        $this->client = $client;
        $this->hotel = $hotel;
        $hotel->ajouter_ReservationHotel($this);
        $client->ajouter_ReservationClient($this);
        $chambre->ajouter_ReservationChambre($this);
        $chambre->add_Reservations();
    }

    public function get_Chambre()
    {
        return $this->chambre;
    }

    
    public function get_Hotel()
    {
        return $this->hotel;
    }

    public function get_DateDebut()
    {
        $date_DebutReservation = $this->date_DebutReservation->format('Y-m-d');
        return $date_DebutReservation;
    }

    public function get_DateFin()
    {
        $date_FinReservation = $this->date_FinReservation->format('Y-m-d');
        return $date_FinReservation;
    }
    
    public function calcul_Prix()
    {

        $date_DebutReservation = $this->date_DebutReservation->format('Y-m-d');
        $date_DebutReservationCalc = strtotime($date_DebutReservation);
        $date_FinReservation = $this->date_FinReservation->format('Y-m-d');
        $date_FinReservationCalc = strtotime($date_FinReservation);
        $Jsec = 86400;

        $dateTotal =  $date_FinReservationCalc - $date_DebutReservationCalc;
        $dateTotal = $dateTotal / $Jsec;

        $prixTotal =  $dateTotal * $this->get_Chambre()->get_Prix();

        return $prixTotal;
    }

    public function __toString()
    {
        $date_DebutReservation = $this->date_DebutReservation->format('Y-m-d');
        $date_FinReservation = $this->date_FinReservation->format('Y-m-d');
        return "$this->client - $this->chambre - du $date_DebutReservation au $date_FinReservation";
    }
}
