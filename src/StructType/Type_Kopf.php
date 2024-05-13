<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kopf StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kopf extends AbstractStructBase
{
    /**
     * The kennung
     */
    public ?string $kennung = null;

    /**
     * The zeitpunktDerErstellung
     */
    public ?string $zeitpunktDerErstellung = null;

    /**
     * The version
     */
    public ?int $version = null;

    /**
     * The referenzAnbieter
     */
    public ?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter = null;

    /**
     * The referenzNutzer
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null;

    /**
     * The informationZumInhalt
     */
    public ?\THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt = null;

    /**
     * Constructor method for Type.Kopf
     *
     * @uses Type_Kopf::setKennung()
     * @uses Type_Kopf::setZeitpunktDerErstellung()
     * @uses Type_Kopf::setVersion()
     * @uses Type_Kopf::setReferenzAnbieter()
     * @uses Type_Kopf::setReferenzNutzer()
     * @uses Type_Kopf::setInformationZumInhalt()
     */
    public function __construct(?string $kennung = null, ?string $zeitpunktDerErstellung = null, ?int $version = null, ?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter = null, ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null, ?\THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt = null)
    {
        $this
            ->setKennung($kennung)
            ->setZeitpunktDerErstellung($zeitpunktDerErstellung)
            ->setVersion($version)
            ->setReferenzAnbieter($referenzAnbieter)
            ->setReferenzNutzer($referenzNutzer)
            ->setInformationZumInhalt($informationZumInhalt);
    }

    /**
     * Get kennung value
     */
    public function getKennung(): ?string
    {
        return $this->kennung;
    }

    /**
     * Set kennung value
     */
    public function setKennung(?string $kennung = null): self
    {
        $this->kennung = $kennung;

        return $this;
    }

    /**
     * Get zeitpunktDerErstellung value
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }

    /**
     * Set zeitpunktDerErstellung value
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;

        return $this;
    }

    /**
     * Get version value
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Set version value
     */
    public function setVersion(?int $version = null): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get referenzAnbieter value
     */
    public function getReferenzAnbieter(): ?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1
    {
        return $this->referenzAnbieter;
    }

    /**
     * Set referenzAnbieter value
     */
    public function setReferenzAnbieter(?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter = null): self
    {
        $this->referenzAnbieter = $referenzAnbieter;

        return $this;
    }

    /**
     * Get referenzNutzer value
     */
    public function getReferenzNutzer(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->referenzNutzer;
    }

    /**
     * Set referenzNutzer value
     */
    public function setReferenzNutzer(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null): self
    {
        $this->referenzNutzer = $referenzNutzer;

        return $this;
    }

    /**
     * Get informationZumInhalt value
     */
    public function getInformationZumInhalt(): ?\THAG\XKfz\StructType\InformationZumInhalt
    {
        return $this->informationZumInhalt;
    }

    /**
     * Set informationZumInhalt value
     */
    public function setInformationZumInhalt(?\THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt = null): self
    {
        $this->informationZumInhalt = $informationZumInhalt;

        return $this;
    }
}
