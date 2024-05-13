<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bremsmessung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bremsmessung extends AbstractStructBase
{
    /**
     * The Achsennummer
     */
    public ?int $Achsennummer = null;

    /**
     * The MerkmalEinhaltungReferenzwerte
     */
    public ?bool $MerkmalEinhaltungReferenzwerte = null;

    /**
     * The Bremsdruck
     */
    public ?float $Bremsdruck = null;

    /**
     * The BremskraftSoll
     */
    public ?float $BremskraftSoll = null;

    /**
     * The Bremse
     */
    public ?\THAG\XKfz\StructType\Bremse $Bremse = null;

    /**
     * Constructor method for Bremsmessung
     *
     * @uses Bremsmessung::setAchsennummer()
     * @uses Bremsmessung::setMerkmalEinhaltungReferenzwerte()
     * @uses Bremsmessung::setBremsdruck()
     * @uses Bremsmessung::setBremskraftSoll()
     * @uses Bremsmessung::setBremse()
     */
    public function __construct(?int $achsennummer = null, ?bool $merkmalEinhaltungReferenzwerte = null, ?float $bremsdruck = null, ?float $bremskraftSoll = null, ?\THAG\XKfz\StructType\Bremse $bremse = null)
    {
        $this
            ->setAchsennummer($achsennummer)
            ->setMerkmalEinhaltungReferenzwerte($merkmalEinhaltungReferenzwerte)
            ->setBremsdruck($bremsdruck)
            ->setBremskraftSoll($bremskraftSoll)
            ->setBremse($bremse);
    }

    /**
     * Get Achsennummer value
     */
    public function getAchsennummer(): ?int
    {
        return $this->Achsennummer;
    }

    /**
     * Set Achsennummer value
     */
    public function setAchsennummer(?int $achsennummer = null): self
    {
        $this->Achsennummer = $achsennummer;

        return $this;
    }

    /**
     * Get MerkmalEinhaltungReferenzwerte value
     */
    public function getMerkmalEinhaltungReferenzwerte(): ?bool
    {
        return $this->MerkmalEinhaltungReferenzwerte;
    }

    /**
     * Set MerkmalEinhaltungReferenzwerte value
     */
    public function setMerkmalEinhaltungReferenzwerte(?bool $merkmalEinhaltungReferenzwerte = null): self
    {
        $this->MerkmalEinhaltungReferenzwerte = $merkmalEinhaltungReferenzwerte;

        return $this;
    }

    /**
     * Get Bremsdruck value
     */
    public function getBremsdruck(): ?float
    {
        return $this->Bremsdruck;
    }

    /**
     * Set Bremsdruck value
     */
    public function setBremsdruck(?float $bremsdruck = null): self
    {
        $this->Bremsdruck = $bremsdruck;

        return $this;
    }

    /**
     * Get BremskraftSoll value
     */
    public function getBremskraftSoll(): ?float
    {
        return $this->BremskraftSoll;
    }

    /**
     * Set BremskraftSoll value
     */
    public function setBremskraftSoll(?float $bremskraftSoll = null): self
    {
        $this->BremskraftSoll = $bremskraftSoll;

        return $this;
    }

    /**
     * Get Bremse value
     */
    public function getBremse(): ?\THAG\XKfz\StructType\Bremse
    {
        return $this->Bremse;
    }

    /**
     * Set Bremse value
     */
    public function setBremse(?\THAG\XKfz\StructType\Bremse $bremse = null): self
    {
        $this->Bremse = $bremse;

        return $this;
    }
}
