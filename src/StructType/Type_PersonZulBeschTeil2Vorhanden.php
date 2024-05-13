<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonZulBeschTeil2Vorhanden StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonZulBeschTeil2Vorhanden extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     * @var \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null;
    /**
     * The NameJuristischePerson
     * @var string|null
     */
    public ?string $NameJuristischePerson = null;
    /**
     * The NameVereinigung
     * @var string|null
     */
    public ?string $NameVereinigung = null;
    /**
     * Constructor method for Type.PersonZulBeschTeil2Vorhanden
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNatuerlichePerson()
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNameJuristischePerson()
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNameVereinigung()
     * @param \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson
     * @param string $nameJuristischePerson
     * @param string $nameVereinigung
     */
    public function __construct(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null, ?string $nameJuristischePerson = null, ?string $nameVereinigung = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setNameJuristischePerson($nameJuristischePerson)
            ->setNameVereinigung($nameVereinigung);
    }
    /**
     * Get natuerlichePerson value
     * @return \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
    {
        return $this->natuerlichePerson;
    }
    /**
     * Set natuerlichePerson value
     * @param \THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson
     * @return \THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get NameJuristischePerson value
     * @return string|null
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }
    /**
     * Set NameJuristischePerson value
     * @param string $nameJuristischePerson
     * @return \THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;
        
        return $this;
    }
    /**
     * Get NameVereinigung value
     * @return string|null
     */
    public function getNameVereinigung(): ?string
    {
        return $this->NameVereinigung;
    }
    /**
     * Set NameVereinigung value
     * @param string $nameVereinigung
     * @return \THAG\XKfz\StructType\Type_PersonZulBeschTeil2Vorhanden
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;
        
        return $this;
    }
}
