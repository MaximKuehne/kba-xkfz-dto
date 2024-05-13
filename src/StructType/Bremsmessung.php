<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bremsmessung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Bremsmessung extends AbstractStructBase
{
    /**
     * The Achsennummer
     * @var int|null
     */
    public ?int $Achsennummer = null;
    /**
     * The MerkmalEinhaltungReferenzwerte
     * @var bool|null
     */
    public ?bool $MerkmalEinhaltungReferenzwerte = null;
    /**
     * The Bremsdruck
     * @var float|null
     */
    public ?float $Bremsdruck = null;
    /**
     * The BremskraftSoll
     * @var float|null
     */
    public ?float $BremskraftSoll = null;
    /**
     * The Bremse
     * @var \THAG\XKfz\StructType\Bremse|null
     */
    public ?\THAG\XKfz\StructType\Bremse $Bremse = null;
    /**
     * Constructor method for Bremsmessung
     * @uses Bremsmessung::setAchsennummer()
     * @uses Bremsmessung::setMerkmalEinhaltungReferenzwerte()
     * @uses Bremsmessung::setBremsdruck()
     * @uses Bremsmessung::setBremskraftSoll()
     * @uses Bremsmessung::setBremse()
     * @param int $achsennummer
     * @param bool $merkmalEinhaltungReferenzwerte
     * @param float $bremsdruck
     * @param float $bremskraftSoll
     * @param \THAG\XKfz\StructType\Bremse $bremse
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
     * @return int|null
     */
    public function getAchsennummer(): ?int
    {
        return $this->Achsennummer;
    }
    /**
     * Set Achsennummer value
     * @param int $achsennummer
     * @return \THAG\XKfz\StructType\Bremsmessung
     */
    public function setAchsennummer(?int $achsennummer = null): self
    {
        $this->Achsennummer = $achsennummer;
        
        return $this;
    }
    /**
     * Get MerkmalEinhaltungReferenzwerte value
     * @return bool|null
     */
    public function getMerkmalEinhaltungReferenzwerte(): ?bool
    {
        return $this->MerkmalEinhaltungReferenzwerte;
    }
    /**
     * Set MerkmalEinhaltungReferenzwerte value
     * @param bool $merkmalEinhaltungReferenzwerte
     * @return \THAG\XKfz\StructType\Bremsmessung
     */
    public function setMerkmalEinhaltungReferenzwerte(?bool $merkmalEinhaltungReferenzwerte = null): self
    {
        $this->MerkmalEinhaltungReferenzwerte = $merkmalEinhaltungReferenzwerte;
        
        return $this;
    }
    /**
     * Get Bremsdruck value
     * @return float|null
     */
    public function getBremsdruck(): ?float
    {
        return $this->Bremsdruck;
    }
    /**
     * Set Bremsdruck value
     * @param float $bremsdruck
     * @return \THAG\XKfz\StructType\Bremsmessung
     */
    public function setBremsdruck(?float $bremsdruck = null): self
    {
        $this->Bremsdruck = $bremsdruck;
        
        return $this;
    }
    /**
     * Get BremskraftSoll value
     * @return float|null
     */
    public function getBremskraftSoll(): ?float
    {
        return $this->BremskraftSoll;
    }
    /**
     * Set BremskraftSoll value
     * @param float $bremskraftSoll
     * @return \THAG\XKfz\StructType\Bremsmessung
     */
    public function setBremskraftSoll(?float $bremskraftSoll = null): self
    {
        $this->BremskraftSoll = $bremskraftSoll;
        
        return $this;
    }
    /**
     * Get Bremse value
     * @return \THAG\XKfz\StructType\Bremse|null
     */
    public function getBremse(): ?\THAG\XKfz\StructType\Bremse
    {
        return $this->Bremse;
    }
    /**
     * Set Bremse value
     * @param \THAG\XKfz\StructType\Bremse $bremse
     * @return \THAG\XKfz\StructType\Bremsmessung
     */
    public function setBremse(?\THAG\XKfz\StructType\Bremse $bremse = null): self
    {
        $this->Bremse = $bremse;
        
        return $this;
    }
}
