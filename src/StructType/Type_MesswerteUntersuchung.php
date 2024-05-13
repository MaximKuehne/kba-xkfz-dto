<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MesswerteUntersuchung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MesswerteUntersuchung extends AbstractStructBase
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
     * The messdrehzahl
     */
    public ?float $messdrehzahl = null;

    /**
     * The messungStandgeraeusch
     */
    public ?\THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch = null;

    /**
     * Constructor method for Type.MesswerteUntersuchung
     *
     * @uses Type_MesswerteUntersuchung::setBremsmessung()
     * @uses Type_MesswerteUntersuchung::setFahrleistung()
     * @uses Type_MesswerteUntersuchung::setMessdrehzahl()
     * @uses Type_MesswerteUntersuchung::setMessungStandgeraeusch()
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

    /**
     * Get messdrehzahl value
     */
    public function getMessdrehzahl(): ?float
    {
        return $this->messdrehzahl;
    }

    /**
     * Set messdrehzahl value
     */
    public function setMessdrehzahl(?float $messdrehzahl = null): self
    {
        $this->messdrehzahl = $messdrehzahl;

        return $this;
    }

    /**
     * Get messungStandgeraeusch value
     */
    public function getMessungStandgeraeusch(): ?\THAG\XKfz\StructType\MessungStandgeraeusch
    {
        return $this->messungStandgeraeusch;
    }

    /**
     * Set messungStandgeraeusch value
     */
    public function setMessungStandgeraeusch(?\THAG\XKfz\StructType\MessungStandgeraeusch $messungStandgeraeusch = null): self
    {
        $this->messungStandgeraeusch = $messungStandgeraeusch;

        return $this;
    }
}
