<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Bremsachse StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Bremsachse extends AbstractStructBase
{
    /**
     * The achsennummer
     */
    public ?int $achsennummer = null;

    /**
     * The merkmalEinhaltungReferenzwerte
     */
    public ?bool $merkmalEinhaltungReferenzwerte = null;

    /**
     * The bremsdruck
     */
    public ?float $bremsdruck = null;

    /**
     * The bremskraftSoll
     */
    public ?float $bremskraftSoll = null;

    /**
     * The berechnungsdruck
     */
    public ?float $berechnungsdruck = null;

    /**
     * The bremse
     */
    public ?\THAG\XKfz\StructType\Type_Bremse $bremse = null;

    /**
     * Constructor method for Type.Bremsachse
     *
     * @uses Type_Bremsachse::setAchsennummer()
     * @uses Type_Bremsachse::setMerkmalEinhaltungReferenzwerte()
     * @uses Type_Bremsachse::setBremsdruck()
     * @uses Type_Bremsachse::setBremskraftSoll()
     * @uses Type_Bremsachse::setBerechnungsdruck()
     * @uses Type_Bremsachse::setBremse()
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
     */
    public function getAchsennummer(): ?int
    {
        return $this->achsennummer;
    }

    /**
     * Set achsennummer value
     */
    public function setAchsennummer(?int $achsennummer = null): self
    {
        $this->achsennummer = $achsennummer;

        return $this;
    }

    /**
     * Get merkmalEinhaltungReferenzwerte value
     */
    public function getMerkmalEinhaltungReferenzwerte(): ?bool
    {
        return $this->merkmalEinhaltungReferenzwerte;
    }

    /**
     * Set merkmalEinhaltungReferenzwerte value
     */
    public function setMerkmalEinhaltungReferenzwerte(?bool $merkmalEinhaltungReferenzwerte = null): self
    {
        $this->merkmalEinhaltungReferenzwerte = $merkmalEinhaltungReferenzwerte;

        return $this;
    }

    /**
     * Get bremsdruck value
     */
    public function getBremsdruck(): ?float
    {
        return $this->bremsdruck;
    }

    /**
     * Set bremsdruck value
     */
    public function setBremsdruck(?float $bremsdruck = null): self
    {
        $this->bremsdruck = $bremsdruck;

        return $this;
    }

    /**
     * Get bremskraftSoll value
     */
    public function getBremskraftSoll(): ?float
    {
        return $this->bremskraftSoll;
    }

    /**
     * Set bremskraftSoll value
     */
    public function setBremskraftSoll(?float $bremskraftSoll = null): self
    {
        $this->bremskraftSoll = $bremskraftSoll;

        return $this;
    }

    /**
     * Get berechnungsdruck value
     */
    public function getBerechnungsdruck(): ?float
    {
        return $this->berechnungsdruck;
    }

    /**
     * Set berechnungsdruck value
     */
    public function setBerechnungsdruck(?float $berechnungsdruck = null): self
    {
        $this->berechnungsdruck = $berechnungsdruck;

        return $this;
    }

    /**
     * Get bremse value
     */
    public function getBremse(): ?\THAG\XKfz\StructType\Type_Bremse
    {
        return $this->bremse;
    }

    /**
     * Set bremse value
     */
    public function setBremse(?\THAG\XKfz\StructType\Type_Bremse $bremse = null): self
    {
        $this->bremse = $bremse;

        return $this;
    }
}
