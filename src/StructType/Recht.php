<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Recht extends AbstractStructBase
{
    /**
     * The Rechteklassennummer
     * @var string|null
     */
    public ?string $Rechteklassennummer = null;
    /**
     * The Rechtnummer
     * @var string|null
     */
    public ?string $Rechtnummer = null;
    /**
     * The Rechtname
     * @var string|null
     */
    public ?string $Rechtname = null;
    /**
     * The Beschreibung
     * @var string|null
     */
    public ?string $Beschreibung = null;
    /**
     * The Rechteart
     * @var string|null
     */
    public ?string $Rechteart = null;
    /**
     * The Funktionsrechtnummer
     * @var string|null
     */
    public ?string $Funktionsrechtnummer = null;
    /**
     * The Kommunikationspartnertyp
     * @var string|null
     */
    public ?string $Kommunikationspartnertyp = null;
    /**
     * The Minimalwert
     * @var string|null
     */
    public ?string $Minimalwert = null;
    /**
     * The Maximalwert
     * @var string|null
     */
    public ?string $Maximalwert = null;
    /**
     * Constructor method for Recht
     * @uses Recht::setRechteklassennummer()
     * @uses Recht::setRechtnummer()
     * @uses Recht::setRechtname()
     * @uses Recht::setBeschreibung()
     * @uses Recht::setRechteart()
     * @uses Recht::setFunktionsrechtnummer()
     * @uses Recht::setKommunikationspartnertyp()
     * @uses Recht::setMinimalwert()
     * @uses Recht::setMaximalwert()
     * @param string $rechteklassennummer
     * @param string $rechtnummer
     * @param string $rechtname
     * @param string $beschreibung
     * @param string $rechteart
     * @param string $funktionsrechtnummer
     * @param string $kommunikationspartnertyp
     * @param string $minimalwert
     * @param string $maximalwert
     */
    public function __construct(?string $rechteklassennummer = null, ?string $rechtnummer = null, ?string $rechtname = null, ?string $beschreibung = null, ?string $rechteart = null, ?string $funktionsrechtnummer = null, ?string $kommunikationspartnertyp = null, ?string $minimalwert = null, ?string $maximalwert = null)
    {
        $this
            ->setRechteklassennummer($rechteklassennummer)
            ->setRechtnummer($rechtnummer)
            ->setRechtname($rechtname)
            ->setBeschreibung($beschreibung)
            ->setRechteart($rechteart)
            ->setFunktionsrechtnummer($funktionsrechtnummer)
            ->setKommunikationspartnertyp($kommunikationspartnertyp)
            ->setMinimalwert($minimalwert)
            ->setMaximalwert($maximalwert);
    }
    /**
     * Get Rechteklassennummer value
     * @return string|null
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }
    /**
     * Set Rechteklassennummer value
     * @param string $rechteklassennummer
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;
        
        return $this;
    }
    /**
     * Get Rechtnummer value
     * @return string|null
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }
    /**
     * Set Rechtnummer value
     * @param string $rechtnummer
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;
        
        return $this;
    }
    /**
     * Get Rechtname value
     * @return string|null
     */
    public function getRechtname(): ?string
    {
        return $this->Rechtname;
    }
    /**
     * Set Rechtname value
     * @param string $rechtname
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setRechtname(?string $rechtname = null): self
    {
        $this->Rechtname = $rechtname;
        
        return $this;
    }
    /**
     * Get Beschreibung value
     * @return string|null
     */
    public function getBeschreibung(): ?string
    {
        return $this->Beschreibung;
    }
    /**
     * Set Beschreibung value
     * @param string $beschreibung
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setBeschreibung(?string $beschreibung = null): self
    {
        $this->Beschreibung = $beschreibung;
        
        return $this;
    }
    /**
     * Get Rechteart value
     * @return string|null
     */
    public function getRechteart(): ?string
    {
        return $this->Rechteart;
    }
    /**
     * Set Rechteart value
     * @param string $rechteart
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setRechteart(?string $rechteart = null): self
    {
        $this->Rechteart = $rechteart;
        
        return $this;
    }
    /**
     * Get Funktionsrechtnummer value
     * @return string|null
     */
    public function getFunktionsrechtnummer(): ?string
    {
        return $this->Funktionsrechtnummer;
    }
    /**
     * Set Funktionsrechtnummer value
     * @param string $funktionsrechtnummer
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setFunktionsrechtnummer(?string $funktionsrechtnummer = null): self
    {
        $this->Funktionsrechtnummer = $funktionsrechtnummer;
        
        return $this;
    }
    /**
     * Get Kommunikationspartnertyp value
     * @return string|null
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }
    /**
     * Set Kommunikationspartnertyp value
     * @param string $kommunikationspartnertyp
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;
        
        return $this;
    }
    /**
     * Get Minimalwert value
     * @return string|null
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }
    /**
     * Set Minimalwert value
     * @param string $minimalwert
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;
        
        return $this;
    }
    /**
     * Get Maximalwert value
     * @return string|null
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }
    /**
     * Set Maximalwert value
     * @param string $maximalwert
     * @return \THAG\XKfz\StructType\Recht
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;
        
        return $this;
    }
}
