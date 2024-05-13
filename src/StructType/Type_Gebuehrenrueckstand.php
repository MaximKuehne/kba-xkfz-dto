<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Gebuehrenrueckstand StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Gebuehrenrueckstand extends AbstractStructBase
{
    /**
     * The Person
     */
    public ?\THAG\XKfz\StructType\Person $Person = null;

    /**
     * The grundDerGebuehrenschuld
     */
    public ?string $grundDerGebuehrenschuld = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The betragDerGebuehrenschuld
     */
    public ?float $betragDerGebuehrenschuld = null;

    /**
     * The datumDerFaelligkeit
     */
    public ?string $datumDerFaelligkeit = null;

    /**
     * The kassenzeichenDerGebuehrenschuld
     */
    public ?string $kassenzeichenDerGebuehrenschuld = null;

    /**
     * The referenzBehoerde
     */
    public ?string $referenzBehoerde = null;

    /**
     * Constructor method for Type.Gebuehrenrueckstand
     *
     * @uses Type_Gebuehrenrueckstand::setPerson()
     * @uses Type_Gebuehrenrueckstand::setGrundDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setKennzeichen()
     * @uses Type_Gebuehrenrueckstand::setBetragDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setDatumDerFaelligkeit()
     * @uses Type_Gebuehrenrueckstand::setKassenzeichenDerGebuehrenschuld()
     * @uses Type_Gebuehrenrueckstand::setReferenzBehoerde()
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
     * Get grundDerGebuehrenschuld value
     */
    public function getGrundDerGebuehrenschuld(): ?string
    {
        return $this->grundDerGebuehrenschuld;
    }

    /**
     * Set grundDerGebuehrenschuld value
     */
    public function setGrundDerGebuehrenschuld(?string $grundDerGebuehrenschuld = null): self
    {
        $this->grundDerGebuehrenschuld = $grundDerGebuehrenschuld;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get betragDerGebuehrenschuld value
     */
    public function getBetragDerGebuehrenschuld(): ?float
    {
        return $this->betragDerGebuehrenschuld;
    }

    /**
     * Set betragDerGebuehrenschuld value
     */
    public function setBetragDerGebuehrenschuld(?float $betragDerGebuehrenschuld = null): self
    {
        $this->betragDerGebuehrenschuld = $betragDerGebuehrenschuld;

        return $this;
    }

    /**
     * Get datumDerFaelligkeit value
     */
    public function getDatumDerFaelligkeit(): ?string
    {
        return $this->datumDerFaelligkeit;
    }

    /**
     * Set datumDerFaelligkeit value
     */
    public function setDatumDerFaelligkeit(?string $datumDerFaelligkeit = null): self
    {
        $this->datumDerFaelligkeit = $datumDerFaelligkeit;

        return $this;
    }

    /**
     * Get kassenzeichenDerGebuehrenschuld value
     */
    public function getKassenzeichenDerGebuehrenschuld(): ?string
    {
        return $this->kassenzeichenDerGebuehrenschuld;
    }

    /**
     * Set kassenzeichenDerGebuehrenschuld value
     */
    public function setKassenzeichenDerGebuehrenschuld(?string $kassenzeichenDerGebuehrenschuld = null): self
    {
        $this->kassenzeichenDerGebuehrenschuld = $kassenzeichenDerGebuehrenschuld;

        return $this;
    }

    /**
     * Get referenzBehoerde value
     */
    public function getReferenzBehoerde(): ?string
    {
        return $this->referenzBehoerde;
    }

    /**
     * Set referenzBehoerde value
     */
    public function setReferenzBehoerde(?string $referenzBehoerde = null): self
    {
        $this->referenzBehoerde = $referenzBehoerde;

        return $this;
    }
}
