<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Nutzdaten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Nutzdaten extends AbstractStructBase
{
    /**
     * The siegelOderPlakette
     * @var \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette = null;
    /**
     * The siegelKennzeichenschildMitSicherheitscode
     * @var \THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode = null;
    /**
     * The zulassungsbescheinigungTeil1
     * @var \THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1 = null;
    /**
     * The zulassungsbescheinigungTeil1MitAufkleber
     * @var \THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber = null;
    /**
     * The aufkleberZulassungsbescheinigungTeil1
     * @var \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1 = null;
    /**
     * The aufkleberZulassungsbescheinigungTeil2
     * @var \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz|null
     */
    public ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2 = null;
    /**
     * Constructor method for Type.Nutzdaten
     * @uses Type_Nutzdaten::setSiegelOderPlakette()
     * @uses Type_Nutzdaten::setSiegelKennzeichenschildMitSicherheitscode()
     * @uses Type_Nutzdaten::setZulassungsbescheinigungTeil1()
     * @uses Type_Nutzdaten::setZulassungsbescheinigungTeil1MitAufkleber()
     * @uses Type_Nutzdaten::setAufkleberZulassungsbescheinigungTeil1()
     * @uses Type_Nutzdaten::setAufkleberZulassungsbescheinigungTeil2()
     * @param \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette
     * @param \THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode
     * @param \THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber
     * @param \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1
     * @param \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2
     */
    public function __construct(?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette = null, ?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode = null, ?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber = null, ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1 = null, ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2 = null)
    {
        $this
            ->setSiegelOderPlakette($siegelOderPlakette)
            ->setSiegelKennzeichenschildMitSicherheitscode($siegelKennzeichenschildMitSicherheitscode)
            ->setZulassungsbescheinigungTeil1($zulassungsbescheinigungTeil1)
            ->setZulassungsbescheinigungTeil1MitAufkleber($zulassungsbescheinigungTeil1MitAufkleber)
            ->setAufkleberZulassungsbescheinigungTeil1($aufkleberZulassungsbescheinigungTeil1)
            ->setAufkleberZulassungsbescheinigungTeil2($aufkleberZulassungsbescheinigungTeil2);
    }
    /**
     * Get siegelOderPlakette value
     * @return \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz|null
     */
    public function getSiegelOderPlakette(): ?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz
    {
        return $this->siegelOderPlakette;
    }
    /**
     * Set siegelOderPlakette value
     * @param \THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setSiegelOderPlakette(?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette = null): self
    {
        $this->siegelOderPlakette = $siegelOderPlakette;
        
        return $this;
    }
    /**
     * Get siegelKennzeichenschildMitSicherheitscode value
     * @return \THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz|null
     */
    public function getSiegelKennzeichenschildMitSicherheitscode(): ?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz
    {
        return $this->siegelKennzeichenschildMitSicherheitscode;
    }
    /**
     * Set siegelKennzeichenschildMitSicherheitscode value
     * @param \THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setSiegelKennzeichenschildMitSicherheitscode(?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode = null): self
    {
        $this->siegelKennzeichenschildMitSicherheitscode = $siegelKennzeichenschildMitSicherheitscode;
        
        return $this;
    }
    /**
     * Get zulassungsbescheinigungTeil1 value
     * @return \THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz|null
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz
    {
        return $this->zulassungsbescheinigungTeil1;
    }
    /**
     * Set zulassungsbescheinigungTeil1 value
     * @param \THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1 = null): self
    {
        $this->zulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;
        
        return $this;
    }
    /**
     * Get zulassungsbescheinigungTeil1MitAufkleber value
     * @return \THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz|null
     */
    public function getZulassungsbescheinigungTeil1MitAufkleber(): ?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz
    {
        return $this->zulassungsbescheinigungTeil1MitAufkleber;
    }
    /**
     * Set zulassungsbescheinigungTeil1MitAufkleber value
     * @param \THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setZulassungsbescheinigungTeil1MitAufkleber(?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber = null): self
    {
        $this->zulassungsbescheinigungTeil1MitAufkleber = $zulassungsbescheinigungTeil1MitAufkleber;
        
        return $this;
    }
    /**
     * Get aufkleberZulassungsbescheinigungTeil1 value
     * @return \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz|null
     */
    public function getAufkleberZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz
    {
        return $this->aufkleberZulassungsbescheinigungTeil1;
    }
    /**
     * Set aufkleberZulassungsbescheinigungTeil1 value
     * @param \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setAufkleberZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1 = null): self
    {
        $this->aufkleberZulassungsbescheinigungTeil1 = $aufkleberZulassungsbescheinigungTeil1;
        
        return $this;
    }
    /**
     * Get aufkleberZulassungsbescheinigungTeil2 value
     * @return \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz|null
     */
    public function getAufkleberZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz
    {
        return $this->aufkleberZulassungsbescheinigungTeil2;
    }
    /**
     * Set aufkleberZulassungsbescheinigungTeil2 value
     * @param \THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2
     * @return \THAG\XKfz\StructType\Type_Nutzdaten
     */
    public function setAufkleberZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2 = null): self
    {
        $this->aufkleberZulassungsbescheinigungTeil2 = $aufkleberZulassungsbescheinigungTeil2;
        
        return $this;
    }
}
