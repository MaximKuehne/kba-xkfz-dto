<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.DatenKennzeichenreservierung StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_DatenKennzeichenreservierung extends AbstractStructBase
{
    /**
     * The kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen_1 $kennzeichen = null;

    /**
     * The Fahrzeugidentifizierungsnummer
     */
    public ?string $Fahrzeugidentifizierungsnummer = null;

    /**
     * The SchluesselHersteller
     */
    public ?string $SchluesselHersteller = null;

    /**
     * The DatumErstzulassung
     */
    public ?string $DatumErstzulassung = null;

    /**
     * The listeReferenz
     */
    public ?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null;

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
     * The reservierungsmerkmal
     */
    public ?\THAG\XKfz\StructType\Type_Reservierungsmerkmal $reservierungsmerkmal = null;

    /**
     * The merkmalWunschkennzeichen
     */
    public ?bool $merkmalWunschkennzeichen = null;

    /**
     * The pin
     */
    public ?string $pin = null;

    /**
     * The bezahlteGebuehren
     */
    public ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null;

    /**
     * Constructor method for Type.DatenKennzeichenreservierung
     *
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
     * Get Fahrzeugidentifizierungsnummer value
     */
    public function getFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->Fahrzeugidentifizierungsnummer;
    }

    /**
     * Set Fahrzeugidentifizierungsnummer value
     */
    public function setFahrzeugidentifizierungsnummer(?string $fahrzeugidentifizierungsnummer = null): self
    {
        $this->Fahrzeugidentifizierungsnummer = $fahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get SchluesselHersteller value
     */
    public function getSchluesselHersteller(): ?string
    {
        return $this->SchluesselHersteller;
    }

    /**
     * Set SchluesselHersteller value
     */
    public function setSchluesselHersteller(?string $schluesselHersteller = null): self
    {
        $this->SchluesselHersteller = $schluesselHersteller;

        return $this;
    }

    /**
     * Get DatumErstzulassung value
     */
    public function getDatumErstzulassung(): ?string
    {
        return $this->DatumErstzulassung;
    }

    /**
     * Set DatumErstzulassung value
     */
    public function setDatumErstzulassung(?string $datumErstzulassung = null): self
    {
        $this->DatumErstzulassung = $datumErstzulassung;

        return $this;
    }

    /**
     * Get listeReferenz value
     */
    public function getListeReferenz(): ?\THAG\XKfz\StructType\Type_ListeReferenz
    {
        return $this->listeReferenz;
    }

    /**
     * Set listeReferenz value
     */
    public function setListeReferenz(?\THAG\XKfz\StructType\Type_ListeReferenz $listeReferenz = null): self
    {
        $this->listeReferenz = $listeReferenz;

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
     * Get bezahlteGebuehren value
     */
    public function getBezahlteGebuehren(): ?\THAG\XKfz\StructType\Type_ListeGebuehrenposition
    {
        return $this->bezahlteGebuehren;
    }

    /**
     * Set bezahlteGebuehren value
     */
    public function setBezahlteGebuehren(?\THAG\XKfz\StructType\Type_ListeGebuehrenposition $bezahlteGebuehren = null): self
    {
        $this->bezahlteGebuehren = $bezahlteGebuehren;

        return $this;
    }
}
