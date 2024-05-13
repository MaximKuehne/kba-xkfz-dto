<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Kennzeichenreservierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Kennzeichenreservierung extends AbstractStructBase
{
    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The DatumAblaufKennzeichenreservierung
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;

    /**
     * The merkmalVerlaengerungKennzeichenreservierung
     */
    public ?bool $merkmalVerlaengerungKennzeichenreservierung = null;

    /**
     * The reservierungsmerkmal
     */
    public ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null;

    /**
     * The merkmalWunschkennzeichen
     */
    public ?bool $merkmalWunschkennzeichen = null;

    /**
     * Constructor method for Type.Kennzeichenreservierung
     *
     * @uses Type_Kennzeichenreservierung::setKennzeichen()
     * @uses Type_Kennzeichenreservierung::setPin()
     * @uses Type_Kennzeichenreservierung::setPerson()
     * @uses Type_Kennzeichenreservierung::setAnschrift()
     * @uses Type_Kennzeichenreservierung::setKundennummer()
     * @uses Type_Kennzeichenreservierung::setDatumAblaufKennzeichenreservierung()
     * @uses Type_Kennzeichenreservierung::setMerkmalVerlaengerungKennzeichenreservierung()
     * @uses Type_Kennzeichenreservierung::setReservierungsmerkmal()
     * @uses Type_Kennzeichenreservierung::setMerkmalWunschkennzeichen()
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
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen_1
    {
        return $this->kennzeichen;
    }

    /**
     * Set kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get pin value
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * Set pin value
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;

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

    /**
     * Get kundennummer value
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }

    /**
     * Set kundennummer value
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;

        return $this;
    }

    /**
     * Get DatumAblaufKennzeichenreservierung value
     */
    public function getDatumAblaufKennzeichenreservierung(): ?string
    {
        return $this->DatumAblaufKennzeichenreservierung;
    }

    /**
     * Set DatumAblaufKennzeichenreservierung value
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;

        return $this;
    }

    /**
     * Get merkmalVerlaengerungKennzeichenreservierung value
     */
    public function getMerkmalVerlaengerungKennzeichenreservierung(): ?bool
    {
        return $this->merkmalVerlaengerungKennzeichenreservierung;
    }

    /**
     * Set merkmalVerlaengerungKennzeichenreservierung value
     */
    public function setMerkmalVerlaengerungKennzeichenreservierung(?bool $merkmalVerlaengerungKennzeichenreservierung = null): self
    {
        $this->merkmalVerlaengerungKennzeichenreservierung = $merkmalVerlaengerungKennzeichenreservierung;

        return $this;
    }

    /**
     * Get reservierungsmerkmal value
     */
    public function getReservierungsmerkmal(): ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal
    {
        return $this->reservierungsmerkmal;
    }

    /**
     * Set reservierungsmerkmal value
     */
    public function setReservierungsmerkmal(?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null): self
    {
        $this->reservierungsmerkmal = $reservierungsmerkmal;

        return $this;
    }

    /**
     * Get merkmalWunschkennzeichen value
     */
    public function getMerkmalWunschkennzeichen(): ?bool
    {
        return $this->merkmalWunschkennzeichen;
    }

    /**
     * Set merkmalWunschkennzeichen value
     */
    public function setMerkmalWunschkennzeichen(?bool $merkmalWunschkennzeichen = null): self
    {
        $this->merkmalWunschkennzeichen = $merkmalWunschkennzeichen;

        return $this;
    }
}
