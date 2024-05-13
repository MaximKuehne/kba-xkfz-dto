<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.UntersuchungsstelleZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_UntersuchungsstelleZS extends AbstractStructBase
{
    /**
     * The schluesselnummerUeberwachungsinstitutionOderZDK
     * @var \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null;
    /**
     * The artDerUntersuchungsstelle
     * @var \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle|null
     */
    public ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null;
    /**
     * Constructor method for Type.UntersuchungsstelleZS
     * @uses Type_UntersuchungsstelleZS::setSchluesselnummerUeberwachungsinstitutionOderZDK()
     * @uses Type_UntersuchungsstelleZS::setArtDerUntersuchungsstelle()
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle
     */
    public function __construct(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null, ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null)
    {
        $this
            ->setSchluesselnummerUeberwachungsinstitutionOderZDK($schluesselnummerUeberwachungsinstitutionOderZDK)
            ->setArtDerUntersuchungsstelle($artDerUntersuchungsstelle);
    }
    /**
     * Get schluesselnummerUeberwachungsinstitutionOderZDK value
     * @return \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK|null
     */
    public function getSchluesselnummerUeberwachungsinstitutionOderZDK(): ?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK
    {
        return $this->schluesselnummerUeberwachungsinstitutionOderZDK;
    }
    /**
     * Set schluesselnummerUeberwachungsinstitutionOderZDK value
     * @param \THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK
     * @return \THAG\XKfz\StructType\Type_UntersuchungsstelleZS
     */
    public function setSchluesselnummerUeberwachungsinstitutionOderZDK(?\THAG\XKfz\StructType\Code_SchluesselnummerDerUeberwachungsinstitutionOderZDK $schluesselnummerUeberwachungsinstitutionOderZDK = null): self
    {
        $this->schluesselnummerUeberwachungsinstitutionOderZDK = $schluesselnummerUeberwachungsinstitutionOderZDK;
        
        return $this;
    }
    /**
     * Get artDerUntersuchungsstelle value
     * @return \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle|null
     */
    public function getArtDerUntersuchungsstelle(): ?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle
    {
        return $this->artDerUntersuchungsstelle;
    }
    /**
     * Set artDerUntersuchungsstelle value
     * @param \THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle
     * @return \THAG\XKfz\StructType\Type_UntersuchungsstelleZS
     */
    public function setArtDerUntersuchungsstelle(?\THAG\XKfz\StructType\Code_ArtDerUntersuchungsstelle $artDerUntersuchungsstelle = null): self
    {
        $this->artDerUntersuchungsstelle = $artDerUntersuchungsstelle;
        
        return $this;
    }
}
