<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginAntwort StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LoginAntwort extends AbstractStructBase
{
    /**
     * The StatusCode
     * @var string|null
     */
    public ?string $StatusCode = null;
    /**
     * The StatusText
     * @var string|null
     */
    public ?string $StatusText = null;
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The LetzteAnmeldung
     * @var string|null
     */
    public ?string $LetzteAnmeldung = null;
    /**
     * The KontoGesperrt
     * @var string|null
     */
    public ?string $KontoGesperrt = null;
    /**
     * The PINAenderung
     * @var string|null
     */
    public ?string $PINAenderung = null;
    /**
     * The PINGueltigkeit
     * @var string|null
     */
    public ?string $PINGueltigkeit = null;
    /**
     * The PINFehlversuche
     * @var string|null
     */
    public ?string $PINFehlversuche = null;
    /**
     * The PINErlaubteFehlversuche
     * @var string|null
     */
    public ?string $PINErlaubteFehlversuche = null;
    /**
     * The PINUnterschiede
     * @var string|null
     */
    public ?string $PINUnterschiede = null;
    /**
     * The LogoutFehlt
     * @var string|null
     */
    public ?string $LogoutFehlt = null;
    /**
     * Constructor method for LoginAntwort
     * @uses LoginAntwort::setStatusCode()
     * @uses LoginAntwort::setStatusText()
     * @uses LoginAntwort::setNutzerkennung()
     * @uses LoginAntwort::setLetzteAnmeldung()
     * @uses LoginAntwort::setKontoGesperrt()
     * @uses LoginAntwort::setPINAenderung()
     * @uses LoginAntwort::setPINGueltigkeit()
     * @uses LoginAntwort::setPINFehlversuche()
     * @uses LoginAntwort::setPINErlaubteFehlversuche()
     * @uses LoginAntwort::setPINUnterschiede()
     * @uses LoginAntwort::setLogoutFehlt()
     * @param string $statusCode
     * @param string $statusText
     * @param string $nutzerkennung
     * @param string $letzteAnmeldung
     * @param string $kontoGesperrt
     * @param string $pINAenderung
     * @param string $pINGueltigkeit
     * @param string $pINFehlversuche
     * @param string $pINErlaubteFehlversuche
     * @param string $pINUnterschiede
     * @param string $logoutFehlt
     */
    public function __construct(?string $statusCode = null, ?string $statusText = null, ?string $nutzerkennung = null, ?string $letzteAnmeldung = null, ?string $kontoGesperrt = null, ?string $pINAenderung = null, ?string $pINGueltigkeit = null, ?string $pINFehlversuche = null, ?string $pINErlaubteFehlversuche = null, ?string $pINUnterschiede = null, ?string $logoutFehlt = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setStatusText($statusText)
            ->setNutzerkennung($nutzerkennung)
            ->setLetzteAnmeldung($letzteAnmeldung)
            ->setKontoGesperrt($kontoGesperrt)
            ->setPINAenderung($pINAenderung)
            ->setPINGueltigkeit($pINGueltigkeit)
            ->setPINFehlversuche($pINFehlversuche)
            ->setPINErlaubteFehlversuche($pINErlaubteFehlversuche)
            ->setPINUnterschiede($pINUnterschiede)
            ->setLogoutFehlt($logoutFehlt);
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        $this->StatusCode = $statusCode;
        
        return $this;
    }
    /**
     * Get StatusText value
     * @return string|null
     */
    public function getStatusText(): ?string
    {
        return $this->StatusText;
    }
    /**
     * Set StatusText value
     * @param string $statusText
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setStatusText(?string $statusText = null): self
    {
        $this->StatusText = $statusText;
        
        return $this;
    }
    /**
     * Get Nutzerkennung value
     * @return string|null
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }
    /**
     * Set Nutzerkennung value
     * @param string $nutzerkennung
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get LetzteAnmeldung value
     * @return string|null
     */
    public function getLetzteAnmeldung(): ?string
    {
        return $this->LetzteAnmeldung;
    }
    /**
     * Set LetzteAnmeldung value
     * @param string $letzteAnmeldung
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setLetzteAnmeldung(?string $letzteAnmeldung = null): self
    {
        $this->LetzteAnmeldung = $letzteAnmeldung;
        
        return $this;
    }
    /**
     * Get KontoGesperrt value
     * @return string|null
     */
    public function getKontoGesperrt(): ?string
    {
        return $this->KontoGesperrt;
    }
    /**
     * Set KontoGesperrt value
     * @param string $kontoGesperrt
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setKontoGesperrt(?string $kontoGesperrt = null): self
    {
        $this->KontoGesperrt = $kontoGesperrt;
        
        return $this;
    }
    /**
     * Get PINAenderung value
     * @return string|null
     */
    public function getPINAenderung(): ?string
    {
        return $this->PINAenderung;
    }
    /**
     * Set PINAenderung value
     * @param string $pINAenderung
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setPINAenderung(?string $pINAenderung = null): self
    {
        $this->PINAenderung = $pINAenderung;
        
        return $this;
    }
    /**
     * Get PINGueltigkeit value
     * @return string|null
     */
    public function getPINGueltigkeit(): ?string
    {
        return $this->PINGueltigkeit;
    }
    /**
     * Set PINGueltigkeit value
     * @param string $pINGueltigkeit
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setPINGueltigkeit(?string $pINGueltigkeit = null): self
    {
        $this->PINGueltigkeit = $pINGueltigkeit;
        
        return $this;
    }
    /**
     * Get PINFehlversuche value
     * @return string|null
     */
    public function getPINFehlversuche(): ?string
    {
        return $this->PINFehlversuche;
    }
    /**
     * Set PINFehlversuche value
     * @param string $pINFehlversuche
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setPINFehlversuche(?string $pINFehlversuche = null): self
    {
        $this->PINFehlversuche = $pINFehlversuche;
        
        return $this;
    }
    /**
     * Get PINErlaubteFehlversuche value
     * @return string|null
     */
    public function getPINErlaubteFehlversuche(): ?string
    {
        return $this->PINErlaubteFehlversuche;
    }
    /**
     * Set PINErlaubteFehlversuche value
     * @param string $pINErlaubteFehlversuche
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setPINErlaubteFehlversuche(?string $pINErlaubteFehlversuche = null): self
    {
        $this->PINErlaubteFehlversuche = $pINErlaubteFehlversuche;
        
        return $this;
    }
    /**
     * Get PINUnterschiede value
     * @return string|null
     */
    public function getPINUnterschiede(): ?string
    {
        return $this->PINUnterschiede;
    }
    /**
     * Set PINUnterschiede value
     * @param string $pINUnterschiede
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setPINUnterschiede(?string $pINUnterschiede = null): self
    {
        $this->PINUnterschiede = $pINUnterschiede;
        
        return $this;
    }
    /**
     * Get LogoutFehlt value
     * @return string|null
     */
    public function getLogoutFehlt(): ?string
    {
        return $this->LogoutFehlt;
    }
    /**
     * Set LogoutFehlt value
     * @param string $logoutFehlt
     * @return \THAG\XKfz\StructType\LoginAntwort
     */
    public function setLogoutFehlt(?string $logoutFehlt = null): self
    {
        $this->LogoutFehlt = $logoutFehlt;
        
        return $this;
    }
}
