<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErmitteltePersonendaten StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class ErmitteltePersonendaten extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for ErmitteltePersonendaten
     *
     * @uses ErmitteltePersonendaten::setNatuerlichePerson()
     * @uses ErmitteltePersonendaten::setJuristischePerson()
     * @uses ErmitteltePersonendaten::setAnschrift()
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setAnschrift($anschrift);
    }

    /**
     * Get NatuerlichePerson value
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }

    /**
     * Set NatuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get JuristischePerson value
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }

    /**
     * Set JuristischePerson value
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }
}
