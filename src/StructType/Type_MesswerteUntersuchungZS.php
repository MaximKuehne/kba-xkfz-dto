<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MesswerteUntersuchungZS StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MesswerteUntersuchungZS extends AbstractStructBase
{
    /**
     * The bremsmessung
     * @var \THAG\XKfz\StructType\Type_Bremsmessung|null
     */
    public ?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null;
    /**
     * The fahrleistung
     * @var \THAG\XKfz\StructType\Type_Fahrleistung|null
     */
    public ?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null;
    /**
     * Constructor method for Type.MesswerteUntersuchungZS
     * @uses Type_MesswerteUntersuchungZS::setBremsmessung()
     * @uses Type_MesswerteUntersuchungZS::setFahrleistung()
     * @param \THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung
     * @param \THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null, ?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null)
    {
        $this
            ->setBremsmessung($bremsmessung)
            ->setFahrleistung($fahrleistung);
    }
    /**
     * Get bremsmessung value
     * @return \THAG\XKfz\StructType\Type_Bremsmessung|null
     */
    public function getBremsmessung(): ?\THAG\XKfz\StructType\Type_Bremsmessung
    {
        return $this->bremsmessung;
    }
    /**
     * Set bremsmessung value
     * @param \THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS
     */
    public function setBremsmessung(?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null): self
    {
        $this->bremsmessung = $bremsmessung;
        
        return $this;
    }
    /**
     * Get fahrleistung value
     * @return \THAG\XKfz\StructType\Type_Fahrleistung|null
     */
    public function getFahrleistung(): ?\THAG\XKfz\StructType\Type_Fahrleistung
    {
        return $this->fahrleistung;
    }
    /**
     * Set fahrleistung value
     * @param \THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchungZS
     */
    public function setFahrleistung(?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null): self
    {
        $this->fahrleistung = $fahrleistung;
        
        return $this;
    }
}
