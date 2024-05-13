<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.VorgangskomponenteAutonomesFahren StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_VorgangskomponenteAutonomesFahren extends AbstractStructBase
{
    /**
     * The NummerBetriebserlaubnis
     * @var string|null
     */
    public ?string $NummerBetriebserlaubnis = null;
    /**
     * The DatumBetriebserlaubnis
     * @var string|null
     */
    public ?string $DatumBetriebserlaubnis = null;
    /**
     * The AusstellendeBehoerdeBetriebserlaubnis
     * @var string|null
     */
    public ?string $AusstellendeBehoerdeBetriebserlaubnis = null;
    /**
     * The NummerErprobungsgenehmigung
     * @var string|null
     */
    public ?string $NummerErprobungsgenehmigung = null;
    /**
     * The DatumErprobungsgenehmigung
     * @var string|null
     */
    public ?string $DatumErprobungsgenehmigung = null;
    /**
     * The AusstellendeBehoerdeErprobungsgenehmigung
     * @var string|null
     */
    public ?string $AusstellendeBehoerdeErprobungsgenehmigung = null;
    /**
     * The NummerBetriebsbereichsgenehmigung
     * @var string|null
     */
    public ?string $NummerBetriebsbereichsgenehmigung = null;
    /**
     * The DatumBetriebsbereichsgenehmigung
     * @var string|null
     */
    public ?string $DatumBetriebsbereichsgenehmigung = null;
    /**
     * The AusstellendeBehoerdeBetriebsbereichsgenehmigung
     * @var string|null
     */
    public ?string $AusstellendeBehoerdeBetriebsbereichsgenehmigung = null;
    /**
     * The AngabeAusruestung
     * @var string|null
     */
    public ?string $AngabeAusruestung = null;
    /**
     * Constructor method for Type.VorgangskomponenteAutonomesFahren
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
     * @param string $nummerBetriebserlaubnis
     * @param string $datumBetriebserlaubnis
     * @param string $ausstellendeBehoerdeBetriebserlaubnis
     * @param string $nummerErprobungsgenehmigung
     * @param string $datumErprobungsgenehmigung
     * @param string $ausstellendeBehoerdeErprobungsgenehmigung
     * @param string $nummerBetriebsbereichsgenehmigung
     * @param string $datumBetriebsbereichsgenehmigung
     * @param string $ausstellendeBehoerdeBetriebsbereichsgenehmigung
     * @param string $angabeAusruestung
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
     * @return string|null
     */
    public function getNummerBetriebserlaubnis(): ?string
    {
        return $this->NummerBetriebserlaubnis;
    }
    /**
     * Set NummerBetriebserlaubnis value
     * @param string $nummerBetriebserlaubnis
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setNummerBetriebserlaubnis(?string $nummerBetriebserlaubnis = null): self
    {
        $this->NummerBetriebserlaubnis = $nummerBetriebserlaubnis;
        
        return $this;
    }
    /**
     * Get DatumBetriebserlaubnis value
     * @return string|null
     */
    public function getDatumBetriebserlaubnis(): ?string
    {
        return $this->DatumBetriebserlaubnis;
    }
    /**
     * Set DatumBetriebserlaubnis value
     * @param string $datumBetriebserlaubnis
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setDatumBetriebserlaubnis(?string $datumBetriebserlaubnis = null): self
    {
        $this->DatumBetriebserlaubnis = $datumBetriebserlaubnis;
        
        return $this;
    }
    /**
     * Get AusstellendeBehoerdeBetriebserlaubnis value
     * @return string|null
     */
    public function getAusstellendeBehoerdeBetriebserlaubnis(): ?string
    {
        return $this->AusstellendeBehoerdeBetriebserlaubnis;
    }
    /**
     * Set AusstellendeBehoerdeBetriebserlaubnis value
     * @param string $ausstellendeBehoerdeBetriebserlaubnis
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setAusstellendeBehoerdeBetriebserlaubnis(?string $ausstellendeBehoerdeBetriebserlaubnis = null): self
    {
        $this->AusstellendeBehoerdeBetriebserlaubnis = $ausstellendeBehoerdeBetriebserlaubnis;
        
        return $this;
    }
    /**
     * Get NummerErprobungsgenehmigung value
     * @return string|null
     */
    public function getNummerErprobungsgenehmigung(): ?string
    {
        return $this->NummerErprobungsgenehmigung;
    }
    /**
     * Set NummerErprobungsgenehmigung value
     * @param string $nummerErprobungsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setNummerErprobungsgenehmigung(?string $nummerErprobungsgenehmigung = null): self
    {
        $this->NummerErprobungsgenehmigung = $nummerErprobungsgenehmigung;
        
        return $this;
    }
    /**
     * Get DatumErprobungsgenehmigung value
     * @return string|null
     */
    public function getDatumErprobungsgenehmigung(): ?string
    {
        return $this->DatumErprobungsgenehmigung;
    }
    /**
     * Set DatumErprobungsgenehmigung value
     * @param string $datumErprobungsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setDatumErprobungsgenehmigung(?string $datumErprobungsgenehmigung = null): self
    {
        $this->DatumErprobungsgenehmigung = $datumErprobungsgenehmigung;
        
        return $this;
    }
    /**
     * Get AusstellendeBehoerdeErprobungsgenehmigung value
     * @return string|null
     */
    public function getAusstellendeBehoerdeErprobungsgenehmigung(): ?string
    {
        return $this->AusstellendeBehoerdeErprobungsgenehmigung;
    }
    /**
     * Set AusstellendeBehoerdeErprobungsgenehmigung value
     * @param string $ausstellendeBehoerdeErprobungsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setAusstellendeBehoerdeErprobungsgenehmigung(?string $ausstellendeBehoerdeErprobungsgenehmigung = null): self
    {
        $this->AusstellendeBehoerdeErprobungsgenehmigung = $ausstellendeBehoerdeErprobungsgenehmigung;
        
        return $this;
    }
    /**
     * Get NummerBetriebsbereichsgenehmigung value
     * @return string|null
     */
    public function getNummerBetriebsbereichsgenehmigung(): ?string
    {
        return $this->NummerBetriebsbereichsgenehmigung;
    }
    /**
     * Set NummerBetriebsbereichsgenehmigung value
     * @param string $nummerBetriebsbereichsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setNummerBetriebsbereichsgenehmigung(?string $nummerBetriebsbereichsgenehmigung = null): self
    {
        $this->NummerBetriebsbereichsgenehmigung = $nummerBetriebsbereichsgenehmigung;
        
        return $this;
    }
    /**
     * Get DatumBetriebsbereichsgenehmigung value
     * @return string|null
     */
    public function getDatumBetriebsbereichsgenehmigung(): ?string
    {
        return $this->DatumBetriebsbereichsgenehmigung;
    }
    /**
     * Set DatumBetriebsbereichsgenehmigung value
     * @param string $datumBetriebsbereichsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setDatumBetriebsbereichsgenehmigung(?string $datumBetriebsbereichsgenehmigung = null): self
    {
        $this->DatumBetriebsbereichsgenehmigung = $datumBetriebsbereichsgenehmigung;
        
        return $this;
    }
    /**
     * Get AusstellendeBehoerdeBetriebsbereichsgenehmigung value
     * @return string|null
     */
    public function getAusstellendeBehoerdeBetriebsbereichsgenehmigung(): ?string
    {
        return $this->AusstellendeBehoerdeBetriebsbereichsgenehmigung;
    }
    /**
     * Set AusstellendeBehoerdeBetriebsbereichsgenehmigung value
     * @param string $ausstellendeBehoerdeBetriebsbereichsgenehmigung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setAusstellendeBehoerdeBetriebsbereichsgenehmigung(?string $ausstellendeBehoerdeBetriebsbereichsgenehmigung = null): self
    {
        $this->AusstellendeBehoerdeBetriebsbereichsgenehmigung = $ausstellendeBehoerdeBetriebsbereichsgenehmigung;
        
        return $this;
    }
    /**
     * Get AngabeAusruestung value
     * @return string|null
     */
    public function getAngabeAusruestung(): ?string
    {
        return $this->AngabeAusruestung;
    }
    /**
     * Set AngabeAusruestung value
     * @param string $angabeAusruestung
     * @return \THAG\XKfz\StructType\Type_VorgangskomponenteAutonomesFahren
     */
    public function setAngabeAusruestung(?string $angabeAusruestung = null): self
    {
        $this->AngabeAusruestung = $angabeAusruestung;
        
        return $this;
    }
}
