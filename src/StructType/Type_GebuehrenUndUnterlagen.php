<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenUndUnterlagen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenUndUnterlagen extends AbstractStructBase
{
    /**
     * The gebuehren
     * @var \THAG\XKfz\StructType\Type_KonfigurationGebuehren|null
     */
    public ?\THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren = null;
    /**
     * The unterlagen
     * @var \THAG\XKfz\StructType\Type_KonfigurationUnterlage|null
     */
    public ?\THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen = null;
    /**
     * The merkmalStandard
     * @var bool|null
     */
    public ?bool $merkmalStandard = null;
    /**
     * Constructor method for Type.GebuehrenUndUnterlagen
     * @uses Type_GebuehrenUndUnterlagen::setGebuehren()
     * @uses Type_GebuehrenUndUnterlagen::setUnterlagen()
     * @uses Type_GebuehrenUndUnterlagen::setMerkmalStandard()
     * @param \THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren
     * @param \THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen
     * @param bool $merkmalStandard
     */
    public function __construct(?\THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren = null, ?\THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen = null, ?bool $merkmalStandard = null)
    {
        $this
            ->setGebuehren($gebuehren)
            ->setUnterlagen($unterlagen)
            ->setMerkmalStandard($merkmalStandard);
    }
    /**
     * Get gebuehren value
     * @return \THAG\XKfz\StructType\Type_KonfigurationGebuehren|null
     */
    public function getGebuehren(): ?\THAG\XKfz\StructType\Type_KonfigurationGebuehren
    {
        return $this->gebuehren;
    }
    /**
     * Set gebuehren value
     * @param \THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren
     * @return \THAG\XKfz\StructType\Type_GebuehrenUndUnterlagen
     */
    public function setGebuehren(?\THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren = null): self
    {
        $this->gebuehren = $gebuehren;
        
        return $this;
    }
    /**
     * Get unterlagen value
     * @return \THAG\XKfz\StructType\Type_KonfigurationUnterlage|null
     */
    public function getUnterlagen(): ?\THAG\XKfz\StructType\Type_KonfigurationUnterlage
    {
        return $this->unterlagen;
    }
    /**
     * Set unterlagen value
     * @param \THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen
     * @return \THAG\XKfz\StructType\Type_GebuehrenUndUnterlagen
     */
    public function setUnterlagen(?\THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen = null): self
    {
        $this->unterlagen = $unterlagen;
        
        return $this;
    }
    /**
     * Get merkmalStandard value
     * @return bool|null
     */
    public function getMerkmalStandard(): ?bool
    {
        return $this->merkmalStandard;
    }
    /**
     * Set merkmalStandard value
     * @param bool $merkmalStandard
     * @return \THAG\XKfz\StructType\Type_GebuehrenUndUnterlagen
     */
    public function setMerkmalStandard(?bool $merkmalStandard = null): self
    {
        $this->merkmalStandard = $merkmalStandard;
        
        return $this;
    }
}
