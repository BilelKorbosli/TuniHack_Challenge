<?php


class Offre {

    private  $idProduct;
    private  $dateOffre;
    private  $idClient;
    private  $statusVente;
    private  $statusFire;


    public function __construct($idProduct, $dateOffre, $idClient, $statusVente, $statusFire)
    {
        $this->idProduct = $idProduct;
        $this->dateOffre = $dateOffre;
        $this->idClient = $idClient;
        $this->statusVente = $statusVente;
        $this->statusFire = $statusFire;
    }

    /**
     * @return mixed
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * @param mixed $idProduct
     */
    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->dateOffre;
    }

    /**
     * @param mixed $date
     */
    public function setDate($dateOffre)
    {
        $this->dateOffre = $dateOffre;
    }

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getStatusVente()
    {
        return $this->statusVente;
    }

    /**
     * @param mixed $statusVente
     */
    public function setStatusVente($statusVente)
    {
        $this->statusVente = $statusVente;
    }

    /**
     * @return mixed
     */
    public function getStatusFire()
    {
        return $this->statusFire;
    }

    /**
     * @param mixed $statusFire
     */
    public function setStatusFire($statusFire)
    {
        $this->statusFire = $statusFire;
    }





}
?>