<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MassenreservierungKennzeichen StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MassenreservierungKennzeichen extends AbstractStructBase
{
    /**
     * The kundennummer
     */
    public ?string $kundennummer = null;

    /**
     * The anzahlKennzeichen
     */
    public ?int $anzahlKennzeichen = null;

    /**
     * The sucheinschraenkungen
     */
    public ?\THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen = null;

    /**
     * The DatumAblaufKennzeichenreservierung
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * The merkmalVerlaengerungKennzeichenreservierung
     */
    public ?bool $merkmalVerlaengerungKennzeichenreservierung = null;

    /**
     * The reservierungsmerkmal
     */
    public ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null;

    /**
     * The sortierung
     */
    public ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null;

    /**
     * Constructor method for Type.MassenreservierungKennzeichen
     *
     * @uses Type_MassenreservierungKennzeichen::setKundennummer()
     * @uses Type_MassenreservierungKennzeichen::setAnzahlKennzeichen()
     * @uses Type_MassenreservierungKennzeichen::setSucheinschraenkungen()
     * @uses Type_MassenreservierungKennzeichen::setDatumAblaufKennzeichenreservierung()
     * @uses Type_MassenreservierungKennzeichen::setPin()
     * @uses Type_MassenreservierungKennzeichen::setMerkmalVerlaengerungKennzeichenreservierung()
     * @uses Type_MassenreservierungKennzeichen::setReservierungsmerkmal()
     * @uses Type_MassenreservierungKennzeichen::setSortierung()
     */
    public function __construct(?string $kundennummer = null, ?int $anzahlKennzeichen = null, ?\THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen = null, ?string $datumAblaufKennzeichenreservierung = null, ?string $pin = null, ?bool $merkmalVerlaengerungKennzeichenreservierung = null, ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null, ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null)
    {
        $this
            ->setKundennummer($kundennummer)
            ->setAnzahlKennzeichen($anzahlKennzeichen)
            ->setSucheinschraenkungen($sucheinschraenkungen)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung)
            ->setPin($pin)
            ->setMerkmalVerlaengerungKennzeichenreservierung($merkmalVerlaengerungKennzeichenreservierung)
            ->setReservierungsmerkmal($reservierungsmerkmal)
            ->setSortierung($sortierung);
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
     * Get anzahlKennzeichen value
     */
    public function getAnzahlKennzeichen(): ?int
    {
        return $this->anzahlKennzeichen;
    }

    /**
     * Set anzahlKennzeichen value
     */
    public function setAnzahlKennzeichen(?int $anzahlKennzeichen = null): self
    {
        $this->anzahlKennzeichen = $anzahlKennzeichen;

        return $this;
    }

    /**
     * Get sucheinschraenkungen value
     */
    public function getSucheinschraenkungen(): ?\THAG\XKfz\StructType\Type_Kennzeichensuche
    {
        return $this->sucheinschraenkungen;
    }

    /**
     * Set sucheinschraenkungen value
     */
    public function setSucheinschraenkungen(?\THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen = null): self
    {
        $this->sucheinschraenkungen = $sucheinschraenkungen;

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
     * Get sortierung value
     */
    public function getSortierung(): ?\THAG\XKfz\StructType\Code_SortierungKennzeichen
    {
        return $this->sortierung;
    }

    /**
     * Set sortierung value
     */
    public function setSortierung(?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null): self
    {
        $this->sortierung = $sortierung;

        return $this;
    }
}
