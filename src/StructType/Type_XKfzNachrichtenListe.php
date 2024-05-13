<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzNachrichtenListe StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzNachrichtenListe extends AbstractStructBase
{
    /**
     * The anzahlDerNachrichten
     * @var int|null
     */
    public ?int $anzahlDerNachrichten = null;
    /**
     * The nachricht
     * @var \THAG\XKfz\StructType\Type_XKfzNachrichten|null
     */
    public ?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null;
    /**
     * Constructor method for Type.XKfzNachrichtenListe
     * @uses Type_XKfzNachrichtenListe::setAnzahlDerNachrichten()
     * @uses Type_XKfzNachrichtenListe::setNachricht()
     * @param int $anzahlDerNachrichten
     * @param \THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht
     */
    public function __construct(?int $anzahlDerNachrichten = null, ?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null)
    {
        $this
            ->setAnzahlDerNachrichten($anzahlDerNachrichten)
            ->setNachricht($nachricht);
    }
    /**
     * Get anzahlDerNachrichten value
     * @return int|null
     */
    public function getAnzahlDerNachrichten(): ?int
    {
        return $this->anzahlDerNachrichten;
    }
    /**
     * Set anzahlDerNachrichten value
     * @param int $anzahlDerNachrichten
     * @return \THAG\XKfz\StructType\Type_XKfzNachrichtenListe
     */
    public function setAnzahlDerNachrichten(?int $anzahlDerNachrichten = null): self
    {
        $this->anzahlDerNachrichten = $anzahlDerNachrichten;
        
        return $this;
    }
    /**
     * Get nachricht value
     * @return \THAG\XKfz\StructType\Type_XKfzNachrichten|null
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Type_XKfzNachrichten
    {
        return $this->nachricht;
    }
    /**
     * Set nachricht value
     * @param \THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht
     * @return \THAG\XKfz\StructType\Type_XKfzNachrichtenListe
     */
    public function setNachricht(?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null): self
    {
        $this->nachricht = $nachricht;
        
        return $this;
    }
}
