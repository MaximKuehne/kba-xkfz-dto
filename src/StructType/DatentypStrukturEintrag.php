<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatentypStrukturEintrag StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class DatentypStrukturEintrag extends AbstractStructBase
{
    /**
     * The Datenkey
     * @var string|null
     */
    public ?string $Datenkey = null;
    /**
     * The Datenbedingung
     * @var string|null
     */
    public ?string $Datenbedingung = null;
    /**
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * The DateneintragOptional
     * @var string|null
     */
    public ?string $DateneintragOptional = null;
    /**
     * The DateneintragName
     * @var string|null
     */
    public ?string $DateneintragName = null;
    /**
     * The DateneintragBeschreibung
     * @var string|null
     */
    public ?string $DateneintragBeschreibung = null;
    /**
     * Constructor method for DatentypStrukturEintrag
     * @uses DatentypStrukturEintrag::setDatenkey()
     * @uses DatentypStrukturEintrag::setDatenbedingung()
     * @uses DatentypStrukturEintrag::setDatentypName()
     * @uses DatentypStrukturEintrag::setDateneintragOptional()
     * @uses DatentypStrukturEintrag::setDateneintragName()
     * @uses DatentypStrukturEintrag::setDateneintragBeschreibung()
     * @param string $datenkey
     * @param string $datenbedingung
     * @param string $datentypName
     * @param string $dateneintragOptional
     * @param string $dateneintragName
     * @param string $dateneintragBeschreibung
     */
    public function __construct(?string $datenkey = null, ?string $datenbedingung = null, ?string $datentypName = null, ?string $dateneintragOptional = null, ?string $dateneintragName = null, ?string $dateneintragBeschreibung = null)
    {
        $this
            ->setDatenkey($datenkey)
            ->setDatenbedingung($datenbedingung)
            ->setDatentypName($datentypName)
            ->setDateneintragOptional($dateneintragOptional)
            ->setDateneintragName($dateneintragName)
            ->setDateneintragBeschreibung($dateneintragBeschreibung);
    }
    /**
     * Get Datenkey value
     * @return string|null
     */
    public function getDatenkey(): ?string
    {
        return $this->Datenkey;
    }
    /**
     * Set Datenkey value
     * @param string $datenkey
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDatenkey(?string $datenkey = null): self
    {
        $this->Datenkey = $datenkey;
        
        return $this;
    }
    /**
     * Get Datenbedingung value
     * @return string|null
     */
    public function getDatenbedingung(): ?string
    {
        return $this->Datenbedingung;
    }
    /**
     * Set Datenbedingung value
     * @param string $datenbedingung
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDatenbedingung(?string $datenbedingung = null): self
    {
        $this->Datenbedingung = $datenbedingung;
        
        return $this;
    }
    /**
     * Get DatentypName value
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
    /**
     * Get DateneintragOptional value
     * @return string|null
     */
    public function getDateneintragOptional(): ?string
    {
        return $this->DateneintragOptional;
    }
    /**
     * Set DateneintragOptional value
     * @param string $dateneintragOptional
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDateneintragOptional(?string $dateneintragOptional = null): self
    {
        $this->DateneintragOptional = $dateneintragOptional;
        
        return $this;
    }
    /**
     * Get DateneintragName value
     * @return string|null
     */
    public function getDateneintragName(): ?string
    {
        return $this->DateneintragName;
    }
    /**
     * Set DateneintragName value
     * @param string $dateneintragName
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDateneintragName(?string $dateneintragName = null): self
    {
        $this->DateneintragName = $dateneintragName;
        
        return $this;
    }
    /**
     * Get DateneintragBeschreibung value
     * @return string|null
     */
    public function getDateneintragBeschreibung(): ?string
    {
        return $this->DateneintragBeschreibung;
    }
    /**
     * Set DateneintragBeschreibung value
     * @param string $dateneintragBeschreibung
     * @return \THAG\XKfz\StructType\DatentypStrukturEintrag
     */
    public function setDateneintragBeschreibung(?string $dateneintragBeschreibung = null): self
    {
        $this->DateneintragBeschreibung = $dateneintragBeschreibung;
        
        return $this;
    }
}
