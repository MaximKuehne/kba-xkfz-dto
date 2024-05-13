<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Versandadresse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Versandadresse extends AbstractStructBase
{
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The NameBezeichnung
     * @var string|null
     */
    public ?string $NameBezeichnung = null;
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
     * The Postleitzahl
     * @var string|null
     */
    public ?string $Postleitzahl = null;
    /**
     * The Ort
     * @var string|null
     */
    public ?string $Ort = null;
    /**
     * Constructor method for Type.Versandadresse
     * @uses Type_Versandadresse::setVorname()
     * @uses Type_Versandadresse::setNameBezeichnung()
     * @uses Type_Versandadresse::setStrasse()
     * @uses Type_Versandadresse::setHausnummer()
     * @uses Type_Versandadresse::setAdressierungszusaetze()
     * @uses Type_Versandadresse::setPostleitzahl()
     * @uses Type_Versandadresse::setOrt()
     * @param string $vorname
     * @param string $nameBezeichnung
     * @param string $strasse
     * @param string $hausnummer
     * @param string $adressierungszusaetze
     * @param string $postleitzahl
     * @param string $ort
     */
    public function __construct(?string $vorname = null, ?string $nameBezeichnung = null, ?string $strasse = null, ?string $hausnummer = null, ?string $adressierungszusaetze = null, ?string $postleitzahl = null, ?string $ort = null)
    {
        $this
            ->setVorname($vorname)
            ->setNameBezeichnung($nameBezeichnung)
            ->setStrasse($strasse)
            ->setHausnummer($hausnummer)
            ->setAdressierungszusaetze($adressierungszusaetze)
            ->setPostleitzahl($postleitzahl)
            ->setOrt($ort);
    }
    /**
     * Get Vorname value
     * @return string|null
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }
    /**
     * Set Vorname value
     * @param string $vorname
     * @return \THAG\XKfz\StructType\Type_Versandadresse
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
        return $this;
    }
    /**
     * Get NameBezeichnung value
     * @return string|null
     */
    public function getNameBezeichnung(): ?string
    {
        return $this->NameBezeichnung;
    }
    /**
     * Set NameBezeichnung value
     * @param string $nameBezeichnung
     * @return \THAG\XKfz\StructType\Type_Versandadresse
     */
    public function setNameBezeichnung(?string $nameBezeichnung = null): self
    {
        $this->NameBezeichnung = $nameBezeichnung;
        
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
     * @return \THAG\XKfz\StructType\Type_Versandadresse
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
     * @return \THAG\XKfz\StructType\Type_Versandadresse
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
     * @return \THAG\XKfz\StructType\Type_Versandadresse
     */
    public function setAdressierungszusaetze(?string $adressierungszusaetze = null): self
    {
        $this->Adressierungszusaetze = $adressierungszusaetze;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Type_Versandadresse
     */
    public function setPostleitzahl(?string $postleitzahl = null): self
    {
        $this->Postleitzahl = $postleitzahl;
        
        return $this;
    }
    /**
     * Get Ort value
     * @return string|null
     */
    public function getOrt(): ?string
    {
        return $this->Ort;
    }
    /**
     * Set Ort value
     * @param string $ort
     * @return \THAG\XKfz\StructType\Type_Versandadresse
     */
    public function setOrt(?string $ort = null): self
    {
        $this->Ort = $ort;
        
        return $this;
    }
}
