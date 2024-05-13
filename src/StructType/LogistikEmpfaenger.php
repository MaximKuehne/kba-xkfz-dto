<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogistikEmpfaenger StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LogistikEmpfaenger extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The NameEmpfaenger
     */
    public ?\THAG\XKfz\StructType\NameEmpfaenger $NameEmpfaenger = null;

    /**
     * The EmpfaengerZusatzinformation
     */
    public ?string $EmpfaengerZusatzinformation = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The ListeEmpfangsberechtigt
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $ListeEmpfangsberechtigt = null;

    /**
     * The SMSEmpfaenger
     */
    public ?string $SMSEmpfaenger = null;

    /**
     * The Email
     */
    public ?string $Email = null;

    /**
     * Constructor method for LogistikEmpfaenger
     *
     * @uses LogistikEmpfaenger::setNatuerlichePerson()
     * @uses LogistikEmpfaenger::setJuristischePerson()
     * @uses LogistikEmpfaenger::setNameEmpfaenger()
     * @uses LogistikEmpfaenger::setEmpfaengerZusatzinformation()
     * @uses LogistikEmpfaenger::setAnschrift()
     * @uses LogistikEmpfaenger::setListeEmpfangsberechtigt()
     * @uses LogistikEmpfaenger::setSMSEmpfaenger()
     * @uses LogistikEmpfaenger::setEmail()
     */
    public function __construct(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\NameEmpfaenger $nameEmpfaenger = null, ?string $empfaengerZusatzinformation = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $listeEmpfangsberechtigt = null, ?string $sMSEmpfaenger = null, ?string $email = null)
    {
        $this
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setNameEmpfaenger($nameEmpfaenger)
            ->setEmpfaengerZusatzinformation($empfaengerZusatzinformation)
            ->setAnschrift($anschrift)
            ->setListeEmpfangsberechtigt($listeEmpfangsberechtigt)
            ->setSMSEmpfaenger($sMSEmpfaenger)
            ->setEmail($email);
    }

    /**
     * Get NatuerlichePerson value
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }

    /**
     * Set NatuerlichePerson value
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;

        return $this;
    }

    /**
     * Get JuristischePerson value
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }

    /**
     * Set JuristischePerson value
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;

        return $this;
    }

    /**
     * Get NameEmpfaenger value
     */
    public function getNameEmpfaenger(): ?\THAG\XKfz\StructType\NameEmpfaenger
    {
        return $this->NameEmpfaenger;
    }

    /**
     * Set NameEmpfaenger value
     */
    public function setNameEmpfaenger(?\THAG\XKfz\StructType\NameEmpfaenger $nameEmpfaenger = null): self
    {
        $this->NameEmpfaenger = $nameEmpfaenger;

        return $this;
    }

    /**
     * Get EmpfaengerZusatzinformation value
     */
    public function getEmpfaengerZusatzinformation(): ?string
    {
        return $this->EmpfaengerZusatzinformation;
    }

    /**
     * Set EmpfaengerZusatzinformation value
     */
    public function setEmpfaengerZusatzinformation(?string $empfaengerZusatzinformation = null): self
    {
        $this->EmpfaengerZusatzinformation = $empfaengerZusatzinformation;

        return $this;
    }

    /**
     * Get Anschrift value
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }

    /**
     * Set Anschrift value
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;

        return $this;
    }

    /**
     * Get ListeEmpfangsberechtigt value
     */
    public function getListeEmpfangsberechtigt(): ?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt
    {
        return $this->ListeEmpfangsberechtigt;
    }

    /**
     * Set ListeEmpfangsberechtigt value
     */
    public function setListeEmpfangsberechtigt(?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $listeEmpfangsberechtigt = null): self
    {
        $this->ListeEmpfangsberechtigt = $listeEmpfangsberechtigt;

        return $this;
    }

    /**
     * Get SMSEmpfaenger value
     */
    public function getSMSEmpfaenger(): ?string
    {
        return $this->SMSEmpfaenger;
    }

    /**
     * Set SMSEmpfaenger value
     */
    public function setSMSEmpfaenger(?string $sMSEmpfaenger = null): self
    {
        $this->SMSEmpfaenger = $sMSEmpfaenger;

        return $this;
    }

    /**
     * Get Email value
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;

        return $this;
    }
}
