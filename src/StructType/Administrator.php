<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Administrator StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Administrator extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The Kontaktdaten
     */
    public ?\THAG\XKfz\StructType\Kontaktdaten $Kontaktdaten = null;

    /**
     * Constructor method for Administrator
     *
     * @uses Administrator::setNatuerlichePerson()
     * @uses Administrator::setAnschrift()
     * @uses Administrator::setKontaktdaten()
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setAnschrift($anschrift)
            ->setKontaktdaten($kontaktdaten);
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

    /**
     * Get Kontaktdaten value
     */
    public function getKontaktdaten(): ?\THAG\XKfz\StructType\Kontaktdaten
    {
        return $this->Kontaktdaten;
    }

    /**
     * Set Kontaktdaten value
     */
    public function setKontaktdaten(?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null): self
    {
        $this->Kontaktdaten = $kontaktdaten;

        return $this;
    }
}
