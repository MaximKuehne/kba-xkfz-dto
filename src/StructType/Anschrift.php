<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Anschrift StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Anschrift extends AbstractStructBase
{
    /**
     * The Postleitzahl
     * @var string|null
     */
    public ?string $Postleitzahl = null;
    /**
     * The Postfach
     * @var string|null
     */
    public ?string $Postfach = null;
    /**
     * The PostleitzahlPostfach
     * @var string|null
     */
    public ?string $PostleitzahlPostfach = null;
    /**
     * The Wohnort
     * @var string|null
     */
    public ?string $Wohnort = null;
    /**
     * The Staat
     * @var string|null
     */
    public ?string $Staat = null;
    /**
     * The Strasse
     * @var string|null
     */
    public ?string $Strasse = null;
    /**
     * The Hausnummer
     * @var string|null
     */
    public ?string $Hausnummer = null;
    /**
     * The Adressierungszusaetze
     * @var string|null
     */
    public ?string $Adressierungszusaetze = null;
    /**
     * The Gemeindeschluessel
     * @var string|null
     */
    public ?string $Gemeindeschluessel = null;
    /**
     * The Strassenschluessel
     * @var string|null
     */
    public ?string $Strassenschluessel = null;
    /**
     * Constructor method for Anschrift
     * @uses Anschrift::setPostleitzahl()
     * @uses Anschrift::setPostfach()
     * @uses Anschrift::setPostleitzahlPostfach()
     * @uses Anschrift::setWohnort()
     * @uses Anschrift::setStaat()
     * @uses Anschrift::setStrasse()
     * @uses Anschrift::setHausnummer()
     * @uses Anschrift::setAdressierungszusaetze()
     * @uses Anschrift::setGemeindeschluessel()
     * @uses Anschrift::setStrassenschluessel()
     * @param string $postleitzahl
     * @param string $postfach
     * @param string $postleitzahlPostfach
     * @param string $wohnort
     * @param string $staat
     * @param string $strasse
     * @param string $hausnummer
     * @param string $adressierungszusaetze
     * @param string $gemeindeschluessel
     * @param string $strassenschluessel
     */
    public function __construct(?string $postleitzahl = null, ?string $postfach = null, ?string $postleitzahlPostfach = null, ?string $wohnort = null, ?string $staat = null, ?string $strasse = null, ?string $hausnummer = null, ?string $adressierungszusaetze = null, ?string $gemeindeschluessel = null, ?string $strassenschluessel = null)
    {
        $this
            ->setPostleitzahl($postleitzahl)
            ->setPostfach($postfach)
            ->setPostleitzahlPostfach($postleitzahlPostfach)
            ->setWohnort($wohnort)
            ->setStaat($staat)
            ->setStrasse($strasse)
            ->setHausnummer($hausnummer)
            ->setAdressierungszusaetze($adressierungszusaetze)
            ->setGemeindeschluessel($gemeindeschluessel)
            ->setStrassenschluessel($strassenschluessel);
    }
    /**
     * Get Postleitzahl value
     * @return string|null
     */
    public function getPostleitzahl(): ?string
    {
        return $this->Postleitzahl;
    }
    /**
     * Set Postleitzahl value
     * @param string $postleitzahl
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;
        
        return $this;
    }
    /**
     * Get Postfach value
     * @return string|null
     */
    public function getPostfach(): ?string
    {
        return $this->Postfach;
    }
    /**
     * Set Postfach value
     * @param string $postfach
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setPostfach(?string $postfach = null): self
    {
        $this->Postfach = $postfach;
        
        return $this;
    }
    /**
     * Get PostleitzahlPostfach value
     * @return string|null
     */
    public function getPostleitzahlPostfach(): ?string
    {
        return $this->PostleitzahlPostfach;
    }
    /**
     * Set PostleitzahlPostfach value
     * @param string $postleitzahlPostfach
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setPostleitzahlPostfach(?string $postleitzahlPostfach = null): self
    {
        $this->PostleitzahlPostfach = $postleitzahlPostfach;
        
        return $this;
    }
    /**
     * Get Wohnort value
     * @return string|null
     */
    public function getWohnort(): ?string
    {
        return $this->Wohnort;
    }
    /**
     * Set Wohnort value
     * @param string $wohnort
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setWohnort(?string $wohnort = null): self
    {
        $this->Wohnort = $wohnort;
        
        return $this;
    }
    /**
     * Get Staat value
     * @return string|null
     */
    public function getStaat(): ?string
    {
        return $this->Staat;
    }
    /**
     * Set Staat value
     * @param string $staat
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setStaat(?string $staat = null): self
    {
        $this->Staat = $staat;
        
        return $this;
    }
    /**
     * Get Strasse value
     * @return string|null
     */
    public function getStrasse(): ?string
    {
        return $this->Strasse;
    }
    /**
     * Set Strasse value
     * @param string $strasse
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setStrasse(?string $strasse = null): self
    {
        $this->Strasse = $strasse;
        
        return $this;
    }
    /**
     * Get Hausnummer value
     * @return string|null
     */
    public function getHausnummer(): ?string
    {
        return $this->Hausnummer;
    }
    /**
     * Set Hausnummer value
     * @param string $hausnummer
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setHausnummer(?string $hausnummer = null): self
    {
        $this->Hausnummer = $hausnummer;
        
        return $this;
    }
    /**
     * Get Adressierungszusaetze value
     * @return string|null
     */
    public function getAdressierungszusaetze(): ?string
    {
        return $this->Adressierungszusaetze;
    }
    /**
     * Set Adressierungszusaetze value
     * @param string $adressierungszusaetze
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setAdressierungszusaetze(?string $adressierungszusaetze = null): self
    {
        $this->Adressierungszusaetze = $adressierungszusaetze;
        
        return $this;
    }
    /**
     * Get Gemeindeschluessel value
     * @return string|null
     */
    public function getGemeindeschluessel(): ?string
    {
        return $this->Gemeindeschluessel;
    }
    /**
     * Set Gemeindeschluessel value
     * @param string $gemeindeschluessel
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setGemeindeschluessel(?string $gemeindeschluessel = null): self
    {
        $this->Gemeindeschluessel = $gemeindeschluessel;
        
        return $this;
    }
    /**
     * Get Strassenschluessel value
     * @return string|null
     */
    public function getStrassenschluessel(): ?string
    {
        return $this->Strassenschluessel;
    }
    /**
     * Set Strassenschluessel value
     * @param string $strassenschluessel
     * @return \THAG\XKfz\StructType\Anschrift
     */
    public function setStrassenschluessel(?string $strassenschluessel = null): self
    {
        $this->Strassenschluessel = $strassenschluessel;
        
        return $this;
    }
}
