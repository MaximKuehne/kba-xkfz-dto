<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Vorgangskomponenten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Vorgangskomponenten extends AbstractStructBase
{
    /**
     * The vorgangskomponenteAntragGrosskundeSigniert
     */
    public ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null;

    /**
     * The vorgangskomponente
     */
    public ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null;

    /**
     * Constructor method for Type.Vorgangskomponenten
     *
     * @uses Type_Vorgangskomponenten::setVorgangskomponenteAntragGrosskundeSigniert()
     * @uses Type_Vorgangskomponenten::setVorgangskomponente()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null, ?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null)
    {
        $this
            ->setVorgangskomponenteAntragGrosskundeSigniert($vorgangskomponenteAntragGrosskundeSigniert)
            ->setVorgangskomponente($vorgangskomponente);
    }

    /**
     * Get vorgangskomponenteAntragGrosskundeSigniert value
     */
    public function getVorgangskomponenteAntragGrosskundeSigniert(): ?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert
    {
        return $this->vorgangskomponenteAntragGrosskundeSigniert;
    }

    /**
     * Set vorgangskomponenteAntragGrosskundeSigniert value
     */
    public function setVorgangskomponenteAntragGrosskundeSigniert(?\THAG\XKfz\StructType\Type_VorgangskomponenteAntragGrosskundeSigniert $vorgangskomponenteAntragGrosskundeSigniert = null): self
    {
        $this->vorgangskomponenteAntragGrosskundeSigniert = $vorgangskomponenteAntragGrosskundeSigniert;

        return $this;
    }

    /**
     * Get vorgangskomponente value
     */
    public function getVorgangskomponente(): ?\THAG\XKfz\StructType\Type_Vorgangskomponente
    {
        return $this->vorgangskomponente;
    }

    /**
     * Set vorgangskomponente value
     */
    public function setVorgangskomponente(?\THAG\XKfz\StructType\Type_Vorgangskomponente $vorgangskomponente = null): self
    {
        $this->vorgangskomponente = $vorgangskomponente;

        return $this;
    }
}
