<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Nutzdaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Nutzdaten extends AbstractStructBase
{
    /**
     * The siegelOderPlakette
     */
    public ?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette = null;

    /**
     * The siegelKennzeichenschildMitSicherheitscode
     */
    public ?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode = null;

    /**
     * The zulassungsbescheinigungTeil1
     */
    public ?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1 = null;

    /**
     * The zulassungsbescheinigungTeil1MitAufkleber
     */
    public ?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber = null;

    /**
     * The aufkleberZulassungsbescheinigungTeil1
     */
    public ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1 = null;

    /**
     * The aufkleberZulassungsbescheinigungTeil2
     */
    public ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2 = null;

    /**
     * Constructor method for Type.Nutzdaten
     *
     * @uses Type_Nutzdaten::setSiegelOderPlakette()
     * @uses Type_Nutzdaten::setSiegelKennzeichenschildMitSicherheitscode()
     * @uses Type_Nutzdaten::setZulassungsbescheinigungTeil1()
     * @uses Type_Nutzdaten::setZulassungsbescheinigungTeil1MitAufkleber()
     * @uses Type_Nutzdaten::setAufkleberZulassungsbescheinigungTeil1()
     * @uses Type_Nutzdaten::setAufkleberZulassungsbescheinigungTeil2()
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
     */
    public function getSiegelOderPlakette(): ?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz
    {
        return $this->siegelOderPlakette;
    }

    /**
     * Set siegelOderPlakette value
     */
    public function setSiegelOderPlakette(?\THAG\XKfz\StructType\Type_SiegelOderPlaketteReferenzdatensatz $siegelOderPlakette = null): self
    {
        $this->siegelOderPlakette = $siegelOderPlakette;

        return $this;
    }

    /**
     * Get siegelKennzeichenschildMitSicherheitscode value
     */
    public function getSiegelKennzeichenschildMitSicherheitscode(): ?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz
    {
        return $this->siegelKennzeichenschildMitSicherheitscode;
    }

    /**
     * Set siegelKennzeichenschildMitSicherheitscode value
     */
    public function setSiegelKennzeichenschildMitSicherheitscode(?\THAG\XKfz\StructType\Type_SiegelKennzeichenschildMitSicherheitscodeReferenzdatensatz $siegelKennzeichenschildMitSicherheitscode = null): self
    {
        $this->siegelKennzeichenschildMitSicherheitscode = $siegelKennzeichenschildMitSicherheitscode;

        return $this;
    }

    /**
     * Get zulassungsbescheinigungTeil1 value
     */
    public function getZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz
    {
        return $this->zulassungsbescheinigungTeil1;
    }

    /**
     * Set zulassungsbescheinigungTeil1 value
     */
    public function setZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_ZulBeschTeil1Referenzdatensatz $zulassungsbescheinigungTeil1 = null): self
    {
        $this->zulassungsbescheinigungTeil1 = $zulassungsbescheinigungTeil1;

        return $this;
    }

    /**
     * Get zulassungsbescheinigungTeil1MitAufkleber value
     */
    public function getZulassungsbescheinigungTeil1MitAufkleber(): ?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz
    {
        return $this->zulassungsbescheinigungTeil1MitAufkleber;
    }

    /**
     * Set zulassungsbescheinigungTeil1MitAufkleber value
     */
    public function setZulassungsbescheinigungTeil1MitAufkleber(?\THAG\XKfz\StructType\Type_ZulBeschTeil1MitAufkleberReferenzdatensatz $zulassungsbescheinigungTeil1MitAufkleber = null): self
    {
        $this->zulassungsbescheinigungTeil1MitAufkleber = $zulassungsbescheinigungTeil1MitAufkleber;

        return $this;
    }

    /**
     * Get aufkleberZulassungsbescheinigungTeil1 value
     */
    public function getAufkleberZulassungsbescheinigungTeil1(): ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz
    {
        return $this->aufkleberZulassungsbescheinigungTeil1;
    }

    /**
     * Set aufkleberZulassungsbescheinigungTeil1 value
     */
    public function setAufkleberZulassungsbescheinigungTeil1(?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil1Referenzdatensatz $aufkleberZulassungsbescheinigungTeil1 = null): self
    {
        $this->aufkleberZulassungsbescheinigungTeil1 = $aufkleberZulassungsbescheinigungTeil1;

        return $this;
    }

    /**
     * Get aufkleberZulassungsbescheinigungTeil2 value
     */
    public function getAufkleberZulassungsbescheinigungTeil2(): ?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz
    {
        return $this->aufkleberZulassungsbescheinigungTeil2;
    }

    /**
     * Set aufkleberZulassungsbescheinigungTeil2 value
     */
    public function setAufkleberZulassungsbescheinigungTeil2(?\THAG\XKfz\StructType\Type_AufkleberZulBeschTeil2Referenzdatensatz $aufkleberZulassungsbescheinigungTeil2 = null): self
    {
        $this->aufkleberZulassungsbescheinigungTeil2 = $aufkleberZulassungsbescheinigungTeil2;

        return $this;
    }
}
