<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchEmpfangsbevollmaechtigterTyp StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchEmpfangsbevollmaechtigterTyp extends AbstractStructBase
{
    /**
     * The DatumEmpfangsbevollmaechtigung
     */
    public ?string $DatumEmpfangsbevollmaechtigung = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * Constructor method for BatchEmpfangsbevollmaechtigterTyp
     *
     * @uses BatchEmpfangsbevollmaechtigterTyp::setDatumEmpfangsbevollmaechtigung()
     * @uses BatchEmpfangsbevollmaechtigterTyp::setPerson()
     * @uses BatchEmpfangsbevollmaechtigterTyp::setAnschrift()
     */
    public function __construct(?string $datumEmpfangsbevollmaechtigung = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setDatumEmpfangsbevollmaechtigung($datumEmpfangsbevollmaechtigung)
            ->setPerson($person)
            ->setAnschrift($anschrift);
    }

    /**
     * Get DatumEmpfangsbevollmaechtigung value
     */
    public function getDatumEmpfangsbevollmaechtigung(): ?string
    {
        return $this->DatumEmpfangsbevollmaechtigung;
    }

    /**
     * Set DatumEmpfangsbevollmaechtigung value
     */
    public function setDatumEmpfangsbevollmaechtigung(?string $datumEmpfangsbevollmaechtigung = null): self
    {
        $this->DatumEmpfangsbevollmaechtigung = $datumEmpfangsbevollmaechtigung;

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
