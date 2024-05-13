<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Konfiguration.AnfrageGebuehrenUndUnterlagen.1103
 * StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Konfiguration_AnfrageGebuehrenUndUnterlagen_1103 extends AbstractStructBase
{
    /**
     * The anfrageGebuehrenUndUnterlagen
     * @var \THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen|null
     */
    public ?\THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen $anfrageGebuehrenUndUnterlagen = null;
    /**
     * Constructor method for Type.Konfiguration.AnfrageGebuehrenUndUnterlagen.1103
     * @uses Type_Konfiguration_AnfrageGebuehrenUndUnterlagen_1103::setAnfrageGebuehrenUndUnterlagen()
     * @param \THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen $anfrageGebuehrenUndUnterlagen
     */
    public function __construct(?\THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen $anfrageGebuehrenUndUnterlagen = null)
    {
        $this
            ->setAnfrageGebuehrenUndUnterlagen($anfrageGebuehrenUndUnterlagen);
    }
    /**
     * Get anfrageGebuehrenUndUnterlagen value
     * @return \THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen|null
     */
    public function getAnfrageGebuehrenUndUnterlagen(): ?\THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen
    {
        return $this->anfrageGebuehrenUndUnterlagen;
    }
    /**
     * Set anfrageGebuehrenUndUnterlagen value
     * @param \THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen $anfrageGebuehrenUndUnterlagen
     * @return \THAG\XKfz\StructType\Type_Konfiguration_AnfrageGebuehrenUndUnterlagen_1103
     */
    public function setAnfrageGebuehrenUndUnterlagen(?\THAG\XKfz\StructType\AnfrageGebuehrenUndUnterlagen $anfrageGebuehrenUndUnterlagen = null): self
    {
        $this->anfrageGebuehrenUndUnterlagen = $anfrageGebuehrenUndUnterlagen;
        
        return $this;
    }
}
