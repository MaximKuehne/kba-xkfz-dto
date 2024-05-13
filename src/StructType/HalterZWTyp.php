<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HalterZWTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class HalterZWTyp extends AbstractStructBase
{
    /**
     * The SchluesselBeruf
     */
    public ?string $SchluesselBeruf = null;

    /**
     * The DatumAenderungHalterangaben
     */
    public ?string $DatumAenderungHalterangaben = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for HalterZWTyp
     *
     * @uses HalterZWTyp::setSchluesselBeruf()
     * @uses HalterZWTyp::setDatumAenderungHalterangaben()
     * @uses HalterZWTyp::setPerson()
     * @uses HalterZWTyp::setAnschrift()
     */
    public function __construct(?string $schluesselBeruf = null, ?string $datumAenderungHalterangaben = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setSchluesselBeruf($schluesselBeruf)
            ->setDatumAenderungHalterangaben($datumAenderungHalterangaben)
            ->setPerson($person)
            ->setAnschrift($anschrift);
    }

    /**
     * Get SchluesselBeruf value
     */
    public function getSchluesselBeruf(): ?string
    {
        return $this->SchluesselBeruf;
    }

    /**
     * Set SchluesselBeruf value
     */
    public function setSchluesselBeruf(?string $schluesselBeruf = null): self
    {
        $this->SchluesselBeruf = $schluesselBeruf;

        return $this;
    }

    /**
     * Get DatumAenderungHalterangaben value
     */
    public function getDatumAenderungHalterangaben(): ?string
    {
        return $this->DatumAenderungHalterangaben;
    }

    /**
     * Set DatumAenderungHalterangaben value
     */
    public function setDatumAenderungHalterangaben(?string $datumAenderungHalterangaben = null): self
    {
        $this->DatumAenderungHalterangaben = $datumAenderungHalterangaben;

        return $this;
    }

    /**
     * Get Person value
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }

    /**
     * Set Person value
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;

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
