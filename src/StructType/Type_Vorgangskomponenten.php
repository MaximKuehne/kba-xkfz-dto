<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorgangskomponenten StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorgangskomponenten extends AbstractStructBase
{
    /**
     * The vorgangskomponenteAntragGrosskundeSigniert
     * @var \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert|null
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null;
    /**
     * The vorgangskomponente
     * @var \THAG\XKfz\StructType\Type_Vorgangskomponente|null
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null;
    /**
     * Constructor method for Type.Vorgangskomponenten
     * @uses Type_Vorgangskomponenten::setVorgangskomponenteAntragGrosskundeSigniert()
     * @uses Type_Vorgangskomponenten::setVorgangskomponente()
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente
     */
    public function __construct(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null, ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null)
    {
        $this
            ->setVorgangskomponenteAntragGrosskundeSigniert($vorgangskomponenteAntragGrosskundeSigniert)
            ->setVorgangskomponente($vorgangskomponente);
    }
    /**
     * Get vorgangskomponenteAntragGrosskundeSigniert value
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert|null
     */
    public function getVorgangskomponenteAntragGrosskundeSigniert(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
    {
        return $this->vorgangskomponenteAntragGrosskundeSigniert;
    }
    /**
     * Set vorgangskomponenteAntragGrosskundeSigniert value
     * @param \THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponenten
     */
    public function setVorgangskomponenteAntragGrosskundeSigniert(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null): self
    {
        $this->vorgangskomponenteAntragGrosskundeSigniert = $vorgangskomponenteAntragGrosskundeSigniert;
        
        return $this;
    }
    /**
     * Get vorgangskomponente value
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponente|null
     */
    public function getVorgangskomponente(): ?\THAG\XKfz\StructType\Type_Vorgangskomponente
    {
        return $this->vorgangskomponente;
    }
    /**
     * Set vorgangskomponente value
     * @param \THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente
     * @return \THAG\XKfz\StructType\Type_Vorgangskomponenten
     */
    public function setVorgangskomponente(?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null): self
    {
        $this->vorgangskomponente = $vorgangskomponente;
        
        return $this;
    }
}
