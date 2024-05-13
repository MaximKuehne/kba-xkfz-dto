<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageNatuerlichePerson StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageNatuerlichePerson extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     */
    public ?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null;

    /**
     * The PhonetischeSuche
     */
    public ?bool $PhonetischeSuche = null;

    /**
     * Constructor method for Type.AnfrageNatuerlichePerson
     *
     * @uses Type_AnfrageNatuerlichePerson::setNatuerlichePerson()
     * @uses Type_AnfrageNatuerlichePerson::setPhonetischeSuche()
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null, ?bool $phonetischeSuche = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setPhonetischeSuche($phonetischeSuche);
    }

    /**
     * Get natuerlichePerson value
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_NatuerlichePerson
    {
        return $this->natuerlichePerson;
    }

    /**
     * Set natuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get PhonetischeSuche value
     */
    public function getPhonetischeSuche(): ?bool
    {
        return $this->PhonetischeSuche;
    }

    /**
     * Set PhonetischeSuche value
     */
    public function setPhonetischeSuche(?bool $phonetischeSuche = null): self
    {
        $this->PhonetischeSuche = $phonetischeSuche;

        return $this;
    }
}
