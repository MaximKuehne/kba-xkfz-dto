<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypCodeDatenQuelle StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypCodeDatenQuelle extends AbstractStructBase
{
    /**
     * The Datenpfad
     * @var string|null
     */
    public ?string $Datenpfad = null;
    /**
     * The DatentypCodeDatenQuelleCode
     * @var string|null
     */
    public ?string $DatentypCodeDatenQuelleCode = null;
    /**
     * The DatentypCodeDatenQuelleName
     * @var string|null
     */
    public ?string $DatentypCodeDatenQuelleName = null;
    /**
     * The DatentypCodeDatenQuelleBeschreibung
     * @var string|null
     */
    public ?string $DatentypCodeDatenQuelleBeschreibung = null;
    /**
     * Constructor method for DatentypCodeDatenQuelle
     * @uses DatentypCodeDatenQuelle::setDatenpfad()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleCode()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleName()
     * @uses DatentypCodeDatenQuelle::setDatentypCodeDatenQuelleBeschreibung()
     * @param string $datenpfad
     * @param string $datentypCodeDatenQuelleCode
     * @param string $datentypCodeDatenQuelleName
     * @param string $datentypCodeDatenQuelleBeschreibung
     */
    public function __construct(?string $datenpfad = null, ?string $datentypCodeDatenQuelleCode = null, ?string $datentypCodeDatenQuelleName = null, ?string $datentypCodeDatenQuelleBeschreibung = null)
    {
        $this
            ->setDatenpfad($datenpfad)
            ->setDatentypCodeDatenQuelleCode($datentypCodeDatenQuelleCode)
            ->setDatentypCodeDatenQuelleName($datentypCodeDatenQuelleName)
            ->setDatentypCodeDatenQuelleBeschreibung($datentypCodeDatenQuelleBeschreibung);
    }
    /**
     * Get Datenpfad value
     * @return string|null
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }
    /**
     * Set Datenpfad value
     * @param string $datenpfad
     * @return \THAG\XKfz\StructType\DatentypCodeDatenQuelle
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;
        
        return $this;
    }
    /**
     * Get DatentypCodeDatenQuelleCode value
     * @return string|null
     */
    public function getDatentypCodeDatenQuelleCode(): ?string
    {
        return $this->DatentypCodeDatenQuelleCode;
    }
    /**
     * Set DatentypCodeDatenQuelleCode value
     * @param string $datentypCodeDatenQuelleCode
     * @return \THAG\XKfz\StructType\DatentypCodeDatenQuelle
     */
    public function setDatentypCodeDatenQuelleCode(?string $datentypCodeDatenQuelleCode = null): self
    {
        $this->DatentypCodeDatenQuelleCode = $datentypCodeDatenQuelleCode;
        
        return $this;
    }
    /**
     * Get DatentypCodeDatenQuelleName value
     * @return string|null
     */
    public function getDatentypCodeDatenQuelleName(): ?string
    {
        return $this->DatentypCodeDatenQuelleName;
    }
    /**
     * Set DatentypCodeDatenQuelleName value
     * @param string $datentypCodeDatenQuelleName
     * @return \THAG\XKfz\StructType\DatentypCodeDatenQuelle
     */
    public function setDatentypCodeDatenQuelleName(?string $datentypCodeDatenQuelleName = null): self
    {
        $this->DatentypCodeDatenQuelleName = $datentypCodeDatenQuelleName;
        
        return $this;
    }
    /**
     * Get DatentypCodeDatenQuelleBeschreibung value
     * @return string|null
     */
    public function getDatentypCodeDatenQuelleBeschreibung(): ?string
    {
        return $this->DatentypCodeDatenQuelleBeschreibung;
    }
    /**
     * Set DatentypCodeDatenQuelleBeschreibung value
     * @param string $datentypCodeDatenQuelleBeschreibung
     * @return \THAG\XKfz\StructType\DatentypCodeDatenQuelle
     */
    public function setDatentypCodeDatenQuelleBeschreibung(?string $datentypCodeDatenQuelleBeschreibung = null): self
    {
        $this->DatentypCodeDatenQuelleBeschreibung = $datentypCodeDatenQuelleBeschreibung;
        
        return $this;
    }
}
