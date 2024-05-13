<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AufkleberZulBeschTeil1Referenzdatensatz StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AufkleberZulBeschTeil1Referenzdatensatz extends AbstractStructBase
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
     * The verpackung
     */
    public ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null;

    /**
     * The listeReferenz
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;

    /**
     * Constructor method for Type.AufkleberZulBeschTeil1Referenzdatensatz
     *
     * @uses Type_AufkleberZulBeschTeil1Referenzdatensatz::setDruckstuecknummer()
     * @uses Type_AufkleberZulBeschTeil1Referenzdatensatz::setSicherheitscode()
     * @uses Type_AufkleberZulBeschTeil1Referenzdatensatz::setVerpackung()
     * @uses Type_AufkleberZulBeschTeil1Referenzdatensatz::setListeReferenz()
     */
    public function __construct(?string $druckstuecknummer = null, ?string $sicherheitscode = null, ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null)
    {
        $this
            ->setDruckstuecknummer($druckstuecknummer)
            ->setSicherheitscode($sicherheitscode)
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
