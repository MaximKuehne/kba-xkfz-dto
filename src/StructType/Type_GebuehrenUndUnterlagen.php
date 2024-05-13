<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.GebuehrenUndUnterlagen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_GebuehrenUndUnterlagen extends AbstractStructBase
{
    /**
     * The gebuehren
     */
    public ?\THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren = null;

    /**
     * The unterlagen
     */
    public ?\THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen = null;

    /**
     * The merkmalStandard
     */
    public ?bool $merkmalStandard = null;

    /**
     * Constructor method for Type.GebuehrenUndUnterlagen
     *
     * @uses Type_GebuehrenUndUnterlagen::setGebuehren()
     * @uses Type_GebuehrenUndUnterlagen::setUnterlagen()
     * @uses Type_GebuehrenUndUnterlagen::setMerkmalStandard()
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
     */
    public function getGebuehren(): ?\THAG\XKfz\StructType\Type_KonfigurationGebuehren
    {
        return $this->gebuehren;
    }

    /**
     * Set gebuehren value
     */
    public function setGebuehren(?\THAG\XKfz\StructType\Type_KonfigurationGebuehren $gebuehren = null): self
    {
        $this->gebuehren = $gebuehren;

        return $this;
    }

    /**
     * Get unterlagen value
     */
    public function getUnterlagen(): ?\THAG\XKfz\StructType\Type_KonfigurationUnterlage
    {
        return $this->unterlagen;
    }

    /**
     * Set unterlagen value
     */
    public function setUnterlagen(?\THAG\XKfz\StructType\Type_KonfigurationUnterlage $unterlagen = null): self
    {
        $this->unterlagen = $unterlagen;

        return $this;
    }

    /**
     * Get merkmalStandard value
     */
    public function getMerkmalStandard(): ?bool
    {
        return $this->merkmalStandard;
    }

    /**
     * Set merkmalStandard value
     */
    public function setMerkmalStandard(?bool $merkmalStandard = null): self
    {
        $this->merkmalStandard = $merkmalStandard;

        return $this;
    }
}
