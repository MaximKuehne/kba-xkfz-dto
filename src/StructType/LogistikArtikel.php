<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogistikArtikel StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LogistikArtikel extends AbstractStructBase
{
    /**
     * The Artikelnummer
     */
    public ?string $Artikelnummer = null;

    /**
     * The Anzahl
     */
    public ?string $Anzahl = null;

    /**
     * The ArtikelBeschreibung
     */
    public ?string $ArtikelBeschreibung = null;

    /**
     * The ArtikelDetails
     */
    public ?string $ArtikelDetails = null;

    /**
     * Constructor method for LogistikArtikel
     *
     * @uses LogistikArtikel::setArtikelnummer()
     * @uses LogistikArtikel::setAnzahl()
     * @uses LogistikArtikel::setArtikelBeschreibung()
     * @uses LogistikArtikel::setArtikelDetails()
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
     */
    public function getArtikelnummer(): ?string
    {
        return $this->Artikelnummer;
    }

    /**
     * Set Artikelnummer value
     */
    public function setArtikelnummer(?string $artikelnummer = null): self
    {
        $this->Artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get Anzahl value
     */
    public function getAnzahl(): ?string
    {
        return $this->Anzahl;
    }

    /**
     * Set Anzahl value
     */
    public function setAnzahl(?string $anzahl = null): self
    {
        $this->Anzahl = $anzahl;

        return $this;
    }

    /**
     * Get ArtikelBeschreibung value
     */
    public function getArtikelBeschreibung(): ?string
    {
        return $this->ArtikelBeschreibung;
    }

    /**
     * Set ArtikelBeschreibung value
     */
    public function setArtikelBeschreibung(?string $artikelBeschreibung = null): self
    {
        $this->ArtikelBeschreibung = $artikelBeschreibung;

        return $this;
    }

    /**
     * Get ArtikelDetails value
     */
    public function getArtikelDetails(): ?string
    {
        return $this->ArtikelDetails;
    }

    /**
     * Set ArtikelDetails value
     */
    public function setArtikelDetails(?string $artikelDetails = null): self
    {
        $this->ArtikelDetails = $artikelDetails;

        return $this;
    }
}
