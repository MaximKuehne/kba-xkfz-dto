<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogistikArtikel StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LogistikArtikel extends AbstractStructBase
{
    /**
     * The Artikelnummer
     * @var string|null
     */
    public ?string $Artikelnummer = null;
    /**
     * The Anzahl
     * @var string|null
     */
    public ?string $Anzahl = null;
    /**
     * The ArtikelBeschreibung
     * @var string|null
     */
    public ?string $ArtikelBeschreibung = null;
    /**
     * The ArtikelDetails
     * @var string|null
     */
    public ?string $ArtikelDetails = null;
    /**
     * Constructor method for LogistikArtikel
     * @uses LogistikArtikel::setArtikelnummer()
     * @uses LogistikArtikel::setAnzahl()
     * @uses LogistikArtikel::setArtikelBeschreibung()
     * @uses LogistikArtikel::setArtikelDetails()
     * @param string $artikelnummer
     * @param string $anzahl
     * @param string $artikelBeschreibung
     * @param string $artikelDetails
     */
    public function __construct(?string $artikelnummer = null, ?string $anzahl = null, ?string $artikelBeschreibung = null, ?string $artikelDetails = null)
    {
        $this
            ->setArtikelnummer($artikelnummer)
            ->setAnzahl($anzahl)
            ->setArtikelBeschreibung($artikelBeschreibung)
            ->setArtikelDetails($artikelDetails);
    }
    /**
     * Get Artikelnummer value
     * @return string|null
     */
    public function getArtikelnummer(): ?string
    {
        return $this->Artikelnummer;
    }
    /**
     * Set Artikelnummer value
     * @param string $artikelnummer
     * @return \THAG\XKfz\StructType\LogistikArtikel
     */
    public function setArtikelnummer(?string $artikelnummer = null): self
    {
        $this->Artikelnummer = $artikelnummer;
        
        return $this;
    }
    /**
     * Get Anzahl value
     * @return string|null
     */
    public function getAnzahl(): ?string
    {
        return $this->Anzahl;
    }
    /**
     * Set Anzahl value
     * @param string $anzahl
     * @return \THAG\XKfz\StructType\LogistikArtikel
     */
    public function setAnzahl(?string $anzahl = null): self
    {
        $this->Anzahl = $anzahl;
        
        return $this;
    }
    /**
     * Get ArtikelBeschreibung value
     * @return string|null
     */
    public function getArtikelBeschreibung(): ?string
    {
        return $this->ArtikelBeschreibung;
    }
    /**
     * Set ArtikelBeschreibung value
     * @param string $artikelBeschreibung
     * @return \THAG\XKfz\StructType\LogistikArtikel
     */
    public function setArtikelBeschreibung(?string $artikelBeschreibung = null): self
    {
        $this->ArtikelBeschreibung = $artikelBeschreibung;
        
        return $this;
    }
    /**
     * Get ArtikelDetails value
     * @return string|null
     */
    public function getArtikelDetails(): ?string
    {
        return $this->ArtikelDetails;
    }
    /**
     * Set ArtikelDetails value
     * @param string $artikelDetails
     * @return \THAG\XKfz\StructType\LogistikArtikel
     */
    public function setArtikelDetails(?string $artikelDetails = null): self
    {
        $this->ArtikelDetails = $artikelDetails;
        
        return $this;
    }
}
