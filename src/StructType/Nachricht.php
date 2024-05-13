<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nachricht StructType
 * @subpackage Structs
 * @date 2024-05-13
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Nachricht extends AbstractStructBase
{
    /**
     * The Zeitstempel
     * @var string|null
     */
    public ?string $Zeitstempel = null;
    /**
     * The LoginToken
     * @var string|null
     */
    public ?string $LoginToken = null;
    /**
     * The Nachrichtenkopf
     * @var \THAG\XKfz\StructType\Nachrichtenkopf|null
     */
    public ?\THAG\XKfz\StructType\Nachrichtenkopf $Nachrichtenkopf = null;
    /**
     * The DatumEndeVersicherungsschutz
     * @var string|null
     */
    public ?string $DatumEndeVersicherungsschutz = null;
    /**
     * The DatumAusserbetriebsetzung
     * @var string|null
     */
    public ?string $DatumAusserbetriebsetzung = null;
    /**
     * The Ping
     * @var string|null
     */
    public ?string $Ping = null;
    /**
     * The Versicherungsunternehmensnummer
     * @var string|null
     */
    public ?string $Versicherungsunternehmensnummer = null;
    /**
     * The Sonderzeichen
     * @var string|null
     */
    public ?string $Sonderzeichen = null;
    /**
     * The Anfragenummer
     * @var string|null
     */
    public ?string $Anfragenummer = null;
    /**
     * The Versicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $Versicherungsbestaetigungsnummer = null;
    /**
     * The VbArt
     * @var string|null
     */
    public ?string $VbArt = null;
    /**
     * The VbAbrufbarBis
     * @var string|null
     */
    public ?string $VbAbrufbarBis = null;
    /**
     * The VbIstNochZuDrucken
     * @var string|null
     */
    public ?string $VbIstNochZuDrucken = null;
    /**
     * The VbFormular
     * @var string|null
     */
    public ?string $VbFormular = null;
    /**
     * The VbFormularGewuenscht
     * @var string|null
     */
    public ?string $VbFormularGewuenscht = null;
    /**
     * The Pruefergebnis
     * @var string|null
     */
    public ?string $Pruefergebnis = null;
    /**
     * The VkzPruefergebnis
     * @var string|null
     */
    public ?string $VkzPruefergebnis = null;
    /**
     * The PruefergebnisKommentar
     * @var string|null
     */
    public ?string $PruefergebnisKommentar = null;
    /**
     * The Zulassungsfahrten
     * @var string|null
     */
    public ?string $Zulassungsfahrten = null;
    /**
     * The ZeitpunktAenderung
     * @var string|null
     */
    public ?string $ZeitpunktAenderung = null;
    /**
     * The Versicherung
     * @var \THAG\XKfz\StructType\Versicherung|null
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;
    /**
     * The Bonitaetszugangsnummer
     * @var string|null
     */
    public ?string $Bonitaetszugangsnummer = null;
    /**
     * The Bonitaetszugangspasswort
     * @var string|null
     */
    public ?string $Bonitaetszugangspasswort = null;
    /**
     * The Bonitaetspruefungscode
     * @var string|null
     */
    public ?string $Bonitaetspruefungscode = null;
    /**
     * The Bonitaetsanfragegrund
     * @var string|null
     */
    public ?string $Bonitaetsanfragegrund = null;
    /**
     * The Versicherungsnehmer
     * @var \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;
    /**
     * The Halter
     * @var \THAG\XKfz\StructType\Halter|null
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;
    /**
     * The Fahrzeug
     * @var \THAG\XKfz\StructType\Fahrzeug|null
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;
    /**
     * The Kennzeichen
     * @var \THAG\XKfz\StructType\Kennzeichen|null
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;
    /**
     * The Behoerde
     * @var \THAG\XKfz\StructType\Behoerde|null
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;
    /**
     * The VbAblehnungsgrund
     * @var string|null
     */
    public ?string $VbAblehnungsgrund = null;
    /**
     * The ListeFehlerBei
     * @var \THAG\XKfz\StructType\ListeFehlerBei|null
     */
    public ?\THAG\XKfz\StructType\ListeFehlerBei $ListeFehlerBei = null;
    /**
     * The VuArbeitsgang
     * @var \THAG\XKfz\StructType\VuArbeitsgang|null
     */
    public ?\THAG\XKfz\StructType\VuArbeitsgang $VuArbeitsgang = null;
    /**
     * The AnzeigeAblehnungsgrund
     * @var string|null
     */
    public ?string $AnzeigeAblehnungsgrund = null;
    /**
     * The DatumEingangAnzeigeZulBeh
     * @var string|null
     */
    public ?string $DatumEingangAnzeigeZulBeh = null;
    /**
     * The DatumNachversichererAb
     * @var string|null
     */
    public ?string $DatumNachversichererAb = null;
    /**
     * The VbStatus
     * @var string|null
     */
    public ?string $VbStatus = null;
    /**
     * The VuMitteilungsart
     * @var string|null
     */
    public ?string $VuMitteilungsart = null;
    /**
     * The AnzahlVersicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $AnzahlVersicherungsbestaetigungsnummer = null;
    /**
     * The ListeVersicherungsbestaetigungsnummer
     * @var \THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer|null
     */
    public ?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $ListeVersicherungsbestaetigungsnummer = null;
    /**
     * The ZustaendigeBehoerdeKreisschluessel
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;
    /**
     * The ZustaendigeBehoerdeZusatzziffer
     * @var string|null
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;
    /**
     * The VbVerwenden
     * @var string|null
     */
    public ?string $VbVerwenden = null;
    /**
     * The ListeVbStatusPruefauftrag
     * @var \THAG\XKfz\StructType\ListeVbStatusPruefauftrag|null
     */
    public ?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag $ListeVbStatusPruefauftrag = null;
    /**
     * The VbRechercheAnfrage
     * @var \THAG\XKfz\StructType\VbRechercheAnfrage|null
     */
    public ?\THAG\XKfz\StructType\VbRechercheAnfrage $VbRechercheAnfrage = null;
    /**
     * The WeitereDatensaetzeVorhanden
     * @var string|null
     */
    public ?string $WeitereDatensaetzeVorhanden = null;
    /**
     * The ListeVbRechercheAntwort
     * @var \THAG\XKfz\StructType\ListeVbRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\ListeVbRechercheAntwort $ListeVbRechercheAntwort = null;
    /**
     * The VbRechercheAnfrageDetails
     * @var \THAG\XKfz\StructType\VbRechercheAnfrageDetails|null
     */
    public ?\THAG\XKfz\StructType\VbRechercheAnfrageDetails $VbRechercheAnfrageDetails = null;
    /**
     * The VbRechercheAntwortDetails
     * @var \THAG\XKfz\StructType\VbRechercheAntwortDetails|null
     */
    public ?\THAG\XKfz\StructType\VbRechercheAntwortDetails $VbRechercheAntwortDetails = null;
    /**
     * The Aktion
     * @var string|null
     */
    public ?string $Aktion = null;
    /**
     * The KorrekturFahrzeugidentifizierungsnummerUmgehen
     * @var string|null
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummerUmgehen = null;
    /**
     * The KorrekturZustaendigeBehoerdeUmgehen
     * @var string|null
     */
    public ?string $KorrekturZustaendigeBehoerdeUmgehen = null;
    /**
     * The SMSEingangBehoerde
     * @var string|null
     */
    public ?string $SMSEingangBehoerde = null;
    /**
     * The SMSEmpfaenger
     * @var string|null
     */
    public ?string $SMSEmpfaenger = null;
    /**
     * The SMSTextEingangBehoerde
     * @var string|null
     */
    public ?string $SMSTextEingangBehoerde = null;
    /**
     * The SMSTextVersicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $SMSTextVersicherungsbestaetigungsnummer = null;
    /**
     * The SMSTextVersicherungswechsel
     * @var string|null
     */
    public ?string $SMSTextVersicherungswechsel = null;
    /**
     * The SMSTextZulassung
     * @var string|null
     */
    public ?string $SMSTextZulassung = null;
    /**
     * The SMSVersicherungsbestaetigungsnummer
     * @var string|null
     */
    public ?string $SMSVersicherungsbestaetigungsnummer = null;
    /**
     * The SMSVersicherungswechsel
     * @var string|null
     */
    public ?string $SMSVersicherungswechsel = null;
    /**
     * The SMSZulassung
     * @var string|null
     */
    public ?string $SMSZulassung = null;
    /**
     * The ZuordnungGDVVermittlernummer
     * @var string|null
     */
    public ?string $ZuordnungGDVVermittlernummer = null;
    /**
     * The BonitaetspruefungSteuerung
     * @var string|null
     */
    public ?string $BonitaetspruefungSteuerung = null;
    /**
     * The GDVVermittlernummer
     * @var string|null
     */
    public ?string $GDVVermittlernummer = null;
    /**
     * The Pflegeart
     * @var string|null
     */
    public ?string $Pflegeart = null;
    /**
     * The GruppenrechtPflegeart
     * @var string|null
     */
    public ?string $GruppenrechtPflegeart = null;
    /**
     * The GruppePflegeart
     * @var string|null
     */
    public ?string $GruppePflegeart = null;
    /**
     * The Nutzerkennung
     * @var string|null
     */
    public ?string $Nutzerkennung = null;
    /**
     * The Zugangsberechtigung
     * @var string|null
     */
    public ?string $Zugangsberechtigung = null;
    /**
     * The NutzerPinNeu
     * @var string|null
     */
    public ?string $NutzerPinNeu = null;
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
     * The Anschrift
     * @var \THAG\XKfz\StructType\Anschrift|null
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;
    /**
     * The Kontaktdaten
     * @var \THAG\XKfz\StructType\Kontaktdaten|null
     */
    public ?\THAG\XKfz\StructType\Kontaktdaten $Kontaktdaten = null;
    /**
     * The Korrekturen
     * @var \THAG\XKfz\StructType\Korrekturen|null
     */
    public ?\THAG\XKfz\StructType\Korrekturen $Korrekturen = null;
    /**
     * The ListeBekannteBedingungsverletzung
     * @var \THAG\XKfz\StructType\ListeBekannteBedingungsverletzung|null
     */
    public ?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $ListeBekannteBedingungsverletzung = null;
    /**
     * The IHKRegistrierungsnummer
     * @var string|null
     */
    public ?string $IHKRegistrierungsnummer = null;
    /**
     * The VUNutzerId
     * @var string|null
     */
    public ?string $VUNutzerId = null;
    /**
     * The PinGueltigBis
     * @var string|null
     */
    public ?string $PinGueltigBis = null;
    /**
     * The NutzerAngemeldet
     * @var string|null
     */
    public ?string $NutzerAngemeldet = null;
    /**
     * The IstInAdmingruppe
     * @var string|null
     */
    public ?string $IstInAdmingruppe = null;
    /**
     * The Gruppennummer
     * @var string|null
     */
    public ?string $Gruppennummer = null;
    /**
     * The Gruppenname
     * @var string|null
     */
    public ?string $Gruppenname = null;
    /**
     * The Rechtnummer
     * @var string|null
     */
    public ?string $Rechtnummer = null;
    /**
     * The ListeReversierungsstatus
     * @var \THAG\XKfz\StructType\ListeReversierungsstatus|null
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsstatus $ListeReversierungsstatus = null;
    /**
     * The ListenrechtEintragKey
     * @var string|null
     */
    public ?string $ListenrechtEintragKey = null;
    /**
     * The Rechteklassenname
     * @var string|null
     */
    public ?string $Rechteklassenname = null;
    /**
     * The Rechteklassennummer
     * @var string|null
     */
    public ?string $Rechteklassennummer = null;
    /**
     * The Beschreibung
     * @var string|null
     */
    public ?string $Beschreibung = null;
    /**
     * The Minimalwert
     * @var string|null
     */
    public ?string $Minimalwert = null;
    /**
     * The Maximalwert
     * @var string|null
     */
    public ?string $Maximalwert = null;
    /**
     * The Kommunikationspartnerkennung
     * @var string|null
     */
    public ?string $Kommunikationspartnerkennung = null;
    /**
     * The Kommunikationspartnertyp
     * @var string|null
     */
    public ?string $Kommunikationspartnertyp = null;
    /**
     * The Obergruppennummer
     * @var string|null
     */
    public ?string $Obergruppennummer = null;
    /**
     * The Kommunikationspartnerursprung
     * @var string|null
     */
    public ?string $Kommunikationspartnerursprung = null;
    /**
     * The ListeKommunikationspartner
     * @var \THAG\XKfz\StructType\ListeKommunikationspartner|null
     */
    public ?\THAG\XKfz\StructType\ListeKommunikationspartner $ListeKommunikationspartner = null;
    /**
     * The ListeKommunikationspartnerkennung
     * @var \THAG\XKfz\StructType\ListeKommunikationspartnerkennung|null
     */
    public ?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung $ListeKommunikationspartnerkennung = null;
    /**
     * The ListeAnzufragendesVersicherungsunternehmen
     * @var \THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen|null
     */
    public ?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $ListeAnzufragendesVersicherungsunternehmen = null;
    /**
     * The UngebundenerVermittler
     * @var \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;
    /**
     * The Administrator
     * @var \THAG\XKfz\StructType\Administrator|null
     */
    public ?\THAG\XKfz\StructType\Administrator $Administrator = null;
    /**
     * The VUInterneVermittlernummer
     * @var string|null
     */
    public ?string $VUInterneVermittlernummer = null;
    /**
     * The Reversierungsstatus
     * @var string|null
     */
    public ?string $Reversierungsstatus = null;
    /**
     * The ListeReversierungsrecht
     * @var \THAG\XKfz\StructType\ListeReversierungsrecht|null
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsrecht $ListeReversierungsrecht = null;
    /**
     * The ListeReversierungVM
     * @var \THAG\XKfz\StructType\ListeReversierungVM|null
     */
    public ?\THAG\XKfz\StructType\ListeReversierungVM $ListeReversierungVM = null;
    /**
     * The ListeReversierungVU
     * @var \THAG\XKfz\StructType\ListeReversierungVU|null
     */
    public ?\THAG\XKfz\StructType\ListeReversierungVU $ListeReversierungVU = null;
    /**
     * The AlleUntergruppen
     * @var string|null
     */
    public ?string $AlleUntergruppen = null;
    /**
     * The eVBDaten
     * @var \THAG\XKfz\StructType\EVBDaten|null
     */
    public ?\THAG\XKfz\StructType\EVBDaten $eVBDaten = null;
    /**
     * The NutzerRechercheAnfrage
     * @var \THAG\XKfz\StructType\NutzerRechercheAnfrage|null
     */
    public ?\THAG\XKfz\StructType\NutzerRechercheAnfrage $NutzerRechercheAnfrage = null;
    /**
     * The ListeNutzerRechercheAntwort
     * @var \THAG\XKfz\StructType\ListeNutzerRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort $ListeNutzerRechercheAntwort = null;
    /**
     * The ListeGruppe
     * @var \THAG\XKfz\StructType\ListeGruppe|null
     */
    public ?\THAG\XKfz\StructType\ListeGruppe $ListeGruppe = null;
    /**
     * The ListeGruppenrecht
     * @var \THAG\XKfz\StructType\ListeGruppenrecht|null
     */
    public ?\THAG\XKfz\StructType\ListeGruppenrecht $ListeGruppenrecht = null;
    /**
     * The ListeRecht
     * @var \THAG\XKfz\StructType\ListeRecht|null
     */
    public ?\THAG\XKfz\StructType\ListeRecht $ListeRecht = null;
    /**
     * The ListeRechteklasse
     * @var \THAG\XKfz\StructType\ListeRechteklasse|null
     */
    public ?\THAG\XKfz\StructType\ListeRechteklasse $ListeRechteklasse = null;
    /**
     * The ListeTeilnahmeReversierung
     * @var \THAG\XKfz\StructType\ListeTeilnahmeReversierung|null
     */
    public ?\THAG\XKfz\StructType\ListeTeilnahmeReversierung $ListeTeilnahmeReversierung = null;
    /**
     * The KorrekturFahrzeugidentifizierungsnummer
     * @var string|null
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummer = null;
    /**
     * The FzRechercheAnfrage
     * @var \THAG\XKfz\StructType\FzRechercheAnfrage|null
     */
    public ?\THAG\XKfz\StructType\FzRechercheAnfrage $FzRechercheAnfrage = null;
    /**
     * The ListeFzRechercheAntwort
     * @var \THAG\XKfz\StructType\ListeFzRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\ListeFzRechercheAntwort $ListeFzRechercheAntwort = null;
    /**
     * The FzRechercheAnfrageDetails
     * @var \THAG\XKfz\StructType\FzRechercheAnfrageDetails|null
     */
    public ?\THAG\XKfz\StructType\FzRechercheAnfrageDetails $FzRechercheAnfrageDetails = null;
    /**
     * The FzRechercheAntwortDetails
     * @var \THAG\XKfz\StructType\FzRechercheAntwortDetails|null
     */
    public ?\THAG\XKfz\StructType\FzRechercheAntwortDetails $FzRechercheAntwortDetails = null;
    /**
     * The ListeVkzFehler
     * @var \THAG\XKfz\StructType\ListeVkzFehler|null
     */
    public ?\THAG\XKfz\StructType\ListeVkzFehler $ListeVkzFehler = null;
    /**
     * The EintragungImZfzrErfolgt
     * @var string|null
     */
    public ?string $EintragungImZfzrErfolgt = null;
    /**
     * The ListeVorlage
     * @var \THAG\XKfz\StructType\ListeVorlage|null
     */
    public ?\THAG\XKfz\StructType\ListeVorlage $ListeVorlage = null;
    /**
     * The VorlageNummer
     * @var string|null
     */
    public ?string $VorlageNummer = null;
    /**
     * The NeuanlageMoeglich
     * @var string|null
     */
    public ?string $NeuanlageMoeglich = null;
    /**
     * The VorlageDetail
     * @var \THAG\XKfz\StructType\VorlageDetail|null
     */
    public ?\THAG\XKfz\StructType\VorlageDetail $VorlageDetail = null;
    /**
     * The VorlagePflegeart
     * @var string|null
     */
    public ?string $VorlagePflegeart = null;
    /**
     * The VorlageName
     * @var string|null
     */
    public ?string $VorlageName = null;
    /**
     * The Vorgangsart
     * @var string|null
     */
    public ?string $Vorgangsart = null;
    /**
     * The VorlageInhalt
     * @var string|null
     */
    public ?string $VorlageInhalt = null;
    /**
     * The UebermittlungsRechercheAnfrage
     * @var \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage|null
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $UebermittlungsRechercheAnfrage = null;
    /**
     * The UebermittlungsRechercheAnfrageDetails
     * @var \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails|null
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $UebermittlungsRechercheAnfrageDetails = null;
    /**
     * The ListeUebermittlungsRechercheAntwort
     * @var \THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort|null
     */
    public ?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $ListeUebermittlungsRechercheAntwort = null;
    /**
     * The UebermittlungsRechercheAntwortDetails
     * @var \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails|null
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $UebermittlungsRechercheAntwortDetails = null;
    /**
     * The ListeVorgangsart
     * @var \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;
    /**
     * The ListeFeldVuIndividualisierung
     * @var \THAG\XKfz\StructType\ListeFeldVuIndividualisierung|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung $ListeFeldVuIndividualisierung = null;
    /**
     * The FeldXmlPfad
     * @var string|null
     */
    public ?string $FeldXmlPfad = null;
    /**
     * The PortalTyp
     * @var string|null
     */
    public ?string $PortalTyp = null;
    /**
     * The Begruendung
     * @var string|null
     */
    public ?string $Begruendung = null;
    /**
     * The Datenpfad
     * @var string|null
     */
    public ?string $Datenpfad = null;
    /**
     * The DatentypName
     * @var string|null
     */
    public ?string $DatentypName = null;
    /**
     * The ListeDatentyp
     * @var \THAG\XKfz\StructType\ListeDatentyp|null
     */
    public ?\THAG\XKfz\StructType\ListeDatentyp $ListeDatentyp = null;
    /**
     * The Daten
     * @var string|null
     */
    public ?string $Daten = null;
    /**
     * The Profilpflegeergebnis
     * @var string|null
     */
    public ?string $Profilpflegeergebnis = null;
    /**
     * The ListeDatenpfad
     * @var \THAG\XKfz\StructType\ListeDatenpfad|null
     */
    public ?\THAG\XKfz\StructType\ListeDatenpfad $ListeDatenpfad = null;
    /**
     * The DatenAbfragezeitpunkt
     * @var string|null
     */
    public ?string $DatenAbfragezeitpunkt = null;
    /**
     * The DatenAnzahlEbenen
     * @var string|null
     */
    public ?string $DatenAnzahlEbenen = null;
    /**
     * The DatenIndirektePflege
     * @var string|null
     */
    public ?string $DatenIndirektePflege = null;
    /**
     * The ListeFeldXmlPfad
     * @var \THAG\XKfz\StructType\ListeFeldXmlPfad|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldXmlPfad $ListeFeldXmlPfad = null;
    /**
     * The ListeVersicherung
     * @var \THAG\XKfz\StructType\ListeVersicherung|null
     */
    public ?\THAG\XKfz\StructType\ListeVersicherung $ListeVersicherung = null;
    /**
     * The Versicherungsscheinnummer
     * @var string|null
     */
    public ?string $Versicherungsscheinnummer = null;
    /**
     * The AbDatensatzId
     * @var string|null
     */
    public ?string $AbDatensatzId = null;
    /**
     * The AnzahlDatensaetze
     * @var string|null
     */
    public ?string $AnzahlDatensaetze = null;
    /**
     * The SortierungSpalte
     * @var string|null
     */
    public ?string $SortierungSpalte = null;
    /**
     * The SortierungRichtung
     * @var string|null
     */
    public ?string $SortierungRichtung = null;
    /**
     * The NaechsteDatensatzId
     * @var string|null
     */
    public ?string $NaechsteDatensatzId = null;
    /**
     * The ListeStrukturOderNachrichtentyp
     * @var \THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp|null
     */
    public ?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $ListeStrukturOderNachrichtentyp = null;
    /**
     * The ListeBedingungsdefinition
     * @var \THAG\XKfz\StructType\ListeBedingungsdefinition|null
     */
    public ?\THAG\XKfz\StructType\ListeBedingungsdefinition $ListeBedingungsdefinition = null;
    /**
     * The ListeFeldbezeichnung
     * @var \THAG\XKfz\StructType\ListeFeldbezeichnung|null
     */
    public ?\THAG\XKfz\StructType\ListeFeldbezeichnung $ListeFeldbezeichnung = null;
    /**
     * The ListeFelddefinition
     * @var \THAG\XKfz\StructType\ListeFelddefinition|null
     */
    public ?\THAG\XKfz\StructType\ListeFelddefinition $ListeFelddefinition = null;
    /**
     * The Vorgangsnummer
     * @var string|null
     */
    public ?string $Vorgangsnummer = null;
    /**
     * The NurKontextUebersicht
     * @var string|null
     */
    public ?string $NurKontextUebersicht = null;
    /**
     * The ListeVerarbeitungskontext
     * @var \THAG\XKfz\StructType\ListeVerarbeitungskontext|null
     */
    public ?\THAG\XKfz\StructType\ListeVerarbeitungskontext $ListeVerarbeitungskontext = null;
    /**
     * The ListeBenachrichtigungsauftrag
     * @var \THAG\XKfz\StructType\ListeBenachrichtigungsauftrag|null
     */
    public ?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $ListeBenachrichtigungsauftrag = null;
    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     * @var string|null
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;
    /**
     * The Bonitaetsdaten
     * @var \THAG\XKfz\StructType\Bonitaetsdaten|null
     */
    public ?\THAG\XKfz\StructType\Bonitaetsdaten $Bonitaetsdaten = null;
    /**
     * The ListeBonitaetsdaten
     * @var \THAG\XKfz\StructType\ListeBonitaetsdaten|null
     */
    public ?\THAG\XKfz\StructType\ListeBonitaetsdaten $ListeBonitaetsdaten = null;
    /**
     * The Bonitaetsvorgangsstatus
     * @var string|null
     */
    public ?string $Bonitaetsvorgangsstatus = null;
    /**
     * The PruefergebnisPositiv
     * @var string|null
     */
    public ?string $PruefergebnisPositiv = null;
    /**
     * The ITDienstleisterId
     * @var string|null
     */
    public ?string $ITDienstleisterId = null;
    /**
     * The SMSText
     * @var string|null
     */
    public ?string $SMSText = null;
    /**
     * The SMSAbsenderkennung
     * @var string|null
     */
    public ?string $SMSAbsenderkennung = null;
    /**
     * The AlternativeNutzerkennung
     * @var string|null
     */
    public ?string $AlternativeNutzerkennung = null;
    /**
     * The Suchtext
     * @var string|null
     */
    public ?string $Suchtext = null;
    /**
     * The VkzLogistikAuftrag
     * @var \THAG\XKfz\StructType\VkzLogistikAuftrag|null
     */
    public ?\THAG\XKfz\StructType\VkzLogistikAuftrag $VkzLogistikAuftrag = null;
    /**
     * The AnschreibenPdf
     * @var string|null
     */
    public ?string $AnschreibenPdf = null;
    /**
     * The Storno
     * @var string|null
     */
    public ?string $Storno = null;
    /**
     * The LogistikEmpfaenger
     * @var \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;
    /**
     * The ListeLogistikArtikel
     * @var \THAG\XKfz\StructType\ListeLogistikArtikel|null
     */
    public ?\THAG\XKfz\StructType\ListeLogistikArtikel $ListeLogistikArtikel = null;
    /**
     * The ListeLogistikOption
     * @var \THAG\XKfz\StructType\ListeLogistikOption|null
     */
    public ?\THAG\XKfz\StructType\ListeLogistikOption $ListeLogistikOption = null;
    /**
     * The LogistikZustellStatus
     * @var string|null
     */
    public ?string $LogistikZustellStatus = null;
    /**
     * The TrackingId
     * @var string|null
     */
    public ?string $TrackingId = null;
    /**
     * The TrackingLink
     * @var string|null
     */
    public ?string $TrackingLink = null;
    /**
     * The ListeEmailEmpfaenger
     * @var \THAG\XKfz\StructType\ListeEmailEmpfaenger|null
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaenger $ListeEmailEmpfaenger = null;
    /**
     * The ListeEmailEmpfaengerCc
     * @var \THAG\XKfz\StructType\ListeEmailEmpfaengerCc|null
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc $ListeEmailEmpfaengerCc = null;
    /**
     * The ListeEmailEmpfaengerBcc
     * @var \THAG\XKfz\StructType\ListeEmailEmpfaengerBcc|null
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $ListeEmailEmpfaengerBcc = null;
    /**
     * The AdresslabelFreitext
     * @var string|null
     */
    public ?string $AdresslabelFreitext = null;
    /**
     * The Details
     * @var string|null
     */
    public ?string $Details = null;
    /**
     * The EmailVorlage
     * @var string|null
     */
    public ?string $EmailVorlage = null;
    /**
     * The ListeEmailParameter
     * @var \THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter|null
     */
    public ?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $ListeEmailParameter = null;
    /**
     * The ListeVkzProduktionsauftrag
     * @var \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag|null
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $ListeVkzProduktionsauftrag = null;
    /**
     * The ListeAuftragStatus
     * @var \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus|null
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $ListeAuftragStatus = null;
    /**
     * The ListeVpeNummer
     * @var \THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer|null
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $ListeVpeNummer = null;
    /**
     * Constructor method for Nachricht
     * @uses Nachricht::setZeitstempel()
     * @uses Nachricht::setLoginToken()
     * @uses Nachricht::setNachrichtenkopf()
     * @uses Nachricht::setDatumEndeVersicherungsschutz()
     * @uses Nachricht::setDatumAusserbetriebsetzung()
     * @uses Nachricht::setPing()
     * @uses Nachricht::setVersicherungsunternehmensnummer()
     * @uses Nachricht::setSonderzeichen()
     * @uses Nachricht::setAnfragenummer()
     * @uses Nachricht::setVersicherungsbestaetigungsnummer()
     * @uses Nachricht::setVbArt()
     * @uses Nachricht::setVbAbrufbarBis()
     * @uses Nachricht::setVbIstNochZuDrucken()
     * @uses Nachricht::setVbFormular()
     * @uses Nachricht::setVbFormularGewuenscht()
     * @uses Nachricht::setPruefergebnis()
     * @uses Nachricht::setVkzPruefergebnis()
     * @uses Nachricht::setPruefergebnisKommentar()
     * @uses Nachricht::setZulassungsfahrten()
     * @uses Nachricht::setZeitpunktAenderung()
     * @uses Nachricht::setVersicherung()
     * @uses Nachricht::setBonitaetszugangsnummer()
     * @uses Nachricht::setBonitaetszugangspasswort()
     * @uses Nachricht::setBonitaetspruefungscode()
     * @uses Nachricht::setBonitaetsanfragegrund()
     * @uses Nachricht::setVersicherungsnehmer()
     * @uses Nachricht::setHalter()
     * @uses Nachricht::setFahrzeug()
     * @uses Nachricht::setKennzeichen()
     * @uses Nachricht::setBehoerde()
     * @uses Nachricht::setVbAblehnungsgrund()
     * @uses Nachricht::setListeFehlerBei()
     * @uses Nachricht::setVuArbeitsgang()
     * @uses Nachricht::setAnzeigeAblehnungsgrund()
     * @uses Nachricht::setDatumEingangAnzeigeZulBeh()
     * @uses Nachricht::setDatumNachversichererAb()
     * @uses Nachricht::setVbStatus()
     * @uses Nachricht::setVuMitteilungsart()
     * @uses Nachricht::setAnzahlVersicherungsbestaetigungsnummer()
     * @uses Nachricht::setListeVersicherungsbestaetigungsnummer()
     * @uses Nachricht::setZustaendigeBehoerdeKreisschluessel()
     * @uses Nachricht::setZustaendigeBehoerdeZusatzziffer()
     * @uses Nachricht::setVbVerwenden()
     * @uses Nachricht::setListeVbStatusPruefauftrag()
     * @uses Nachricht::setVbRechercheAnfrage()
     * @uses Nachricht::setWeitereDatensaetzeVorhanden()
     * @uses Nachricht::setListeVbRechercheAntwort()
     * @uses Nachricht::setVbRechercheAnfrageDetails()
     * @uses Nachricht::setVbRechercheAntwortDetails()
     * @uses Nachricht::setAktion()
     * @uses Nachricht::setKorrekturFahrzeugidentifizierungsnummerUmgehen()
     * @uses Nachricht::setKorrekturZustaendigeBehoerdeUmgehen()
     * @uses Nachricht::setSMSEingangBehoerde()
     * @uses Nachricht::setSMSEmpfaenger()
     * @uses Nachricht::setSMSTextEingangBehoerde()
     * @uses Nachricht::setSMSTextVersicherungsbestaetigungsnummer()
     * @uses Nachricht::setSMSTextVersicherungswechsel()
     * @uses Nachricht::setSMSTextZulassung()
     * @uses Nachricht::setSMSVersicherungsbestaetigungsnummer()
     * @uses Nachricht::setSMSVersicherungswechsel()
     * @uses Nachricht::setSMSZulassung()
     * @uses Nachricht::setZuordnungGDVVermittlernummer()
     * @uses Nachricht::setBonitaetspruefungSteuerung()
     * @uses Nachricht::setGDVVermittlernummer()
     * @uses Nachricht::setPflegeart()
     * @uses Nachricht::setGruppenrechtPflegeart()
     * @uses Nachricht::setGruppePflegeart()
     * @uses Nachricht::setNutzerkennung()
     * @uses Nachricht::setZugangsberechtigung()
     * @uses Nachricht::setNutzerPinNeu()
     * @uses Nachricht::setNatuerlichePerson()
     * @uses Nachricht::setJuristischePerson()
     * @uses Nachricht::setAnschrift()
     * @uses Nachricht::setKontaktdaten()
     * @uses Nachricht::setKorrekturen()
     * @uses Nachricht::setListeBekannteBedingungsverletzung()
     * @uses Nachricht::setIHKRegistrierungsnummer()
     * @uses Nachricht::setVUNutzerId()
     * @uses Nachricht::setPinGueltigBis()
     * @uses Nachricht::setNutzerAngemeldet()
     * @uses Nachricht::setIstInAdmingruppe()
     * @uses Nachricht::setGruppennummer()
     * @uses Nachricht::setGruppenname()
     * @uses Nachricht::setRechtnummer()
     * @uses Nachricht::setListeReversierungsstatus()
     * @uses Nachricht::setListenrechtEintragKey()
     * @uses Nachricht::setRechteklassenname()
     * @uses Nachricht::setRechteklassennummer()
     * @uses Nachricht::setBeschreibung()
     * @uses Nachricht::setMinimalwert()
     * @uses Nachricht::setMaximalwert()
     * @uses Nachricht::setKommunikationspartnerkennung()
     * @uses Nachricht::setKommunikationspartnertyp()
     * @uses Nachricht::setObergruppennummer()
     * @uses Nachricht::setKommunikationspartnerursprung()
     * @uses Nachricht::setListeKommunikationspartner()
     * @uses Nachricht::setListeKommunikationspartnerkennung()
     * @uses Nachricht::setListeAnzufragendesVersicherungsunternehmen()
     * @uses Nachricht::setUngebundenerVermittler()
     * @uses Nachricht::setAdministrator()
     * @uses Nachricht::setVUInterneVermittlernummer()
     * @uses Nachricht::setReversierungsstatus()
     * @uses Nachricht::setListeReversierungsrecht()
     * @uses Nachricht::setListeReversierungVM()
     * @uses Nachricht::setListeReversierungVU()
     * @uses Nachricht::setAlleUntergruppen()
     * @uses Nachricht::setEVBDaten()
     * @uses Nachricht::setNutzerRechercheAnfrage()
     * @uses Nachricht::setListeNutzerRechercheAntwort()
     * @uses Nachricht::setListeGruppe()
     * @uses Nachricht::setListeGruppenrecht()
     * @uses Nachricht::setListeRecht()
     * @uses Nachricht::setListeRechteklasse()
     * @uses Nachricht::setListeTeilnahmeReversierung()
     * @uses Nachricht::setKorrekturFahrzeugidentifizierungsnummer()
     * @uses Nachricht::setFzRechercheAnfrage()
     * @uses Nachricht::setListeFzRechercheAntwort()
     * @uses Nachricht::setFzRechercheAnfrageDetails()
     * @uses Nachricht::setFzRechercheAntwortDetails()
     * @uses Nachricht::setListeVkzFehler()
     * @uses Nachricht::setEintragungImZfzrErfolgt()
     * @uses Nachricht::setListeVorlage()
     * @uses Nachricht::setVorlageNummer()
     * @uses Nachricht::setNeuanlageMoeglich()
     * @uses Nachricht::setVorlageDetail()
     * @uses Nachricht::setVorlagePflegeart()
     * @uses Nachricht::setVorlageName()
     * @uses Nachricht::setVorgangsart()
     * @uses Nachricht::setVorlageInhalt()
     * @uses Nachricht::setUebermittlungsRechercheAnfrage()
     * @uses Nachricht::setUebermittlungsRechercheAnfrageDetails()
     * @uses Nachricht::setListeUebermittlungsRechercheAntwort()
     * @uses Nachricht::setUebermittlungsRechercheAntwortDetails()
     * @uses Nachricht::setListeVorgangsart()
     * @uses Nachricht::setListeFeldVuIndividualisierung()
     * @uses Nachricht::setFeldXmlPfad()
     * @uses Nachricht::setPortalTyp()
     * @uses Nachricht::setBegruendung()
     * @uses Nachricht::setDatenpfad()
     * @uses Nachricht::setDatentypName()
     * @uses Nachricht::setListeDatentyp()
     * @uses Nachricht::setDaten()
     * @uses Nachricht::setProfilpflegeergebnis()
     * @uses Nachricht::setListeDatenpfad()
     * @uses Nachricht::setDatenAbfragezeitpunkt()
     * @uses Nachricht::setDatenAnzahlEbenen()
     * @uses Nachricht::setDatenIndirektePflege()
     * @uses Nachricht::setListeFeldXmlPfad()
     * @uses Nachricht::setListeVersicherung()
     * @uses Nachricht::setVersicherungsscheinnummer()
     * @uses Nachricht::setAbDatensatzId()
     * @uses Nachricht::setAnzahlDatensaetze()
     * @uses Nachricht::setSortierungSpalte()
     * @uses Nachricht::setSortierungRichtung()
     * @uses Nachricht::setNaechsteDatensatzId()
     * @uses Nachricht::setListeStrukturOderNachrichtentyp()
     * @uses Nachricht::setListeBedingungsdefinition()
     * @uses Nachricht::setListeFeldbezeichnung()
     * @uses Nachricht::setListeFelddefinition()
     * @uses Nachricht::setVorgangsnummer()
     * @uses Nachricht::setNurKontextUebersicht()
     * @uses Nachricht::setListeVerarbeitungskontext()
     * @uses Nachricht::setListeBenachrichtigungsauftrag()
     * @uses Nachricht::setKennzeichenZugehoerigesWechselkennzeichen()
     * @uses Nachricht::setBonitaetsdaten()
     * @uses Nachricht::setListeBonitaetsdaten()
     * @uses Nachricht::setBonitaetsvorgangsstatus()
     * @uses Nachricht::setPruefergebnisPositiv()
     * @uses Nachricht::setITDienstleisterId()
     * @uses Nachricht::setSMSText()
     * @uses Nachricht::setSMSAbsenderkennung()
     * @uses Nachricht::setAlternativeNutzerkennung()
     * @uses Nachricht::setSuchtext()
     * @uses Nachricht::setVkzLogistikAuftrag()
     * @uses Nachricht::setAnschreibenPdf()
     * @uses Nachricht::setStorno()
     * @uses Nachricht::setLogistikEmpfaenger()
     * @uses Nachricht::setListeLogistikArtikel()
     * @uses Nachricht::setListeLogistikOption()
     * @uses Nachricht::setLogistikZustellStatus()
     * @uses Nachricht::setTrackingId()
     * @uses Nachricht::setTrackingLink()
     * @uses Nachricht::setListeEmailEmpfaenger()
     * @uses Nachricht::setListeEmailEmpfaengerCc()
     * @uses Nachricht::setListeEmailEmpfaengerBcc()
     * @uses Nachricht::setAdresslabelFreitext()
     * @uses Nachricht::setDetails()
     * @uses Nachricht::setEmailVorlage()
     * @uses Nachricht::setListeEmailParameter()
     * @uses Nachricht::setListeVkzProduktionsauftrag()
     * @uses Nachricht::setListeAuftragStatus()
     * @uses Nachricht::setListeVpeNummer()
     * @param string $zeitstempel
     * @param string $loginToken
     * @param \THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf
     * @param string $datumEndeVersicherungsschutz
     * @param string $datumAusserbetriebsetzung
     * @param string $ping
     * @param string $versicherungsunternehmensnummer
     * @param string $sonderzeichen
     * @param string $anfragenummer
     * @param string $versicherungsbestaetigungsnummer
     * @param string $vbArt
     * @param string $vbAbrufbarBis
     * @param string $vbIstNochZuDrucken
     * @param string $vbFormular
     * @param string $vbFormularGewuenscht
     * @param string $pruefergebnis
     * @param string $vkzPruefergebnis
     * @param string $pruefergebnisKommentar
     * @param string $zulassungsfahrten
     * @param string $zeitpunktAenderung
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @param string $bonitaetszugangsnummer
     * @param string $bonitaetszugangspasswort
     * @param string $bonitaetspruefungscode
     * @param string $bonitaetsanfragegrund
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @param \THAG\XKfz\StructType\Halter $halter
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
     * @param string $vbAblehnungsgrund
     * @param \THAG\XKfz\StructType\ListeFehlerBei $listeFehlerBei
     * @param \THAG\XKfz\StructType\VuArbeitsgang $vuArbeitsgang
     * @param string $anzeigeAblehnungsgrund
     * @param string $datumEingangAnzeigeZulBeh
     * @param string $datumNachversichererAb
     * @param string $vbStatus
     * @param string $vuMitteilungsart
     * @param string $anzahlVersicherungsbestaetigungsnummer
     * @param \THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $listeVersicherungsbestaetigungsnummer
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @param string $vbVerwenden
     * @param \THAG\XKfz\StructType\ListeVbStatusPruefauftrag $listeVbStatusPruefauftrag
     * @param \THAG\XKfz\StructType\VbRechercheAnfrage $vbRechercheAnfrage
     * @param string $weitereDatensaetzeVorhanden
     * @param \THAG\XKfz\StructType\ListeVbRechercheAntwort $listeVbRechercheAntwort
     * @param \THAG\XKfz\StructType\VbRechercheAnfrageDetails $vbRechercheAnfrageDetails
     * @param \THAG\XKfz\StructType\VbRechercheAntwortDetails $vbRechercheAntwortDetails
     * @param string $aktion
     * @param string $korrekturFahrzeugidentifizierungsnummerUmgehen
     * @param string $korrekturZustaendigeBehoerdeUmgehen
     * @param string $sMSEingangBehoerde
     * @param string $sMSEmpfaenger
     * @param string $sMSTextEingangBehoerde
     * @param string $sMSTextVersicherungsbestaetigungsnummer
     * @param string $sMSTextVersicherungswechsel
     * @param string $sMSTextZulassung
     * @param string $sMSVersicherungsbestaetigungsnummer
     * @param string $sMSVersicherungswechsel
     * @param string $sMSZulassung
     * @param string $zuordnungGDVVermittlernummer
     * @param string $bonitaetspruefungSteuerung
     * @param string $gDVVermittlernummer
     * @param string $pflegeart
     * @param string $gruppenrechtPflegeart
     * @param string $gruppePflegeart
     * @param string $nutzerkennung
     * @param string $zugangsberechtigung
     * @param string $nutzerPinNeu
     * @param \THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson
     * @param \THAG\XKfz\StructType\JuristischePerson $juristischePerson
     * @param \THAG\XKfz\StructType\Anschrift $anschrift
     * @param \THAG\XKfz\StructType\Kontaktdaten $kontaktdaten
     * @param \THAG\XKfz\StructType\Korrekturen $korrekturen
     * @param \THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $listeBekannteBedingungsverletzung
     * @param string $iHKRegistrierungsnummer
     * @param string $vUNutzerId
     * @param string $pinGueltigBis
     * @param string $nutzerAngemeldet
     * @param string $istInAdmingruppe
     * @param string $gruppennummer
     * @param string $gruppenname
     * @param string $rechtnummer
     * @param \THAG\XKfz\StructType\ListeReversierungsstatus $listeReversierungsstatus
     * @param string $listenrechtEintragKey
     * @param string $rechteklassenname
     * @param string $rechteklassennummer
     * @param string $beschreibung
     * @param string $minimalwert
     * @param string $maximalwert
     * @param string $kommunikationspartnerkennung
     * @param string $kommunikationspartnertyp
     * @param string $obergruppennummer
     * @param string $kommunikationspartnerursprung
     * @param \THAG\XKfz\StructType\ListeKommunikationspartner $listeKommunikationspartner
     * @param \THAG\XKfz\StructType\ListeKommunikationspartnerkennung $listeKommunikationspartnerkennung
     * @param \THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $listeAnzufragendesVersicherungsunternehmen
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @param \THAG\XKfz\StructType\Administrator $administrator
     * @param string $vUInterneVermittlernummer
     * @param string $reversierungsstatus
     * @param \THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht
     * @param \THAG\XKfz\StructType\ListeReversierungVM $listeReversierungVM
     * @param \THAG\XKfz\StructType\ListeReversierungVU $listeReversierungVU
     * @param string $alleUntergruppen
     * @param \THAG\XKfz\StructType\EVBDaten $eVBDaten
     * @param \THAG\XKfz\StructType\NutzerRechercheAnfrage $nutzerRechercheAnfrage
     * @param \THAG\XKfz\StructType\ListeNutzerRechercheAntwort $listeNutzerRechercheAntwort
     * @param \THAG\XKfz\StructType\ListeGruppe $listeGruppe
     * @param \THAG\XKfz\StructType\ListeGruppenrecht $listeGruppenrecht
     * @param \THAG\XKfz\StructType\ListeRecht $listeRecht
     * @param \THAG\XKfz\StructType\ListeRechteklasse $listeRechteklasse
     * @param \THAG\XKfz\StructType\ListeTeilnahmeReversierung $listeTeilnahmeReversierung
     * @param string $korrekturFahrzeugidentifizierungsnummer
     * @param \THAG\XKfz\StructType\FzRechercheAnfrage $fzRechercheAnfrage
     * @param \THAG\XKfz\StructType\ListeFzRechercheAntwort $listeFzRechercheAntwort
     * @param \THAG\XKfz\StructType\FzRechercheAnfrageDetails $fzRechercheAnfrageDetails
     * @param \THAG\XKfz\StructType\FzRechercheAntwortDetails $fzRechercheAntwortDetails
     * @param \THAG\XKfz\StructType\ListeVkzFehler $listeVkzFehler
     * @param string $eintragungImZfzrErfolgt
     * @param \THAG\XKfz\StructType\ListeVorlage $listeVorlage
     * @param string $vorlageNummer
     * @param string $neuanlageMoeglich
     * @param \THAG\XKfz\StructType\VorlageDetail $vorlageDetail
     * @param string $vorlagePflegeart
     * @param string $vorlageName
     * @param string $vorgangsart
     * @param string $vorlageInhalt
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $uebermittlungsRechercheAnfrage
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $uebermittlungsRechercheAnfrageDetails
     * @param \THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $listeUebermittlungsRechercheAntwort
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $uebermittlungsRechercheAntwortDetails
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
     * @param \THAG\XKfz\StructType\ListeFeldVuIndividualisierung $listeFeldVuIndividualisierung
     * @param string $feldXmlPfad
     * @param string $portalTyp
     * @param string $begruendung
     * @param string $datenpfad
     * @param string $datentypName
     * @param \THAG\XKfz\StructType\ListeDatentyp $listeDatentyp
     * @param string $daten
     * @param string $profilpflegeergebnis
     * @param \THAG\XKfz\StructType\ListeDatenpfad $listeDatenpfad
     * @param string $datenAbfragezeitpunkt
     * @param string $datenAnzahlEbenen
     * @param string $datenIndirektePflege
     * @param \THAG\XKfz\StructType\ListeFeldXmlPfad $listeFeldXmlPfad
     * @param \THAG\XKfz\StructType\ListeVersicherung $listeVersicherung
     * @param string $versicherungsscheinnummer
     * @param string $abDatensatzId
     * @param string $anzahlDatensaetze
     * @param string $sortierungSpalte
     * @param string $sortierungRichtung
     * @param string $naechsteDatensatzId
     * @param \THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $listeStrukturOderNachrichtentyp
     * @param \THAG\XKfz\StructType\ListeBedingungsdefinition $listeBedingungsdefinition
     * @param \THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung
     * @param \THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition
     * @param string $vorgangsnummer
     * @param string $nurKontextUebersicht
     * @param \THAG\XKfz\StructType\ListeVerarbeitungskontext $listeVerarbeitungskontext
     * @param \THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $listeBenachrichtigungsauftrag
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @param \THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten
     * @param \THAG\XKfz\StructType\ListeBonitaetsdaten $listeBonitaetsdaten
     * @param string $bonitaetsvorgangsstatus
     * @param string $pruefergebnisPositiv
     * @param string $iTDienstleisterId
     * @param string $sMSText
     * @param string $sMSAbsenderkennung
     * @param string $alternativeNutzerkennung
     * @param string $suchtext
     * @param \THAG\XKfz\StructType\VkzLogistikAuftrag $vkzLogistikAuftrag
     * @param string $anschreibenPdf
     * @param string $storno
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @param \THAG\XKfz\StructType\ListeLogistikArtikel $listeLogistikArtikel
     * @param \THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption
     * @param string $logistikZustellStatus
     * @param string $trackingId
     * @param string $trackingLink
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaenger $listeEmailEmpfaenger
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaengerCc $listeEmailEmpfaengerCc
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $listeEmailEmpfaengerBcc
     * @param string $adresslabelFreitext
     * @param string $details
     * @param string $emailVorlage
     * @param \THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $listeEmailParameter
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $listeVkzProduktionsauftrag
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $listeAuftragStatus
     * @param \THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $listeVpeNummer
     */
    public function __construct(?string $zeitstempel = null, ?string $loginToken = null, ?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null, ?string $datumEndeVersicherungsschutz = null, ?string $datumAusserbetriebsetzung = null, ?string $ping = null, ?string $versicherungsunternehmensnummer = null, ?string $sonderzeichen = null, ?string $anfragenummer = null, ?string $versicherungsbestaetigungsnummer = null, ?string $vbArt = null, ?string $vbAbrufbarBis = null, ?string $vbIstNochZuDrucken = null, ?string $vbFormular = null, ?string $vbFormularGewuenscht = null, ?string $pruefergebnis = null, ?string $vkzPruefergebnis = null, ?string $pruefergebnisKommentar = null, ?string $zulassungsfahrten = null, ?string $zeitpunktAenderung = null, ?\THAG\XKfz\StructType\Versicherung $versicherung = null, ?string $bonitaetszugangsnummer = null, ?string $bonitaetszugangspasswort = null, ?string $bonitaetspruefungscode = null, ?string $bonitaetsanfragegrund = null, ?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null, ?\THAG\XKfz\StructType\Halter $halter = null, ?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null, ?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null, ?\THAG\XKfz\StructType\Behoerde $behoerde = null, ?string $vbAblehnungsgrund = null, ?\THAG\XKfz\StructType\ListeFehlerBei $listeFehlerBei = null, ?\THAG\XKfz\StructType\VuArbeitsgang $vuArbeitsgang = null, ?string $anzeigeAblehnungsgrund = null, ?string $datumEingangAnzeigeZulBeh = null, ?string $datumNachversichererAb = null, ?string $vbStatus = null, ?string $vuMitteilungsart = null, ?string $anzahlVersicherungsbestaetigungsnummer = null, ?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $listeVersicherungsbestaetigungsnummer = null, ?string $zustaendigeBehoerdeKreisschluessel = null, ?string $zustaendigeBehoerdeZusatzziffer = null, ?string $vbVerwenden = null, ?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag $listeVbStatusPruefauftrag = null, ?\THAG\XKfz\StructType\VbRechercheAnfrage $vbRechercheAnfrage = null, ?string $weitereDatensaetzeVorhanden = null, ?\THAG\XKfz\StructType\ListeVbRechercheAntwort $listeVbRechercheAntwort = null, ?\THAG\XKfz\StructType\VbRechercheAnfrageDetails $vbRechercheAnfrageDetails = null, ?\THAG\XKfz\StructType\VbRechercheAntwortDetails $vbRechercheAntwortDetails = null, ?string $aktion = null, ?string $korrekturFahrzeugidentifizierungsnummerUmgehen = null, ?string $korrekturZustaendigeBehoerdeUmgehen = null, ?string $sMSEingangBehoerde = null, ?string $sMSEmpfaenger = null, ?string $sMSTextEingangBehoerde = null, ?string $sMSTextVersicherungsbestaetigungsnummer = null, ?string $sMSTextVersicherungswechsel = null, ?string $sMSTextZulassung = null, ?string $sMSVersicherungsbestaetigungsnummer = null, ?string $sMSVersicherungswechsel = null, ?string $sMSZulassung = null, ?string $zuordnungGDVVermittlernummer = null, ?string $bonitaetspruefungSteuerung = null, ?string $gDVVermittlernummer = null, ?string $pflegeart = null, ?string $gruppenrechtPflegeart = null, ?string $gruppePflegeart = null, ?string $nutzerkennung = null, ?string $zugangsberechtigung = null, ?string $nutzerPinNeu = null, ?\THAG\XKfz\StructType\NatuerlichePerson $natuerlichePerson = null, ?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null, ?\THAG\XKfz\StructType\Anschrift $anschrift = null, ?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null, ?\THAG\XKfz\StructType\Korrekturen $korrekturen = null, ?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $listeBekannteBedingungsverletzung = null, ?string $iHKRegistrierungsnummer = null, ?string $vUNutzerId = null, ?string $pinGueltigBis = null, ?string $nutzerAngemeldet = null, ?string $istInAdmingruppe = null, ?string $gruppennummer = null, ?string $gruppenname = null, ?string $rechtnummer = null, ?\THAG\XKfz\StructType\ListeReversierungsstatus $listeReversierungsstatus = null, ?string $listenrechtEintragKey = null, ?string $rechteklassenname = null, ?string $rechteklassennummer = null, ?string $beschreibung = null, ?string $minimalwert = null, ?string $maximalwert = null, ?string $kommunikationspartnerkennung = null, ?string $kommunikationspartnertyp = null, ?string $obergruppennummer = null, ?string $kommunikationspartnerursprung = null, ?\THAG\XKfz\StructType\ListeKommunikationspartner $listeKommunikationspartner = null, ?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung $listeKommunikationspartnerkennung = null, ?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $listeAnzufragendesVersicherungsunternehmen = null, ?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null, ?\THAG\XKfz\StructType\Administrator $administrator = null, ?string $vUInterneVermittlernummer = null, ?string $reversierungsstatus = null, ?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null, ?\THAG\XKfz\StructType\ListeReversierungVM $listeReversierungVM = null, ?\THAG\XKfz\StructType\ListeReversierungVU $listeReversierungVU = null, ?string $alleUntergruppen = null, ?\THAG\XKfz\StructType\EVBDaten $eVBDaten = null, ?\THAG\XKfz\StructType\NutzerRechercheAnfrage $nutzerRechercheAnfrage = null, ?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort $listeNutzerRechercheAntwort = null, ?\THAG\XKfz\StructType\ListeGruppe $listeGruppe = null, ?\THAG\XKfz\StructType\ListeGruppenrecht $listeGruppenrecht = null, ?\THAG\XKfz\StructType\ListeRecht $listeRecht = null, ?\THAG\XKfz\StructType\ListeRechteklasse $listeRechteklasse = null, ?\THAG\XKfz\StructType\ListeTeilnahmeReversierung $listeTeilnahmeReversierung = null, ?string $korrekturFahrzeugidentifizierungsnummer = null, ?\THAG\XKfz\StructType\FzRechercheAnfrage $fzRechercheAnfrage = null, ?\THAG\XKfz\StructType\ListeFzRechercheAntwort $listeFzRechercheAntwort = null, ?\THAG\XKfz\StructType\FzRechercheAnfrageDetails $fzRechercheAnfrageDetails = null, ?\THAG\XKfz\StructType\FzRechercheAntwortDetails $fzRechercheAntwortDetails = null, ?\THAG\XKfz\StructType\ListeVkzFehler $listeVkzFehler = null, ?string $eintragungImZfzrErfolgt = null, ?\THAG\XKfz\StructType\ListeVorlage $listeVorlage = null, ?string $vorlageNummer = null, ?string $neuanlageMoeglich = null, ?\THAG\XKfz\StructType\VorlageDetail $vorlageDetail = null, ?string $vorlagePflegeart = null, ?string $vorlageName = null, ?string $vorgangsart = null, ?string $vorlageInhalt = null, ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $uebermittlungsRechercheAnfrage = null, ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $uebermittlungsRechercheAnfrageDetails = null, ?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $listeUebermittlungsRechercheAntwort = null, ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $uebermittlungsRechercheAntwortDetails = null, ?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null, ?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung $listeFeldVuIndividualisierung = null, ?string $feldXmlPfad = null, ?string $portalTyp = null, ?string $begruendung = null, ?string $datenpfad = null, ?string $datentypName = null, ?\THAG\XKfz\StructType\ListeDatentyp $listeDatentyp = null, ?string $daten = null, ?string $profilpflegeergebnis = null, ?\THAG\XKfz\StructType\ListeDatenpfad $listeDatenpfad = null, ?string $datenAbfragezeitpunkt = null, ?string $datenAnzahlEbenen = null, ?string $datenIndirektePflege = null, ?\THAG\XKfz\StructType\ListeFeldXmlPfad $listeFeldXmlPfad = null, ?\THAG\XKfz\StructType\ListeVersicherung $listeVersicherung = null, ?string $versicherungsscheinnummer = null, ?string $abDatensatzId = null, ?string $anzahlDatensaetze = null, ?string $sortierungSpalte = null, ?string $sortierungRichtung = null, ?string $naechsteDatensatzId = null, ?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $listeStrukturOderNachrichtentyp = null, ?\THAG\XKfz\StructType\ListeBedingungsdefinition $listeBedingungsdefinition = null, ?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null, ?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null, ?string $vorgangsnummer = null, ?string $nurKontextUebersicht = null, ?\THAG\XKfz\StructType\ListeVerarbeitungskontext $listeVerarbeitungskontext = null, ?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $listeBenachrichtigungsauftrag = null, ?string $kennzeichenZugehoerigesWechselkennzeichen = null, ?\THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten = null, ?\THAG\XKfz\StructType\ListeBonitaetsdaten $listeBonitaetsdaten = null, ?string $bonitaetsvorgangsstatus = null, ?string $pruefergebnisPositiv = null, ?string $iTDienstleisterId = null, ?string $sMSText = null, ?string $sMSAbsenderkennung = null, ?string $alternativeNutzerkennung = null, ?string $suchtext = null, ?\THAG\XKfz\StructType\VkzLogistikAuftrag $vkzLogistikAuftrag = null, ?string $anschreibenPdf = null, ?string $storno = null, ?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null, ?\THAG\XKfz\StructType\ListeLogistikArtikel $listeLogistikArtikel = null, ?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null, ?string $logistikZustellStatus = null, ?string $trackingId = null, ?string $trackingLink = null, ?\THAG\XKfz\StructType\ListeEmailEmpfaenger $listeEmailEmpfaenger = null, ?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc $listeEmailEmpfaengerCc = null, ?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $listeEmailEmpfaengerBcc = null, ?string $adresslabelFreitext = null, ?string $details = null, ?string $emailVorlage = null, ?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $listeEmailParameter = null, ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $listeVkzProduktionsauftrag = null, ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $listeAuftragStatus = null, ?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $listeVpeNummer = null)
    {
        $this
            ->setZeitstempel($zeitstempel)
            ->setLoginToken($loginToken)
            ->setNachrichtenkopf($nachrichtenkopf)
            ->setDatumEndeVersicherungsschutz($datumEndeVersicherungsschutz)
            ->setDatumAusserbetriebsetzung($datumAusserbetriebsetzung)
            ->setPing($ping)
            ->setVersicherungsunternehmensnummer($versicherungsunternehmensnummer)
            ->setSonderzeichen($sonderzeichen)
            ->setAnfragenummer($anfragenummer)
            ->setVersicherungsbestaetigungsnummer($versicherungsbestaetigungsnummer)
            ->setVbArt($vbArt)
            ->setVbAbrufbarBis($vbAbrufbarBis)
            ->setVbIstNochZuDrucken($vbIstNochZuDrucken)
            ->setVbFormular($vbFormular)
            ->setVbFormularGewuenscht($vbFormularGewuenscht)
            ->setPruefergebnis($pruefergebnis)
            ->setVkzPruefergebnis($vkzPruefergebnis)
            ->setPruefergebnisKommentar($pruefergebnisKommentar)
            ->setZulassungsfahrten($zulassungsfahrten)
            ->setZeitpunktAenderung($zeitpunktAenderung)
            ->setVersicherung($versicherung)
            ->setBonitaetszugangsnummer($bonitaetszugangsnummer)
            ->setBonitaetszugangspasswort($bonitaetszugangspasswort)
            ->setBonitaetspruefungscode($bonitaetspruefungscode)
            ->setBonitaetsanfragegrund($bonitaetsanfragegrund)
            ->setVersicherungsnehmer($versicherungsnehmer)
            ->setHalter($halter)
            ->setFahrzeug($fahrzeug)
            ->setKennzeichen($kennzeichen)
            ->setBehoerde($behoerde)
            ->setVbAblehnungsgrund($vbAblehnungsgrund)
            ->setListeFehlerBei($listeFehlerBei)
            ->setVuArbeitsgang($vuArbeitsgang)
            ->setAnzeigeAblehnungsgrund($anzeigeAblehnungsgrund)
            ->setDatumEingangAnzeigeZulBeh($datumEingangAnzeigeZulBeh)
            ->setDatumNachversichererAb($datumNachversichererAb)
            ->setVbStatus($vbStatus)
            ->setVuMitteilungsart($vuMitteilungsart)
            ->setAnzahlVersicherungsbestaetigungsnummer($anzahlVersicherungsbestaetigungsnummer)
            ->setListeVersicherungsbestaetigungsnummer($listeVersicherungsbestaetigungsnummer)
            ->setZustaendigeBehoerdeKreisschluessel($zustaendigeBehoerdeKreisschluessel)
            ->setZustaendigeBehoerdeZusatzziffer($zustaendigeBehoerdeZusatzziffer)
            ->setVbVerwenden($vbVerwenden)
            ->setListeVbStatusPruefauftrag($listeVbStatusPruefauftrag)
            ->setVbRechercheAnfrage($vbRechercheAnfrage)
            ->setWeitereDatensaetzeVorhanden($weitereDatensaetzeVorhanden)
            ->setListeVbRechercheAntwort($listeVbRechercheAntwort)
            ->setVbRechercheAnfrageDetails($vbRechercheAnfrageDetails)
            ->setVbRechercheAntwortDetails($vbRechercheAntwortDetails)
            ->setAktion($aktion)
            ->setKorrekturFahrzeugidentifizierungsnummerUmgehen($korrekturFahrzeugidentifizierungsnummerUmgehen)
            ->setKorrekturZustaendigeBehoerdeUmgehen($korrekturZustaendigeBehoerdeUmgehen)
            ->setSMSEingangBehoerde($sMSEingangBehoerde)
            ->setSMSEmpfaenger($sMSEmpfaenger)
            ->setSMSTextEingangBehoerde($sMSTextEingangBehoerde)
            ->setSMSTextVersicherungsbestaetigungsnummer($sMSTextVersicherungsbestaetigungsnummer)
            ->setSMSTextVersicherungswechsel($sMSTextVersicherungswechsel)
            ->setSMSTextZulassung($sMSTextZulassung)
            ->setSMSVersicherungsbestaetigungsnummer($sMSVersicherungsbestaetigungsnummer)
            ->setSMSVersicherungswechsel($sMSVersicherungswechsel)
            ->setSMSZulassung($sMSZulassung)
            ->setZuordnungGDVVermittlernummer($zuordnungGDVVermittlernummer)
            ->setBonitaetspruefungSteuerung($bonitaetspruefungSteuerung)
            ->setGDVVermittlernummer($gDVVermittlernummer)
            ->setPflegeart($pflegeart)
            ->setGruppenrechtPflegeart($gruppenrechtPflegeart)
            ->setGruppePflegeart($gruppePflegeart)
            ->setNutzerkennung($nutzerkennung)
            ->setZugangsberechtigung($zugangsberechtigung)
            ->setNutzerPinNeu($nutzerPinNeu)
            ->setNatuerlichePerson($natuerlichePerson)
            ->setJuristischePerson($juristischePerson)
            ->setAnschrift($anschrift)
            ->setKontaktdaten($kontaktdaten)
            ->setKorrekturen($korrekturen)
            ->setListeBekannteBedingungsverletzung($listeBekannteBedingungsverletzung)
            ->setIHKRegistrierungsnummer($iHKRegistrierungsnummer)
            ->setVUNutzerId($vUNutzerId)
            ->setPinGueltigBis($pinGueltigBis)
            ->setNutzerAngemeldet($nutzerAngemeldet)
            ->setIstInAdmingruppe($istInAdmingruppe)
            ->setGruppennummer($gruppennummer)
            ->setGruppenname($gruppenname)
            ->setRechtnummer($rechtnummer)
            ->setListeReversierungsstatus($listeReversierungsstatus)
            ->setListenrechtEintragKey($listenrechtEintragKey)
            ->setRechteklassenname($rechteklassenname)
            ->setRechteklassennummer($rechteklassennummer)
            ->setBeschreibung($beschreibung)
            ->setMinimalwert($minimalwert)
            ->setMaximalwert($maximalwert)
            ->setKommunikationspartnerkennung($kommunikationspartnerkennung)
            ->setKommunikationspartnertyp($kommunikationspartnertyp)
            ->setObergruppennummer($obergruppennummer)
            ->setKommunikationspartnerursprung($kommunikationspartnerursprung)
            ->setListeKommunikationspartner($listeKommunikationspartner)
            ->setListeKommunikationspartnerkennung($listeKommunikationspartnerkennung)
            ->setListeAnzufragendesVersicherungsunternehmen($listeAnzufragendesVersicherungsunternehmen)
            ->setUngebundenerVermittler($ungebundenerVermittler)
            ->setAdministrator($administrator)
            ->setVUInterneVermittlernummer($vUInterneVermittlernummer)
            ->setReversierungsstatus($reversierungsstatus)
            ->setListeReversierungsrecht($listeReversierungsrecht)
            ->setListeReversierungVM($listeReversierungVM)
            ->setListeReversierungVU($listeReversierungVU)
            ->setAlleUntergruppen($alleUntergruppen)
            ->setEVBDaten($eVBDaten)
            ->setNutzerRechercheAnfrage($nutzerRechercheAnfrage)
            ->setListeNutzerRechercheAntwort($listeNutzerRechercheAntwort)
            ->setListeGruppe($listeGruppe)
            ->setListeGruppenrecht($listeGruppenrecht)
            ->setListeRecht($listeRecht)
            ->setListeRechteklasse($listeRechteklasse)
            ->setListeTeilnahmeReversierung($listeTeilnahmeReversierung)
            ->setKorrekturFahrzeugidentifizierungsnummer($korrekturFahrzeugidentifizierungsnummer)
            ->setFzRechercheAnfrage($fzRechercheAnfrage)
            ->setListeFzRechercheAntwort($listeFzRechercheAntwort)
            ->setFzRechercheAnfrageDetails($fzRechercheAnfrageDetails)
            ->setFzRechercheAntwortDetails($fzRechercheAntwortDetails)
            ->setListeVkzFehler($listeVkzFehler)
            ->setEintragungImZfzrErfolgt($eintragungImZfzrErfolgt)
            ->setListeVorlage($listeVorlage)
            ->setVorlageNummer($vorlageNummer)
            ->setNeuanlageMoeglich($neuanlageMoeglich)
            ->setVorlageDetail($vorlageDetail)
            ->setVorlagePflegeart($vorlagePflegeart)
            ->setVorlageName($vorlageName)
            ->setVorgangsart($vorgangsart)
            ->setVorlageInhalt($vorlageInhalt)
            ->setUebermittlungsRechercheAnfrage($uebermittlungsRechercheAnfrage)
            ->setUebermittlungsRechercheAnfrageDetails($uebermittlungsRechercheAnfrageDetails)
            ->setListeUebermittlungsRechercheAntwort($listeUebermittlungsRechercheAntwort)
            ->setUebermittlungsRechercheAntwortDetails($uebermittlungsRechercheAntwortDetails)
            ->setListeVorgangsart($listeVorgangsart)
            ->setListeFeldVuIndividualisierung($listeFeldVuIndividualisierung)
            ->setFeldXmlPfad($feldXmlPfad)
            ->setPortalTyp($portalTyp)
            ->setBegruendung($begruendung)
            ->setDatenpfad($datenpfad)
            ->setDatentypName($datentypName)
            ->setListeDatentyp($listeDatentyp)
            ->setDaten($daten)
            ->setProfilpflegeergebnis($profilpflegeergebnis)
            ->setListeDatenpfad($listeDatenpfad)
            ->setDatenAbfragezeitpunkt($datenAbfragezeitpunkt)
            ->setDatenAnzahlEbenen($datenAnzahlEbenen)
            ->setDatenIndirektePflege($datenIndirektePflege)
            ->setListeFeldXmlPfad($listeFeldXmlPfad)
            ->setListeVersicherung($listeVersicherung)
            ->setVersicherungsscheinnummer($versicherungsscheinnummer)
            ->setAbDatensatzId($abDatensatzId)
            ->setAnzahlDatensaetze($anzahlDatensaetze)
            ->setSortierungSpalte($sortierungSpalte)
            ->setSortierungRichtung($sortierungRichtung)
            ->setNaechsteDatensatzId($naechsteDatensatzId)
            ->setListeStrukturOderNachrichtentyp($listeStrukturOderNachrichtentyp)
            ->setListeBedingungsdefinition($listeBedingungsdefinition)
            ->setListeFeldbezeichnung($listeFeldbezeichnung)
            ->setListeFelddefinition($listeFelddefinition)
            ->setVorgangsnummer($vorgangsnummer)
            ->setNurKontextUebersicht($nurKontextUebersicht)
            ->setListeVerarbeitungskontext($listeVerarbeitungskontext)
            ->setListeBenachrichtigungsauftrag($listeBenachrichtigungsauftrag)
            ->setKennzeichenZugehoerigesWechselkennzeichen($kennzeichenZugehoerigesWechselkennzeichen)
            ->setBonitaetsdaten($bonitaetsdaten)
            ->setListeBonitaetsdaten($listeBonitaetsdaten)
            ->setBonitaetsvorgangsstatus($bonitaetsvorgangsstatus)
            ->setPruefergebnisPositiv($pruefergebnisPositiv)
            ->setITDienstleisterId($iTDienstleisterId)
            ->setSMSText($sMSText)
            ->setSMSAbsenderkennung($sMSAbsenderkennung)
            ->setAlternativeNutzerkennung($alternativeNutzerkennung)
            ->setSuchtext($suchtext)
            ->setVkzLogistikAuftrag($vkzLogistikAuftrag)
            ->setAnschreibenPdf($anschreibenPdf)
            ->setStorno($storno)
            ->setLogistikEmpfaenger($logistikEmpfaenger)
            ->setListeLogistikArtikel($listeLogistikArtikel)
            ->setListeLogistikOption($listeLogistikOption)
            ->setLogistikZustellStatus($logistikZustellStatus)
            ->setTrackingId($trackingId)
            ->setTrackingLink($trackingLink)
            ->setListeEmailEmpfaenger($listeEmailEmpfaenger)
            ->setListeEmailEmpfaengerCc($listeEmailEmpfaengerCc)
            ->setListeEmailEmpfaengerBcc($listeEmailEmpfaengerBcc)
            ->setAdresslabelFreitext($adresslabelFreitext)
            ->setDetails($details)
            ->setEmailVorlage($emailVorlage)
            ->setListeEmailParameter($listeEmailParameter)
            ->setListeVkzProduktionsauftrag($listeVkzProduktionsauftrag)
            ->setListeAuftragStatus($listeAuftragStatus)
            ->setListeVpeNummer($listeVpeNummer);
    }
    /**
     * Get Zeitstempel value
     * @return string|null
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }
    /**
     * Set Zeitstempel value
     * @param string $zeitstempel
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;
        
        return $this;
    }
    /**
     * Get LoginToken value
     * @return string|null
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }
    /**
     * Set LoginToken value
     * @param string $loginToken
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;
        
        return $this;
    }
    /**
     * Get Nachrichtenkopf value
     * @return \THAG\XKfz\StructType\Nachrichtenkopf|null
     */
    public function getNachrichtenkopf(): ?\THAG\XKfz\StructType\Nachrichtenkopf
    {
        return $this->Nachrichtenkopf;
    }
    /**
     * Set Nachrichtenkopf value
     * @param \THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNachrichtenkopf(?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null): self
    {
        $this->Nachrichtenkopf = $nachrichtenkopf;
        
        return $this;
    }
    /**
     * Get DatumEndeVersicherungsschutz value
     * @return string|null
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }
    /**
     * Set DatumEndeVersicherungsschutz value
     * @param string $datumEndeVersicherungsschutz
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;
        
        return $this;
    }
    /**
     * Get DatumAusserbetriebsetzung value
     * @return string|null
     */
    public function getDatumAusserbetriebsetzung(): ?string
    {
        return $this->DatumAusserbetriebsetzung;
    }
    /**
     * Set DatumAusserbetriebsetzung value
     * @param string $datumAusserbetriebsetzung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatumAusserbetriebsetzung(?string $datumAusserbetriebsetzung = null): self
    {
        $this->DatumAusserbetriebsetzung = $datumAusserbetriebsetzung;
        
        return $this;
    }
    /**
     * Get Ping value
     * @return string|null
     */
    public function getPing(): ?string
    {
        return $this->Ping;
    }
    /**
     * Set Ping value
     * @param string $ping
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPing(?string $ping = null): self
    {
        $this->Ping = $ping;
        
        return $this;
    }
    /**
     * Get Versicherungsunternehmensnummer value
     * @return string|null
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }
    /**
     * Set Versicherungsunternehmensnummer value
     * @param string $versicherungsunternehmensnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;
        
        return $this;
    }
    /**
     * Get Sonderzeichen value
     * @return string|null
     */
    public function getSonderzeichen(): ?string
    {
        return $this->Sonderzeichen;
    }
    /**
     * Set Sonderzeichen value
     * @param string $sonderzeichen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSonderzeichen(?string $sonderzeichen = null): self
    {
        $this->Sonderzeichen = $sonderzeichen;
        
        return $this;
    }
    /**
     * Get Anfragenummer value
     * @return string|null
     */
    public function getAnfragenummer(): ?string
    {
        return $this->Anfragenummer;
    }
    /**
     * Set Anfragenummer value
     * @param string $anfragenummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnfragenummer(?string $anfragenummer = null): self
    {
        $this->Anfragenummer = $anfragenummer;
        
        return $this;
    }
    /**
     * Get Versicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }
    /**
     * Set Versicherungsbestaetigungsnummer value
     * @param string $versicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get VbArt value
     * @return string|null
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }
    /**
     * Set VbArt value
     * @param string $vbArt
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;
        
        return $this;
    }
    /**
     * Get VbAbrufbarBis value
     * @return string|null
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }
    /**
     * Set VbAbrufbarBis value
     * @param string $vbAbrufbarBis
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;
        
        return $this;
    }
    /**
     * Get VbIstNochZuDrucken value
     * @return string|null
     */
    public function getVbIstNochZuDrucken(): ?string
    {
        return $this->VbIstNochZuDrucken;
    }
    /**
     * Set VbIstNochZuDrucken value
     * @param string $vbIstNochZuDrucken
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbIstNochZuDrucken(?string $vbIstNochZuDrucken = null): self
    {
        $this->VbIstNochZuDrucken = $vbIstNochZuDrucken;
        
        return $this;
    }
    /**
     * Get VbFormular value
     * @return string|null
     */
    public function getVbFormular(): ?string
    {
        return $this->VbFormular;
    }
    /**
     * Set VbFormular value
     * @param string $vbFormular
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbFormular(?string $vbFormular = null): self
    {
        $this->VbFormular = $vbFormular;
        
        return $this;
    }
    /**
     * Get VbFormularGewuenscht value
     * @return string|null
     */
    public function getVbFormularGewuenscht(): ?string
    {
        return $this->VbFormularGewuenscht;
    }
    /**
     * Set VbFormularGewuenscht value
     * @param string $vbFormularGewuenscht
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbFormularGewuenscht(?string $vbFormularGewuenscht = null): self
    {
        $this->VbFormularGewuenscht = $vbFormularGewuenscht;
        
        return $this;
    }
    /**
     * Get Pruefergebnis value
     * @return string|null
     */
    public function getPruefergebnis(): ?string
    {
        return $this->Pruefergebnis;
    }
    /**
     * Set Pruefergebnis value
     * @param string $pruefergebnis
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPruefergebnis(?string $pruefergebnis = null): self
    {
        $this->Pruefergebnis = $pruefergebnis;
        
        return $this;
    }
    /**
     * Get VkzPruefergebnis value
     * @return string|null
     */
    public function getVkzPruefergebnis(): ?string
    {
        return $this->VkzPruefergebnis;
    }
    /**
     * Set VkzPruefergebnis value
     * @param string $vkzPruefergebnis
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVkzPruefergebnis(?string $vkzPruefergebnis = null): self
    {
        $this->VkzPruefergebnis = $vkzPruefergebnis;
        
        return $this;
    }
    /**
     * Get PruefergebnisKommentar value
     * @return string|null
     */
    public function getPruefergebnisKommentar(): ?string
    {
        return $this->PruefergebnisKommentar;
    }
    /**
     * Set PruefergebnisKommentar value
     * @param string $pruefergebnisKommentar
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPruefergebnisKommentar(?string $pruefergebnisKommentar = null): self
    {
        $this->PruefergebnisKommentar = $pruefergebnisKommentar;
        
        return $this;
    }
    /**
     * Get Zulassungsfahrten value
     * @return string|null
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }
    /**
     * Set Zulassungsfahrten value
     * @param string $zulassungsfahrten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;
        
        return $this;
    }
    /**
     * Get ZeitpunktAenderung value
     * @return string|null
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }
    /**
     * Set ZeitpunktAenderung value
     * @param string $zeitpunktAenderung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;
        
        return $this;
    }
    /**
     * Get Versicherung value
     * @return \THAG\XKfz\StructType\Versicherung|null
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }
    /**
     * Set Versicherung value
     * @param \THAG\XKfz\StructType\Versicherung $versicherung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;
        
        return $this;
    }
    /**
     * Get Bonitaetszugangsnummer value
     * @return string|null
     */
    public function getBonitaetszugangsnummer(): ?string
    {
        return $this->Bonitaetszugangsnummer;
    }
    /**
     * Set Bonitaetszugangsnummer value
     * @param string $bonitaetszugangsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetszugangsnummer(?string $bonitaetszugangsnummer = null): self
    {
        $this->Bonitaetszugangsnummer = $bonitaetszugangsnummer;
        
        return $this;
    }
    /**
     * Get Bonitaetszugangspasswort value
     * @return string|null
     */
    public function getBonitaetszugangspasswort(): ?string
    {
        return $this->Bonitaetszugangspasswort;
    }
    /**
     * Set Bonitaetszugangspasswort value
     * @param string $bonitaetszugangspasswort
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetszugangspasswort(?string $bonitaetszugangspasswort = null): self
    {
        $this->Bonitaetszugangspasswort = $bonitaetszugangspasswort;
        
        return $this;
    }
    /**
     * Get Bonitaetspruefungscode value
     * @return string|null
     */
    public function getBonitaetspruefungscode(): ?string
    {
        return $this->Bonitaetspruefungscode;
    }
    /**
     * Set Bonitaetspruefungscode value
     * @param string $bonitaetspruefungscode
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetspruefungscode(?string $bonitaetspruefungscode = null): self
    {
        $this->Bonitaetspruefungscode = $bonitaetspruefungscode;
        
        return $this;
    }
    /**
     * Get Bonitaetsanfragegrund value
     * @return string|null
     */
    public function getBonitaetsanfragegrund(): ?string
    {
        return $this->Bonitaetsanfragegrund;
    }
    /**
     * Set Bonitaetsanfragegrund value
     * @param string $bonitaetsanfragegrund
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetsanfragegrund(?string $bonitaetsanfragegrund = null): self
    {
        $this->Bonitaetsanfragegrund = $bonitaetsanfragegrund;
        
        return $this;
    }
    /**
     * Get Versicherungsnehmer value
     * @return \THAG\XKfz\StructType\Versicherungsnehmer|null
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }
    /**
     * Set Versicherungsnehmer value
     * @param \THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;
        
        return $this;
    }
    /**
     * Get Halter value
     * @return \THAG\XKfz\StructType\Halter|null
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }
    /**
     * Set Halter value
     * @param \THAG\XKfz\StructType\Halter $halter
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;
        
        return $this;
    }
    /**
     * Get Fahrzeug value
     * @return \THAG\XKfz\StructType\Fahrzeug|null
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }
    /**
     * Set Fahrzeug value
     * @param \THAG\XKfz\StructType\Fahrzeug $fahrzeug
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;
        
        return $this;
    }
    /**
     * Get Kennzeichen value
     * @return \THAG\XKfz\StructType\Kennzeichen|null
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }
    /**
     * Set Kennzeichen value
     * @param \THAG\XKfz\StructType\Kennzeichen $kennzeichen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;
        
        return $this;
    }
    /**
     * Get Behoerde value
     * @return \THAG\XKfz\StructType\Behoerde|null
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }
    /**
     * Set Behoerde value
     * @param \THAG\XKfz\StructType\Behoerde $behoerde
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;
        
        return $this;
    }
    /**
     * Get VbAblehnungsgrund value
     * @return string|null
     */
    public function getVbAblehnungsgrund(): ?string
    {
        return $this->VbAblehnungsgrund;
    }
    /**
     * Set VbAblehnungsgrund value
     * @param string $vbAblehnungsgrund
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbAblehnungsgrund(?string $vbAblehnungsgrund = null): self
    {
        $this->VbAblehnungsgrund = $vbAblehnungsgrund;
        
        return $this;
    }
    /**
     * Get ListeFehlerBei value
     * @return \THAG\XKfz\StructType\ListeFehlerBei|null
     */
    public function getListeFehlerBei(): ?\THAG\XKfz\StructType\ListeFehlerBei
    {
        return $this->ListeFehlerBei;
    }
    /**
     * Set ListeFehlerBei value
     * @param \THAG\XKfz\StructType\ListeFehlerBei $listeFehlerBei
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFehlerBei(?\THAG\XKfz\StructType\ListeFehlerBei $listeFehlerBei = null): self
    {
        $this->ListeFehlerBei = $listeFehlerBei;
        
        return $this;
    }
    /**
     * Get VuArbeitsgang value
     * @return \THAG\XKfz\StructType\VuArbeitsgang|null
     */
    public function getVuArbeitsgang(): ?\THAG\XKfz\StructType\VuArbeitsgang
    {
        return $this->VuArbeitsgang;
    }
    /**
     * Set VuArbeitsgang value
     * @param \THAG\XKfz\StructType\VuArbeitsgang $vuArbeitsgang
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVuArbeitsgang(?\THAG\XKfz\StructType\VuArbeitsgang $vuArbeitsgang = null): self
    {
        $this->VuArbeitsgang = $vuArbeitsgang;
        
        return $this;
    }
    /**
     * Get AnzeigeAblehnungsgrund value
     * @return string|null
     */
    public function getAnzeigeAblehnungsgrund(): ?string
    {
        return $this->AnzeigeAblehnungsgrund;
    }
    /**
     * Set AnzeigeAblehnungsgrund value
     * @param string $anzeigeAblehnungsgrund
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnzeigeAblehnungsgrund(?string $anzeigeAblehnungsgrund = null): self
    {
        $this->AnzeigeAblehnungsgrund = $anzeigeAblehnungsgrund;
        
        return $this;
    }
    /**
     * Get DatumEingangAnzeigeZulBeh value
     * @return string|null
     */
    public function getDatumEingangAnzeigeZulBeh(): ?string
    {
        return $this->DatumEingangAnzeigeZulBeh;
    }
    /**
     * Set DatumEingangAnzeigeZulBeh value
     * @param string $datumEingangAnzeigeZulBeh
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatumEingangAnzeigeZulBeh(?string $datumEingangAnzeigeZulBeh = null): self
    {
        $this->DatumEingangAnzeigeZulBeh = $datumEingangAnzeigeZulBeh;
        
        return $this;
    }
    /**
     * Get DatumNachversichererAb value
     * @return string|null
     */
    public function getDatumNachversichererAb(): ?string
    {
        return $this->DatumNachversichererAb;
    }
    /**
     * Set DatumNachversichererAb value
     * @param string $datumNachversichererAb
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatumNachversichererAb(?string $datumNachversichererAb = null): self
    {
        $this->DatumNachversichererAb = $datumNachversichererAb;
        
        return $this;
    }
    /**
     * Get VbStatus value
     * @return string|null
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }
    /**
     * Set VbStatus value
     * @param string $vbStatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;
        
        return $this;
    }
    /**
     * Get VuMitteilungsart value
     * @return string|null
     */
    public function getVuMitteilungsart(): ?string
    {
        return $this->VuMitteilungsart;
    }
    /**
     * Set VuMitteilungsart value
     * @param string $vuMitteilungsart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVuMitteilungsart(?string $vuMitteilungsart = null): self
    {
        $this->VuMitteilungsart = $vuMitteilungsart;
        
        return $this;
    }
    /**
     * Get AnzahlVersicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getAnzahlVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->AnzahlVersicherungsbestaetigungsnummer;
    }
    /**
     * Set AnzahlVersicherungsbestaetigungsnummer value
     * @param string $anzahlVersicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnzahlVersicherungsbestaetigungsnummer(?string $anzahlVersicherungsbestaetigungsnummer = null): self
    {
        $this->AnzahlVersicherungsbestaetigungsnummer = $anzahlVersicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get ListeVersicherungsbestaetigungsnummer value
     * @return \THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer|null
     */
    public function getListeVersicherungsbestaetigungsnummer(): ?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer
    {
        return $this->ListeVersicherungsbestaetigungsnummer;
    }
    /**
     * Set ListeVersicherungsbestaetigungsnummer value
     * @param \THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $listeVersicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVersicherungsbestaetigungsnummer(?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $listeVersicherungsbestaetigungsnummer = null): self
    {
        $this->ListeVersicherungsbestaetigungsnummer = $listeVersicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     * @return string|null
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }
    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     * @param string $zustaendigeBehoerdeKreisschluessel
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;
        
        return $this;
    }
    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     * @return string|null
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }
    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     * @param string $zustaendigeBehoerdeZusatzziffer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;
        
        return $this;
    }
    /**
     * Get VbVerwenden value
     * @return string|null
     */
    public function getVbVerwenden(): ?string
    {
        return $this->VbVerwenden;
    }
    /**
     * Set VbVerwenden value
     * @param string $vbVerwenden
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbVerwenden(?string $vbVerwenden = null): self
    {
        $this->VbVerwenden = $vbVerwenden;
        
        return $this;
    }
    /**
     * Get ListeVbStatusPruefauftrag value
     * @return \THAG\XKfz\StructType\ListeVbStatusPruefauftrag|null
     */
    public function getListeVbStatusPruefauftrag(): ?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag
    {
        return $this->ListeVbStatusPruefauftrag;
    }
    /**
     * Set ListeVbStatusPruefauftrag value
     * @param \THAG\XKfz\StructType\ListeVbStatusPruefauftrag $listeVbStatusPruefauftrag
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVbStatusPruefauftrag(?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag $listeVbStatusPruefauftrag = null): self
    {
        $this->ListeVbStatusPruefauftrag = $listeVbStatusPruefauftrag;
        
        return $this;
    }
    /**
     * Get VbRechercheAnfrage value
     * @return \THAG\XKfz\StructType\VbRechercheAnfrage|null
     */
    public function getVbRechercheAnfrage(): ?\THAG\XKfz\StructType\VbRechercheAnfrage
    {
        return $this->VbRechercheAnfrage;
    }
    /**
     * Set VbRechercheAnfrage value
     * @param \THAG\XKfz\StructType\VbRechercheAnfrage $vbRechercheAnfrage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbRechercheAnfrage(?\THAG\XKfz\StructType\VbRechercheAnfrage $vbRechercheAnfrage = null): self
    {
        $this->VbRechercheAnfrage = $vbRechercheAnfrage;
        
        return $this;
    }
    /**
     * Get WeitereDatensaetzeVorhanden value
     * @return string|null
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }
    /**
     * Set WeitereDatensaetzeVorhanden value
     * @param string $weitereDatensaetzeVorhanden
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;
        
        return $this;
    }
    /**
     * Get ListeVbRechercheAntwort value
     * @return \THAG\XKfz\StructType\ListeVbRechercheAntwort|null
     */
    public function getListeVbRechercheAntwort(): ?\THAG\XKfz\StructType\ListeVbRechercheAntwort
    {
        return $this->ListeVbRechercheAntwort;
    }
    /**
     * Set ListeVbRechercheAntwort value
     * @param \THAG\XKfz\StructType\ListeVbRechercheAntwort $listeVbRechercheAntwort
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVbRechercheAntwort(?\THAG\XKfz\StructType\ListeVbRechercheAntwort $listeVbRechercheAntwort = null): self
    {
        $this->ListeVbRechercheAntwort = $listeVbRechercheAntwort;
        
        return $this;
    }
    /**
     * Get VbRechercheAnfrageDetails value
     * @return \THAG\XKfz\StructType\VbRechercheAnfrageDetails|null
     */
    public function getVbRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\VbRechercheAnfrageDetails
    {
        return $this->VbRechercheAnfrageDetails;
    }
    /**
     * Set VbRechercheAnfrageDetails value
     * @param \THAG\XKfz\StructType\VbRechercheAnfrageDetails $vbRechercheAnfrageDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbRechercheAnfrageDetails(?\THAG\XKfz\StructType\VbRechercheAnfrageDetails $vbRechercheAnfrageDetails = null): self
    {
        $this->VbRechercheAnfrageDetails = $vbRechercheAnfrageDetails;
        
        return $this;
    }
    /**
     * Get VbRechercheAntwortDetails value
     * @return \THAG\XKfz\StructType\VbRechercheAntwortDetails|null
     */
    public function getVbRechercheAntwortDetails(): ?\THAG\XKfz\StructType\VbRechercheAntwortDetails
    {
        return $this->VbRechercheAntwortDetails;
    }
    /**
     * Set VbRechercheAntwortDetails value
     * @param \THAG\XKfz\StructType\VbRechercheAntwortDetails $vbRechercheAntwortDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVbRechercheAntwortDetails(?\THAG\XKfz\StructType\VbRechercheAntwortDetails $vbRechercheAntwortDetails = null): self
    {
        $this->VbRechercheAntwortDetails = $vbRechercheAntwortDetails;
        
        return $this;
    }
    /**
     * Get Aktion value
     * @return string|null
     */
    public function getAktion(): ?string
    {
        return $this->Aktion;
    }
    /**
     * Set Aktion value
     * @param string $aktion
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAktion(?string $aktion = null): self
    {
        $this->Aktion = $aktion;
        
        return $this;
    }
    /**
     * Get KorrekturFahrzeugidentifizierungsnummerUmgehen value
     * @return string|null
     */
    public function getKorrekturFahrzeugidentifizierungsnummerUmgehen(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummerUmgehen;
    }
    /**
     * Set KorrekturFahrzeugidentifizierungsnummerUmgehen value
     * @param string $korrekturFahrzeugidentifizierungsnummerUmgehen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKorrekturFahrzeugidentifizierungsnummerUmgehen(?string $korrekturFahrzeugidentifizierungsnummerUmgehen = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummerUmgehen = $korrekturFahrzeugidentifizierungsnummerUmgehen;
        
        return $this;
    }
    /**
     * Get KorrekturZustaendigeBehoerdeUmgehen value
     * @return string|null
     */
    public function getKorrekturZustaendigeBehoerdeUmgehen(): ?string
    {
        return $this->KorrekturZustaendigeBehoerdeUmgehen;
    }
    /**
     * Set KorrekturZustaendigeBehoerdeUmgehen value
     * @param string $korrekturZustaendigeBehoerdeUmgehen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKorrekturZustaendigeBehoerdeUmgehen(?string $korrekturZustaendigeBehoerdeUmgehen = null): self
    {
        $this->KorrekturZustaendigeBehoerdeUmgehen = $korrekturZustaendigeBehoerdeUmgehen;
        
        return $this;
    }
    /**
     * Get SMSEingangBehoerde value
     * @return string|null
     */
    public function getSMSEingangBehoerde(): ?string
    {
        return $this->SMSEingangBehoerde;
    }
    /**
     * Set SMSEingangBehoerde value
     * @param string $sMSEingangBehoerde
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSEingangBehoerde(?string $sMSEingangBehoerde = null): self
    {
        $this->SMSEingangBehoerde = $sMSEingangBehoerde;
        
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
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSEmpfaenger(?string $sMSEmpfaenger = null): self
    {
        $this->SMSEmpfaenger = $sMSEmpfaenger;
        
        return $this;
    }
    /**
     * Get SMSTextEingangBehoerde value
     * @return string|null
     */
    public function getSMSTextEingangBehoerde(): ?string
    {
        return $this->SMSTextEingangBehoerde;
    }
    /**
     * Set SMSTextEingangBehoerde value
     * @param string $sMSTextEingangBehoerde
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSTextEingangBehoerde(?string $sMSTextEingangBehoerde = null): self
    {
        $this->SMSTextEingangBehoerde = $sMSTextEingangBehoerde;
        
        return $this;
    }
    /**
     * Get SMSTextVersicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getSMSTextVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->SMSTextVersicherungsbestaetigungsnummer;
    }
    /**
     * Set SMSTextVersicherungsbestaetigungsnummer value
     * @param string $sMSTextVersicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSTextVersicherungsbestaetigungsnummer(?string $sMSTextVersicherungsbestaetigungsnummer = null): self
    {
        $this->SMSTextVersicherungsbestaetigungsnummer = $sMSTextVersicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get SMSTextVersicherungswechsel value
     * @return string|null
     */
    public function getSMSTextVersicherungswechsel(): ?string
    {
        return $this->SMSTextVersicherungswechsel;
    }
    /**
     * Set SMSTextVersicherungswechsel value
     * @param string $sMSTextVersicherungswechsel
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSTextVersicherungswechsel(?string $sMSTextVersicherungswechsel = null): self
    {
        $this->SMSTextVersicherungswechsel = $sMSTextVersicherungswechsel;
        
        return $this;
    }
    /**
     * Get SMSTextZulassung value
     * @return string|null
     */
    public function getSMSTextZulassung(): ?string
    {
        return $this->SMSTextZulassung;
    }
    /**
     * Set SMSTextZulassung value
     * @param string $sMSTextZulassung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSTextZulassung(?string $sMSTextZulassung = null): self
    {
        $this->SMSTextZulassung = $sMSTextZulassung;
        
        return $this;
    }
    /**
     * Get SMSVersicherungsbestaetigungsnummer value
     * @return string|null
     */
    public function getSMSVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->SMSVersicherungsbestaetigungsnummer;
    }
    /**
     * Set SMSVersicherungsbestaetigungsnummer value
     * @param string $sMSVersicherungsbestaetigungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSVersicherungsbestaetigungsnummer(?string $sMSVersicherungsbestaetigungsnummer = null): self
    {
        $this->SMSVersicherungsbestaetigungsnummer = $sMSVersicherungsbestaetigungsnummer;
        
        return $this;
    }
    /**
     * Get SMSVersicherungswechsel value
     * @return string|null
     */
    public function getSMSVersicherungswechsel(): ?string
    {
        return $this->SMSVersicherungswechsel;
    }
    /**
     * Set SMSVersicherungswechsel value
     * @param string $sMSVersicherungswechsel
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSVersicherungswechsel(?string $sMSVersicherungswechsel = null): self
    {
        $this->SMSVersicherungswechsel = $sMSVersicherungswechsel;
        
        return $this;
    }
    /**
     * Get SMSZulassung value
     * @return string|null
     */
    public function getSMSZulassung(): ?string
    {
        return $this->SMSZulassung;
    }
    /**
     * Set SMSZulassung value
     * @param string $sMSZulassung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSZulassung(?string $sMSZulassung = null): self
    {
        $this->SMSZulassung = $sMSZulassung;
        
        return $this;
    }
    /**
     * Get ZuordnungGDVVermittlernummer value
     * @return string|null
     */
    public function getZuordnungGDVVermittlernummer(): ?string
    {
        return $this->ZuordnungGDVVermittlernummer;
    }
    /**
     * Set ZuordnungGDVVermittlernummer value
     * @param string $zuordnungGDVVermittlernummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZuordnungGDVVermittlernummer(?string $zuordnungGDVVermittlernummer = null): self
    {
        $this->ZuordnungGDVVermittlernummer = $zuordnungGDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get BonitaetspruefungSteuerung value
     * @return string|null
     */
    public function getBonitaetspruefungSteuerung(): ?string
    {
        return $this->BonitaetspruefungSteuerung;
    }
    /**
     * Set BonitaetspruefungSteuerung value
     * @param string $bonitaetspruefungSteuerung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetspruefungSteuerung(?string $bonitaetspruefungSteuerung = null): self
    {
        $this->BonitaetspruefungSteuerung = $bonitaetspruefungSteuerung;
        
        return $this;
    }
    /**
     * Get GDVVermittlernummer value
     * @return string|null
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }
    /**
     * Set GDVVermittlernummer value
     * @param string $gDVVermittlernummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;
        
        return $this;
    }
    /**
     * Get Pflegeart value
     * @return string|null
     */
    public function getPflegeart(): ?string
    {
        return $this->Pflegeart;
    }
    /**
     * Set Pflegeart value
     * @param string $pflegeart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPflegeart(?string $pflegeart = null): self
    {
        $this->Pflegeart = $pflegeart;
        
        return $this;
    }
    /**
     * Get GruppenrechtPflegeart value
     * @return string|null
     */
    public function getGruppenrechtPflegeart(): ?string
    {
        return $this->GruppenrechtPflegeart;
    }
    /**
     * Set GruppenrechtPflegeart value
     * @param string $gruppenrechtPflegeart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setGruppenrechtPflegeart(?string $gruppenrechtPflegeart = null): self
    {
        $this->GruppenrechtPflegeart = $gruppenrechtPflegeart;
        
        return $this;
    }
    /**
     * Get GruppePflegeart value
     * @return string|null
     */
    public function getGruppePflegeart(): ?string
    {
        return $this->GruppePflegeart;
    }
    /**
     * Set GruppePflegeart value
     * @param string $gruppePflegeart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setGruppePflegeart(?string $gruppePflegeart = null): self
    {
        $this->GruppePflegeart = $gruppePflegeart;
        
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
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNutzerkennung(?string $nutzerkennung = null): self
    {
        $this->Nutzerkennung = $nutzerkennung;
        
        return $this;
    }
    /**
     * Get Zugangsberechtigung value
     * @return string|null
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }
    /**
     * Set Zugangsberechtigung value
     * @param string $zugangsberechtigung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;
        
        return $this;
    }
    /**
     * Get NutzerPinNeu value
     * @return string|null
     */
    public function getNutzerPinNeu(): ?string
    {
        return $this->NutzerPinNeu;
    }
    /**
     * Set NutzerPinNeu value
     * @param string $nutzerPinNeu
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNutzerPinNeu(?string $nutzerPinNeu = null): self
    {
        $this->NutzerPinNeu = $nutzerPinNeu;
        
        return $this;
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
     * @return \THAG\XKfz\StructType\Nachricht
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
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setJuristischePerson(?\THAG\XKfz\StructType\JuristischePerson $juristischePerson = null): self
    {
        $this->JuristischePerson = $juristischePerson;
        
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
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnschrift(?\THAG\XKfz\StructType\Anschrift $anschrift = null): self
    {
        $this->Anschrift = $anschrift;
        
        return $this;
    }
    /**
     * Get Kontaktdaten value
     * @return \THAG\XKfz\StructType\Kontaktdaten|null
     */
    public function getKontaktdaten(): ?\THAG\XKfz\StructType\Kontaktdaten
    {
        return $this->Kontaktdaten;
    }
    /**
     * Set Kontaktdaten value
     * @param \THAG\XKfz\StructType\Kontaktdaten $kontaktdaten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKontaktdaten(?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null): self
    {
        $this->Kontaktdaten = $kontaktdaten;
        
        return $this;
    }
    /**
     * Get Korrekturen value
     * @return \THAG\XKfz\StructType\Korrekturen|null
     */
    public function getKorrekturen(): ?\THAG\XKfz\StructType\Korrekturen
    {
        return $this->Korrekturen;
    }
    /**
     * Set Korrekturen value
     * @param \THAG\XKfz\StructType\Korrekturen $korrekturen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKorrekturen(?\THAG\XKfz\StructType\Korrekturen $korrekturen = null): self
    {
        $this->Korrekturen = $korrekturen;
        
        return $this;
    }
    /**
     * Get ListeBekannteBedingungsverletzung value
     * @return \THAG\XKfz\StructType\ListeBekannteBedingungsverletzung|null
     */
    public function getListeBekannteBedingungsverletzung(): ?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung
    {
        return $this->ListeBekannteBedingungsverletzung;
    }
    /**
     * Set ListeBekannteBedingungsverletzung value
     * @param \THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $listeBekannteBedingungsverletzung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeBekannteBedingungsverletzung(?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $listeBekannteBedingungsverletzung = null): self
    {
        $this->ListeBekannteBedingungsverletzung = $listeBekannteBedingungsverletzung;
        
        return $this;
    }
    /**
     * Get IHKRegistrierungsnummer value
     * @return string|null
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }
    /**
     * Set IHKRegistrierungsnummer value
     * @param string $iHKRegistrierungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;
        
        return $this;
    }
    /**
     * Get VUNutzerId value
     * @return string|null
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }
    /**
     * Set VUNutzerId value
     * @param string $vUNutzerId
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;
        
        return $this;
    }
    /**
     * Get PinGueltigBis value
     * @return string|null
     */
    public function getPinGueltigBis(): ?string
    {
        return $this->PinGueltigBis;
    }
    /**
     * Set PinGueltigBis value
     * @param string $pinGueltigBis
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPinGueltigBis(?string $pinGueltigBis = null): self
    {
        $this->PinGueltigBis = $pinGueltigBis;
        
        return $this;
    }
    /**
     * Get NutzerAngemeldet value
     * @return string|null
     */
    public function getNutzerAngemeldet(): ?string
    {
        return $this->NutzerAngemeldet;
    }
    /**
     * Set NutzerAngemeldet value
     * @param string $nutzerAngemeldet
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNutzerAngemeldet(?string $nutzerAngemeldet = null): self
    {
        $this->NutzerAngemeldet = $nutzerAngemeldet;
        
        return $this;
    }
    /**
     * Get IstInAdmingruppe value
     * @return string|null
     */
    public function getIstInAdmingruppe(): ?string
    {
        return $this->IstInAdmingruppe;
    }
    /**
     * Set IstInAdmingruppe value
     * @param string $istInAdmingruppe
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setIstInAdmingruppe(?string $istInAdmingruppe = null): self
    {
        $this->IstInAdmingruppe = $istInAdmingruppe;
        
        return $this;
    }
    /**
     * Get Gruppennummer value
     * @return string|null
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }
    /**
     * Set Gruppennummer value
     * @param string $gruppennummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;
        
        return $this;
    }
    /**
     * Get Gruppenname value
     * @return string|null
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }
    /**
     * Set Gruppenname value
     * @param string $gruppenname
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;
        
        return $this;
    }
    /**
     * Get Rechtnummer value
     * @return string|null
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }
    /**
     * Set Rechtnummer value
     * @param string $rechtnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;
        
        return $this;
    }
    /**
     * Get ListeReversierungsstatus value
     * @return \THAG\XKfz\StructType\ListeReversierungsstatus|null
     */
    public function getListeReversierungsstatus(): ?\THAG\XKfz\StructType\ListeReversierungsstatus
    {
        return $this->ListeReversierungsstatus;
    }
    /**
     * Set ListeReversierungsstatus value
     * @param \THAG\XKfz\StructType\ListeReversierungsstatus $listeReversierungsstatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeReversierungsstatus(?\THAG\XKfz\StructType\ListeReversierungsstatus $listeReversierungsstatus = null): self
    {
        $this->ListeReversierungsstatus = $listeReversierungsstatus;
        
        return $this;
    }
    /**
     * Get ListenrechtEintragKey value
     * @return string|null
     */
    public function getListenrechtEintragKey(): ?string
    {
        return $this->ListenrechtEintragKey;
    }
    /**
     * Set ListenrechtEintragKey value
     * @param string $listenrechtEintragKey
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListenrechtEintragKey(?string $listenrechtEintragKey = null): self
    {
        $this->ListenrechtEintragKey = $listenrechtEintragKey;
        
        return $this;
    }
    /**
     * Get Rechteklassenname value
     * @return string|null
     */
    public function getRechteklassenname(): ?string
    {
        return $this->Rechteklassenname;
    }
    /**
     * Set Rechteklassenname value
     * @param string $rechteklassenname
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setRechteklassenname(?string $rechteklassenname = null): self
    {
        $this->Rechteklassenname = $rechteklassenname;
        
        return $this;
    }
    /**
     * Get Rechteklassennummer value
     * @return string|null
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }
    /**
     * Set Rechteklassennummer value
     * @param string $rechteklassennummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;
        
        return $this;
    }
    /**
     * Get Beschreibung value
     * @return string|null
     */
    public function getBeschreibung(): ?string
    {
        return $this->Beschreibung;
    }
    /**
     * Set Beschreibung value
     * @param string $beschreibung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBeschreibung(?string $beschreibung = null): self
    {
        $this->Beschreibung = $beschreibung;
        
        return $this;
    }
    /**
     * Get Minimalwert value
     * @return string|null
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }
    /**
     * Set Minimalwert value
     * @param string $minimalwert
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;
        
        return $this;
    }
    /**
     * Get Maximalwert value
     * @return string|null
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }
    /**
     * Set Maximalwert value
     * @param string $maximalwert
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;
        
        return $this;
    }
    /**
     * Get Kommunikationspartnerkennung value
     * @return string|null
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }
    /**
     * Set Kommunikationspartnerkennung value
     * @param string $kommunikationspartnerkennung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;
        
        return $this;
    }
    /**
     * Get Kommunikationspartnertyp value
     * @return string|null
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }
    /**
     * Set Kommunikationspartnertyp value
     * @param string $kommunikationspartnertyp
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;
        
        return $this;
    }
    /**
     * Get Obergruppennummer value
     * @return string|null
     */
    public function getObergruppennummer(): ?string
    {
        return $this->Obergruppennummer;
    }
    /**
     * Set Obergruppennummer value
     * @param string $obergruppennummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setObergruppennummer(?string $obergruppennummer = null): self
    {
        $this->Obergruppennummer = $obergruppennummer;
        
        return $this;
    }
    /**
     * Get Kommunikationspartnerursprung value
     * @return string|null
     */
    public function getKommunikationspartnerursprung(): ?string
    {
        return $this->Kommunikationspartnerursprung;
    }
    /**
     * Set Kommunikationspartnerursprung value
     * @param string $kommunikationspartnerursprung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKommunikationspartnerursprung(?string $kommunikationspartnerursprung = null): self
    {
        $this->Kommunikationspartnerursprung = $kommunikationspartnerursprung;
        
        return $this;
    }
    /**
     * Get ListeKommunikationspartner value
     * @return \THAG\XKfz\StructType\ListeKommunikationspartner|null
     */
    public function getListeKommunikationspartner(): ?\THAG\XKfz\StructType\ListeKommunikationspartner
    {
        return $this->ListeKommunikationspartner;
    }
    /**
     * Set ListeKommunikationspartner value
     * @param \THAG\XKfz\StructType\ListeKommunikationspartner $listeKommunikationspartner
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeKommunikationspartner(?\THAG\XKfz\StructType\ListeKommunikationspartner $listeKommunikationspartner = null): self
    {
        $this->ListeKommunikationspartner = $listeKommunikationspartner;
        
        return $this;
    }
    /**
     * Get ListeKommunikationspartnerkennung value
     * @return \THAG\XKfz\StructType\ListeKommunikationspartnerkennung|null
     */
    public function getListeKommunikationspartnerkennung(): ?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung
    {
        return $this->ListeKommunikationspartnerkennung;
    }
    /**
     * Set ListeKommunikationspartnerkennung value
     * @param \THAG\XKfz\StructType\ListeKommunikationspartnerkennung $listeKommunikationspartnerkennung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeKommunikationspartnerkennung(?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung $listeKommunikationspartnerkennung = null): self
    {
        $this->ListeKommunikationspartnerkennung = $listeKommunikationspartnerkennung;
        
        return $this;
    }
    /**
     * Get ListeAnzufragendesVersicherungsunternehmen value
     * @return \THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen|null
     */
    public function getListeAnzufragendesVersicherungsunternehmen(): ?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen
    {
        return $this->ListeAnzufragendesVersicherungsunternehmen;
    }
    /**
     * Set ListeAnzufragendesVersicherungsunternehmen value
     * @param \THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $listeAnzufragendesVersicherungsunternehmen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeAnzufragendesVersicherungsunternehmen(?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $listeAnzufragendesVersicherungsunternehmen = null): self
    {
        $this->ListeAnzufragendesVersicherungsunternehmen = $listeAnzufragendesVersicherungsunternehmen;
        
        return $this;
    }
    /**
     * Get UngebundenerVermittler value
     * @return \THAG\XKfz\StructType\UngebundenerVermittler|null
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }
    /**
     * Set UngebundenerVermittler value
     * @param \THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;
        
        return $this;
    }
    /**
     * Get Administrator value
     * @return \THAG\XKfz\StructType\Administrator|null
     */
    public function getAdministrator(): ?\THAG\XKfz\StructType\Administrator
    {
        return $this->Administrator;
    }
    /**
     * Set Administrator value
     * @param \THAG\XKfz\StructType\Administrator $administrator
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAdministrator(?\THAG\XKfz\StructType\Administrator $administrator = null): self
    {
        $this->Administrator = $administrator;
        
        return $this;
    }
    /**
     * Get VUInterneVermittlernummer value
     * @return string|null
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }
    /**
     * Set VUInterneVermittlernummer value
     * @param string $vUInterneVermittlernummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;
        
        return $this;
    }
    /**
     * Get Reversierungsstatus value
     * @return string|null
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }
    /**
     * Set Reversierungsstatus value
     * @param string $reversierungsstatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;
        
        return $this;
    }
    /**
     * Get ListeReversierungsrecht value
     * @return \THAG\XKfz\StructType\ListeReversierungsrecht|null
     */
    public function getListeReversierungsrecht(): ?\THAG\XKfz\StructType\ListeReversierungsrecht
    {
        return $this->ListeReversierungsrecht;
    }
    /**
     * Set ListeReversierungsrecht value
     * @param \THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeReversierungsrecht(?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null): self
    {
        $this->ListeReversierungsrecht = $listeReversierungsrecht;
        
        return $this;
    }
    /**
     * Get ListeReversierungVM value
     * @return \THAG\XKfz\StructType\ListeReversierungVM|null
     */
    public function getListeReversierungVM(): ?\THAG\XKfz\StructType\ListeReversierungVM
    {
        return $this->ListeReversierungVM;
    }
    /**
     * Set ListeReversierungVM value
     * @param \THAG\XKfz\StructType\ListeReversierungVM $listeReversierungVM
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeReversierungVM(?\THAG\XKfz\StructType\ListeReversierungVM $listeReversierungVM = null): self
    {
        $this->ListeReversierungVM = $listeReversierungVM;
        
        return $this;
    }
    /**
     * Get ListeReversierungVU value
     * @return \THAG\XKfz\StructType\ListeReversierungVU|null
     */
    public function getListeReversierungVU(): ?\THAG\XKfz\StructType\ListeReversierungVU
    {
        return $this->ListeReversierungVU;
    }
    /**
     * Set ListeReversierungVU value
     * @param \THAG\XKfz\StructType\ListeReversierungVU $listeReversierungVU
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeReversierungVU(?\THAG\XKfz\StructType\ListeReversierungVU $listeReversierungVU = null): self
    {
        $this->ListeReversierungVU = $listeReversierungVU;
        
        return $this;
    }
    /**
     * Get AlleUntergruppen value
     * @return string|null
     */
    public function getAlleUntergruppen(): ?string
    {
        return $this->AlleUntergruppen;
    }
    /**
     * Set AlleUntergruppen value
     * @param string $alleUntergruppen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAlleUntergruppen(?string $alleUntergruppen = null): self
    {
        $this->AlleUntergruppen = $alleUntergruppen;
        
        return $this;
    }
    /**
     * Get eVBDaten value
     * @return \THAG\XKfz\StructType\EVBDaten|null
     */
    public function getEVBDaten(): ?\THAG\XKfz\StructType\EVBDaten
    {
        return $this->eVBDaten;
    }
    /**
     * Set eVBDaten value
     * @param \THAG\XKfz\StructType\EVBDaten $eVBDaten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setEVBDaten(?\THAG\XKfz\StructType\EVBDaten $eVBDaten = null): self
    {
        $this->eVBDaten = $eVBDaten;
        
        return $this;
    }
    /**
     * Get NutzerRechercheAnfrage value
     * @return \THAG\XKfz\StructType\NutzerRechercheAnfrage|null
     */
    public function getNutzerRechercheAnfrage(): ?\THAG\XKfz\StructType\NutzerRechercheAnfrage
    {
        return $this->NutzerRechercheAnfrage;
    }
    /**
     * Set NutzerRechercheAnfrage value
     * @param \THAG\XKfz\StructType\NutzerRechercheAnfrage $nutzerRechercheAnfrage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNutzerRechercheAnfrage(?\THAG\XKfz\StructType\NutzerRechercheAnfrage $nutzerRechercheAnfrage = null): self
    {
        $this->NutzerRechercheAnfrage = $nutzerRechercheAnfrage;
        
        return $this;
    }
    /**
     * Get ListeNutzerRechercheAntwort value
     * @return \THAG\XKfz\StructType\ListeNutzerRechercheAntwort|null
     */
    public function getListeNutzerRechercheAntwort(): ?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort
    {
        return $this->ListeNutzerRechercheAntwort;
    }
    /**
     * Set ListeNutzerRechercheAntwort value
     * @param \THAG\XKfz\StructType\ListeNutzerRechercheAntwort $listeNutzerRechercheAntwort
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeNutzerRechercheAntwort(?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort $listeNutzerRechercheAntwort = null): self
    {
        $this->ListeNutzerRechercheAntwort = $listeNutzerRechercheAntwort;
        
        return $this;
    }
    /**
     * Get ListeGruppe value
     * @return \THAG\XKfz\StructType\ListeGruppe|null
     */
    public function getListeGruppe(): ?\THAG\XKfz\StructType\ListeGruppe
    {
        return $this->ListeGruppe;
    }
    /**
     * Set ListeGruppe value
     * @param \THAG\XKfz\StructType\ListeGruppe $listeGruppe
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeGruppe(?\THAG\XKfz\StructType\ListeGruppe $listeGruppe = null): self
    {
        $this->ListeGruppe = $listeGruppe;
        
        return $this;
    }
    /**
     * Get ListeGruppenrecht value
     * @return \THAG\XKfz\StructType\ListeGruppenrecht|null
     */
    public function getListeGruppenrecht(): ?\THAG\XKfz\StructType\ListeGruppenrecht
    {
        return $this->ListeGruppenrecht;
    }
    /**
     * Set ListeGruppenrecht value
     * @param \THAG\XKfz\StructType\ListeGruppenrecht $listeGruppenrecht
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeGruppenrecht(?\THAG\XKfz\StructType\ListeGruppenrecht $listeGruppenrecht = null): self
    {
        $this->ListeGruppenrecht = $listeGruppenrecht;
        
        return $this;
    }
    /**
     * Get ListeRecht value
     * @return \THAG\XKfz\StructType\ListeRecht|null
     */
    public function getListeRecht(): ?\THAG\XKfz\StructType\ListeRecht
    {
        return $this->ListeRecht;
    }
    /**
     * Set ListeRecht value
     * @param \THAG\XKfz\StructType\ListeRecht $listeRecht
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeRecht(?\THAG\XKfz\StructType\ListeRecht $listeRecht = null): self
    {
        $this->ListeRecht = $listeRecht;
        
        return $this;
    }
    /**
     * Get ListeRechteklasse value
     * @return \THAG\XKfz\StructType\ListeRechteklasse|null
     */
    public function getListeRechteklasse(): ?\THAG\XKfz\StructType\ListeRechteklasse
    {
        return $this->ListeRechteklasse;
    }
    /**
     * Set ListeRechteklasse value
     * @param \THAG\XKfz\StructType\ListeRechteklasse $listeRechteklasse
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeRechteklasse(?\THAG\XKfz\StructType\ListeRechteklasse $listeRechteklasse = null): self
    {
        $this->ListeRechteklasse = $listeRechteklasse;
        
        return $this;
    }
    /**
     * Get ListeTeilnahmeReversierung value
     * @return \THAG\XKfz\StructType\ListeTeilnahmeReversierung|null
     */
    public function getListeTeilnahmeReversierung(): ?\THAG\XKfz\StructType\ListeTeilnahmeReversierung
    {
        return $this->ListeTeilnahmeReversierung;
    }
    /**
     * Set ListeTeilnahmeReversierung value
     * @param \THAG\XKfz\StructType\ListeTeilnahmeReversierung $listeTeilnahmeReversierung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeTeilnahmeReversierung(?\THAG\XKfz\StructType\ListeTeilnahmeReversierung $listeTeilnahmeReversierung = null): self
    {
        $this->ListeTeilnahmeReversierung = $listeTeilnahmeReversierung;
        
        return $this;
    }
    /**
     * Get KorrekturFahrzeugidentifizierungsnummer value
     * @return string|null
     */
    public function getKorrekturFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummer;
    }
    /**
     * Set KorrekturFahrzeugidentifizierungsnummer value
     * @param string $korrekturFahrzeugidentifizierungsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKorrekturFahrzeugidentifizierungsnummer(?string $korrekturFahrzeugidentifizierungsnummer = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummer = $korrekturFahrzeugidentifizierungsnummer;
        
        return $this;
    }
    /**
     * Get FzRechercheAnfrage value
     * @return \THAG\XKfz\StructType\FzRechercheAnfrage|null
     */
    public function getFzRechercheAnfrage(): ?\THAG\XKfz\StructType\FzRechercheAnfrage
    {
        return $this->FzRechercheAnfrage;
    }
    /**
     * Set FzRechercheAnfrage value
     * @param \THAG\XKfz\StructType\FzRechercheAnfrage $fzRechercheAnfrage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setFzRechercheAnfrage(?\THAG\XKfz\StructType\FzRechercheAnfrage $fzRechercheAnfrage = null): self
    {
        $this->FzRechercheAnfrage = $fzRechercheAnfrage;
        
        return $this;
    }
    /**
     * Get ListeFzRechercheAntwort value
     * @return \THAG\XKfz\StructType\ListeFzRechercheAntwort|null
     */
    public function getListeFzRechercheAntwort(): ?\THAG\XKfz\StructType\ListeFzRechercheAntwort
    {
        return $this->ListeFzRechercheAntwort;
    }
    /**
     * Set ListeFzRechercheAntwort value
     * @param \THAG\XKfz\StructType\ListeFzRechercheAntwort $listeFzRechercheAntwort
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFzRechercheAntwort(?\THAG\XKfz\StructType\ListeFzRechercheAntwort $listeFzRechercheAntwort = null): self
    {
        $this->ListeFzRechercheAntwort = $listeFzRechercheAntwort;
        
        return $this;
    }
    /**
     * Get FzRechercheAnfrageDetails value
     * @return \THAG\XKfz\StructType\FzRechercheAnfrageDetails|null
     */
    public function getFzRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\FzRechercheAnfrageDetails
    {
        return $this->FzRechercheAnfrageDetails;
    }
    /**
     * Set FzRechercheAnfrageDetails value
     * @param \THAG\XKfz\StructType\FzRechercheAnfrageDetails $fzRechercheAnfrageDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setFzRechercheAnfrageDetails(?\THAG\XKfz\StructType\FzRechercheAnfrageDetails $fzRechercheAnfrageDetails = null): self
    {
        $this->FzRechercheAnfrageDetails = $fzRechercheAnfrageDetails;
        
        return $this;
    }
    /**
     * Get FzRechercheAntwortDetails value
     * @return \THAG\XKfz\StructType\FzRechercheAntwortDetails|null
     */
    public function getFzRechercheAntwortDetails(): ?\THAG\XKfz\StructType\FzRechercheAntwortDetails
    {
        return $this->FzRechercheAntwortDetails;
    }
    /**
     * Set FzRechercheAntwortDetails value
     * @param \THAG\XKfz\StructType\FzRechercheAntwortDetails $fzRechercheAntwortDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setFzRechercheAntwortDetails(?\THAG\XKfz\StructType\FzRechercheAntwortDetails $fzRechercheAntwortDetails = null): self
    {
        $this->FzRechercheAntwortDetails = $fzRechercheAntwortDetails;
        
        return $this;
    }
    /**
     * Get ListeVkzFehler value
     * @return \THAG\XKfz\StructType\ListeVkzFehler|null
     */
    public function getListeVkzFehler(): ?\THAG\XKfz\StructType\ListeVkzFehler
    {
        return $this->ListeVkzFehler;
    }
    /**
     * Set ListeVkzFehler value
     * @param \THAG\XKfz\StructType\ListeVkzFehler $listeVkzFehler
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVkzFehler(?\THAG\XKfz\StructType\ListeVkzFehler $listeVkzFehler = null): self
    {
        $this->ListeVkzFehler = $listeVkzFehler;
        
        return $this;
    }
    /**
     * Get EintragungImZfzrErfolgt value
     * @return string|null
     */
    public function getEintragungImZfzrErfolgt(): ?string
    {
        return $this->EintragungImZfzrErfolgt;
    }
    /**
     * Set EintragungImZfzrErfolgt value
     * @param string $eintragungImZfzrErfolgt
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setEintragungImZfzrErfolgt(?string $eintragungImZfzrErfolgt = null): self
    {
        $this->EintragungImZfzrErfolgt = $eintragungImZfzrErfolgt;
        
        return $this;
    }
    /**
     * Get ListeVorlage value
     * @return \THAG\XKfz\StructType\ListeVorlage|null
     */
    public function getListeVorlage(): ?\THAG\XKfz\StructType\ListeVorlage
    {
        return $this->ListeVorlage;
    }
    /**
     * Set ListeVorlage value
     * @param \THAG\XKfz\StructType\ListeVorlage $listeVorlage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVorlage(?\THAG\XKfz\StructType\ListeVorlage $listeVorlage = null): self
    {
        $this->ListeVorlage = $listeVorlage;
        
        return $this;
    }
    /**
     * Get VorlageNummer value
     * @return string|null
     */
    public function getVorlageNummer(): ?string
    {
        return $this->VorlageNummer;
    }
    /**
     * Set VorlageNummer value
     * @param string $vorlageNummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorlageNummer(?string $vorlageNummer = null): self
    {
        $this->VorlageNummer = $vorlageNummer;
        
        return $this;
    }
    /**
     * Get NeuanlageMoeglich value
     * @return string|null
     */
    public function getNeuanlageMoeglich(): ?string
    {
        return $this->NeuanlageMoeglich;
    }
    /**
     * Set NeuanlageMoeglich value
     * @param string $neuanlageMoeglich
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNeuanlageMoeglich(?string $neuanlageMoeglich = null): self
    {
        $this->NeuanlageMoeglich = $neuanlageMoeglich;
        
        return $this;
    }
    /**
     * Get VorlageDetail value
     * @return \THAG\XKfz\StructType\VorlageDetail|null
     */
    public function getVorlageDetail(): ?\THAG\XKfz\StructType\VorlageDetail
    {
        return $this->VorlageDetail;
    }
    /**
     * Set VorlageDetail value
     * @param \THAG\XKfz\StructType\VorlageDetail $vorlageDetail
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorlageDetail(?\THAG\XKfz\StructType\VorlageDetail $vorlageDetail = null): self
    {
        $this->VorlageDetail = $vorlageDetail;
        
        return $this;
    }
    /**
     * Get VorlagePflegeart value
     * @return string|null
     */
    public function getVorlagePflegeart(): ?string
    {
        return $this->VorlagePflegeart;
    }
    /**
     * Set VorlagePflegeart value
     * @param string $vorlagePflegeart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorlagePflegeart(?string $vorlagePflegeart = null): self
    {
        $this->VorlagePflegeart = $vorlagePflegeart;
        
        return $this;
    }
    /**
     * Get VorlageName value
     * @return string|null
     */
    public function getVorlageName(): ?string
    {
        return $this->VorlageName;
    }
    /**
     * Set VorlageName value
     * @param string $vorlageName
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorlageName(?string $vorlageName = null): self
    {
        $this->VorlageName = $vorlageName;
        
        return $this;
    }
    /**
     * Get Vorgangsart value
     * @return string|null
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }
    /**
     * Set Vorgangsart value
     * @param string $vorgangsart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;
        
        return $this;
    }
    /**
     * Get VorlageInhalt value
     * @return string|null
     */
    public function getVorlageInhalt(): ?string
    {
        return $this->VorlageInhalt;
    }
    /**
     * Set VorlageInhalt value
     * @param string $vorlageInhalt
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorlageInhalt(?string $vorlageInhalt = null): self
    {
        $this->VorlageInhalt = $vorlageInhalt;
        
        return $this;
    }
    /**
     * Get UebermittlungsRechercheAnfrage value
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage|null
     */
    public function getUebermittlungsRechercheAnfrage(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
    {
        return $this->UebermittlungsRechercheAnfrage;
    }
    /**
     * Set UebermittlungsRechercheAnfrage value
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $uebermittlungsRechercheAnfrage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setUebermittlungsRechercheAnfrage(?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $uebermittlungsRechercheAnfrage = null): self
    {
        $this->UebermittlungsRechercheAnfrage = $uebermittlungsRechercheAnfrage;
        
        return $this;
    }
    /**
     * Get UebermittlungsRechercheAnfrageDetails value
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails|null
     */
    public function getUebermittlungsRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails
    {
        return $this->UebermittlungsRechercheAnfrageDetails;
    }
    /**
     * Set UebermittlungsRechercheAnfrageDetails value
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $uebermittlungsRechercheAnfrageDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setUebermittlungsRechercheAnfrageDetails(?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $uebermittlungsRechercheAnfrageDetails = null): self
    {
        $this->UebermittlungsRechercheAnfrageDetails = $uebermittlungsRechercheAnfrageDetails;
        
        return $this;
    }
    /**
     * Get ListeUebermittlungsRechercheAntwort value
     * @return \THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort|null
     */
    public function getListeUebermittlungsRechercheAntwort(): ?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort
    {
        return $this->ListeUebermittlungsRechercheAntwort;
    }
    /**
     * Set ListeUebermittlungsRechercheAntwort value
     * @param \THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $listeUebermittlungsRechercheAntwort
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeUebermittlungsRechercheAntwort(?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $listeUebermittlungsRechercheAntwort = null): self
    {
        $this->ListeUebermittlungsRechercheAntwort = $listeUebermittlungsRechercheAntwort;
        
        return $this;
    }
    /**
     * Get UebermittlungsRechercheAntwortDetails value
     * @return \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails|null
     */
    public function getUebermittlungsRechercheAntwortDetails(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
    {
        return $this->UebermittlungsRechercheAntwortDetails;
    }
    /**
     * Set UebermittlungsRechercheAntwortDetails value
     * @param \THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $uebermittlungsRechercheAntwortDetails
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setUebermittlungsRechercheAntwortDetails(?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $uebermittlungsRechercheAntwortDetails = null): self
    {
        $this->UebermittlungsRechercheAntwortDetails = $uebermittlungsRechercheAntwortDetails;
        
        return $this;
    }
    /**
     * Get ListeVorgangsart value
     * @return \THAG\XKfz\StructType\ListeVorgangsart|null
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }
    /**
     * Set ListeVorgangsart value
     * @param \THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;
        
        return $this;
    }
    /**
     * Get ListeFeldVuIndividualisierung value
     * @return \THAG\XKfz\StructType\ListeFeldVuIndividualisierung|null
     */
    public function getListeFeldVuIndividualisierung(): ?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung
    {
        return $this->ListeFeldVuIndividualisierung;
    }
    /**
     * Set ListeFeldVuIndividualisierung value
     * @param \THAG\XKfz\StructType\ListeFeldVuIndividualisierung $listeFeldVuIndividualisierung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFeldVuIndividualisierung(?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung $listeFeldVuIndividualisierung = null): self
    {
        $this->ListeFeldVuIndividualisierung = $listeFeldVuIndividualisierung;
        
        return $this;
    }
    /**
     * Get FeldXmlPfad value
     * @return string|null
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }
    /**
     * Set FeldXmlPfad value
     * @param string $feldXmlPfad
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;
        
        return $this;
    }
    /**
     * Get PortalTyp value
     * @return string|null
     */
    public function getPortalTyp(): ?string
    {
        return $this->PortalTyp;
    }
    /**
     * Set PortalTyp value
     * @param string $portalTyp
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPortalTyp(?string $portalTyp = null): self
    {
        $this->PortalTyp = $portalTyp;
        
        return $this;
    }
    /**
     * Get Begruendung value
     * @return string|null
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }
    /**
     * Set Begruendung value
     * @param string $begruendung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;
        
        return $this;
    }
    /**
     * Get Datenpfad value
     * @return string|null
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }
    /**
     * Set Datenpfad value
     * @param string $datenpfad
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;
        
        return $this;
    }
    /**
     * Get DatentypName value
     * @return string|null
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }
    /**
     * Set DatentypName value
     * @param string $datentypName
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;
        
        return $this;
    }
    /**
     * Get ListeDatentyp value
     * @return \THAG\XKfz\StructType\ListeDatentyp|null
     */
    public function getListeDatentyp(): ?\THAG\XKfz\StructType\ListeDatentyp
    {
        return $this->ListeDatentyp;
    }
    /**
     * Set ListeDatentyp value
     * @param \THAG\XKfz\StructType\ListeDatentyp $listeDatentyp
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeDatentyp(?\THAG\XKfz\StructType\ListeDatentyp $listeDatentyp = null): self
    {
        $this->ListeDatentyp = $listeDatentyp;
        
        return $this;
    }
    /**
     * Get Daten value
     * @return string|null
     */
    public function getDaten(): ?string
    {
        return $this->Daten;
    }
    /**
     * Set Daten value
     * @param string $daten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDaten(?string $daten = null): self
    {
        $this->Daten = $daten;
        
        return $this;
    }
    /**
     * Get Profilpflegeergebnis value
     * @return string|null
     */
    public function getProfilpflegeergebnis(): ?string
    {
        return $this->Profilpflegeergebnis;
    }
    /**
     * Set Profilpflegeergebnis value
     * @param string $profilpflegeergebnis
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setProfilpflegeergebnis(?string $profilpflegeergebnis = null): self
    {
        $this->Profilpflegeergebnis = $profilpflegeergebnis;
        
        return $this;
    }
    /**
     * Get ListeDatenpfad value
     * @return \THAG\XKfz\StructType\ListeDatenpfad|null
     */
    public function getListeDatenpfad(): ?\THAG\XKfz\StructType\ListeDatenpfad
    {
        return $this->ListeDatenpfad;
    }
    /**
     * Set ListeDatenpfad value
     * @param \THAG\XKfz\StructType\ListeDatenpfad $listeDatenpfad
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeDatenpfad(?\THAG\XKfz\StructType\ListeDatenpfad $listeDatenpfad = null): self
    {
        $this->ListeDatenpfad = $listeDatenpfad;
        
        return $this;
    }
    /**
     * Get DatenAbfragezeitpunkt value
     * @return string|null
     */
    public function getDatenAbfragezeitpunkt(): ?string
    {
        return $this->DatenAbfragezeitpunkt;
    }
    /**
     * Set DatenAbfragezeitpunkt value
     * @param string $datenAbfragezeitpunkt
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatenAbfragezeitpunkt(?string $datenAbfragezeitpunkt = null): self
    {
        $this->DatenAbfragezeitpunkt = $datenAbfragezeitpunkt;
        
        return $this;
    }
    /**
     * Get DatenAnzahlEbenen value
     * @return string|null
     */
    public function getDatenAnzahlEbenen(): ?string
    {
        return $this->DatenAnzahlEbenen;
    }
    /**
     * Set DatenAnzahlEbenen value
     * @param string $datenAnzahlEbenen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatenAnzahlEbenen(?string $datenAnzahlEbenen = null): self
    {
        $this->DatenAnzahlEbenen = $datenAnzahlEbenen;
        
        return $this;
    }
    /**
     * Get DatenIndirektePflege value
     * @return string|null
     */
    public function getDatenIndirektePflege(): ?string
    {
        return $this->DatenIndirektePflege;
    }
    /**
     * Set DatenIndirektePflege value
     * @param string $datenIndirektePflege
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDatenIndirektePflege(?string $datenIndirektePflege = null): self
    {
        $this->DatenIndirektePflege = $datenIndirektePflege;
        
        return $this;
    }
    /**
     * Get ListeFeldXmlPfad value
     * @return \THAG\XKfz\StructType\ListeFeldXmlPfad|null
     */
    public function getListeFeldXmlPfad(): ?\THAG\XKfz\StructType\ListeFeldXmlPfad
    {
        return $this->ListeFeldXmlPfad;
    }
    /**
     * Set ListeFeldXmlPfad value
     * @param \THAG\XKfz\StructType\ListeFeldXmlPfad $listeFeldXmlPfad
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFeldXmlPfad(?\THAG\XKfz\StructType\ListeFeldXmlPfad $listeFeldXmlPfad = null): self
    {
        $this->ListeFeldXmlPfad = $listeFeldXmlPfad;
        
        return $this;
    }
    /**
     * Get ListeVersicherung value
     * @return \THAG\XKfz\StructType\ListeVersicherung|null
     */
    public function getListeVersicherung(): ?\THAG\XKfz\StructType\ListeVersicherung
    {
        return $this->ListeVersicherung;
    }
    /**
     * Set ListeVersicherung value
     * @param \THAG\XKfz\StructType\ListeVersicherung $listeVersicherung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVersicherung(?\THAG\XKfz\StructType\ListeVersicherung $listeVersicherung = null): self
    {
        $this->ListeVersicherung = $listeVersicherung;
        
        return $this;
    }
    /**
     * Get Versicherungsscheinnummer value
     * @return string|null
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }
    /**
     * Set Versicherungsscheinnummer value
     * @param string $versicherungsscheinnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;
        
        return $this;
    }
    /**
     * Get AbDatensatzId value
     * @return string|null
     */
    public function getAbDatensatzId(): ?string
    {
        return $this->AbDatensatzId;
    }
    /**
     * Set AbDatensatzId value
     * @param string $abDatensatzId
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAbDatensatzId(?string $abDatensatzId = null): self
    {
        $this->AbDatensatzId = $abDatensatzId;
        
        return $this;
    }
    /**
     * Get AnzahlDatensaetze value
     * @return string|null
     */
    public function getAnzahlDatensaetze(): ?string
    {
        return $this->AnzahlDatensaetze;
    }
    /**
     * Set AnzahlDatensaetze value
     * @param string $anzahlDatensaetze
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnzahlDatensaetze(?string $anzahlDatensaetze = null): self
    {
        $this->AnzahlDatensaetze = $anzahlDatensaetze;
        
        return $this;
    }
    /**
     * Get SortierungSpalte value
     * @return string|null
     */
    public function getSortierungSpalte(): ?string
    {
        return $this->SortierungSpalte;
    }
    /**
     * Set SortierungSpalte value
     * @param string $sortierungSpalte
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSortierungSpalte(?string $sortierungSpalte = null): self
    {
        $this->SortierungSpalte = $sortierungSpalte;
        
        return $this;
    }
    /**
     * Get SortierungRichtung value
     * @return string|null
     */
    public function getSortierungRichtung(): ?string
    {
        return $this->SortierungRichtung;
    }
    /**
     * Set SortierungRichtung value
     * @param string $sortierungRichtung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;
        
        return $this;
    }
    /**
     * Get NaechsteDatensatzId value
     * @return string|null
     */
    public function getNaechsteDatensatzId(): ?string
    {
        return $this->NaechsteDatensatzId;
    }
    /**
     * Set NaechsteDatensatzId value
     * @param string $naechsteDatensatzId
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNaechsteDatensatzId(?string $naechsteDatensatzId = null): self
    {
        $this->NaechsteDatensatzId = $naechsteDatensatzId;
        
        return $this;
    }
    /**
     * Get ListeStrukturOderNachrichtentyp value
     * @return \THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp|null
     */
    public function getListeStrukturOderNachrichtentyp(): ?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp
    {
        return $this->ListeStrukturOderNachrichtentyp;
    }
    /**
     * Set ListeStrukturOderNachrichtentyp value
     * @param \THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $listeStrukturOderNachrichtentyp
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeStrukturOderNachrichtentyp(?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $listeStrukturOderNachrichtentyp = null): self
    {
        $this->ListeStrukturOderNachrichtentyp = $listeStrukturOderNachrichtentyp;
        
        return $this;
    }
    /**
     * Get ListeBedingungsdefinition value
     * @return \THAG\XKfz\StructType\ListeBedingungsdefinition|null
     */
    public function getListeBedingungsdefinition(): ?\THAG\XKfz\StructType\ListeBedingungsdefinition
    {
        return $this->ListeBedingungsdefinition;
    }
    /**
     * Set ListeBedingungsdefinition value
     * @param \THAG\XKfz\StructType\ListeBedingungsdefinition $listeBedingungsdefinition
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeBedingungsdefinition(?\THAG\XKfz\StructType\ListeBedingungsdefinition $listeBedingungsdefinition = null): self
    {
        $this->ListeBedingungsdefinition = $listeBedingungsdefinition;
        
        return $this;
    }
    /**
     * Get ListeFeldbezeichnung value
     * @return \THAG\XKfz\StructType\ListeFeldbezeichnung|null
     */
    public function getListeFeldbezeichnung(): ?\THAG\XKfz\StructType\ListeFeldbezeichnung
    {
        return $this->ListeFeldbezeichnung;
    }
    /**
     * Set ListeFeldbezeichnung value
     * @param \THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFeldbezeichnung(?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null): self
    {
        $this->ListeFeldbezeichnung = $listeFeldbezeichnung;
        
        return $this;
    }
    /**
     * Get ListeFelddefinition value
     * @return \THAG\XKfz\StructType\ListeFelddefinition|null
     */
    public function getListeFelddefinition(): ?\THAG\XKfz\StructType\ListeFelddefinition
    {
        return $this->ListeFelddefinition;
    }
    /**
     * Set ListeFelddefinition value
     * @param \THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeFelddefinition(?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null): self
    {
        $this->ListeFelddefinition = $listeFelddefinition;
        
        return $this;
    }
    /**
     * Get Vorgangsnummer value
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }
    /**
     * Set Vorgangsnummer value
     * @param string $vorgangsnummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;
        
        return $this;
    }
    /**
     * Get NurKontextUebersicht value
     * @return string|null
     */
    public function getNurKontextUebersicht(): ?string
    {
        return $this->NurKontextUebersicht;
    }
    /**
     * Set NurKontextUebersicht value
     * @param string $nurKontextUebersicht
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setNurKontextUebersicht(?string $nurKontextUebersicht = null): self
    {
        $this->NurKontextUebersicht = $nurKontextUebersicht;
        
        return $this;
    }
    /**
     * Get ListeVerarbeitungskontext value
     * @return \THAG\XKfz\StructType\ListeVerarbeitungskontext|null
     */
    public function getListeVerarbeitungskontext(): ?\THAG\XKfz\StructType\ListeVerarbeitungskontext
    {
        return $this->ListeVerarbeitungskontext;
    }
    /**
     * Set ListeVerarbeitungskontext value
     * @param \THAG\XKfz\StructType\ListeVerarbeitungskontext $listeVerarbeitungskontext
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVerarbeitungskontext(?\THAG\XKfz\StructType\ListeVerarbeitungskontext $listeVerarbeitungskontext = null): self
    {
        $this->ListeVerarbeitungskontext = $listeVerarbeitungskontext;
        
        return $this;
    }
    /**
     * Get ListeBenachrichtigungsauftrag value
     * @return \THAG\XKfz\StructType\ListeBenachrichtigungsauftrag|null
     */
    public function getListeBenachrichtigungsauftrag(): ?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag
    {
        return $this->ListeBenachrichtigungsauftrag;
    }
    /**
     * Set ListeBenachrichtigungsauftrag value
     * @param \THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $listeBenachrichtigungsauftrag
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeBenachrichtigungsauftrag(?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $listeBenachrichtigungsauftrag = null): self
    {
        $this->ListeBenachrichtigungsauftrag = $listeBenachrichtigungsauftrag;
        
        return $this;
    }
    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     * @return string|null
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }
    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     * @param string $kennzeichenZugehoerigesWechselkennzeichen
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;
        
        return $this;
    }
    /**
     * Get Bonitaetsdaten value
     * @return \THAG\XKfz\StructType\Bonitaetsdaten|null
     */
    public function getBonitaetsdaten(): ?\THAG\XKfz\StructType\Bonitaetsdaten
    {
        return $this->Bonitaetsdaten;
    }
    /**
     * Set Bonitaetsdaten value
     * @param \THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetsdaten(?\THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten = null): self
    {
        $this->Bonitaetsdaten = $bonitaetsdaten;
        
        return $this;
    }
    /**
     * Get ListeBonitaetsdaten value
     * @return \THAG\XKfz\StructType\ListeBonitaetsdaten|null
     */
    public function getListeBonitaetsdaten(): ?\THAG\XKfz\StructType\ListeBonitaetsdaten
    {
        return $this->ListeBonitaetsdaten;
    }
    /**
     * Set ListeBonitaetsdaten value
     * @param \THAG\XKfz\StructType\ListeBonitaetsdaten $listeBonitaetsdaten
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeBonitaetsdaten(?\THAG\XKfz\StructType\ListeBonitaetsdaten $listeBonitaetsdaten = null): self
    {
        $this->ListeBonitaetsdaten = $listeBonitaetsdaten;
        
        return $this;
    }
    /**
     * Get Bonitaetsvorgangsstatus value
     * @return string|null
     */
    public function getBonitaetsvorgangsstatus(): ?string
    {
        return $this->Bonitaetsvorgangsstatus;
    }
    /**
     * Set Bonitaetsvorgangsstatus value
     * @param string $bonitaetsvorgangsstatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setBonitaetsvorgangsstatus(?string $bonitaetsvorgangsstatus = null): self
    {
        $this->Bonitaetsvorgangsstatus = $bonitaetsvorgangsstatus;
        
        return $this;
    }
    /**
     * Get PruefergebnisPositiv value
     * @return string|null
     */
    public function getPruefergebnisPositiv(): ?string
    {
        return $this->PruefergebnisPositiv;
    }
    /**
     * Set PruefergebnisPositiv value
     * @param string $pruefergebnisPositiv
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setPruefergebnisPositiv(?string $pruefergebnisPositiv = null): self
    {
        $this->PruefergebnisPositiv = $pruefergebnisPositiv;
        
        return $this;
    }
    /**
     * Get ITDienstleisterId value
     * @return string|null
     */
    public function getITDienstleisterId(): ?string
    {
        return $this->ITDienstleisterId;
    }
    /**
     * Set ITDienstleisterId value
     * @param string $iTDienstleisterId
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setITDienstleisterId(?string $iTDienstleisterId = null): self
    {
        $this->ITDienstleisterId = $iTDienstleisterId;
        
        return $this;
    }
    /**
     * Get SMSText value
     * @return string|null
     */
    public function getSMSText(): ?string
    {
        return $this->SMSText;
    }
    /**
     * Set SMSText value
     * @param string $sMSText
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSText(?string $sMSText = null): self
    {
        $this->SMSText = $sMSText;
        
        return $this;
    }
    /**
     * Get SMSAbsenderkennung value
     * @return string|null
     */
    public function getSMSAbsenderkennung(): ?string
    {
        return $this->SMSAbsenderkennung;
    }
    /**
     * Set SMSAbsenderkennung value
     * @param string $sMSAbsenderkennung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSMSAbsenderkennung(?string $sMSAbsenderkennung = null): self
    {
        $this->SMSAbsenderkennung = $sMSAbsenderkennung;
        
        return $this;
    }
    /**
     * Get AlternativeNutzerkennung value
     * @return string|null
     */
    public function getAlternativeNutzerkennung(): ?string
    {
        return $this->AlternativeNutzerkennung;
    }
    /**
     * Set AlternativeNutzerkennung value
     * @param string $alternativeNutzerkennung
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAlternativeNutzerkennung(?string $alternativeNutzerkennung = null): self
    {
        $this->AlternativeNutzerkennung = $alternativeNutzerkennung;
        
        return $this;
    }
    /**
     * Get Suchtext value
     * @return string|null
     */
    public function getSuchtext(): ?string
    {
        return $this->Suchtext;
    }
    /**
     * Set Suchtext value
     * @param string $suchtext
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setSuchtext(?string $suchtext = null): self
    {
        $this->Suchtext = $suchtext;
        
        return $this;
    }
    /**
     * Get VkzLogistikAuftrag value
     * @return \THAG\XKfz\StructType\VkzLogistikAuftrag|null
     */
    public function getVkzLogistikAuftrag(): ?\THAG\XKfz\StructType\VkzLogistikAuftrag
    {
        return $this->VkzLogistikAuftrag;
    }
    /**
     * Set VkzLogistikAuftrag value
     * @param \THAG\XKfz\StructType\VkzLogistikAuftrag $vkzLogistikAuftrag
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setVkzLogistikAuftrag(?\THAG\XKfz\StructType\VkzLogistikAuftrag $vkzLogistikAuftrag = null): self
    {
        $this->VkzLogistikAuftrag = $vkzLogistikAuftrag;
        
        return $this;
    }
    /**
     * Get AnschreibenPdf value
     * @return string|null
     */
    public function getAnschreibenPdf(): ?string
    {
        return $this->AnschreibenPdf;
    }
    /**
     * Set AnschreibenPdf value
     * @param string $anschreibenPdf
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAnschreibenPdf(?string $anschreibenPdf = null): self
    {
        $this->AnschreibenPdf = $anschreibenPdf;
        
        return $this;
    }
    /**
     * Get Storno value
     * @return string|null
     */
    public function getStorno(): ?string
    {
        return $this->Storno;
    }
    /**
     * Set Storno value
     * @param string $storno
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setStorno(?string $storno = null): self
    {
        $this->Storno = $storno;
        
        return $this;
    }
    /**
     * Get LogistikEmpfaenger value
     * @return \THAG\XKfz\StructType\LogistikEmpfaenger|null
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }
    /**
     * Set LogistikEmpfaenger value
     * @param \THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;
        
        return $this;
    }
    /**
     * Get ListeLogistikArtikel value
     * @return \THAG\XKfz\StructType\ListeLogistikArtikel|null
     */
    public function getListeLogistikArtikel(): ?\THAG\XKfz\StructType\ListeLogistikArtikel
    {
        return $this->ListeLogistikArtikel;
    }
    /**
     * Set ListeLogistikArtikel value
     * @param \THAG\XKfz\StructType\ListeLogistikArtikel $listeLogistikArtikel
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeLogistikArtikel(?\THAG\XKfz\StructType\ListeLogistikArtikel $listeLogistikArtikel = null): self
    {
        $this->ListeLogistikArtikel = $listeLogistikArtikel;
        
        return $this;
    }
    /**
     * Get ListeLogistikOption value
     * @return \THAG\XKfz\StructType\ListeLogistikOption|null
     */
    public function getListeLogistikOption(): ?\THAG\XKfz\StructType\ListeLogistikOption
    {
        return $this->ListeLogistikOption;
    }
    /**
     * Set ListeLogistikOption value
     * @param \THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeLogistikOption(?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null): self
    {
        $this->ListeLogistikOption = $listeLogistikOption;
        
        return $this;
    }
    /**
     * Get LogistikZustellStatus value
     * @return string|null
     */
    public function getLogistikZustellStatus(): ?string
    {
        return $this->LogistikZustellStatus;
    }
    /**
     * Set LogistikZustellStatus value
     * @param string $logistikZustellStatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setLogistikZustellStatus(?string $logistikZustellStatus = null): self
    {
        $this->LogistikZustellStatus = $logistikZustellStatus;
        
        return $this;
    }
    /**
     * Get TrackingId value
     * @return string|null
     */
    public function getTrackingId(): ?string
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param string $trackingId
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setTrackingId(?string $trackingId = null): self
    {
        $this->TrackingId = $trackingId;
        
        return $this;
    }
    /**
     * Get TrackingLink value
     * @return string|null
     */
    public function getTrackingLink(): ?string
    {
        return $this->TrackingLink;
    }
    /**
     * Set TrackingLink value
     * @param string $trackingLink
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setTrackingLink(?string $trackingLink = null): self
    {
        $this->TrackingLink = $trackingLink;
        
        return $this;
    }
    /**
     * Get ListeEmailEmpfaenger value
     * @return \THAG\XKfz\StructType\ListeEmailEmpfaenger|null
     */
    public function getListeEmailEmpfaenger(): ?\THAG\XKfz\StructType\ListeEmailEmpfaenger
    {
        return $this->ListeEmailEmpfaenger;
    }
    /**
     * Set ListeEmailEmpfaenger value
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaenger $listeEmailEmpfaenger
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeEmailEmpfaenger(?\THAG\XKfz\StructType\ListeEmailEmpfaenger $listeEmailEmpfaenger = null): self
    {
        $this->ListeEmailEmpfaenger = $listeEmailEmpfaenger;
        
        return $this;
    }
    /**
     * Get ListeEmailEmpfaengerCc value
     * @return \THAG\XKfz\StructType\ListeEmailEmpfaengerCc|null
     */
    public function getListeEmailEmpfaengerCc(): ?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc
    {
        return $this->ListeEmailEmpfaengerCc;
    }
    /**
     * Set ListeEmailEmpfaengerCc value
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaengerCc $listeEmailEmpfaengerCc
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeEmailEmpfaengerCc(?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc $listeEmailEmpfaengerCc = null): self
    {
        $this->ListeEmailEmpfaengerCc = $listeEmailEmpfaengerCc;
        
        return $this;
    }
    /**
     * Get ListeEmailEmpfaengerBcc value
     * @return \THAG\XKfz\StructType\ListeEmailEmpfaengerBcc|null
     */
    public function getListeEmailEmpfaengerBcc(): ?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc
    {
        return $this->ListeEmailEmpfaengerBcc;
    }
    /**
     * Set ListeEmailEmpfaengerBcc value
     * @param \THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $listeEmailEmpfaengerBcc
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeEmailEmpfaengerBcc(?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $listeEmailEmpfaengerBcc = null): self
    {
        $this->ListeEmailEmpfaengerBcc = $listeEmailEmpfaengerBcc;
        
        return $this;
    }
    /**
     * Get AdresslabelFreitext value
     * @return string|null
     */
    public function getAdresslabelFreitext(): ?string
    {
        return $this->AdresslabelFreitext;
    }
    /**
     * Set AdresslabelFreitext value
     * @param string $adresslabelFreitext
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setAdresslabelFreitext(?string $adresslabelFreitext = null): self
    {
        $this->AdresslabelFreitext = $adresslabelFreitext;
        
        return $this;
    }
    /**
     * Get Details value
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->Details;
    }
    /**
     * Set Details value
     * @param string $details
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setDetails(?string $details = null): self
    {
        $this->Details = $details;
        
        return $this;
    }
    /**
     * Get EmailVorlage value
     * @return string|null
     */
    public function getEmailVorlage(): ?string
    {
        return $this->EmailVorlage;
    }
    /**
     * Set EmailVorlage value
     * @param string $emailVorlage
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setEmailVorlage(?string $emailVorlage = null): self
    {
        $this->EmailVorlage = $emailVorlage;
        
        return $this;
    }
    /**
     * Get ListeEmailParameter value
     * @return \THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter|null
     */
    public function getListeEmailParameter(): ?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter
    {
        return $this->ListeEmailParameter;
    }
    /**
     * Set ListeEmailParameter value
     * @param \THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $listeEmailParameter
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeEmailParameter(?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $listeEmailParameter = null): self
    {
        $this->ListeEmailParameter = $listeEmailParameter;
        
        return $this;
    }
    /**
     * Get ListeVkzProduktionsauftrag value
     * @return \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag|null
     */
    public function getListeVkzProduktionsauftrag(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag
    {
        return $this->ListeVkzProduktionsauftrag;
    }
    /**
     * Set ListeVkzProduktionsauftrag value
     * @param \THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $listeVkzProduktionsauftrag
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVkzProduktionsauftrag(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $listeVkzProduktionsauftrag = null): self
    {
        $this->ListeVkzProduktionsauftrag = $listeVkzProduktionsauftrag;
        
        return $this;
    }
    /**
     * Get ListeAuftragStatus value
     * @return \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus|null
     */
    public function getListeAuftragStatus(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus
    {
        return $this->ListeAuftragStatus;
    }
    /**
     * Set ListeAuftragStatus value
     * @param \THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $listeAuftragStatus
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeAuftragStatus(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $listeAuftragStatus = null): self
    {
        $this->ListeAuftragStatus = $listeAuftragStatus;
        
        return $this;
    }
    /**
     * Get ListeVpeNummer value
     * @return \THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer|null
     */
    public function getListeVpeNummer(): ?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer
    {
        return $this->ListeVpeNummer;
    }
    /**
     * Set ListeVpeNummer value
     * @param \THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $listeVpeNummer
     * @return \THAG\XKfz\StructType\Nachricht
     */
    public function setListeVpeNummer(?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $listeVpeNummer = null): self
    {
        $this->ListeVpeNummer = $listeVpeNummer;
        
        return $this;
    }
}
