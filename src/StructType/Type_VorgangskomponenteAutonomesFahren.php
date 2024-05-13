<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAutonomesFahren StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAutonomesFahren extends AbstractStructBase
{
    /**
     * The NummerBetriebserlaubnis
     */
    public ?string $NummerBetriebserlaubnis = null;

    /**
     * The DatumBetriebserlaubnis
     */
    public ?string $DatumBetriebserlaubnis = null;

    /**
     * The AusstellendeBehoerdeBetriebserlaubnis
     */
    public ?string $AusstellendeBehoerdeBetriebserlaubnis = null;

    /**
     * The NummerErprobungsgenehmigung
     */
    public ?string $NummerErprobungsgenehmigung = null;

    /**
     * The DatumErprobungsgenehmigung
     */
    public ?string $DatumErprobungsgenehmigung = null;

    /**
     * The AusstellendeBehoerdeErprobungsgenehmigung
     */
    public ?string $AusstellendeBehoerdeErprobungsgenehmigung = null;

    /**
     * The NummerBetriebsbereichsgenehmigung
     */
    public ?string $NummerBetriebsbereichsgenehmigung = null;

    /**
     * The DatumBetriebsbereichsgenehmigung
     */
    public ?string $DatumBetriebsbereichsgenehmigung = null;

    /**
     * The AusstellendeBehoerdeBetriebsbereichsgenehmigung
     */
    public ?string $AusstellendeBehoerdeBetriebsbereichsgenehmigung = null;

    /**
     * The AngabeAusruestung
     */
    public ?string $AngabeAusruestung = null;

    /**
     * Constructor method for Type.VorgangskomponenteAutonomesFahren
     *
     * @uses Type_VorgangskomponenteAutonomesFahren::setNummerBetriebserlaubnis()
     * @uses Type_VorgangskomponenteAutonomesFahren::setDatumBetriebserlaubnis()
     * @uses Type_VorgangskomponenteAutonomesFahren::setAusstellendeBehoerdeBetriebserlaubnis()
     * @uses Type_VorgangskomponenteAutonomesFahren::setNummerErprobungsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setDatumErprobungsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setAusstellendeBehoerdeErprobungsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setNummerBetriebsbereichsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setDatumBetriebsbereichsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setAusstellendeBehoerdeBetriebsbereichsgenehmigung()
     * @uses Type_VorgangskomponenteAutonomesFahren::setAngabeAusruestung()
     */
    public function __construct(?string $nummerBetriebserlaubnis = null, ?string $datumBetriebserlaubnis = null, ?string $ausstellendeBehoerdeBetriebserlaubnis = null, ?string $nummerErprobungsgenehmigung = null, ?string $datumErprobungsgenehmigung = null, ?string $ausstellendeBehoerdeErprobungsgenehmigung = null, ?string $nummerBetriebsbereichsgenehmigung = null, ?string $datumBetriebsbereichsgenehmigung = null, ?string $ausstellendeBehoerdeBetriebsbereichsgenehmigung = null, ?string $angabeAusruestung = null)
    {
        $this
            ->setNummerBetriebserlaubnis($nummerBetriebserlaubnis)
            ->setDatumBetriebserlaubnis($datumBetriebserlaubnis)
            ->setAusstellendeBehoerdeBetriebserlaubnis($ausstellendeBehoerdeBetriebserlaubnis)
            ->setNummerErprobungsgenehmigung($nummerErprobungsgenehmigung)
            ->setDatumErprobungsgenehmigung($datumErprobungsgenehmigung)
            ->setAusstellendeBehoerdeErprobungsgenehmigung($ausstellendeBehoerdeErprobungsgenehmigung)
            ->setNummerBetriebsbereichsgenehmigung($nummerBetriebsbereichsgenehmigung)
            ->setDatumBetriebsbereichsgenehmigung($datumBetriebsbereichsgenehmigung)
            ->setAusstellendeBehoerdeBetriebsbereichsgenehmigung($ausstellendeBehoerdeBetriebsbereichsgenehmigung)
            ->setAngabeAusruestung($angabeAusruestung);
    }

    /**
     * Get NummerBetriebserlaubnis value
     */
    public function getNummerBetriebserlaubnis(): ?string
    {
        return $this->NummerBetriebserlaubnis;
    }

    /**
     * Set NummerBetriebserlaubnis value
     */
    public function setNummerBetriebserlaubnis(?string $nummerBetriebserlaubnis = null): self
    {
        $this->NummerBetriebserlaubnis = $nummerBetriebserlaubnis;

        return $this;
    }

    /**
     * Get DatumBetriebserlaubnis value
     */
    public function getDatumBetriebserlaubnis(): ?string
    {
        return $this->DatumBetriebserlaubnis;
    }

    /**
     * Set DatumBetriebserlaubnis value
     */
    public function setDatumBetriebserlaubnis(?string $datumBetriebserlaubnis = null): self
    {
        $this->DatumBetriebserlaubnis = $datumBetriebserlaubnis;

        return $this;
    }

    /**
     * Get AusstellendeBehoerdeBetriebserlaubnis value
     */
    public function getAusstellendeBehoerdeBetriebserlaubnis(): ?string
    {
        return $this->AusstellendeBehoerdeBetriebserlaubnis;
    }

    /**
     * Set AusstellendeBehoerdeBetriebserlaubnis value
     */
    public function setAusstellendeBehoerdeBetriebserlaubnis(?string $ausstellendeBehoerdeBetriebserlaubnis = null): self
    {
        $this->AusstellendeBehoerdeBetriebserlaubnis = $ausstellendeBehoerdeBetriebserlaubnis;

        return $this;
    }

    /**
     * Get NummerErprobungsgenehmigung value
     */
    public function getNummerErprobungsgenehmigung(): ?string
    {
        return $this->NummerErprobungsgenehmigung;
    }

    /**
     * Set NummerErprobungsgenehmigung value
     */
    public function setNummerErprobungsgenehmigung(?string $nummerErprobungsgenehmigung = null): self
    {
        $this->NummerErprobungsgenehmigung = $nummerErprobungsgenehmigung;

        return $this;
    }

    /**
     * Get DatumErprobungsgenehmigung value
     */
    public function getDatumErprobungsgenehmigung(): ?string
    {
        return $this->DatumErprobungsgenehmigung;
    }

    /**
     * Set DatumErprobungsgenehmigung value
     */
    public function setDatumErprobungsgenehmigung(?string $datumErprobungsgenehmigung = null): self
    {
        $this->DatumErprobungsgenehmigung = $datumErprobungsgenehmigung;

        return $this;
    }

    /**
     * Get AusstellendeBehoerdeErprobungsgenehmigung value
     */
    public function getAusstellendeBehoerdeErprobungsgenehmigung(): ?string
    {
        return $this->AusstellendeBehoerdeErprobungsgenehmigung;
    }

    /**
     * Set AusstellendeBehoerdeErprobungsgenehmigung value
     */
    public function setAusstellendeBehoerdeErprobungsgenehmigung(?string $ausstellendeBehoerdeErprobungsgenehmigung = null): self
    {
        $this->AusstellendeBehoerdeErprobungsgenehmigung = $ausstellendeBehoerdeErprobungsgenehmigung;

        return $this;
    }

    /**
     * Get NummerBetriebsbereichsgenehmigung value
     */
    public function getNummerBetriebsbereichsgenehmigung(): ?string
    {
        return $this->NummerBetriebsbereichsgenehmigung;
    }

    /**
     * Set NummerBetriebsbereichsgenehmigung value
     */
    public function setNummerBetriebsbereichsgenehmigung(?string $nummerBetriebsbereichsgenehmigung = null): self
    {
        $this->NummerBetriebsbereichsgenehmigung = $nummerBetriebsbereichsgenehmigung;

        return $this;
    }

    /**
     * Get DatumBetriebsbereichsgenehmigung value
     */
    public function getDatumBetriebsbereichsgenehmigung(): ?string
    {
        return $this->DatumBetriebsbereichsgenehmigung;
    }

    /**
     * Set DatumBetriebsbereichsgenehmigung value
     */
    public function setDatumBetriebsbereichsgenehmigung(?string $datumBetriebsbereichsgenehmigung = null): self
    {
        $this->DatumBetriebsbereichsgenehmigung = $datumBetriebsbereichsgenehmigung;

        return $this;
    }

    /**
     * Get AusstellendeBehoerdeBetriebsbereichsgenehmigung value
     */
    public function getAusstellendeBehoerdeBetriebsbereichsgenehmigung(): ?string
    {
        return $this->AusstellendeBehoerdeBetriebsbereichsgenehmigung;
    }

    /**
     * Set AusstellendeBehoerdeBetriebsbereichsgenehmigung value
     */
    public function setAusstellendeBehoerdeBetriebsbereichsgenehmigung(?string $ausstellendeBehoerdeBetriebsbereichsgenehmigung = null): self
    {
        $this->AusstellendeBehoerdeBetriebsbereichsgenehmigung = $ausstellendeBehoerdeBetriebsbereichsgenehmigung;

        return $this;
    }

    /**
     * Get AngabeAusruestung value
     */
    public function getAngabeAusruestung(): ?string
    {
        return $this->AngabeAusruestung;
    }

    /**
     * Set AngabeAusruestung value
     */
    public function setAngabeAusruestung(?string $angabeAusruestung = null): self
    {
        $this->AngabeAusruestung = $angabeAusruestung;

        return $this;
    }
}
