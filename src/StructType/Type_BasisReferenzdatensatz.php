<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.BasisReferenzdatensatz StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_BasisReferenzdatensatz extends AbstractStructBase
{
    /**
     * The druckstuecknummer
     */
    public ?string $druckstuecknummer = null;

    /**
     * The sicherheitscode
     */
    public ?string $sicherheitscode = null;

    /**
     * The vordrucknummer
     */
    public ?string $vordrucknummer = null;

    /**
     * The verpackung
     */
    public ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null;

    /**
     * The listeReferenz
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;

    /**
     * Constructor method for Type.BasisReferenzdatensatz
     *
     * @uses Type_BasisReferenzdatensatz::setDruckstuecknummer()
     * @uses Type_BasisReferenzdatensatz::setSicherheitscode()
     * @uses Type_BasisReferenzdatensatz::setVordrucknummer()
     * @uses Type_BasisReferenzdatensatz::setVerpackung()
     * @uses Type_BasisReferenzdatensatz::setListeReferenz()
     */
    public function __construct(?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?string $vordrucknummer = null, ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null)
    {
        $this
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
            ->setVordrucknummer($vordrucknummer)
            ->setVerpackung($verpackung)
            ->setListeReferenz($listeReferenz);
    }

    /**
     * Get druckstuecknummer value
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }

    /**
     * Set druckstuecknummer value
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;

        return $this;
    }

    /**
     * Get sicherheitscode value
     */
    public function getSicherheitscode(): ?string
    {
        return $this->sicherheitscode;
    }

    /**
     * Set sicherheitscode value
     */
    public function setSicherheitscode(?string $sicherheitscode = null): self
    {
        $this->sicherheitscode = $sicherheitscode;

        return $this;
    }

    /**
     * Get vordrucknummer value
     */
    public function getVordrucknummer(): ?string
    {
        return $this->vordrucknummer;
    }

    /**
     * Set vordrucknummer value
     */
    public function setVordrucknummer(?string $vordrucknummer = null): self
    {
        $this->vordrucknummer = $vordrucknummer;

        return $this;
    }

    /**
     * Get verpackung value
     */
    public function getVerpackung(): ?\THAG\XKfz\StructType\Type_VerpackungID
    {
        return $this->verpackung;
    }

    /**
     * Set verpackung value
     */
    public function setVerpackung(?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null): self
    {
        $this->verpackung = $verpackung;

        return $this;
    }

    /**
     * Get listeReferenz value
     */
    public function getListeReferenz(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenz;
    }

    /**
     * Set listeReferenz value
     */
    public function setListeReferenz(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null): self
    {
        $this->listeReferenz = $listeReferenz;

        return $this;
    }
}
