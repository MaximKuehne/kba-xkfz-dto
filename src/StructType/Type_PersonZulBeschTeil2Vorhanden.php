<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.PersonZulBeschTeil2Vorhanden StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_PersonZulBeschTeil2Vorhanden extends AbstractStructBase
{
    /**
     * The natuerlichePerson
     */
    public ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null;

    /**
     * The NameJuristischePerson
     */
    public ?string $NameJuristischePerson = null;

    /**
     * The NameVereinigung
     */
    public ?string $NameVereinigung = null;

    /**
     * Constructor method for Type.PersonZulBeschTeil2Vorhanden
     *
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNatuerlichePerson()
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNameJuristischePerson()
     * @uses Type_PersonZulBeschTeil2Vorhanden::setNameVereinigung()
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
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson
    {
        return $this->natuerlichePerson;
    }

    /**
     * Set natuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\Type_AnfrageNatuerlichePerson $natuerlichePerson = null): self
    {
        $this->natuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get NameJuristischePerson value
     */
    public function getNameJuristischePerson(): ?string
    {
        return $this->NameJuristischePerson;
    }

    /**
     * Set NameJuristischePerson value
     */
    public function setNameJuristischePerson(?string $nameJuristischePerson = null): self
    {
        $this->NameJuristischePerson = $nameJuristischePerson;

        return $this;
    }

    /**
     * Get NameVereinigung value
     */
    public function getNameVereinigung(): ?string
    {
        return $this->NameVereinigung;
    }

    /**
     * Set NameVereinigung value
     */
    public function setNameVereinigung(?string $nameVereinigung = null): self
    {
        $this->NameVereinigung = $nameVereinigung;

        return $this;
    }
}
