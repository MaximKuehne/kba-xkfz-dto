<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Verfuegungsberechtigter StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Verfuegungsberechtigter extends AbstractStructBase
{
    /**
     * The DatumVerfuegungsberechtigungVon
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungVon = null;
    /**
     * The DatumVerfuegungsberechtigungBis
     * @var string|null
     */
    public ?string $DatumVerfuegungsberechtigungBis = null;
    /**
     * The HinweisSicherungsuebereignung
     * @var bool|null
     */
    public ?bool $HinweisSicherungsuebereignung = null;
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
     * Constructor method for Verfuegungsberechtigter
     * @uses Verfuegungsberechtigter::setDatumVerfuegungsberechtigungVon()
     * @uses Verfuegungsberechtigter::setDatumVerfuegungsberechtigungBis()
     * @uses Verfuegungsberechtigter::setHinweisSicherungsuebereignung()
     * @uses Verfuegungsberechtigter::setPerson()
     * @uses Verfuegungsberechtigter::setAnschrift()
     * @param string $datumVerfuegungsberechtigungVon
     * @param string $datumVerfuegungsberechtigungBis
     * @param bool $hinweisSicherungsuebereignung
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     */
    public function __construct(?string $datumVerfuegungsberechtigungVon = null, ?string $datumVerfuegungsberechtigungBis = null, ?bool $hinweisSicherungsuebereignung = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null)
    {
        $this
            ->setDatumVerfuegungsberechtigungVon($datumVerfuegungsberechtigungVon)
            ->setDatumVerfuegungsberechtigungBis($datumVerfuegungsberechtigungBis)
            ->setHinweisSicherungsuebereignung($hinweisSicherungsuebereignung)
            ->setPerson($person)
            ->setAnschrift($anschrift);
    }
    /**
     * Get DatumVerfuegungsberechtigungVon value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungVon(): ?string
    {
        return $this->DatumVerfuegungsberechtigungVon;
    }
    /**
     * Set DatumVerfuegungsberechtigungVon value
     * @param string $datumVerfuegungsberechtigungVon
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter
     */
    public function setDatumVerfuegungsberechtigungVon(?string $datumVerfuegungsberechtigungVon = null): self
    {
        $this->DatumVerfuegungsberechtigungVon = $datumVerfuegungsberechtigungVon;
        
        return $this;
    }
    /**
     * Get DatumVerfuegungsberechtigungBis value
     * @return string|null
     */
    public function getDatumVerfuegungsberechtigungBis(): ?string
    {
        return $this->DatumVerfuegungsberechtigungBis;
    }
    /**
     * Set DatumVerfuegungsberechtigungBis value
     * @param string $datumVerfuegungsberechtigungBis
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter
     */
    public function setDatumVerfuegungsberechtigungBis(?string $datumVerfuegungsberechtigungBis = null): self
    {
        $this->DatumVerfuegungsberechtigungBis = $datumVerfuegungsberechtigungBis;
        
        return $this;
    }
    /**
     * Get HinweisSicherungsuebereignung value
     * @return bool|null
     */
    public function getHinweisSicherungsuebereignung(): ?bool
    {
        return $this->HinweisSicherungsuebereignung;
    }
    /**
     * Set HinweisSicherungsuebereignung value
     * @param bool $hinweisSicherungsuebereignung
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter
     */
    public function setHinweisSicherungsuebereignung(?bool $hinweisSicherungsuebereignung = null): self
    {
        $this->HinweisSicherungsuebereignung = $hinweisSicherungsuebereignung;
        
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
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter
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
     * @return \THAG\XKfz\StructType\Verfuegungsberechtigter
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
}
