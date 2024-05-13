<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatchEmpfangsbevollmaechtigterTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class BatchEmpfangsbevollmaechtigterTyp extends AbstractStructBase
{
    /**
     * The DatumEmpfangsbevollmaechtigung
     * @var string|null
     */
    public ?string $DatumEmpfangsbevollmaechtigung = null;
    /**
     * The Person
     * @var \THAG\XKfz\StructType\Person|null
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * Constructor method for BatchEmpfangsbevollmaechtigterTyp
     * @uses BatchEmpfangsbevollmaechtigterTyp::setDatumEmpfangsbevollmaechtigung()
     * @uses BatchEmpfangsbevollmaechtigterTyp::setPerson()
     * @uses BatchEmpfangsbevollmaechtigterTyp::setAnschrift()
     * @param string $datumEmpfangsbevollmaechtigung
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
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
     * @return string|null
     */
    public function getDatumEmpfangsbevollmaechtigung(): ?string
    {
        return $this->DatumEmpfangsbevollmaechtigung;
    }
    /**
     * Set DatumEmpfangsbevollmaechtigung value
     * @param string $datumEmpfangsbevollmaechtigung
     * @return \THAG\XKfz\StructType\BatchEmpfangsbevollmaechtigterTyp
     */
    public function setDatumEmpfangsbevollmaechtigung(?string $datumEmpfangsbevollmaechtigung = null): self
    {
        $this->DatumEmpfangsbevollmaechtigung = $datumEmpfangsbevollmaechtigung;
        
        return $this;
    }
    /**
     * Get Person value
     * @return \THAG\XKfz\StructType\Person|null
     */
    public function getPerson(): ?\THAG\XKfz\StructType\Person
    {
        return $this->Person;
    }
    /**
     * Set Person value
     * @param \THAG\XKfz\StructType\Person $person
     * @return \THAG\XKfz\StructType\BatchEmpfangsbevollmaechtigterTyp
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\BatchEmpfangsbevollmaechtigterTyp
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}
