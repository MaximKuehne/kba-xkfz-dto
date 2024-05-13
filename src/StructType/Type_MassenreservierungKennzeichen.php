<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.MassenreservierungKennzeichen StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_MassenreservierungKennzeichen extends AbstractStructBase
{
    /**
     * The kundennummer
     * @var string|null
     */
    public ?string $kundennummer = null;
    /**
     * The anzahlKennzeichen
     * @var int|null
     */
    public ?int $anzahlKennzeichen = null;
    /**
     * The sucheinschraenkungen
     * @var \THAG\XKfz\StructType\Type_Kennzeichensuche|null
     */
    public ?\THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen = null;
    /**
     * The DatumAblaufKennzeichenreservierung
     * @var string|null
     */
    public ?string $DatumAblaufKennzeichenreservierung = null;
    /**
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
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
     * The sortierung
     * @var \THAG\XKfz\StructType\Code_SortierungKennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null;
    /**
     * Constructor method for Type.MassenreservierungKennzeichen
     * @uses Type_MassenreservierungKennzeichen::setKundennummer()
     * @uses Type_MassenreservierungKennzeichen::setAnzahlKennzeichen()
     * @uses Type_MassenreservierungKennzeichen::setSucheinschraenkungen()
     * @uses Type_MassenreservierungKennzeichen::setDatumAblaufKennzeichenreservierung()
     * @uses Type_MassenreservierungKennzeichen::setPin()
     * @uses Type_MassenreservierungKennzeichen::setMerkmalVerlaengerungKennzeichenreservierung()
     * @uses Type_MassenreservierungKennzeichen::setReservierungsmerkmal()
     * @uses Type_MassenreservierungKennzeichen::setSortierung()
     * @param string $kundennummer
     * @param int $anzahlKennzeichen
     * @param \THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen
     * @param string $datumAblaufKennzeichenreservierung
     * @param string $pin
     * @param bool $merkmalVerlaengerungKennzeichenreservierung
     * @param \THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal
     * @param \THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung
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
     * @return string|null
     */
    public function getKundennummer(): ?string
    {
        return $this->kundennummer;
    }
    /**
     * Set kundennummer value
     * @param string $kundennummer
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setKundennummer(?string $kundennummer = null): self
    {
        $this->kundennummer = $kundennummer;
        
        return $this;
    }
    /**
     * Get anzahlKennzeichen value
     * @return int|null
     */
    public function getAnzahlKennzeichen(): ?int
    {
        return $this->anzahlKennzeichen;
    }
    /**
     * Set anzahlKennzeichen value
     * @param int $anzahlKennzeichen
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setAnzahlKennzeichen(?int $anzahlKennzeichen = null): self
    {
        $this->anzahlKennzeichen = $anzahlKennzeichen;
        
        return $this;
    }
    /**
     * Get sucheinschraenkungen value
     * @return \THAG\XKfz\StructType\Type_Kennzeichensuche|null
     */
    public function getSucheinschraenkungen(): ?\THAG\XKfz\StructType\Type_Kennzeichensuche
    {
        return $this->sucheinschraenkungen;
    }
    /**
     * Set sucheinschraenkungen value
     * @param \THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setSucheinschraenkungen(?\THAG\XKfz\StructType\Type_Kennzeichensuche $sucheinschraenkungen = null): self
    {
        $this->sucheinschraenkungen = $sucheinschraenkungen;
        
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
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
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
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
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
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
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
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setReservierungsmerkmal(?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null): self
    {
        $this->reservierungsmerkmal = $reservierungsmerkmal;
        
        return $this;
    }
    /**
     * Get sortierung value
     * @return \THAG\XKfz\StructType\Code_SortierungKennzeichen|null
     */
    public function getSortierung(): ?\THAG\XKfz\StructType\Code_SortierungKennzeichen
    {
        return $this->sortierung;
    }
    /**
     * Set sortierung value
     * @param \THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung
     * @return \THAG\XKfz\StructType\Type_MassenreservierungKennzeichen
     */
    public function setSortierung(?\THAG\XKfz\StructType\Code_SortierungKennzeichen $sortierung = null): self
    {
        $this->sortierung = $sortierung;
        
        return $this;
    }
}
