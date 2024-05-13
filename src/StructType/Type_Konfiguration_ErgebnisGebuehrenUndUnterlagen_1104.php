<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.ErgebnisGebuehrenUndUnterlagen.1104
 * StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_ErgebnisGebuehrenUndUnterlagen_1104 extends AbstractStructBase
{
    /**
     * The ergebnisGebuehrenUndUnterlagen
     */
    public ?\THAG\XKfz\StructType\ErgebnisGebuehrenUndUnterlagen $ergebnisGebuehrenUndUnterlagen = null;

    /**
     * Constructor method for Type.Konfiguration.ErgebnisGebuehrenUndUnterlagen.1104
     *
     * @uses Type_Konfiguration_ErgebnisGebuehrenUndUnterlagen_1104::setErgebnisGebuehrenUndUnterlagen()
     */
    public function __construct(?\THAG\XKfz\StructType\ErgebnisGebuehrenUndUnterlagen $ergebnisGebuehrenUndUnterlagen = null)
    {
        $this
            ->setErgebnisGebuehrenUndUnterlagen($ergebnisGebuehrenUndUnterlagen);
    }

    /**
     * Get ergebnisGebuehrenUndUnterlagen value
     */
    public function getErgebnisGebuehrenUndUnterlagen(): ?\THAG\XKfz\StructType\ErgebnisGebuehrenUndUnterlagen
    {
        return $this->ergebnisGebuehrenUndUnterlagen;
    }

    /**
     * Set ergebnisGebuehrenUndUnterlagen value
     */
    public function setErgebnisGebuehrenUndUnterlagen(?\THAG\XKfz\StructType\ErgebnisGebuehrenUndUnterlagen $ergebnisGebuehrenUndUnterlagen = null): self
    {
        $this->ergebnisGebuehrenUndUnterlagen = $ergebnisGebuehrenUndUnterlagen;

        return $this;
    }
}
