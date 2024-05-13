<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.NatuerlichePerson StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_NatuerlichePerson extends AbstractStructBase
{
    /**
     * The FamiliennameNachname
     * @var string|null
     */
    public ?string $FamiliennameNachname = null;
    /**
     * The FamiliennameNamensbestandteil
     * @var string|null
     */
    public ?string $FamiliennameNamensbestandteil = null;
    /**
     * The GeburtsnameNachname
     * @var string|null
     */
    public ?string $GeburtsnameNachname = null;
    /**
     * The GeburtsnameNamensbestandteil
     * @var string|null
     */
    public ?string $GeburtsnameNamensbestandteil = null;
    /**
     * The Vorname
     * @var string|null
     */
    public ?string $Vorname = null;
    /**
     * The Ordensname
     * @var string|null
     */
    public ?string $Ordensname = null;
    /**
     * The Kuenstlername
     * @var string|null
     */
    public ?string $Kuenstlername = null;
    /**
     * The geburt
     * @var \THAG\XKfz\StructType\Type_Geburt|null
     */
    public ?\THAG\XKfz\StructType\Type_Geburt $geburt = null;
    /**
     * Constructor method for Type.NatuerlichePerson
     * @uses Type_NatuerlichePerson::setFamiliennameNachname()
     * @uses Type_NatuerlichePerson::setFamiliennameNamensbestandteil()
     * @uses Type_NatuerlichePerson::setGeburtsnameNachname()
     * @uses Type_NatuerlichePerson::setGeburtsnameNamensbestandteil()
     * @uses Type_NatuerlichePerson::setVorname()
     * @uses Type_NatuerlichePerson::setOrdensname()
     * @uses Type_NatuerlichePerson::setKuenstlername()
     * @uses Type_NatuerlichePerson::setGeburt()
     * @param string $familiennameNachname
     * @param string $familiennameNamensbestandteil
     * @param string $geburtsnameNachname
     * @param string $geburtsnameNamensbestandteil
     * @param string $vorname
     * @param string $ordensname
     * @param string $kuenstlername
     * @param \THAG\XKfz\StructType\Type_Geburt $geburt
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
     * @return string|null
     */
    public function getFamiliennameNachname(): ?string
    {
        return $this->FamiliennameNachname;
    }
    /**
     * Set FamiliennameNachname value
     * @param string $familiennameNachname
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setFamiliennameNachname(?string $familiennameNachname = null): self
    {
        $this->FamiliennameNachname = $familiennameNachname;
        
        return $this;
    }
    /**
     * Get FamiliennameNamensbestandteil value
     * @return string|null
     */
    public function getFamiliennameNamensbestandteil(): ?string
    {
        return $this->FamiliennameNamensbestandteil;
    }
    /**
     * Set FamiliennameNamensbestandteil value
     * @param string $familiennameNamensbestandteil
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setFamiliennameNamensbestandteil(?string $familiennameNamensbestandteil = null): self
    {
        $this->FamiliennameNamensbestandteil = $familiennameNamensbestandteil;
        
        return $this;
    }
    /**
     * Get GeburtsnameNachname value
     * @return string|null
     */
    public function getGeburtsnameNachname(): ?string
    {
        return $this->GeburtsnameNachname;
    }
    /**
     * Set GeburtsnameNachname value
     * @param string $geburtsnameNachname
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setGeburtsnameNachname(?string $geburtsnameNachname = null): self
    {
        $this->GeburtsnameNachname = $geburtsnameNachname;
        
        return $this;
    }
    /**
     * Get GeburtsnameNamensbestandteil value
     * @return string|null
     */
    public function getGeburtsnameNamensbestandteil(): ?string
    {
        return $this->GeburtsnameNamensbestandteil;
    }
    /**
     * Set GeburtsnameNamensbestandteil value
     * @param string $geburtsnameNamensbestandteil
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setGeburtsnameNamensbestandteil(?string $geburtsnameNamensbestandteil = null): self
    {
        $this->GeburtsnameNamensbestandteil = $geburtsnameNamensbestandteil;
        
        return $this;
    }
    /**
     * Get Vorname value
     * @return string|null
     */
    public function getVorname(): ?string
    {
        return $this->Vorname;
    }
    /**
     * Set Vorname value
     * @param string $vorname
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setVorname(?string $vorname = null): self
    {
        $this->Vorname = $vorname;
        
        return $this;
    }
    /**
     * Get Ordensname value
     * @return string|null
     */
    public function getOrdensname(): ?string
    {
        return $this->Ordensname;
    }
    /**
     * Set Ordensname value
     * @param string $ordensname
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setOrdensname(?string $ordensname = null): self
    {
        $this->Ordensname = $ordensname;
        
        return $this;
    }
    /**
     * Get Kuenstlername value
     * @return string|null
     */
    public function getKuenstlername(): ?string
    {
        return $this->Kuenstlername;
    }
    /**
     * Set Kuenstlername value
     * @param string $kuenstlername
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setKuenstlername(?string $kuenstlername = null): self
    {
        $this->Kuenstlername = $kuenstlername;
        
        return $this;
    }
    /**
     * Get geburt value
     * @return \THAG\XKfz\StructType\Type_Geburt|null
     */
    public function getGeburt(): ?\THAG\XKfz\StructType\Type_Geburt
    {
        return $this->geburt;
    }
    /**
     * Set geburt value
     * @param \THAG\XKfz\StructType\Type_Geburt $geburt
     * @return \THAG\XKfz\StructType\Type_NatuerlichePerson
     */
    public function setGeburt(?\THAG\XKfz\StructType\Type_Geburt $geburt = null): self
    {
        $this->geburt = $geburt;
        
        return $this;
    }
}
