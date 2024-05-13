<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MesswerteUntersuchungZS StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MesswerteUntersuchungZS extends AbstractStructBase
{
    /**
     * The bremsmessung
     */
    public ?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null;

    /**
     * The fahrleistung
     */
    public ?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null;

    /**
     * Constructor method for Type.MesswerteUntersuchungZS
     *
     * @uses Type_MesswerteUntersuchungZS::setBremsmessung()
     * @uses Type_MesswerteUntersuchungZS::setFahrleistung()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null, ?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null)
    {
        $this
            ->setBremsmessung($bremsmessung)
            ->setFahrleistung($fahrleistung);
    }

    /**
     * Get bremsmessung value
     */
    public function getBremsmessung(): ?\THAG\XKfz\StructType\Type_Bremsmessung
    {
        return $this->bremsmessung;
    }

    /**
     * Set bremsmessung value
     */
    public function setBremsmessung(?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null): self
    {
        $this->bremsmessung = $bremsmessung;

        return $this;
    }

    /**
     * Get fahrleistung value
     */
    public function getFahrleistung(): ?\THAG\XKfz\StructType\Type_Fahrleistung
    {
        return $this->fahrleistung;
    }

    /**
     * Set fahrleistung value
     */
    public function setFahrleistung(?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null): self
    {
        $this->fahrleistung = $fahrleistung;

        return $this;
    }
}
