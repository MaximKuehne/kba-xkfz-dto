<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogistikEmpfaenger StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class LogistikEmpfaenger extends AbstractStructBase
{
    /**
     * The NatuerlichePerson
     * @var \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;
    /**
     * The JuristischePerson
     * @var \THAG\XKfz\StructType\JuristischePerson|null
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;
    /**
     * The NameEmpfaenger
     * @var \THAG\XKfz\StructType\NameEmpfaenger|null
     */
    public ?\THAG\XKfz\StructType\NameEmpfaenger $NameEmpfaenger = null;
    /**
     * The EmpfaengerZusatzinformation
     * @var string|null
     */
    public ?string $EmpfaengerZusatzinformation = null;
    /**
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The ListeEmpfangsberechtigt
     * @var \THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt|null
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $ListeEmpfangsberechtigt = null;
    /**
     * The SMSEmpfaenger
     * @var string|null
     */
    public ?string $SMSEmpfaenger = null;
    /**
     * The Email
     * @var string|null
     */
    public ?string $Email = null;
    /**
     * Constructor method for LogistikEmpfaenger
     * @uses LogistikEmpfaenger::setNatuerlichePerson()
     * @uses LogistikEmpfaenger::setJuristischePerson()
     * @uses LogistikEmpfaenger::setNameEmpfaenger()
     * @uses LogistikEmpfaenger::setEmpfaengerZusatzinformation()
     * @uses LogistikEmpfaenger::setAnschrift()
     * @uses LogistikEmpfaenger::setListeEmpfangsberechtigt()
     * @uses LogistikEmpfaenger::setSMSEmpfaenger()
     * @uses LogistikEmpfaenger::setEmail()
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @param \THAG\XKfz\StructType\NameEmpfaenger $nameEmpfaenger
     * @param string $empfaengerZusatzinformation
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $listeEmpfangsberechtigt
     * @param string $sMSEmpfaenger
     * @param string $email
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
     * @return \THAG\XKfz\StructType\NatuerlichePerson|null
     */
    public function getNatuerlichePerson(): ?\THAG\XKfz\StructType\NatuerlichePerson
    {
        return $this->NatuerlichePerson;
    }
    /**
     * Set NatuerlichePerson value
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setNatuerlichePerson(?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null): self
    {
        $this->NatuerlichePerson = $natuerlichePerson;
        
        return $this;
    }
    /**
     * Get JuristischePerson value
     * @return \THAG\XKfz\StructType\JuristischePerson|null
     */
    public function getJuristischePerson(): ?\THAG\XKfz\StructType\JuristischePerson
    {
        return $this->JuristischePerson;
    }
    /**
     * Set JuristischePerson value
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;
        
        return $this;
    }
    /**
     * Get NameEmpfaenger value
     * @return \THAG\XKfz\StructType\NameEmpfaenger|null
     */
    public function getNameEmpfaenger(): ?\THAG\XKfz\StructType\NameEmpfaenger
    {
        return $this->NameEmpfaenger;
    }
    /**
     * Set NameEmpfaenger value
     * @param \THAG\XKfz\StructType\NameEmpfaenger $nameEmpfaenger
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setNameEmpfaenger(?\THAG\XKfz\StructType\NameEmpfaenger $nameEmpfaenger = null): self
    {
        $this->NameEmpfaenger = $nameEmpfaenger;
        
        return $this;
    }
    /**
     * Get EmpfaengerZusatzinformation value
     * @return string|null
     */
    public function getEmpfaengerZusatzinformation(): ?string
    {
        return $this->EmpfaengerZusatzinformation;
    }
    /**
     * Set EmpfaengerZusatzinformation value
     * @param string $empfaengerZusatzinformation
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setEmpfaengerZusatzinformation(?string $empfaengerZusatzinformation = null): self
    {
        $this->EmpfaengerZusatzinformation = $empfaengerZusatzinformation;
        
        return $this;
    }
    /**
     * Get Anschrift value
     * @return \THAG\XKfz\StructType\Anschrift|null
     */
    public function getAnschrift(): ?\THAG\XKfz\StructType\Anschrift
    {
        return $this->Anschrift;
    }
    /**
     * Set Anschrift value
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get ListeEmpfangsberechtigt value
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt|null
     */
    public function getListeEmpfangsberechtigt(): ?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt
    {
        return $this->ListeEmpfangsberechtigt;
    }
    /**
     * Set ListeEmpfangsberechtigt value
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $listeEmpfangsberechtigt
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setListeEmpfangsberechtigt(?\THAG\XKfz\StructType\LogistikEmpfaenger_ListeEmpfangsberechtigt $listeEmpfangsberechtigt = null): self
    {
        $this->ListeEmpfangsberechtigt = $listeEmpfangsberechtigt;
        
        return $this;
    }
    /**
     * Get SMSEmpfaenger value
     * @return string|null
     */
    public function getSMSEmpfaenger(): ?string
    {
        return $this->SMSEmpfaenger;
    }
    /**
     * Set SMSEmpfaenger value
     * @param string $sMSEmpfaenger
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setSMSEmpfaenger(?string $sMSEmpfaenger = null): self
    {
        $this->SMSEmpfaenger = $sMSEmpfaenger;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger
     */
    public function setEmail(?string $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
}
