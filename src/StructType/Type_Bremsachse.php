<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremsachse StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremsachse extends AbstractStructBase
{
    /**
     * The achsennummer
     * @var int|null
     */
    public ?int $achsennummer = null;
    /**
     * The merkmalEinhaltungReferenzwerte
     * @var bool|null
     */
    public ?bool $merkmalEinhaltungReferenzwerte = null;
    /**
     * The bremsdruck
     * @var float|null
     */
    public ?float $bremsdruck = null;
    /**
     * The bremskraftSoll
     * @var float|null
     */
    public ?float $bremskraftSoll = null;
    /**
     * The berechnungsdruck
     * @var float|null
     */
    public ?float $berechnungsdruck = null;
    /**
     * The bremse
     * @var \THAG\XKfz\StructType\Type_Bremse|null
     */
    public ?\THAG\XKfz\StructType\Type_Bremse $bremse = null;
    /**
     * Constructor method for Type.Bremsachse
     * @uses Type_Bremsachse::setAchsennummer()
     * @uses Type_Bremsachse::setMerkmalEinhaltungReferenzwerte()
     * @uses Type_Bremsachse::setBremsdruck()
     * @uses Type_Bremsachse::setBremskraftSoll()
     * @uses Type_Bremsachse::setBerechnungsdruck()
     * @uses Type_Bremsachse::setBremse()
     * @param int $achsennummer
     * @param bool $merkmalEinhaltungReferenzwerte
     * @param float $bremsdruck
     * @param float $bremskraftSoll
     * @param float $berechnungsdruck
     * @param \THAG\XKfz\StructType\Type_Bremse $bremse
     */
    public function __construct(?int $achsennummer = null, ?bool $merkmalEinhaltungReferenzwerte = null, ?float $bremsdruck = null, ?float $bremskraftSoll = null, ?float $berechnungsdruck = null, ?\THAG\XKfz\StructType\Type_Bremse $bremse = null)
    {
        $this
            ->setAchsennummer($achsennummer)
            ->setMerkmalEinhaltungReferenzwerte($merkmalEinhaltungReferenzwerte)
            ->setBremsdruck($bremsdruck)
            ->setBremskraftSoll($bremskraftSoll)
            ->setBerechnungsdruck($berechnungsdruck)
            ->setBremse($bremse);
    }
    /**
     * Get achsennummer value
     * @return int|null
     */
    public function getAchsennummer(): ?int
    {
        return $this->achsennummer;
    }
    /**
     * Set achsennummer value
     * @param int $achsennummer
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setAchsennummer(?int $achsennummer = null): self
    {
        $this->achsennummer = $achsennummer;
        
        return $this;
    }
    /**
     * Get merkmalEinhaltungReferenzwerte value
     * @return bool|null
     */
    public function getMerkmalEinhaltungReferenzwerte(): ?bool
    {
        return $this->merkmalEinhaltungReferenzwerte;
    }
    /**
     * Set merkmalEinhaltungReferenzwerte value
     * @param bool $merkmalEinhaltungReferenzwerte
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setMerkmalEinhaltungReferenzwerte(?bool $merkmalEinhaltungReferenzwerte = null): self
    {
        $this->merkmalEinhaltungReferenzwerte = $merkmalEinhaltungReferenzwerte;
        
        return $this;
    }
    /**
     * Get bremsdruck value
     * @return float|null
     */
    public function getBremsdruck(): ?float
    {
        return $this->bremsdruck;
    }
    /**
     * Set bremsdruck value
     * @param float $bremsdruck
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setBremsdruck(?float $bremsdruck = null): self
    {
        $this->bremsdruck = $bremsdruck;
        
        return $this;
    }
    /**
     * Get bremskraftSoll value
     * @return float|null
     */
    public function getBremskraftSoll(): ?float
    {
        return $this->bremskraftSoll;
    }
    /**
     * Set bremskraftSoll value
     * @param float $bremskraftSoll
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setBremskraftSoll(?float $bremskraftSoll = null): self
    {
        $this->bremskraftSoll = $bremskraftSoll;
        
        return $this;
    }
    /**
     * Get berechnungsdruck value
     * @return float|null
     */
    public function getBerechnungsdruck(): ?float
    {
        return $this->berechnungsdruck;
    }
    /**
     * Set berechnungsdruck value
     * @param float $berechnungsdruck
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setBerechnungsdruck(?float $berechnungsdruck = null): self
    {
        $this->berechnungsdruck = $berechnungsdruck;
        
        return $this;
    }
    /**
     * Get bremse value
     * @return \THAG\XKfz\StructType\Type_Bremse|null
     */
    public function getBremse(): ?\THAG\XKfz\StructType\Type_Bremse
    {
        return $this->bremse;
    }
    /**
     * Set bremse value
     * @param \THAG\XKfz\StructType\Type_Bremse $bremse
     * @return \THAG\XKfz\StructType\Type_Bremsachse
     */
    public function setBremse(?\THAG\XKfz\StructType\Type_Bremse $bremse = null): self
    {
        $this->bremse = $bremse;
        
        return $this;
    }
}
