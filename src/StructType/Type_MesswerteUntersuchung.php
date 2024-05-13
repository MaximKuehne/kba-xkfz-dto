<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MesswerteUntersuchung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MesswerteUntersuchung extends AbstractStructBase
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
     * The messdrehzahl
     * @var float|null
     */
    public ?float $messdrehzahl = null;
    /**
     * The messungStandgeraeusch
     * @var \THAG\XKfz\StructType\MessungStandgeraeusch|null
     */
    public ?\THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch = null;
    /**
     * Constructor method for Type.MesswerteUntersuchung
     * @uses Type_MesswerteUntersuchung::setBremsmessung()
     * @uses Type_MesswerteUntersuchung::setFahrleistung()
     * @uses Type_MesswerteUntersuchung::setMessdrehzahl()
     * @uses Type_MesswerteUntersuchung::setMessungStandgeraeusch()
     * @param \THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung
     * @param \THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung
     * @param float $messdrehzahl
     * @param \THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch
     */
    public function __construct(?\THAG\XKfz\StructType\Type_Bremsmessung $bremsmessung = null, ?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null, ?float $messdrehzahl = null, ?\THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch = null)
    {
        $this
            ->setBremsmessung($bremsmessung)
            ->setFahrleistung($fahrleistung)
            ->setMessdrehzahl($messdrehzahl)
            ->setMessungStandgeraeusch($messungStandgeraeusch);
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
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchung
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
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchung
     */
    public function setFahrleistung(?\THAG\XKfz\StructType\Type_Fahrleistung $fahrleistung = null): self
    {
        $this->fahrleistung = $fahrleistung;
        
        return $this;
    }
    /**
     * Get messdrehzahl value
     * @return float|null
     */
    public function getMessdrehzahl(): ?float
    {
        return $this->messdrehzahl;
    }
    /**
     * Set messdrehzahl value
     * @param float $messdrehzahl
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchung
     */
    public function setMessdrehzahl(?float $messdrehzahl = null): self
    {
        $this->messdrehzahl = $messdrehzahl;
        
        return $this;
    }
    /**
     * Get messungStandgeraeusch value
     * @return \THAG\XKfz\StructType\MessungStandgeraeusch|null
     */
    public function getMessungStandgeraeusch(): ?\THAG\XKfz\StructType\MessungStandgeraeusch
    {
        return $this->messungStandgeraeusch;
    }
    /**
     * Set messungStandgeraeusch value
     * @param \THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch
     * @return \THAG\XKfz\StructType\Type_MesswerteUntersuchung
     */
    public function setMessungStandgeraeusch(?\THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch = null): self
    {
        $this->messungStandgeraeusch = $messungStandgeraeusch;
        
        return $this;
    }
}
