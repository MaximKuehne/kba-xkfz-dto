<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.DatenKennzeichenreservierung StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_DatenKennzeichenreservierung extends AbstractStructBase
{
    /**
     * The kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen_1|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;
    /**
     * The Fahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;
    /**
     * The SchluesselHersteller
     * @var string|null
     */
    public ?string $SchluesselHersteller = null;
    /**
     * The DatumErstzulassung
     * @var string|null
     */
    public ?string $DatumErstzulassung = null;
    /**
     * The listeReferenz
     * @var \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;
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
     * The pin
     * @var string|null
     */
    public ?string $pin = null;
    /**
     * The bezahlteGebuehren
     * @var \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null;
    /**
     * Constructor method for Type.DatenKennzeichenreservierung
     * @uses Type_DatenKennzeichenreservierung::setKennzeichen()
     * @uses Type_DatenKennzeichenreservierung::setFahrzeugidentifizierungsnummer()
     * @uses Type_DatenKennzeichenreservierung::setSchluesselHersteller()
     * @uses Type_DatenKennzeichenreservierung::setDatumErstzulassung()
     * @uses Type_DatenKennzeichenreservierung::setListeReferenz()
     * @uses Type_DatenKennzeichenreservierung::setPerson()
     * @uses Type_DatenKennzeichenreservierung::setAnschrift()
     * @uses Type_DatenKennzeichenreservierung::setKundennummer()
     * @uses Type_DatenKennzeichenreservierung::setDatumAblaufKennzeichenreservierung()
     * @uses Type_DatenKennzeichenreservierung::setReservierungsmerkmal()
     * @uses Type_DatenKennzeichenreservierung::setMerkmalWunschkennzeichen()
     * @uses Type_DatenKennzeichenreservierung::setPin()
     * @uses Type_DatenKennzeichenreservierung::setBezahlteGebuehren()
     * @param \THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen
     * @param string $fahrzeugidentifizierungsnummer
     * @param string $schluesselHersteller
     * @param string $datumErstzulassung
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     * @param \THAG\XKfz\StructType\Person $person
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param string $kundennummer
     * @param string $datumAblaufKennzeichenreservierung
     * @param \THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal
     * @param bool $merkmalWunschkennzeichen
     * @param string $pin
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren
     */
    public function __construct(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null, ?string $fahrzeugidentifizierungsnummer = null, ?string $schluesselHersteller = null, ?string $datumErstzulassung = null, ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null, ?\THAG\XKfz\StructType\Person $person = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?string $kundennummer = null, ?string $datumAblaufKennzeichenreservierung = null, ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null, ?bool $merkmalWunschkennzeichen = null, ?string $pin = null, ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null)
    {
        $this
            ->setKennzeichen($kennzeichen)
            ->setFahrzeugidentifizierungsnummer($fahrzeugidentifizierungsnummer)
            ->setSchluesselHersteller($schluesselHersteller)
            ->setDatumErstzulassung($datumErstzulassung)
            ->setListeReferenz($listeReferenz)
            ->setPerson($person)
            ->setAnschrift($anschrift)
            ->setKundennummer($kundennummer)
            ->setDatumAblaufKennzeichenreservierung($datumAblaufKennzeichenreservierung)
            ->setReservierungsmerkmal($reservierungsmerkmal)
            ->setMerkmalWunschkennzeichen($merkmalWunschkennzeichen)
            ->setPin($pin)
            ->setBezahlteGebuehren($bezahlteGebuehren);
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null): self
    {
        $this->kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Fahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }
    /**
     * Set Fahrzeugidentifizierungsnummer value
     * @param string $fahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get SchluesselHersteller value
     * @return string|null
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }
    /**
     * Set SchluesselHersteller value
     * @param string $schluesselHersteller
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;
        
        return $this;
    }
    /**
     * Get DatumErstzulassung value
     * @return string|null
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }
    /**
     * Set DatumErstzulassung value
     * @param string $datumErstzulassung
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;
        
        return $this;
    }
    /**
     * Get listeReferenz value
     * @return \THAG\XKfz\StructType\Type_ListeReferenz|null
     */
    public function getListeReferenz(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenz;
    }
    /**
     * Set listeReferenz value
     * @param \THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setListeReferenz(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null): self
    {
        $this->listeReferenz = $listeReferenz;
        
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setDatumAblaufKennzeichenreservierung(?string $datumAblaufKennzeichenreservierung = null): self
    {
        $this->DatumAblaufKennzeichenreservierung = $datumAblaufKennzeichenreservierung;
        
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setMerkmalWunschkennzeichen(?bool $merkmalWunschkennzeichen = null): self
    {
        $this->merkmalWunschkennzeichen = $merkmalWunschkennzeichen;
        
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
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setPin(?string $pin = null): self
    {
        $this->pin = $pin;
        
        return $this;
    }
    /**
     * Get bezahlteGebuehren value
     * @return \THAG\XKfz\StructType\Type_ListeGebuehrenposition|null
     */
    public function getBezahlteGebuehren(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->bezahlteGebuehren;
    }
    /**
     * Set bezahlteGebuehren value
     * @param \THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren
     * @return \THAG\XKfz\StructType\Type_DatenKennzeichenreservierung
     */
    public function setBezahlteGebuehren(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null): self
    {
        $this->bezahlteGebuehren = $bezahlteGebuehren;
        
        return $this;
    }
}
