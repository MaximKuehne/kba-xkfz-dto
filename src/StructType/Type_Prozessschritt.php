<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozessschritt StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozessschritt extends AbstractStructBase
{
    /**
     * The prozessschrittID
     */
    public ?string $prozessschrittID = null;

    /**
     * The prozessschrittName
     */
    public ?\THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName = null;

    /**
     * The prozessschrittInformation
     */
    public ?string $prozessschrittInformation = null;

    /**
     * The prozessschrittStatus
     */
    public ?\THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus = null;

    /**
     * The zeitpunktDesVerarbeitungsbeginns
     */
    public ?string $zeitpunktDesVerarbeitungsbeginns = null;

    /**
     * The zeitpunktDesVerarbeitungsendes
     */
    public ?string $zeitpunktDesVerarbeitungsendes = null;

    /**
     * Constructor method for Type.Prozessschritt
     *
     * @uses Type_Prozessschritt::setProzessschrittID()
     * @uses Type_Prozessschritt::setProzessschrittName()
     * @uses Type_Prozessschritt::setProzessschrittInformation()
     * @uses Type_Prozessschritt::setProzessschrittStatus()
     * @uses Type_Prozessschritt::setZeitpunktDesVerarbeitungsbeginns()
     * @uses Type_Prozessschritt::setZeitpunktDesVerarbeitungsendes()
     */
    public function __construct(?string $prozessschrittID = null, ?\THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName = null, ?string $prozessschrittInformation = null, ?\THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus = null, ?string $zeitpunktDesVerarbeitungsbeginns = null, ?string $zeitpunktDesVerarbeitungsendes = null)
    {
        $this
            ->setProzessschrittID($prozessschrittID)
            ->setProzessschrittName($prozessschrittName)
            ->setProzessschrittInformation($prozessschrittInformation)
            ->setProzessschrittStatus($prozessschrittStatus)
            ->setZeitpunktDesVerarbeitungsbeginns($zeitpunktDesVerarbeitungsbeginns)
            ->setZeitpunktDesVerarbeitungsendes($zeitpunktDesVerarbeitungsendes);
    }

    /**
     * Get prozessschrittID value
     */
    public function getProzessschrittID(): ?string
    {
        return $this->prozessschrittID;
    }

    /**
     * Set prozessschrittID value
     */
    public function setProzessschrittID(?string $prozessschrittID = null): self
    {
        $this->prozessschrittID = $prozessschrittID;

        return $this;
    }

    /**
     * Get prozessschrittName value
     */
    public function getProzessschrittName(): ?\THAG\XKfz\StructType\Type_ProzessschrittName
    {
        return $this->prozessschrittName;
    }

    /**
     * Set prozessschrittName value
     */
    public function setProzessschrittName(?\THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName = null): self
    {
        $this->prozessschrittName = $prozessschrittName;

        return $this;
    }

    /**
     * Get prozessschrittInformation value
     */
    public function getProzessschrittInformation(): ?string
    {
        return $this->prozessschrittInformation;
    }

    /**
     * Set prozessschrittInformation value
     */
    public function setProzessschrittInformation(?string $prozessschrittInformation = null): self
    {
        $this->prozessschrittInformation = $prozessschrittInformation;

        return $this;
    }

    /**
     * Get prozessschrittStatus value
     */
    public function getProzessschrittStatus(): ?\THAG\XKfz\StructType\Code_StatusProzessschritt
    {
        return $this->prozessschrittStatus;
    }

    /**
     * Set prozessschrittStatus value
     */
    public function setProzessschrittStatus(?\THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus = null): self
    {
        $this->prozessschrittStatus = $prozessschrittStatus;

        return $this;
    }

    /**
     * Get zeitpunktDesVerarbeitungsbeginns value
     */
    public function getZeitpunktDesVerarbeitungsbeginns(): ?string
    {
        return $this->zeitpunktDesVerarbeitungsbeginns;
    }

    /**
     * Set zeitpunktDesVerarbeitungsbeginns value
     */
    public function setZeitpunktDesVerarbeitungsbeginns(?string $zeitpunktDesVerarbeitungsbeginns = null): self
    {
        $this->zeitpunktDesVerarbeitungsbeginns = $zeitpunktDesVerarbeitungsbeginns;

        return $this;
    }

    /**
     * Get zeitpunktDesVerarbeitungsendes value
     */
    public function getZeitpunktDesVerarbeitungsendes(): ?string
    {
        return $this->zeitpunktDesVerarbeitungsendes;
    }

    /**
     * Set zeitpunktDesVerarbeitungsendes value
     */
    public function setZeitpunktDesVerarbeitungsendes(?string $zeitpunktDesVerarbeitungsendes = null): self
    {
        $this->zeitpunktDesVerarbeitungsendes = $zeitpunktDesVerarbeitungsendes;

        return $this;
    }
}
