<?php

declare(strict_types=1);

/*
 * APIEXTERNALLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIEXTERNALLib\Models;

class Address implements \JsonSerializable
{
    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $fullAddress;

    /**
     * @var string
     */
    private $latlong;

    /**
     * @var string
     */
    private $typeAdress;

    /**
     * @var string
     */
    private $notes;

    /**
     * @param string $region
     * @param string $city
     * @param string $fullAddress
     * @param string $latlong
     * @param string $typeAdress
     * @param string $notes
     */
    public function __construct(
        string $region,
        string $city,
        string $fullAddress,
        string $latlong,
        string $typeAdress,
        string $notes
    ) {
        $this->region = $region;
        $this->city = $city;
        $this->fullAddress = $fullAddress;
        $this->latlong = $latlong;
        $this->typeAdress = $typeAdress;
        $this->notes = $notes;
    }

    /**
     * Returns Region.
     */
    public function getRegion(): string
    {
        return $this->region;
    }

    /**
     * Sets Region.
     *
     * @required
     * @maps region
     */
    public function setRegion(string $region): void
    {
        $this->region = $region;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Full Address.
     */
    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }

    /**
     * Sets Full Address.
     *
     * @required
     * @maps full_address
     */
    public function setFullAddress(string $fullAddress): void
    {
        $this->fullAddress = $fullAddress;
    }

    /**
     * Returns Latlong.
     */
    public function getLatlong(): string
    {
        return $this->latlong;
    }

    /**
     * Sets Latlong.
     *
     * @required
     * @maps latlong
     */
    public function setLatlong(string $latlong): void
    {
        $this->latlong = $latlong;
    }

    /**
     * Returns Type Adress.
     */
    public function getTypeAdress(): string
    {
        return $this->typeAdress;
    }

    /**
     * Sets Type Adress.
     *
     * @required
     * @maps type_adress
     */
    public function setTypeAdress(string $typeAdress): void
    {
        $this->typeAdress = $typeAdress;
    }

    /**
     * Returns Notes.
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * Sets Notes.
     *
     * @required
     * @maps notes
     */
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['region']       = $this->region;
        $json['city']         = $this->city;
        $json['full_address'] = $this->fullAddress;
        $json['latlong']      = $this->latlong;
        $json['type_adress']  = $this->typeAdress;
        $json['notes']        = $this->notes;

        return $json;
    }
}
