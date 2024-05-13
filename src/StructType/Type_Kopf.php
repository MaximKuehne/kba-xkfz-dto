<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kopf StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kopf extends AbstractStructBase
{
    /**
     * The kennung
     * @var string|null
     */
    public ?string $kennung = null;
    /**
     * The zeitpunktDerErstellung
     * @var string|null
     */
    public ?string $zeitpunktDerErstellung = null;
    /**
     * The version
     * @var int|null
     */
    public ?int $version = null;
    /**
     * The referenzAnbieter
     * @var \THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1|null
     */
    public ?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter = null;
    /**
     * The referenzNutzer
     * @var \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null;
    /**
     * The informationZumInhalt
     * @var \THAG\XKfz\StructType\InformationZumInhalt|null
     */
    public ?\THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt = null;
    /**
     * Constructor method for Type.Kopf
     * @uses Type_Kopf::setKennung()
     * @uses Type_Kopf::setZeitpunktDerErstellung()
     * @uses Type_Kopf::setVersion()
     * @uses Type_Kopf::setReferenzAnbieter()
     * @uses Type_Kopf::setReferenzNutzer()
     * @uses Type_Kopf::setInformationZumInhalt()
     * @param string $kennung
     * @param string $zeitpunktDerErstellung
     * @param int $version
     * @param \THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer
     * @param \THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt
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
     * @return string|null
     */
    public function getKennung(): ?string
    {
        return $this->kennung;
    }
    /**
     * Set kennung value
     * @param string $kennung
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setKennung(?string $kennung = null): self
    {
        $this->kennung = $kennung;
        
        return $this;
    }
    /**
     * Get zeitpunktDerErstellung value
     * @return string|null
     */
    public function getZeitpunktDerErstellung(): ?string
    {
        return $this->zeitpunktDerErstellung;
    }
    /**
     * Set zeitpunktDerErstellung value
     * @param string $zeitpunktDerErstellung
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setZeitpunktDerErstellung(?string $zeitpunktDerErstellung = null): self
    {
        $this->zeitpunktDerErstellung = $zeitpunktDerErstellung;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setVersion(?int $version = null): self
    {
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get referenzAnbieter value
     * @return \THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1|null
     */
    public function getReferenzAnbieter(): ?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1
    {
        return $this->referenzAnbieter;
    }
    /**
     * Set referenzAnbieter value
     * @param \THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setReferenzAnbieter(?\THAG\XKfz\StructType\Code_AnbieterSiegelUndZulassungsbescheinigungTeil1 $referenzAnbieter = null): self
    {
        $this->referenzAnbieter = $referenzAnbieter;
        
        return $this;
    }
    /**
     * Get referenzNutzer value
     * @return \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde|null
     */
    public function getReferenzNutzer(): ?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde
    {
        return $this->referenzNutzer;
    }
    /**
     * Set referenzNutzer value
     * @param \THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setReferenzNutzer(?\THAG\XKfz\StructType\Type_ReferenzStrassenverkehrsBehoerde $referenzNutzer = null): self
    {
        $this->referenzNutzer = $referenzNutzer;
        
        return $this;
    }
    /**
     * Get informationZumInhalt value
     * @return \THAG\XKfz\StructType\InformationZumInhalt|null
     */
    public function getInformationZumInhalt(): ?\THAG\XKfz\StructType\InformationZumInhalt
    {
        return $this->informationZumInhalt;
    }
    /**
     * Set informationZumInhalt value
     * @param \THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt
     * @return \THAG\XKfz\StructType\Type_Kopf
     */
    public function setInformationZumInhalt(?\THAG\XKfz\StructType\InformationZumInhalt $informationZumInhalt = null): self
    {
        $this->informationZumInhalt = $informationZumInhalt;
        
        return $this;
    }
}
