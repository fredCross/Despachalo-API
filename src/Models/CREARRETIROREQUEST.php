<?php

declare(strict_types=1);

/*
 * APIEXTERNALLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIEXTERNALLib\Models;

class CREARRETIROREQUEST implements \JsonSerializable
{
    /**
     * @var int
     */
    private $idPlatform;

    /**
     * @var string
     */
    private $idBusiness;

    /**
     * @param int $idPlatform
     * @param string $idBusiness
     */
    public function __construct(int $idPlatform, string $idBusiness)
    {
        $this->idPlatform = $idPlatform;
        $this->idBusiness = $idBusiness;
    }

    /**
     * Returns Id Platform.
     */
    public function getIdPlatform(): int
    {
        return $this->idPlatform;
    }

    /**
     * Sets Id Platform.
     *
     * @required
     * @maps id_platform
     */
    public function setIdPlatform(int $idPlatform): void
    {
        $this->idPlatform = $idPlatform;
    }

    /**
     * Returns Id Business.
     */
    public function getIdBusiness(): string
    {
        return $this->idBusiness;
    }

    /**
     * Sets Id Business.
     *
     * @required
     * @maps id_business
     */
    public function setIdBusiness(string $idBusiness): void
    {
        $this->idBusiness = $idBusiness;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['id_platform'] = $this->idPlatform;
        $json['id_business'] = $this->idBusiness;

        return $json;
    }
}
