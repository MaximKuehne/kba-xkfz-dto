<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.SiegelOderPlaketteReferenzdatensatz StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_SiegelOderPlaketteReferenzdatensatz extends AbstractStructBase
{
    /**
     * The druckstuecknummer
     * @var string|null
     */
    public ?string $druckstuecknummer = null;
    /**
     * The verpackung
     * @var \THAG\XKfz\StructType\Type_VerpackungID|null
     */
    public ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null;
    /**
     * The listeReferenz
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;
    /**
     * Constructor method for Type.SiegelOderPlaketteReferenzdatensatz
     * @uses Type_SiegelOderPlaketteReferenzdatensatz::setDruckstuecknummer()
     * @uses Type_SiegelOderPlaketteReferenzdatensatz::setVerpackung()
     * @uses Type_SiegelOderPlaketteReferenzdatensatz::setListeReferenz()
     * @param string $druckstuecknummer
     * @param \THAG\XKfz\StructType\Type_VerpackungID $verpackung
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     */
    public function __construct(?string $druckstuecknummer = null, ?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null)
    {
        $this
            ->setDruckstuecknummer($druckstuecknummer)
            ->setVerpackung($verpackung)
            ->setListeReferenz($listeReferenz);
    }
    /**
     * Get druckstuecknummer value
     * @return string|null
     */
    public function getDruckstuecknummer(): ?string
    {
        return $this->druckstuecknummer;
    }
    /**
     * Set druckstuecknummer value
     * @param string $druckstuecknummer
     * @return \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz
     */
    public function setDruckstuecknummer(?string $druckstuecknummer = null): self
    {
        $this->druckstuecknummer = $druckstuecknummer;
        
        return $this;
    }
    /**
     * Get verpackung value
     * @return \THAG\XKfz\StructType\Type_VerpackungID|null
     */
    public function getVerpackung(): ?\THAG\XKfz\StructType\Type_VerpackungID
    {
        return $this->verpackung;
    }
    /**
     * Set verpackung value
     * @param \THAG\XKfz\StructType\Type_VerpackungID $verpackung
     * @return \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz
     */
    public function setVerpackung(?\THAG\XKfz\StructType\Type_VerpackungID $verpackung = null): self
    {
        $this->verpackung = $verpackung;
        
        return $this;
    }
    /**
     * Get listeReferenz value
     * @return \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public function getListeReferenz(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenz;
    }
    /**
     * Set listeReferenz value
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     * @return \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz
     */
    public function setListeReferenz(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null): self
    {
        $this->listeReferenz = $listeReferenz;
        
        return $this;
    }
}
