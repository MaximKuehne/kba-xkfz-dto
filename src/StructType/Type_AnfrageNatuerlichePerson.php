<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.AnfrageNatuerlichePerson StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_AnfrageNatuerlichePerson extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     * @var \THAG\XKfz\StructType\Type_NatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null;
    /**
     * The PhonetischeSuche
     * @var bool|null
     */
    public ?bool $PhonetischeSuche = null;
    /**
     * Constructor method for Type.AnfrageNatuerlichePerson
     * @uses Type_AnfrageNatuerlichePerson::setNatuerlichePerson()
     * @uses Type_AnfrageNatuerlichePerson::setPhonetischeSuche()
     * @param \THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson
     * @param bool $phonetischeSuche
     */
    public function __construct(?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null, ?bool $phonetischeSuche = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setPhonetischeSuche($phonetischeSuche);
    }
    /**
     * Get natuerlichePerson value
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_NatuerlichePerson
    {
        return $this->natuerlichePerson;
    }
    /**
     * Set natuerlichePerson value
     * @param \THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson
     * @return \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get PhonetischeSuche value
     * @return bool|null
     */
    public function getPhonetischeSuche(): ?bool
    {
        return $this->PhonetischeSuche;
    }
    /**
     * Set PhonetischeSuche value
     * @param bool $phonetischeSuche
     * @return \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
     */
    public function setPhonetischeSuche(?bool $phonetischeSuche = null): self
    {
        $this->PhonetischeSuche = $phonetischeSuche;
        
        return $this;
    }
}
