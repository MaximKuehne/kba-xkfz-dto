<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichenreservierung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichenreservierung extends AbstractStructBase
{
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen_1|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
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
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * The DatumAblaufKennzeichenreservierung
     * @var string|null
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;
    /**
     * The merkmalVerlaengerungKennzeichenreservierung
     * @var bool|null
     */
    public ?bool $merkmalVerlaengerungKennzeichenreservierung = null;
    /**
     * The reservierungsmerkmal
     * @var \THAG\XKfz\StructType\Type_Reservierungsmerkmal|null
     */
    public ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null;
    /**
     * The merkmalWunschkennzeichen
     * @var bool|null
     */
    public ?bool $merkmalWunschkennzeichen = null;
    /**
     * Constructor method for Type.Kennzeichenreservierung
     * @uses Type_Kennzeichenreservierung::setKennzeichen()
     * @uses Type_Kennzeichenreservierung::setPin()
     * @uses Type_Kennzeichenreservierung::setPerson()
     * @uses Type_Kennzeichenreservierung::setAnschrift()
     * @uses Type_Kennzeichenreservierung::setKundennummer()
     * @uses Type_Kennzeichenreservierung::setDatumAblaufKennzeichenreservierung()
     * @uses Type_Kennzeichenreservierung::setMerkmalVerlaengerungKennzeichenreservierung()
     * @uses Type_Kennzeichenreservierung::setReservierungsmerkmal()
     * @uses Type_Kennzeichenreservierung::setMerkmalWunschkennzeichen()
     * @param \THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen
     * @param string $pin
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $kundennummer
     * @param string $datumAblaufKennzeichenreservierung
     * @param bool $merkmalVerlaengerungKennzeichenreservierung
     * @param \THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal
     * @param bool $merkmalWunschkennzeichen
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null, ?string $pin = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $kundennummer = null, ?string $datumAblaufKennzeichenreservierung = null, ?bool $merkmalVerlaengerungKennzeichenreservierung = null, ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null, ?bool $merkmalWunschkennzeichen = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setPin($pin)
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setKundennummer($kundennummer)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung)
            ->setMerkmalVerlaengerungKennzeichenreservierung($merkmalVerlaengerungKennzeichenreservierung)
            ->setReservierungsmerkmal($reservierungsmerkmal)
            ->setMerkmalWunschkennzeichen($merkmalWunschkennzeichen);
    }
    /**
     * Get kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen_1|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen_1
    {
        return $this->kennzeichen;
    }
    /**
     * Set kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get pin value
     * @return string|null
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param string $pin
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
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
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get kundennummer value
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
        return $this;
    }
    /**
     * Get DatumAblaufKennzeichenreservierung value
     * @return string|null
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }
    /**
     * Set DatumAblaufKennzeichenreservierung value
     * @param string $datumAblaufKennzeichenreservierung
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
        return $this;
    }
    /**
     * Get merkmalVerlaengerungKennzeichenreservierung value
     * @return bool|null
     */
    public function getMerkmalVerlaengerungKennzeichenreservierung(): ?bool
    {
        return $this->merkmalVerlaengerungKennzeichenreservierung;
    }
    /**
     * Set merkmalVerlaengerungKennzeichenreservierung value
     * @param bool $merkmalVerlaengerungKennzeichenreservierung
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setMerkmalVerlaengerungKennzeichenreservierung(?bool $merkmalVerlaengerungKennzeichenreservierung = null): self
    {
        $this->merkmalVerlaengerungKennzeichenreservierung = $merkmalVerlaengerungKennzeichenreservierung;
        
        return $this;
    }
    /**
     * Get reservierungsmerkmal value
     * @return \THAG\XKfz\StructType\Type_Reservierungsmerkmal|null
     */
    public function getReservierungsmerkmal(): ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal
    {
        return $this->reservierungsmerkmal;
    }
    /**
     * Set reservierungsmerkmal value
     * @param \THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setReservierungsmerkmal(?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null): self
    {
        $this->reservierungsmerkmal = $reservierungsmerkmal;
        
        return $this;
    }
    /**
     * Get merkmalWunschkennzeichen value
     * @return bool|null
     */
    public function getMerkmalWunschkennzeichen(): ?bool
    {
        return $this->merkmalWunschkennzeichen;
    }
    /**
     * Set merkmalWunschkennzeichen value
     * @param bool $merkmalWunschkennzeichen
     * @return \THAG\XKfz\StructType\Type_Kennzeichenreservierung
     */
    public function setMerkmalWunschkennzeichen(?bool $merkmalWunschkennzeichen = null): self
    {
        $this->merkmalWunschkennzeichen = $merkmalWunschkennzeichen;
        
        return $this;
    }
}
