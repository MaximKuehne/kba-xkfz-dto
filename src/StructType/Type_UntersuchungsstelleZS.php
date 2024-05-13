<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.UntersuchungsstelleZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_UntersuchungsstelleZS extends AbstractStructBase
{
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;

    /**
     * The artDerUntersuchungsstelle
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null;

    /**
     * Constructor method for Type.UntersuchungsstelleZS
     *
     * @uses Type_UntersuchungsstelleZS::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_UntersuchungsstelleZS::setArtDerUntersuchungsstelle()
     */
    public function __construct(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null)
    {
        $this
            ->setSchluesselnummerUeberwachungsinstitutionOderZDK($schluesselnummerUeberwachungsinstitutionOderZDK)
            ->setArtDerUntersuchungsstelle($artDerUntersuchungsstelle);
    }

    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }

    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;

        return $this;
    }

    /**
     * Get artDerUntersuchungsstelle value
     */
    public function getArtDerUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle
    {
        return $this->artDerUntersuchungsstelle;
    }

    /**
     * Set artDerUntersuchungsstelle value
     */
    public function setArtDerUntersuchungsstelle(?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null): self
    {
        $this->artDerUntersuchungsstelle = $artDerUntersuchungsstelle;

        return $this;
    }
}
