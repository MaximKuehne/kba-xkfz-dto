<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NatuerlichePerson StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NatuerlichePerson extends AbstractStructBase
{
    /**
     * The FamiliennameNachname
     */
    public ?string $FamiliennameNachname = null;

    /**
     * The FamiliennameNamensbestandteil
     */
    public ?string $FamiliennameNamensbestandteil = null;

    /**
     * The GeburtsnameNachname
     */
    public ?string $GeburtsnameNachname = null;

    /**
     * The GeburtsnameNamensbestandteil
     */
    public ?string $GeburtsnameNamensbestandteil = null;

    /**
     * The Vorname
     */
    public ?string $Vorname = null;

    /**
     * The Ordensname
     */
    public ?string $Ordensname = null;

    /**
     * The Kuenstlername
     */
    public ?string $Kuenstlername = null;

    /**
     * The geburt
     */
    public ?\THAG\XKfz\StructType\Type_Geburt $geburt = null;

    /**
     * Constructor method for Type.NatuerlichePerson
     *
     * @uses Type_NatuerlichePerson::setFamiliennameNachname()
     * @uses Type_NatuerlichePerson::setFamiliennameNamensbestandteil()
     * @uses Type_NatuerlichePerson::setGeburtsnameNachname()
     * @uses Type_NatuerlichePerson::setGeburtsnameNamensbestandteil()
     * @uses Type_NatuerlichePerson::setVorname()
     * @uses Type_NatuerlichePerson::setOrdensname()
     * @uses Type_NatuerlichePerson::setKuenstlername()
     * @uses Type_NatuerlichePerson::setGeburt()
     */
    public function __construct(?string $familiennameNachname = null, ?string $familiennameNamensbestandteil = null, ?string $geburtsnameNachname = null, ?string $geburtsnameNamensbestandteil = null, ?string $vorname = null, ?string $ordensname = null, ?string $kuenstlername = null, ?\THAG\XKfz\StructType\Type_Geburt $geburt = null)
    {
        $this
            ->setFamiliennameNachname($familiennameNachname)
            ->setFamiliennameNamensbestandteil($familiennameNamensbestandteil)
            ->setGeburtsnameNachname($geburtsnameNachname)
            ->setGeburtsnameNamensbestandteil($geburtsnameNamensbestandteil)
            ->setVorname($vorname)
            ->setOrdensname($ordensname)
            ->setKuenstlername($kuenstlername)
            ->setGeburt($geburt);
    }

    /**
     * Get FamiliennameNachname value
     */
    public function getFamiliennameNachname(): ?string
    {
        return $this->FamiliennameNachname;
    }

    /**
     * Set FamiliennameNachname value
     */
    public function setFamiliennameNachname(?string $familiennameNachname = null): self
    {
        $this->FamiliennameNachname = $familiennameNachname;

        return $this;
    }

    /**
     * Get FamiliennameNamensbestandteil value
     */
    public function getFamiliennameNamensbestandteil(): ?string
    {
        return $this->FamiliennameNamensbestandteil;
    }

    /**
     * Set FamiliennameNamensbestandteil value
     */
    public function setFamiliennameNamensbestandteil(?string $familiennameNamensbestandteil = null): self
    {
        $this->FamiliennameNamensbestandteil = $familiennameNamensbestandteil;

        return $this;
    }

    /**
     * Get GeburtsnameNachname value
     */
    public function getGeburtsnameNachname(): ?string
    {
        return $this->GeburtsnameNachname;
    }

    /**
     * Set GeburtsnameNachname value
     */
    public function setGeburtsnameNachname(?string $geburtsnameNachname = null): self
    {
        $this->GeburtsnameNachname = $geburtsnameNachname;

        return $this;
    }

    /**
     * Get GeburtsnameNamensbestandteil value
     */
    public function getGeburtsnameNamensbestandteil(): ?string
    {
        return $this->GeburtsnameNamensbestandteil;
    }

    /**
     * Set GeburtsnameNamensbestandteil value
     */
    public function setGeburtsnameNamensbestandteil(?string $geburtsnameNamensbestandteil = null): self
    {
        $this->GeburtsnameNamensbestandteil = $geburtsnameNamensbestandteil;

        return $this;
    }

    /**
     * Get Vorname value
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }

    /**
     * Set Vorname value
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;

        return $this;
    }

    /**
     * Get Ordensname value
     */
    public function getOrdensname(): ?string
    {
        return $this->Ordensname;
    }

    /**
     * Set Ordensname value
     */
    public function setOrdensname(?string $ordensname = null): self
    {
        $this->Ordensname = $ordensname;

        return $this;
    }

    /**
     * Get Kuenstlername value
     */
    public function getKuenstlername(): ?string
    {
        return $this->Kuenstlername;
    }

    /**
     * Set Kuenstlername value
     */
    public function setKuenstlername(?string $kuenstlername = null): self
    {
        $this->Kuenstlername = $kuenstlername;

        return $this;
    }

    /**
     * Get geburt value
     */
    public function getGeburt(): ?\THAG\XKfz\StructType\Type_Geburt
    {
        return $this->geburt;
    }

    /**
     * Set geburt value
     */
    public function setGeburt(?\THAG\XKfz\StructType\Type_Geburt $geburt = null): self
    {
        $this->geburt = $geburt;

        return $this;
    }
}
