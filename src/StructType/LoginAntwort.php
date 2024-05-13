<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoginAntwort StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LoginAntwort extends AbstractStructBase
{
    /**
     * The StatusCode
     */
    public ?string $StatusCode = null;

    /**
     * The StatusText
     */
    public ?string $StatusText = null;

    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The LetzteAnmeldung
     */
    public ?string $LetzteAnmeldung = null;

    /**
     * The KontoGesperrt
     */
    public ?string $KontoGesperrt = null;

    /**
     * The PINAenderung
     */
    public ?string $PINAenderung = null;

    /**
     * The PINGueltigkeit
     */
    public ?string $PINGueltigkeit = null;

    /**
     * The PINFehlversuche
     */
    public ?string $PINFehlversuche = null;

    /**
     * The PINErlaubteFehlversuche
     */
    public ?string $PINErlaubteFehlversuche = null;

    /**
     * The PINUnterschiede
     */
    public ?string $PINUnterschiede = null;

    /**
     * The LogoutFehlt
     */
    public ?string $LogoutFehlt = null;

    /**
     * Constructor method for LoginAntwort
     *
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
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }

    /**
     * Set StatusCode value
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        $this->StatusCode = $statusCode;

        return $this;
    }

    /**
     * Get StatusText value
     */
    public function getStatusText(): ?string
    {
        return $this->StatusText;
    }

    /**
     * Set StatusText value
     */
    public function setStatusText(?string $statusText = null): self
    {
        $this->StatusText = $statusText;

        return $this;
    }

    /**
     * Get Nutzerkennung value
     */
    public function getNutzerkennung(): ?string
    {
        return $this->Nutzerkennung;
    }

    /**
     * Set Nutzerkennung value
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;

        return $this;
    }

    /**
     * Get LetzteAnmeldung value
     */
    public function getLetzteAnmeldung(): ?string
    {
        return $this->LetzteAnmeldung;
    }

    /**
     * Set LetzteAnmeldung value
     */
    public function setLetzteAnmeldung(?string $letzteAnmeldung = null): self
    {
        $this->LetzteAnmeldung = $letzteAnmeldung;

        return $this;
    }

    /**
     * Get KontoGesperrt value
     */
    public function getKontoGesperrt(): ?string
    {
        return $this->KontoGesperrt;
    }

    /**
     * Set KontoGesperrt value
     */
    public function setKontoGesperrt(?string $kontoGesperrt = null): self
    {
        $this->KontoGesperrt = $kontoGesperrt;

        return $this;
    }

    /**
     * Get PINAenderung value
     */
    public function getPINAenderung(): ?string
    {
        return $this->PINAenderung;
    }

    /**
     * Set PINAenderung value
     */
    public function setPINAenderung(?string $pINAenderung = null): self
    {
        $this->PINAenderung = $pINAenderung;

        return $this;
    }

    /**
     * Get PINGueltigkeit value
     */
    public function getPINGueltigkeit(): ?string
    {
        return $this->PINGueltigkeit;
    }

    /**
     * Set PINGueltigkeit value
     */
    public function setPINGueltigkeit(?string $pINGueltigkeit = null): self
    {
        $this->PINGueltigkeit = $pINGueltigkeit;

        return $this;
    }

    /**
     * Get PINFehlversuche value
     */
    public function getPINFehlversuche(): ?string
    {
        return $this->PINFehlversuche;
    }

    /**
     * Set PINFehlversuche value
     */
    public function setPINFehlversuche(?string $pINFehlversuche = null): self
    {
        $this->PINFehlversuche = $pINFehlversuche;

        return $this;
    }

    /**
     * Get PINErlaubteFehlversuche value
     */
    public function getPINErlaubteFehlversuche(): ?string
    {
        return $this->PINErlaubteFehlversuche;
    }

    /**
     * Set PINErlaubteFehlversuche value
     */
    public function setPINErlaubteFehlversuche(?string $pINErlaubteFehlversuche = null): self
    {
        $this->PINErlaubteFehlversuche = $pINErlaubteFehlversuche;

        return $this;
    }

    /**
     * Get PINUnterschiede value
     */
    public function getPINUnterschiede(): ?string
    {
        return $this->PINUnterschiede;
    }

    /**
     * Set PINUnterschiede value
     */
    public function setPINUnterschiede(?string $pINUnterschiede = null): self
    {
        $this->PINUnterschiede = $pINUnterschiede;

        return $this;
    }

    /**
     * Get LogoutFehlt value
     */
    public function getLogoutFehlt(): ?string
    {
        return $this->LogoutFehlt;
    }

    /**
     * Set LogoutFehlt value
     */
    public function setLogoutFehlt(?string $logoutFehlt = null): self
    {
        $this->LogoutFehlt = $logoutFehlt;

        return $this;
    }
}
