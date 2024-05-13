<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HalterZWTyp StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class HalterZWTyp extends AbstractStructBase
{
    /**
     * The SchluesselBeruf
     * @var string|null
     */
    public ?string $SchluesselBeruf = null;
    /**
     * The DatumAenderungHalterangaben
     * @var string|null
     */
    public ?string $DatumAenderungHalterangaben = null;
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
     * Constructor method for HalterZWTyp
     * @uses HalterZWTyp::setSchluesselBeruf()
     * @uses HalterZWTyp::setDatumAenderungHalterangaben()
     * @uses HalterZWTyp::setPerson()
     * @uses HalterZWTyp::setAnschrift()
     * @param string $schluesselBeruf
     * @param string $datumAenderungHalterangaben
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
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
     * @return string|null
     */
    public function getSchluesselBeruf(): ?string
    {
        return $this->SchluesselBeruf;
    }
    /**
     * Set SchluesselBeruf value
     * @param string $schluesselBeruf
     * @return \THAG\XKfz\StructType\HalterZWTyp
     */
    public function setSchluesselBeruf(?string $schluesselBeruf = null): self
    {
        $this->SchluesselBeruf = $schluesselBeruf;
        
        return $this;
    }
    /**
     * Get DatumAenderungHalterangaben value
     * @return string|null
     */
    public function getDatumAenderungHalterangaben(): ?string
    {
        return $this->DatumAenderungHalterangaben;
    }
    /**
     * Set DatumAenderungHalterangaben value
     * @param string $datumAenderungHalterangaben
     * @return \THAG\XKfz\StructType\HalterZWTyp
     */
    public function setDatumAenderungHalterangaben(?string $datumAenderungHalterangaben = null): self
    {
        $this->DatumAenderungHalterangaben = $datumAenderungHalterangaben;
        
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
     * @return \THAG\XKfz\StructType\HalterZWTyp
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
     * @return \THAG\XKfz\StructType\HalterZWTyp
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}
