<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.XKfzNachrichtenListe StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_XKfzNachrichtenListe extends AbstractStructBase
{
    /**
     * The anzahlDerNachrichten
     */
    public ?int $anzahlDerNachrichten = null;

    /**
     * The nachricht
     */
    public ?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null;

    /**
     * Constructor method for Type.XKfzNachrichtenListe
     *
     * @uses Type_XKfzNachrichtenListe::setAnzahlDerNachrichten()
     * @uses Type_XKfzNachrichtenListe::setNachricht()
     */
    public function __construct(?int $anzahlDerNachrichten = null, ?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null)
    {
        $this
            ->setAnzahlDerNachrichten($anzahlDerNachrichten)
            ->setNachricht($nachricht);
    }

    /**
     * Get anzahlDerNachrichten value
     */
    public function getAnzahlDerNachrichten(): ?int
    {
        return $this->anzahlDerNachrichten;
    }

    /**
     * Set anzahlDerNachrichten value
     */
    public function setAnzahlDerNachrichten(?int $anzahlDerNachrichten = null): self
    {
        $this->anzahlDerNachrichten = $anzahlDerNachrichten;

        return $this;
    }

    /**
     * Get nachricht value
     */
    public function getNachricht(): ?\THAG\XKfz\StructType\Type_XKfzNachrichten
    {
        return $this->nachricht;
    }

    /**
     * Set nachricht value
     */
    public function setNachricht(?\THAG\XKfz\StructType\Type_XKfzNachrichten $nachricht = null): self
    {
        $this->nachricht = $nachricht;

        return $this;
    }
}
