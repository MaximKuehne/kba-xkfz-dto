<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenrueckstand StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The Person
     * @var \THAG\XKfz\StructType\Person|null
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;
    /**
     * The grundDerGebuehrenschuld
     * @var string|null
     */
    public ?string $grundDerGebuehrenschuld = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The betragDerGebuehrenschuld
     * @var float|null
     */
    public ?float $betragDerGebuehrenschuld = null;
    /**
     * The datumDerFaelligkeit
     * @var string|null
     */
    public ?string $datumDerFaelligkeit = null;
    /**
     * The kassenzeichenDerGebuehrenschuld
     * @var string|null
     */
    public ?string $kassenzeichenDerGebuehrenschuld = null;
    /**
     * The referenzBehoerde
     * @var string|null
     */
    public ?string $referenzBehoerde = null;
    /**
     * Constructor method for Type.Gebuehrenrueckstand
     * @uses Type_Gebuehrenrueckstand::setPerson()
     * @uses Type_Gebuehrenrueckstand::setGrundDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setKennzeichen()
     * @uses Type_Gebuehrenrueckstand::setBetragDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setDatumDerFaelligkeit()
     * @uses Type_Gebuehrenrueckstand::setKassenzeichenDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setReferenzBehoerde()
     * @param \THAG\XKfz\StructType\Person $person
     * @param string $grundDerGebuehrenschuld
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param float $betragDerGebuehrenschuld
     * @param string $datumDerFaelligkeit
     * @param string $kassenzeichenDerGebuehrenschuld
     * @param string $referenzBehoerde
     */
    public function __construct(?\THAG\XKfz\StructType\Person $person = null, ?string $grundDerGebuehrenschuld = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?float $betragDerGebuehrenschuld = null, ?string $datumDerFaelligkeit = null, ?string $kassenzeichenDerGebuehrenschuld = null, ?string $referenzBehoerde = null)
    {
        $this
            ->setPerson($person)
            ->setGrundDerGebuehrenschuld($grundDerGebuehrenschuld)
            ->setKennzeichen($kennzeichen)
            ->setBetragDerGebuehrenschuld($betragDerGebuehrenschuld)
            ->setDatumDerFaelligkeit($datumDerFaelligkeit)
            ->setKassenzeichenDerGebuehrenschuld($kassenzeichenDerGebuehrenschuld)
            ->setReferenzBehoerde($referenzBehoerde);
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
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setPerson(?\THAG\XKfz\StructType\Person $person = null): self
    {
        $this->Person = $person;
        
        return $this;
    }
    /**
     * Get grundDerGebuehrenschuld value
     * @return string|null
     */
    public function getGrundDerGebuehrenschuld(): ?string
    {
        return $this->grundDerGebuehrenschuld;
    }
    /**
     * Set grundDerGebuehrenschuld value
     * @param string $grundDerGebuehrenschuld
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setGrundDerGebuehrenschuld(?string $grundDerGebuehrenschuld = null): self
    {
        $this->grundDerGebuehrenschuld = $grundDerGebuehrenschuld;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get betragDerGebuehrenschuld value
     * @return float|null
     */
    public function getBetragDerGebuehrenschuld(): ?float
    {
        return $this->betragDerGebuehrenschuld;
    }
    /**
     * Set betragDerGebuehrenschuld value
     * @param float $betragDerGebuehrenschuld
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setBetragDerGebuehrenschuld(?float $betragDerGebuehrenschuld = null): self
    {
        $this->betragDerGebuehrenschuld = $betragDerGebuehrenschuld;
        
        return $this;
    }
    /**
     * Get datumDerFaelligkeit value
     * @return string|null
     */
    public function getDatumDerFaelligkeit(): ?string
    {
        return $this->datumDerFaelligkeit;
    }
    /**
     * Set datumDerFaelligkeit value
     * @param string $datumDerFaelligkeit
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setDatumDerFaelligkeit(?string $datumDerFaelligkeit = null): self
    {
        $this->datumDerFaelligkeit = $datumDerFaelligkeit;
        
        return $this;
    }
    /**
     * Get kassenzeichenDerGebuehrenschuld value
     * @return string|null
     */
    public function getKassenzeichenDerGebuehrenschuld(): ?string
    {
        return $this->kassenzeichenDerGebuehrenschuld;
    }
    /**
     * Set kassenzeichenDerGebuehrenschuld value
     * @param string $kassenzeichenDerGebuehrenschuld
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setKassenzeichenDerGebuehrenschuld(?string $kassenzeichenDerGebuehrenschuld = null): self
    {
        $this->kassenzeichenDerGebuehrenschuld = $kassenzeichenDerGebuehrenschuld;
        
        return $this;
    }
    /**
     * Get referenzBehoerde value
     * @return string|null
     */
    public function getReferenzBehoerde(): ?string
    {
        return $this->referenzBehoerde;
    }
    /**
     * Set referenzBehoerde value
     * @param string $referenzBehoerde
     * @return \THAG\XKfz\StructType\Type_Gebuehrenrueckstand
     */
    public function setReferenzBehoerde(?string $referenzBehoerde = null): self
    {
        $this->referenzBehoerde = $referenzBehoerde;
        
        return $this;
    }
}
