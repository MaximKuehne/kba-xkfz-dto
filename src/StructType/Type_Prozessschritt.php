<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type.Prozessschritt StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Type_Prozessschritt extends AbstractStructBase
{
    /**
     * The prozessschrittID
     * @var string|null
     */
    public ?string $prozessschrittID = null;
    /**
     * The prozessschrittName
     * @var \THAG\XKfz\StructType\Type_ProzessschrittName|null
     */
    public ?\THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName = null;
    /**
     * The prozessschrittInformation
     * @var string|null
     */
    public ?string $prozessschrittInformation = null;
    /**
     * The prozessschrittStatus
     * @var \THAG\XKfz\StructType\Code_StatusProzessschritt|null
     */
    public ?\THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus = null;
    /**
     * The zeitpunktDesVerarbeitungsbeginns
     * @var string|null
     */
    public ?string $zeitpunktDesVerarbeitungsbeginns = null;
    /**
     * The zeitpunktDesVerarbeitungsendes
     * @var string|null
     */
    public ?string $zeitpunktDesVerarbeitungsendes = null;
    /**
     * Constructor method for Type.Prozessschritt
     * @uses Type_Prozessschritt::setProzessschrittID()
     * @uses Type_Prozessschritt::setProzessschrittName()
     * @uses Type_Prozessschritt::setProzessschrittInformation()
     * @uses Type_Prozessschritt::setProzessschrittStatus()
     * @uses Type_Prozessschritt::setZeitpunktDesVerarbeitungsbeginns()
     * @uses Type_Prozessschritt::setZeitpunktDesVerarbeitungsendes()
     * @param string $prozessschrittID
     * @param \THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName
     * @param string $prozessschrittInformation
     * @param \THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus
     * @param string $zeitpunktDesVerarbeitungsbeginns
     * @param string $zeitpunktDesVerarbeitungsendes
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
     * @return string|null
     */
    public function getProzessschrittID(): ?string
    {
        return $this->prozessschrittID;
    }
    /**
     * Set prozessschrittID value
     * @param string $prozessschrittID
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setProzessschrittID(?string $prozessschrittID = null): self
    {
        $this->prozessschrittID = $prozessschrittID;
        
        return $this;
    }
    /**
     * Get prozessschrittName value
     * @return \THAG\XKfz\StructType\Type_ProzessschrittName|null
     */
    public function getProzessschrittName(): ?\THAG\XKfz\StructType\Type_ProzessschrittName
    {
        return $this->prozessschrittName;
    }
    /**
     * Set prozessschrittName value
     * @param \THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setProzessschrittName(?\THAG\XKfz\StructType\Type_ProzessschrittName $prozessschrittName = null): self
    {
        $this->prozessschrittName = $prozessschrittName;
        
        return $this;
    }
    /**
     * Get prozessschrittInformation value
     * @return string|null
     */
    public function getProzessschrittInformation(): ?string
    {
        return $this->prozessschrittInformation;
    }
    /**
     * Set prozessschrittInformation value
     * @param string $prozessschrittInformation
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setProzessschrittInformation(?string $prozessschrittInformation = null): self
    {
        $this->prozessschrittInformation = $prozessschrittInformation;
        
        return $this;
    }
    /**
     * Get prozessschrittStatus value
     * @return \THAG\XKfz\StructType\Code_StatusProzessschritt|null
     */
    public function getProzessschrittStatus(): ?\THAG\XKfz\StructType\Code_StatusProzessschritt
    {
        return $this->prozessschrittStatus;
    }
    /**
     * Set prozessschrittStatus value
     * @param \THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setProzessschrittStatus(?\THAG\XKfz\StructType\Code_StatusProzessschritt $prozessschrittStatus = null): self
    {
        $this->prozessschrittStatus = $prozessschrittStatus;
        
        return $this;
    }
    /**
     * Get zeitpunktDesVerarbeitungsbeginns value
     * @return string|null
     */
    public function getZeitpunktDesVerarbeitungsbeginns(): ?string
    {
        return $this->zeitpunktDesVerarbeitungsbeginns;
    }
    /**
     * Set zeitpunktDesVerarbeitungsbeginns value
     * @param string $zeitpunktDesVerarbeitungsbeginns
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setZeitpunktDesVerarbeitungsbeginns(?string $zeitpunktDesVerarbeitungsbeginns = null): self
    {
        $this->zeitpunktDesVerarbeitungsbeginns = $zeitpunktDesVerarbeitungsbeginns;
        
        return $this;
    }
    /**
     * Get zeitpunktDesVerarbeitungsendes value
     * @return string|null
     */
    public function getZeitpunktDesVerarbeitungsendes(): ?string
    {
        return $this->zeitpunktDesVerarbeitungsendes;
    }
    /**
     * Set zeitpunktDesVerarbeitungsendes value
     * @param string $zeitpunktDesVerarbeitungsendes
     * @return \THAG\XKfz\StructType\Type_Prozessschritt
     */
    public function setZeitpunktDesVerarbeitungsendes(?string $zeitpunktDesVerarbeitungsendes = null): self
    {
        $this->zeitpunktDesVerarbeitungsendes = $zeitpunktDesVerarbeitungsendes;
        
        return $this;
    }
}
