<?php

declare(strict_types=1);

namespace THAG\XKfz\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Nachricht StructType
 *
 * @date 2024-05-13
 *
 * @codeVersion 5.9
 */
#[\AllowDynamicProperties]
class Nachricht extends AbstractStructBase
{
    /**
     * The Zeitstempel
     */
    public ?string $Zeitstempel = null;

    /**
     * The LoginToken
     */
    public ?string $LoginToken = null;

    /**
     * The Nachrichtenkopf
     */
    public ?\THAG\XKfz\StructType\Nachrichtenkopf $Nachrichtenkopf = null;

    /**
     * The DatumEndeVersicherungsschutz
     */
    public ?string $DatumEndeVersicherungsschutz = null;

    /**
     * The DatumAusserbetriebsetzung
     */
    public ?string $DatumAusserbetriebsetzung = null;

    /**
     * The Ping
     */
    public ?string $Ping = null;

    /**
     * The Versicherungsunternehmensnummer
     */
    public ?string $Versicherungsunternehmensnummer = null;

    /**
     * The Sonderzeichen
     */
    public ?string $Sonderzeichen = null;

    /**
     * The Anfragenummer
     */
    public ?string $Anfragenummer = null;

    /**
     * The Versicherungsbestaetigungsnummer
     */
    public ?string $Versicherungsbestaetigungsnummer = null;

    /**
     * The VbArt
     */
    public ?string $VbArt = null;

    /**
     * The VbAbrufbarBis
     */
    public ?string $VbAbrufbarBis = null;

    /**
     * The VbIstNochZuDrucken
     */
    public ?string $VbIstNochZuDrucken = null;

    /**
     * The VbFormular
     */
    public ?string $VbFormular = null;

    /**
     * The VbFormularGewuenscht
     */
    public ?string $VbFormularGewuenscht = null;

    /**
     * The Pruefergebnis
     */
    public ?string $Pruefergebnis = null;

    /**
     * The VkzPruefergebnis
     */
    public ?string $VkzPruefergebnis = null;

    /**
     * The PruefergebnisKommentar
     */
    public ?string $PruefergebnisKommentar = null;

    /**
     * The Zulassungsfahrten
     */
    public ?string $Zulassungsfahrten = null;

    /**
     * The ZeitpunktAenderung
     */
    public ?string $ZeitpunktAenderung = null;

    /**
     * The Versicherung
     */
    public ?\THAG\XKfz\StructType\Versicherung $Versicherung = null;

    /**
     * The Bonitaetszugangsnummer
     */
    public ?string $Bonitaetszugangsnummer = null;

    /**
     * The Bonitaetszugangspasswort
     */
    public ?string $Bonitaetszugangspasswort = null;

    /**
     * The Bonitaetspruefungscode
     */
    public ?string $Bonitaetspruefungscode = null;

    /**
     * The Bonitaetsanfragegrund
     */
    public ?string $Bonitaetsanfragegrund = null;

    /**
     * The Versicherungsnehmer
     */
    public ?\THAG\XKfz\StructType\Versicherungsnehmer $Versicherungsnehmer = null;

    /**
     * The Halter
     */
    public ?\THAG\XKfz\StructType\Halter $Halter = null;

    /**
     * The Fahrzeug
     */
    public ?\THAG\XKfz\StructType\Fahrzeug $Fahrzeug = null;

    /**
     * The Kennzeichen
     */
    public ?\THAG\XKfz\StructType\Kennzeichen $Kennzeichen = null;

    /**
     * The Behoerde
     */
    public ?\THAG\XKfz\StructType\Behoerde $Behoerde = null;

    /**
     * The VbAblehnungsgrund
     */
    public ?string $VbAblehnungsgrund = null;

    /**
     * The ListeFehlerBei
     */
    public ?\THAG\XKfz\StructType\ListeFehlerBei $ListeFehlerBei = null;

    /**
     * The VuArbeitsgang
     */
    public ?\THAG\XKfz\StructType\VuArbeitsgang $VuArbeitsgang = null;

    /**
     * The AnzeigeAblehnungsgrund
     */
    public ?string $AnzeigeAblehnungsgrund = null;

    /**
     * The DatumEingangAnzeigeZulBeh
     */
    public ?string $DatumEingangAnzeigeZulBeh = null;

    /**
     * The DatumNachversichererAb
     */
    public ?string $DatumNachversichererAb = null;

    /**
     * The VbStatus
     */
    public ?string $VbStatus = null;

    /**
     * The VuMitteilungsart
     */
    public ?string $VuMitteilungsart = null;

    /**
     * The AnzahlVersicherungsbestaetigungsnummer
     */
    public ?string $AnzahlVersicherungsbestaetigungsnummer = null;

    /**
     * The ListeVersicherungsbestaetigungsnummer
     */
    public ?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $ListeVersicherungsbestaetigungsnummer = null;

    /**
     * The ZustaendigeBehoerdeKreisschluessel
     */
    public ?string $ZustaendigeBehoerdeKreisschluessel = null;

    /**
     * The ZustaendigeBehoerdeZusatzziffer
     */
    public ?string $ZustaendigeBehoerdeZusatzziffer = null;

    /**
     * The VbVerwenden
     */
    public ?string $VbVerwenden = null;

    /**
     * The ListeVbStatusPruefauftrag
     */
    public ?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag $ListeVbStatusPruefauftrag = null;

    /**
     * The VbRechercheAnfrage
     */
    public ?\THAG\XKfz\StructType\VbRechercheAnfrage $VbRechercheAnfrage = null;

    /**
     * The WeitereDatensaetzeVorhanden
     */
    public ?string $WeitereDatensaetzeVorhanden = null;

    /**
     * The ListeVbRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\ListeVbRechercheAntwort $ListeVbRechercheAntwort = null;

    /**
     * The VbRechercheAnfrageDetails
     */
    public ?\THAG\XKfz\StructType\VbRechercheAnfrageDetails $VbRechercheAnfrageDetails = null;

    /**
     * The VbRechercheAntwortDetails
     */
    public ?\THAG\XKfz\StructType\VbRechercheAntwortDetails $VbRechercheAntwortDetails = null;

    /**
     * The Aktion
     */
    public ?string $Aktion = null;

    /**
     * The KorrekturFahrzeugidentifizierungsnummerUmgehen
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummerUmgehen = null;

    /**
     * The KorrekturZustaendigeBehoerdeUmgehen
     */
    public ?string $KorrekturZustaendigeBehoerdeUmgehen = null;

    /**
     * The SMSEingangBehoerde
     */
    public ?string $SMSEingangBehoerde = null;

    /**
     * The SMSEmpfaenger
     */
    public ?string $SMSEmpfaenger = null;

    /**
     * The SMSTextEingangBehoerde
     */
    public ?string $SMSTextEingangBehoerde = null;

    /**
     * The SMSTextVersicherungsbestaetigungsnummer
     */
    public ?string $SMSTextVersicherungsbestaetigungsnummer = null;

    /**
     * The SMSTextVersicherungswechsel
     */
    public ?string $SMSTextVersicherungswechsel = null;

    /**
     * The SMSTextZulassung
     */
    public ?string $SMSTextZulassung = null;

    /**
     * The SMSVersicherungsbestaetigungsnummer
     */
    public ?string $SMSVersicherungsbestaetigungsnummer = null;

    /**
     * The SMSVersicherungswechsel
     */
    public ?string $SMSVersicherungswechsel = null;

    /**
     * The SMSZulassung
     */
    public ?string $SMSZulassung = null;

    /**
     * The ZuordnungGDVVermittlernummer
     */
    public ?string $ZuordnungGDVVermittlernummer = null;

    /**
     * The BonitaetspruefungSteuerung
     */
    public ?string $BonitaetspruefungSteuerung = null;

    /**
     * The GDVVermittlernummer
     */
    public ?string $GDVVermittlernummer = null;

    /**
     * The Pflegeart
     */
    public ?string $Pflegeart = null;

    /**
     * The GruppenrechtPflegeart
     */
    public ?string $GruppenrechtPflegeart = null;

    /**
     * The GruppePflegeart
     */
    public ?string $GruppePflegeart = null;

    /**
     * The Nutzerkennung
     */
    public ?string $Nutzerkennung = null;

    /**
     * The Zugangsberechtigung
     */
    public ?string $Zugangsberechtigung = null;

    /**
     * The NutzerPinNeu
     */
    public ?string $NutzerPinNeu = null;

    /**
     * The NatuerlichePerson
     */
    public ?\THAG\XKfz\StructType\NatuerlichePerson $NatuerlichePerson = null;

    /**
     * The JuristischePerson
     */
    public ?\THAG\XKfz\StructType\JuristischePerson $JuristischePerson = null;

    /**
     * The Anschrift
     */
    public ?\THAG\XKfz\StructType\Anschrift $Anschrift = null;

    /**
     * The Kontaktdaten
     */
    public ?\THAG\XKfz\StructType\Kontaktdaten $Kontaktdaten = null;

    /**
     * The Korrekturen
     */
    public ?\THAG\XKfz\StructType\Korrekturen $Korrekturen = null;

    /**
     * The ListeBekannteBedingungsverletzung
     */
    public ?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $ListeBekannteBedingungsverletzung = null;

    /**
     * The IHKRegistrierungsnummer
     */
    public ?string $IHKRegistrierungsnummer = null;

    /**
     * The VUNutzerId
     */
    public ?string $VUNutzerId = null;

    /**
     * The PinGueltigBis
     */
    public ?string $PinGueltigBis = null;

    /**
     * The NutzerAngemeldet
     */
    public ?string $NutzerAngemeldet = null;

    /**
     * The IstInAdmingruppe
     */
    public ?string $IstInAdmingruppe = null;

    /**
     * The Gruppennummer
     */
    public ?string $Gruppennummer = null;

    /**
     * The Gruppenname
     */
    public ?string $Gruppenname = null;

    /**
     * The Rechtnummer
     */
    public ?string $Rechtnummer = null;

    /**
     * The ListeReversierungsstatus
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsstatus $ListeReversierungsstatus = null;

    /**
     * The ListenrechtEintragKey
     */
    public ?string $ListenrechtEintragKey = null;

    /**
     * The Rechteklassenname
     */
    public ?string $Rechteklassenname = null;

    /**
     * The Rechteklassennummer
     */
    public ?string $Rechteklassennummer = null;

    /**
     * The Beschreibung
     */
    public ?string $Beschreibung = null;

    /**
     * The Minimalwert
     */
    public ?string $Minimalwert = null;

    /**
     * The Maximalwert
     */
    public ?string $Maximalwert = null;

    /**
     * The Kommunikationspartnerkennung
     */
    public ?string $Kommunikationspartnerkennung = null;

    /**
     * The Kommunikationspartnertyp
     */
    public ?string $Kommunikationspartnertyp = null;

    /**
     * The Obergruppennummer
     */
    public ?string $Obergruppennummer = null;

    /**
     * The Kommunikationspartnerursprung
     */
    public ?string $Kommunikationspartnerursprung = null;

    /**
     * The ListeKommunikationspartner
     */
    public ?\THAG\XKfz\StructType\ListeKommunikationspartner $ListeKommunikationspartner = null;

    /**
     * The ListeKommunikationspartnerkennung
     */
    public ?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung $ListeKommunikationspartnerkennung = null;

    /**
     * The ListeAnzufragendesVersicherungsunternehmen
     */
    public ?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $ListeAnzufragendesVersicherungsunternehmen = null;

    /**
     * The UngebundenerVermittler
     */
    public ?\THAG\XKfz\StructType\UngebundenerVermittler $UngebundenerVermittler = null;

    /**
     * The Administrator
     */
    public ?\THAG\XKfz\StructType\Administrator $Administrator = null;

    /**
     * The VUInterneVermittlernummer
     */
    public ?string $VUInterneVermittlernummer = null;

    /**
     * The Reversierungsstatus
     */
    public ?string $Reversierungsstatus = null;

    /**
     * The ListeReversierungsrecht
     */
    public ?\THAG\XKfz\StructType\ListeReversierungsrecht $ListeReversierungsrecht = null;

    /**
     * The ListeReversierungVM
     */
    public ?\THAG\XKfz\StructType\ListeReversierungVM $ListeReversierungVM = null;

    /**
     * The ListeReversierungVU
     */
    public ?\THAG\XKfz\StructType\ListeReversierungVU $ListeReversierungVU = null;

    /**
     * The AlleUntergruppen
     */
    public ?string $AlleUntergruppen = null;

    /**
     * The eVBDaten
     */
    public ?\THAG\XKfz\StructType\EVBDaten $eVBDaten = null;

    /**
     * The NutzerRechercheAnfrage
     */
    public ?\THAG\XKfz\StructType\NutzerRechercheAnfrage $NutzerRechercheAnfrage = null;

    /**
     * The ListeNutzerRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort $ListeNutzerRechercheAntwort = null;

    /**
     * The ListeGruppe
     */
    public ?\THAG\XKfz\StructType\ListeGruppe $ListeGruppe = null;

    /**
     * The ListeGruppenrecht
     */
    public ?\THAG\XKfz\StructType\ListeGruppenrecht $ListeGruppenrecht = null;

    /**
     * The ListeRecht
     */
    public ?\THAG\XKfz\StructType\ListeRecht $ListeRecht = null;

    /**
     * The ListeRechteklasse
     */
    public ?\THAG\XKfz\StructType\ListeRechteklasse $ListeRechteklasse = null;

    /**
     * The ListeTeilnahmeReversierung
     */
    public ?\THAG\XKfz\StructType\ListeTeilnahmeReversierung $ListeTeilnahmeReversierung = null;

    /**
     * The KorrekturFahrzeugidentifizierungsnummer
     */
    public ?string $KorrekturFahrzeugidentifizierungsnummer = null;

    /**
     * The FzRechercheAnfrage
     */
    public ?\THAG\XKfz\StructType\FzRechercheAnfrage $FzRechercheAnfrage = null;

    /**
     * The ListeFzRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\ListeFzRechercheAntwort $ListeFzRechercheAntwort = null;

    /**
     * The FzRechercheAnfrageDetails
     */
    public ?\THAG\XKfz\StructType\FzRechercheAnfrageDetails $FzRechercheAnfrageDetails = null;

    /**
     * The FzRechercheAntwortDetails
     */
    public ?\THAG\XKfz\StructType\FzRechercheAntwortDetails $FzRechercheAntwortDetails = null;

    /**
     * The ListeVkzFehler
     */
    public ?\THAG\XKfz\StructType\ListeVkzFehler $ListeVkzFehler = null;

    /**
     * The EintragungImZfzrErfolgt
     */
    public ?string $EintragungImZfzrErfolgt = null;

    /**
     * The ListeVorlage
     */
    public ?\THAG\XKfz\StructType\ListeVorlage $ListeVorlage = null;

    /**
     * The VorlageNummer
     */
    public ?string $VorlageNummer = null;

    /**
     * The NeuanlageMoeglich
     */
    public ?string $NeuanlageMoeglich = null;

    /**
     * The VorlageDetail
     */
    public ?\THAG\XKfz\StructType\VorlageDetail $VorlageDetail = null;

    /**
     * The VorlagePflegeart
     */
    public ?string $VorlagePflegeart = null;

    /**
     * The VorlageName
     */
    public ?string $VorlageName = null;

    /**
     * The Vorgangsart
     */
    public ?string $Vorgangsart = null;

    /**
     * The VorlageInhalt
     */
    public ?string $VorlageInhalt = null;

    /**
     * The UebermittlungsRechercheAnfrage
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $UebermittlungsRechercheAnfrage = null;

    /**
     * The UebermittlungsRechercheAnfrageDetails
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $UebermittlungsRechercheAnfrageDetails = null;

    /**
     * The ListeUebermittlungsRechercheAntwort
     */
    public ?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $ListeUebermittlungsRechercheAntwort = null;

    /**
     * The UebermittlungsRechercheAntwortDetails
     */
    public ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $UebermittlungsRechercheAntwortDetails = null;

    /**
     * The ListeVorgangsart
     */
    public ?\THAG\XKfz\StructType\ListeVorgangsart $ListeVorgangsart = null;

    /**
     * The ListeFeldVuIndividualisierung
     */
    public ?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung $ListeFeldVuIndividualisierung = null;

    /**
     * The FeldXmlPfad
     */
    public ?string $FeldXmlPfad = null;

    /**
     * The PortalTyp
     */
    public ?string $PortalTyp = null;

    /**
     * The Begruendung
     */
    public ?string $Begruendung = null;

    /**
     * The Datenpfad
     */
    public ?string $Datenpfad = null;

    /**
     * The DatentypName
     */
    public ?string $DatentypName = null;

    /**
     * The ListeDatentyp
     */
    public ?\THAG\XKfz\StructType\ListeDatentyp $ListeDatentyp = null;

    /**
     * The Daten
     */
    public ?string $Daten = null;

    /**
     * The Profilpflegeergebnis
     */
    public ?string $Profilpflegeergebnis = null;

    /**
     * The ListeDatenpfad
     */
    public ?\THAG\XKfz\StructType\ListeDatenpfad $ListeDatenpfad = null;

    /**
     * The DatenAbfragezeitpunkt
     */
    public ?string $DatenAbfragezeitpunkt = null;

    /**
     * The DatenAnzahlEbenen
     */
    public ?string $DatenAnzahlEbenen = null;

    /**
     * The DatenIndirektePflege
     */
    public ?string $DatenIndirektePflege = null;

    /**
     * The ListeFeldXmlPfad
     */
    public ?\THAG\XKfz\StructType\ListeFeldXmlPfad $ListeFeldXmlPfad = null;

    /**
     * The ListeVersicherung
     */
    public ?\THAG\XKfz\StructType\ListeVersicherung $ListeVersicherung = null;

    /**
     * The Versicherungsscheinnummer
     */
    public ?string $Versicherungsscheinnummer = null;

    /**
     * The AbDatensatzId
     */
    public ?string $AbDatensatzId = null;

    /**
     * The AnzahlDatensaetze
     */
    public ?string $AnzahlDatensaetze = null;

    /**
     * The SortierungSpalte
     */
    public ?string $SortierungSpalte = null;

    /**
     * The SortierungRichtung
     */
    public ?string $SortierungRichtung = null;

    /**
     * The NaechsteDatensatzId
     */
    public ?string $NaechsteDatensatzId = null;

    /**
     * The ListeStrukturOderNachrichtentyp
     */
    public ?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $ListeStrukturOderNachrichtentyp = null;

    /**
     * The ListeBedingungsdefinition
     */
    public ?\THAG\XKfz\StructType\ListeBedingungsdefinition $ListeBedingungsdefinition = null;

    /**
     * The ListeFeldbezeichnung
     */
    public ?\THAG\XKfz\StructType\ListeFeldbezeichnung $ListeFeldbezeichnung = null;

    /**
     * The ListeFelddefinition
     */
    public ?\THAG\XKfz\StructType\ListeFelddefinition $ListeFelddefinition = null;

    /**
     * The Vorgangsnummer
     */
    public ?string $Vorgangsnummer = null;

    /**
     * The NurKontextUebersicht
     */
    public ?string $NurKontextUebersicht = null;

    /**
     * The ListeVerarbeitungskontext
     */
    public ?\THAG\XKfz\StructType\ListeVerarbeitungskontext $ListeVerarbeitungskontext = null;

    /**
     * The ListeBenachrichtigungsauftrag
     */
    public ?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $ListeBenachrichtigungsauftrag = null;

    /**
     * The KennzeichenZugehoerigesWechselkennzeichen
     */
    public ?string $KennzeichenZugehoerigesWechselkennzeichen = null;

    /**
     * The Bonitaetsdaten
     */
    public ?\THAG\XKfz\StructType\Bonitaetsdaten $Bonitaetsdaten = null;

    /**
     * The ListeBonitaetsdaten
     */
    public ?\THAG\XKfz\StructType\ListeBonitaetsdaten $ListeBonitaetsdaten = null;

    /**
     * The Bonitaetsvorgangsstatus
     */
    public ?string $Bonitaetsvorgangsstatus = null;

    /**
     * The PruefergebnisPositiv
     */
    public ?string $PruefergebnisPositiv = null;

    /**
     * The ITDienstleisterId
     */
    public ?string $ITDienstleisterId = null;

    /**
     * The SMSText
     */
    public ?string $SMSText = null;

    /**
     * The SMSAbsenderkennung
     */
    public ?string $SMSAbsenderkennung = null;

    /**
     * The AlternativeNutzerkennung
     */
    public ?string $AlternativeNutzerkennung = null;

    /**
     * The Suchtext
     */
    public ?string $Suchtext = null;

    /**
     * The VkzLogistikAuftrag
     */
    public ?\THAG\XKfz\StructType\VkzLogistikAuftrag $VkzLogistikAuftrag = null;

    /**
     * The AnschreibenPdf
     */
    public ?string $AnschreibenPdf = null;

    /**
     * The Storno
     */
    public ?string $Storno = null;

    /**
     * The LogistikEmpfaenger
     */
    public ?\THAG\XKfz\StructType\LogistikEmpfaenger $LogistikEmpfaenger = null;

    /**
     * The ListeLogistikArtikel
     */
    public ?\THAG\XKfz\StructType\ListeLogistikArtikel $ListeLogistikArtikel = null;

    /**
     * The ListeLogistikOption
     */
    public ?\THAG\XKfz\StructType\ListeLogistikOption $ListeLogistikOption = null;

    /**
     * The LogistikZustellStatus
     */
    public ?string $LogistikZustellStatus = null;

    /**
     * The TrackingId
     */
    public ?string $TrackingId = null;

    /**
     * The TrackingLink
     */
    public ?string $TrackingLink = null;

    /**
     * The ListeEmailEmpfaenger
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaenger $ListeEmailEmpfaenger = null;

    /**
     * The ListeEmailEmpfaengerCc
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc $ListeEmailEmpfaengerCc = null;

    /**
     * The ListeEmailEmpfaengerBcc
     */
    public ?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $ListeEmailEmpfaengerBcc = null;

    /**
     * The AdresslabelFreitext
     */
    public ?string $AdresslabelFreitext = null;

    /**
     * The Details
     */
    public ?string $Details = null;

    /**
     * The EmailVorlage
     */
    public ?string $EmailVorlage = null;

    /**
     * The ListeEmailParameter
     */
    public ?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $ListeEmailParameter = null;

    /**
     * The ListeVkzProduktionsauftrag
     */
    public ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $ListeVkzProduktionsauftrag = null;

    /**
     * The ListeAuftragStatus
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $ListeAuftragStatus = null;

    /**
     * The ListeVpeNummer
     */
    public ?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $ListeVpeNummer = null;

    /**
     * Constructor method for Nachricht
     *
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
     */
    public function getZeitstempel(): ?string
    {
        return $this->Zeitstempel;
    }

    /**
     * Set Zeitstempel value
     */
    public function setZeitstempel(?string $zeitstempel = null): self
    {
        $this->Zeitstempel = $zeitstempel;

        return $this;
    }

    /**
     * Get LoginToken value
     */
    public function getLoginToken(): ?string
    {
        return $this->LoginToken;
    }

    /**
     * Set LoginToken value
     */
    public function setLoginToken(?string $loginToken = null): self
    {
        $this->LoginToken = $loginToken;

        return $this;
    }

    /**
     * Get Nachrichtenkopf value
     */
    public function getNachrichtenkopf(): ?\THAG\XKfz\StructType\Nachrichtenkopf
    {
        return $this->Nachrichtenkopf;
    }

    /**
     * Set Nachrichtenkopf value
     */
    public function setNachrichtenkopf(?\THAG\XKfz\StructType\Nachrichtenkopf $nachrichtenkopf = null): self
    {
        $this->Nachrichtenkopf = $nachrichtenkopf;

        return $this;
    }

    /**
     * Get DatumEndeVersicherungsschutz value
     */
    public function getDatumEndeVersicherungsschutz(): ?string
    {
        return $this->DatumEndeVersicherungsschutz;
    }

    /**
     * Set DatumEndeVersicherungsschutz value
     */
    public function setDatumEndeVersicherungsschutz(?string $datumEndeVersicherungsschutz = null): self
    {
        $this->DatumEndeVersicherungsschutz = $datumEndeVersicherungsschutz;

        return $this;
    }

    /**
     * Get DatumAusserbetriebsetzung value
     */
    public function getDatumAusserbetriebsetzung(): ?string
    {
        return $this->DatumAusserbetriebsetzung;
    }

    /**
     * Set DatumAusserbetriebsetzung value
     */
    public function setDatumAusserbetriebsetzung(?string $datumAusserbetriebsetzung = null): self
    {
        $this->DatumAusserbetriebsetzung = $datumAusserbetriebsetzung;

        return $this;
    }

    /**
     * Get Ping value
     */
    public function getPing(): ?string
    {
        return $this->Ping;
    }

    /**
     * Set Ping value
     */
    public function setPing(?string $ping = null): self
    {
        $this->Ping = $ping;

        return $this;
    }

    /**
     * Get Versicherungsunternehmensnummer value
     */
    public function getVersicherungsunternehmensnummer(): ?string
    {
        return $this->Versicherungsunternehmensnummer;
    }

    /**
     * Set Versicherungsunternehmensnummer value
     */
    public function setVersicherungsunternehmensnummer(?string $versicherungsunternehmensnummer = null): self
    {
        $this->Versicherungsunternehmensnummer = $versicherungsunternehmensnummer;

        return $this;
    }

    /**
     * Get Sonderzeichen value
     */
    public function getSonderzeichen(): ?string
    {
        return $this->Sonderzeichen;
    }

    /**
     * Set Sonderzeichen value
     */
    public function setSonderzeichen(?string $sonderzeichen = null): self
    {
        $this->Sonderzeichen = $sonderzeichen;

        return $this;
    }

    /**
     * Get Anfragenummer value
     */
    public function getAnfragenummer(): ?string
    {
        return $this->Anfragenummer;
    }

    /**
     * Set Anfragenummer value
     */
    public function setAnfragenummer(?string $anfragenummer = null): self
    {
        $this->Anfragenummer = $anfragenummer;

        return $this;
    }

    /**
     * Get Versicherungsbestaetigungsnummer value
     */
    public function getVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->Versicherungsbestaetigungsnummer;
    }

    /**
     * Set Versicherungsbestaetigungsnummer value
     */
    public function setVersicherungsbestaetigungsnummer(?string $versicherungsbestaetigungsnummer = null): self
    {
        $this->Versicherungsbestaetigungsnummer = $versicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get VbArt value
     */
    public function getVbArt(): ?string
    {
        return $this->VbArt;
    }

    /**
     * Set VbArt value
     */
    public function setVbArt(?string $vbArt = null): self
    {
        $this->VbArt = $vbArt;

        return $this;
    }

    /**
     * Get VbAbrufbarBis value
     */
    public function getVbAbrufbarBis(): ?string
    {
        return $this->VbAbrufbarBis;
    }

    /**
     * Set VbAbrufbarBis value
     */
    public function setVbAbrufbarBis(?string $vbAbrufbarBis = null): self
    {
        $this->VbAbrufbarBis = $vbAbrufbarBis;

        return $this;
    }

    /**
     * Get VbIstNochZuDrucken value
     */
    public function getVbIstNochZuDrucken(): ?string
    {
        return $this->VbIstNochZuDrucken;
    }

    /**
     * Set VbIstNochZuDrucken value
     */
    public function setVbIstNochZuDrucken(?string $vbIstNochZuDrucken = null): self
    {
        $this->VbIstNochZuDrucken = $vbIstNochZuDrucken;

        return $this;
    }

    /**
     * Get VbFormular value
     */
    public function getVbFormular(): ?string
    {
        return $this->VbFormular;
    }

    /**
     * Set VbFormular value
     */
    public function setVbFormular(?string $vbFormular = null): self
    {
        $this->VbFormular = $vbFormular;

        return $this;
    }

    /**
     * Get VbFormularGewuenscht value
     */
    public function getVbFormularGewuenscht(): ?string
    {
        return $this->VbFormularGewuenscht;
    }

    /**
     * Set VbFormularGewuenscht value
     */
    public function setVbFormularGewuenscht(?string $vbFormularGewuenscht = null): self
    {
        $this->VbFormularGewuenscht = $vbFormularGewuenscht;

        return $this;
    }

    /**
     * Get Pruefergebnis value
     */
    public function getPruefergebnis(): ?string
    {
        return $this->Pruefergebnis;
    }

    /**
     * Set Pruefergebnis value
     */
    public function setPruefergebnis(?string $pruefergebnis = null): self
    {
        $this->Pruefergebnis = $pruefergebnis;

        return $this;
    }

    /**
     * Get VkzPruefergebnis value
     */
    public function getVkzPruefergebnis(): ?string
    {
        return $this->VkzPruefergebnis;
    }

    /**
     * Set VkzPruefergebnis value
     */
    public function setVkzPruefergebnis(?string $vkzPruefergebnis = null): self
    {
        $this->VkzPruefergebnis = $vkzPruefergebnis;

        return $this;
    }

    /**
     * Get PruefergebnisKommentar value
     */
    public function getPruefergebnisKommentar(): ?string
    {
        return $this->PruefergebnisKommentar;
    }

    /**
     * Set PruefergebnisKommentar value
     */
    public function setPruefergebnisKommentar(?string $pruefergebnisKommentar = null): self
    {
        $this->PruefergebnisKommentar = $pruefergebnisKommentar;

        return $this;
    }

    /**
     * Get Zulassungsfahrten value
     */
    public function getZulassungsfahrten(): ?string
    {
        return $this->Zulassungsfahrten;
    }

    /**
     * Set Zulassungsfahrten value
     */
    public function setZulassungsfahrten(?string $zulassungsfahrten = null): self
    {
        $this->Zulassungsfahrten = $zulassungsfahrten;

        return $this;
    }

    /**
     * Get ZeitpunktAenderung value
     */
    public function getZeitpunktAenderung(): ?string
    {
        return $this->ZeitpunktAenderung;
    }

    /**
     * Set ZeitpunktAenderung value
     */
    public function setZeitpunktAenderung(?string $zeitpunktAenderung = null): self
    {
        $this->ZeitpunktAenderung = $zeitpunktAenderung;

        return $this;
    }

    /**
     * Get Versicherung value
     */
    public function getVersicherung(): ?\THAG\XKfz\StructType\Versicherung
    {
        return $this->Versicherung;
    }

    /**
     * Set Versicherung value
     */
    public function setVersicherung(?\THAG\XKfz\StructType\Versicherung $versicherung = null): self
    {
        $this->Versicherung = $versicherung;

        return $this;
    }

    /**
     * Get Bonitaetszugangsnummer value
     */
    public function getBonitaetszugangsnummer(): ?string
    {
        return $this->Bonitaetszugangsnummer;
    }

    /**
     * Set Bonitaetszugangsnummer value
     */
    public function setBonitaetszugangsnummer(?string $bonitaetszugangsnummer = null): self
    {
        $this->Bonitaetszugangsnummer = $bonitaetszugangsnummer;

        return $this;
    }

    /**
     * Get Bonitaetszugangspasswort value
     */
    public function getBonitaetszugangspasswort(): ?string
    {
        return $this->Bonitaetszugangspasswort;
    }

    /**
     * Set Bonitaetszugangspasswort value
     */
    public function setBonitaetszugangspasswort(?string $bonitaetszugangspasswort = null): self
    {
        $this->Bonitaetszugangspasswort = $bonitaetszugangspasswort;

        return $this;
    }

    /**
     * Get Bonitaetspruefungscode value
     */
    public function getBonitaetspruefungscode(): ?string
    {
        return $this->Bonitaetspruefungscode;
    }

    /**
     * Set Bonitaetspruefungscode value
     */
    public function setBonitaetspruefungscode(?string $bonitaetspruefungscode = null): self
    {
        $this->Bonitaetspruefungscode = $bonitaetspruefungscode;

        return $this;
    }

    /**
     * Get Bonitaetsanfragegrund value
     */
    public function getBonitaetsanfragegrund(): ?string
    {
        return $this->Bonitaetsanfragegrund;
    }

    /**
     * Set Bonitaetsanfragegrund value
     */
    public function setBonitaetsanfragegrund(?string $bonitaetsanfragegrund = null): self
    {
        $this->Bonitaetsanfragegrund = $bonitaetsanfragegrund;

        return $this;
    }

    /**
     * Get Versicherungsnehmer value
     */
    public function getVersicherungsnehmer(): ?\THAG\XKfz\StructType\Versicherungsnehmer
    {
        return $this->Versicherungsnehmer;
    }

    /**
     * Set Versicherungsnehmer value
     */
    public function setVersicherungsnehmer(?\THAG\XKfz\StructType\Versicherungsnehmer $versicherungsnehmer = null): self
    {
        $this->Versicherungsnehmer = $versicherungsnehmer;

        return $this;
    }

    /**
     * Get Halter value
     */
    public function getHalter(): ?\THAG\XKfz\StructType\Halter
    {
        return $this->Halter;
    }

    /**
     * Set Halter value
     */
    public function setHalter(?\THAG\XKfz\StructType\Halter $halter = null): self
    {
        $this->Halter = $halter;

        return $this;
    }

    /**
     * Get Fahrzeug value
     */
    public function getFahrzeug(): ?\THAG\XKfz\StructType\Fahrzeug
    {
        return $this->Fahrzeug;
    }

    /**
     * Set Fahrzeug value
     */
    public function setFahrzeug(?\THAG\XKfz\StructType\Fahrzeug $fahrzeug = null): self
    {
        $this->Fahrzeug = $fahrzeug;

        return $this;
    }

    /**
     * Get Kennzeichen value
     */
    public function getKennzeichen(): ?\THAG\XKfz\StructType\Kennzeichen
    {
        return $this->Kennzeichen;
    }

    /**
     * Set Kennzeichen value
     */
    public function setKennzeichen(?\THAG\XKfz\StructType\Kennzeichen $kennzeichen = null): self
    {
        $this->Kennzeichen = $kennzeichen;

        return $this;
    }

    /**
     * Get Behoerde value
     */
    public function getBehoerde(): ?\THAG\XKfz\StructType\Behoerde
    {
        return $this->Behoerde;
    }

    /**
     * Set Behoerde value
     */
    public function setBehoerde(?\THAG\XKfz\StructType\Behoerde $behoerde = null): self
    {
        $this->Behoerde = $behoerde;

        return $this;
    }

    /**
     * Get VbAblehnungsgrund value
     */
    public function getVbAblehnungsgrund(): ?string
    {
        return $this->VbAblehnungsgrund;
    }

    /**
     * Set VbAblehnungsgrund value
     */
    public function setVbAblehnungsgrund(?string $vbAblehnungsgrund = null): self
    {
        $this->VbAblehnungsgrund = $vbAblehnungsgrund;

        return $this;
    }

    /**
     * Get ListeFehlerBei value
     */
    public function getListeFehlerBei(): ?\THAG\XKfz\StructType\ListeFehlerBei
    {
        return $this->ListeFehlerBei;
    }

    /**
     * Set ListeFehlerBei value
     */
    public function setListeFehlerBei(?\THAG\XKfz\StructType\ListeFehlerBei $listeFehlerBei = null): self
    {
        $this->ListeFehlerBei = $listeFehlerBei;

        return $this;
    }

    /**
     * Get VuArbeitsgang value
     */
    public function getVuArbeitsgang(): ?\THAG\XKfz\StructType\VuArbeitsgang
    {
        return $this->VuArbeitsgang;
    }

    /**
     * Set VuArbeitsgang value
     */
    public function setVuArbeitsgang(?\THAG\XKfz\StructType\VuArbeitsgang $vuArbeitsgang = null): self
    {
        $this->VuArbeitsgang = $vuArbeitsgang;

        return $this;
    }

    /**
     * Get AnzeigeAblehnungsgrund value
     */
    public function getAnzeigeAblehnungsgrund(): ?string
    {
        return $this->AnzeigeAblehnungsgrund;
    }

    /**
     * Set AnzeigeAblehnungsgrund value
     */
    public function setAnzeigeAblehnungsgrund(?string $anzeigeAblehnungsgrund = null): self
    {
        $this->AnzeigeAblehnungsgrund = $anzeigeAblehnungsgrund;

        return $this;
    }

    /**
     * Get DatumEingangAnzeigeZulBeh value
     */
    public function getDatumEingangAnzeigeZulBeh(): ?string
    {
        return $this->DatumEingangAnzeigeZulBeh;
    }

    /**
     * Set DatumEingangAnzeigeZulBeh value
     */
    public function setDatumEingangAnzeigeZulBeh(?string $datumEingangAnzeigeZulBeh = null): self
    {
        $this->DatumEingangAnzeigeZulBeh = $datumEingangAnzeigeZulBeh;

        return $this;
    }

    /**
     * Get DatumNachversichererAb value
     */
    public function getDatumNachversichererAb(): ?string
    {
        return $this->DatumNachversichererAb;
    }

    /**
     * Set DatumNachversichererAb value
     */
    public function setDatumNachversichererAb(?string $datumNachversichererAb = null): self
    {
        $this->DatumNachversichererAb = $datumNachversichererAb;

        return $this;
    }

    /**
     * Get VbStatus value
     */
    public function getVbStatus(): ?string
    {
        return $this->VbStatus;
    }

    /**
     * Set VbStatus value
     */
    public function setVbStatus(?string $vbStatus = null): self
    {
        $this->VbStatus = $vbStatus;

        return $this;
    }

    /**
     * Get VuMitteilungsart value
     */
    public function getVuMitteilungsart(): ?string
    {
        return $this->VuMitteilungsart;
    }

    /**
     * Set VuMitteilungsart value
     */
    public function setVuMitteilungsart(?string $vuMitteilungsart = null): self
    {
        $this->VuMitteilungsart = $vuMitteilungsart;

        return $this;
    }

    /**
     * Get AnzahlVersicherungsbestaetigungsnummer value
     */
    public function getAnzahlVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->AnzahlVersicherungsbestaetigungsnummer;
    }

    /**
     * Set AnzahlVersicherungsbestaetigungsnummer value
     */
    public function setAnzahlVersicherungsbestaetigungsnummer(?string $anzahlVersicherungsbestaetigungsnummer = null): self
    {
        $this->AnzahlVersicherungsbestaetigungsnummer = $anzahlVersicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get ListeVersicherungsbestaetigungsnummer value
     */
    public function getListeVersicherungsbestaetigungsnummer(): ?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer
    {
        return $this->ListeVersicherungsbestaetigungsnummer;
    }

    /**
     * Set ListeVersicherungsbestaetigungsnummer value
     */
    public function setListeVersicherungsbestaetigungsnummer(?\THAG\XKfz\StructType\ListeVersicherungsbestaetigungsnummer $listeVersicherungsbestaetigungsnummer = null): self
    {
        $this->ListeVersicherungsbestaetigungsnummer = $listeVersicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeKreisschluessel value
     */
    public function getZustaendigeBehoerdeKreisschluessel(): ?string
    {
        return $this->ZustaendigeBehoerdeKreisschluessel;
    }

    /**
     * Set ZustaendigeBehoerdeKreisschluessel value
     */
    public function setZustaendigeBehoerdeKreisschluessel(?string $zustaendigeBehoerdeKreisschluessel = null): self
    {
        $this->ZustaendigeBehoerdeKreisschluessel = $zustaendigeBehoerdeKreisschluessel;

        return $this;
    }

    /**
     * Get ZustaendigeBehoerdeZusatzziffer value
     */
    public function getZustaendigeBehoerdeZusatzziffer(): ?string
    {
        return $this->ZustaendigeBehoerdeZusatzziffer;
    }

    /**
     * Set ZustaendigeBehoerdeZusatzziffer value
     */
    public function setZustaendigeBehoerdeZusatzziffer(?string $zustaendigeBehoerdeZusatzziffer = null): self
    {
        $this->ZustaendigeBehoerdeZusatzziffer = $zustaendigeBehoerdeZusatzziffer;

        return $this;
    }

    /**
     * Get VbVerwenden value
     */
    public function getVbVerwenden(): ?string
    {
        return $this->VbVerwenden;
    }

    /**
     * Set VbVerwenden value
     */
    public function setVbVerwenden(?string $vbVerwenden = null): self
    {
        $this->VbVerwenden = $vbVerwenden;

        return $this;
    }

    /**
     * Get ListeVbStatusPruefauftrag value
     */
    public function getListeVbStatusPruefauftrag(): ?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag
    {
        return $this->ListeVbStatusPruefauftrag;
    }

    /**
     * Set ListeVbStatusPruefauftrag value
     */
    public function setListeVbStatusPruefauftrag(?\THAG\XKfz\StructType\ListeVbStatusPruefauftrag $listeVbStatusPruefauftrag = null): self
    {
        $this->ListeVbStatusPruefauftrag = $listeVbStatusPruefauftrag;

        return $this;
    }

    /**
     * Get VbRechercheAnfrage value
     */
    public function getVbRechercheAnfrage(): ?\THAG\XKfz\StructType\VbRechercheAnfrage
    {
        return $this->VbRechercheAnfrage;
    }

    /**
     * Set VbRechercheAnfrage value
     */
    public function setVbRechercheAnfrage(?\THAG\XKfz\StructType\VbRechercheAnfrage $vbRechercheAnfrage = null): self
    {
        $this->VbRechercheAnfrage = $vbRechercheAnfrage;

        return $this;
    }

    /**
     * Get WeitereDatensaetzeVorhanden value
     */
    public function getWeitereDatensaetzeVorhanden(): ?string
    {
        return $this->WeitereDatensaetzeVorhanden;
    }

    /**
     * Set WeitereDatensaetzeVorhanden value
     */
    public function setWeitereDatensaetzeVorhanden(?string $weitereDatensaetzeVorhanden = null): self
    {
        $this->WeitereDatensaetzeVorhanden = $weitereDatensaetzeVorhanden;

        return $this;
    }

    /**
     * Get ListeVbRechercheAntwort value
     */
    public function getListeVbRechercheAntwort(): ?\THAG\XKfz\StructType\ListeVbRechercheAntwort
    {
        return $this->ListeVbRechercheAntwort;
    }

    /**
     * Set ListeVbRechercheAntwort value
     */
    public function setListeVbRechercheAntwort(?\THAG\XKfz\StructType\ListeVbRechercheAntwort $listeVbRechercheAntwort = null): self
    {
        $this->ListeVbRechercheAntwort = $listeVbRechercheAntwort;

        return $this;
    }

    /**
     * Get VbRechercheAnfrageDetails value
     */
    public function getVbRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\VbRechercheAnfrageDetails
    {
        return $this->VbRechercheAnfrageDetails;
    }

    /**
     * Set VbRechercheAnfrageDetails value
     */
    public function setVbRechercheAnfrageDetails(?\THAG\XKfz\StructType\VbRechercheAnfrageDetails $vbRechercheAnfrageDetails = null): self
    {
        $this->VbRechercheAnfrageDetails = $vbRechercheAnfrageDetails;

        return $this;
    }

    /**
     * Get VbRechercheAntwortDetails value
     */
    public function getVbRechercheAntwortDetails(): ?\THAG\XKfz\StructType\VbRechercheAntwortDetails
    {
        return $this->VbRechercheAntwortDetails;
    }

    /**
     * Set VbRechercheAntwortDetails value
     */
    public function setVbRechercheAntwortDetails(?\THAG\XKfz\StructType\VbRechercheAntwortDetails $vbRechercheAntwortDetails = null): self
    {
        $this->VbRechercheAntwortDetails = $vbRechercheAntwortDetails;

        return $this;
    }

    /**
     * Get Aktion value
     */
    public function getAktion(): ?string
    {
        return $this->Aktion;
    }

    /**
     * Set Aktion value
     */
    public function setAktion(?string $aktion = null): self
    {
        $this->Aktion = $aktion;

        return $this;
    }

    /**
     * Get KorrekturFahrzeugidentifizierungsnummerUmgehen value
     */
    public function getKorrekturFahrzeugidentifizierungsnummerUmgehen(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummerUmgehen;
    }

    /**
     * Set KorrekturFahrzeugidentifizierungsnummerUmgehen value
     */
    public function setKorrekturFahrzeugidentifizierungsnummerUmgehen(?string $korrekturFahrzeugidentifizierungsnummerUmgehen = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummerUmgehen = $korrekturFahrzeugidentifizierungsnummerUmgehen;

        return $this;
    }

    /**
     * Get KorrekturZustaendigeBehoerdeUmgehen value
     */
    public function getKorrekturZustaendigeBehoerdeUmgehen(): ?string
    {
        return $this->KorrekturZustaendigeBehoerdeUmgehen;
    }

    /**
     * Set KorrekturZustaendigeBehoerdeUmgehen value
     */
    public function setKorrekturZustaendigeBehoerdeUmgehen(?string $korrekturZustaendigeBehoerdeUmgehen = null): self
    {
        $this->KorrekturZustaendigeBehoerdeUmgehen = $korrekturZustaendigeBehoerdeUmgehen;

        return $this;
    }

    /**
     * Get SMSEingangBehoerde value
     */
    public function getSMSEingangBehoerde(): ?string
    {
        return $this->SMSEingangBehoerde;
    }

    /**
     * Set SMSEingangBehoerde value
     */
    public function setSMSEingangBehoerde(?string $sMSEingangBehoerde = null): self
    {
        $this->SMSEingangBehoerde = $sMSEingangBehoerde;

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
     * Get SMSTextEingangBehoerde value
     */
    public function getSMSTextEingangBehoerde(): ?string
    {
        return $this->SMSTextEingangBehoerde;
    }

    /**
     * Set SMSTextEingangBehoerde value
     */
    public function setSMSTextEingangBehoerde(?string $sMSTextEingangBehoerde = null): self
    {
        $this->SMSTextEingangBehoerde = $sMSTextEingangBehoerde;

        return $this;
    }

    /**
     * Get SMSTextVersicherungsbestaetigungsnummer value
     */
    public function getSMSTextVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->SMSTextVersicherungsbestaetigungsnummer;
    }

    /**
     * Set SMSTextVersicherungsbestaetigungsnummer value
     */
    public function setSMSTextVersicherungsbestaetigungsnummer(?string $sMSTextVersicherungsbestaetigungsnummer = null): self
    {
        $this->SMSTextVersicherungsbestaetigungsnummer = $sMSTextVersicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get SMSTextVersicherungswechsel value
     */
    public function getSMSTextVersicherungswechsel(): ?string
    {
        return $this->SMSTextVersicherungswechsel;
    }

    /**
     * Set SMSTextVersicherungswechsel value
     */
    public function setSMSTextVersicherungswechsel(?string $sMSTextVersicherungswechsel = null): self
    {
        $this->SMSTextVersicherungswechsel = $sMSTextVersicherungswechsel;

        return $this;
    }

    /**
     * Get SMSTextZulassung value
     */
    public function getSMSTextZulassung(): ?string
    {
        return $this->SMSTextZulassung;
    }

    /**
     * Set SMSTextZulassung value
     */
    public function setSMSTextZulassung(?string $sMSTextZulassung = null): self
    {
        $this->SMSTextZulassung = $sMSTextZulassung;

        return $this;
    }

    /**
     * Get SMSVersicherungsbestaetigungsnummer value
     */
    public function getSMSVersicherungsbestaetigungsnummer(): ?string
    {
        return $this->SMSVersicherungsbestaetigungsnummer;
    }

    /**
     * Set SMSVersicherungsbestaetigungsnummer value
     */
    public function setSMSVersicherungsbestaetigungsnummer(?string $sMSVersicherungsbestaetigungsnummer = null): self
    {
        $this->SMSVersicherungsbestaetigungsnummer = $sMSVersicherungsbestaetigungsnummer;

        return $this;
    }

    /**
     * Get SMSVersicherungswechsel value
     */
    public function getSMSVersicherungswechsel(): ?string
    {
        return $this->SMSVersicherungswechsel;
    }

    /**
     * Set SMSVersicherungswechsel value
     */
    public function setSMSVersicherungswechsel(?string $sMSVersicherungswechsel = null): self
    {
        $this->SMSVersicherungswechsel = $sMSVersicherungswechsel;

        return $this;
    }

    /**
     * Get SMSZulassung value
     */
    public function getSMSZulassung(): ?string
    {
        return $this->SMSZulassung;
    }

    /**
     * Set SMSZulassung value
     */
    public function setSMSZulassung(?string $sMSZulassung = null): self
    {
        $this->SMSZulassung = $sMSZulassung;

        return $this;
    }

    /**
     * Get ZuordnungGDVVermittlernummer value
     */
    public function getZuordnungGDVVermittlernummer(): ?string
    {
        return $this->ZuordnungGDVVermittlernummer;
    }

    /**
     * Set ZuordnungGDVVermittlernummer value
     */
    public function setZuordnungGDVVermittlernummer(?string $zuordnungGDVVermittlernummer = null): self
    {
        $this->ZuordnungGDVVermittlernummer = $zuordnungGDVVermittlernummer;

        return $this;
    }

    /**
     * Get BonitaetspruefungSteuerung value
     */
    public function getBonitaetspruefungSteuerung(): ?string
    {
        return $this->BonitaetspruefungSteuerung;
    }

    /**
     * Set BonitaetspruefungSteuerung value
     */
    public function setBonitaetspruefungSteuerung(?string $bonitaetspruefungSteuerung = null): self
    {
        $this->BonitaetspruefungSteuerung = $bonitaetspruefungSteuerung;

        return $this;
    }

    /**
     * Get GDVVermittlernummer value
     */
    public function getGDVVermittlernummer(): ?string
    {
        return $this->GDVVermittlernummer;
    }

    /**
     * Set GDVVermittlernummer value
     */
    public function setGDVVermittlernummer(?string $gDVVermittlernummer = null): self
    {
        $this->GDVVermittlernummer = $gDVVermittlernummer;

        return $this;
    }

    /**
     * Get Pflegeart value
     */
    public function getPflegeart(): ?string
    {
        return $this->Pflegeart;
    }

    /**
     * Set Pflegeart value
     */
    public function setPflegeart(?string $pflegeart = null): self
    {
        $this->Pflegeart = $pflegeart;

        return $this;
    }

    /**
     * Get GruppenrechtPflegeart value
     */
    public function getGruppenrechtPflegeart(): ?string
    {
        return $this->GruppenrechtPflegeart;
    }

    /**
     * Set GruppenrechtPflegeart value
     */
    public function setGruppenrechtPflegeart(?string $gruppenrechtPflegeart = null): self
    {
        $this->GruppenrechtPflegeart = $gruppenrechtPflegeart;

        return $this;
    }

    /**
     * Get GruppePflegeart value
     */
    public function getGruppePflegeart(): ?string
    {
        return $this->GruppePflegeart;
    }

    /**
     * Set GruppePflegeart value
     */
    public function setGruppePflegeart(?string $gruppePflegeart = null): self
    {
        $this->GruppePflegeart = $gruppePflegeart;

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
     * Get Zugangsberechtigung value
     */
    public function getZugangsberechtigung(): ?string
    {
        return $this->Zugangsberechtigung;
    }

    /**
     * Set Zugangsberechtigung value
     */
    public function setZugangsberechtigung(?string $zugangsberechtigung = null): self
    {
        $this->Zugangsberechtigung = $zugangsberechtigung;

        return $this;
    }

    /**
     * Get NutzerPinNeu value
     */
    public function getNutzerPinNeu(): ?string
    {
        return $this->NutzerPinNeu;
    }

    /**
     * Set NutzerPinNeu value
     */
    public function setNutzerPinNeu(?string $nutzerPinNeu = null): self
    {
        $this->NutzerPinNeu = $nutzerPinNeu;

        return $this;
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
     * Get Kontaktdaten value
     */
    public function getKontaktdaten(): ?\THAG\XKfz\StructType\Kontaktdaten
    {
        return $this->Kontaktdaten;
    }

    /**
     * Set Kontaktdaten value
     */
    public function setKontaktdaten(?\THAG\XKfz\StructType\Kontaktdaten $kontaktdaten = null): self
    {
        $this->Kontaktdaten = $kontaktdaten;

        return $this;
    }

    /**
     * Get Korrekturen value
     */
    public function getKorrekturen(): ?\THAG\XKfz\StructType\Korrekturen
    {
        return $this->Korrekturen;
    }

    /**
     * Set Korrekturen value
     */
    public function setKorrekturen(?\THAG\XKfz\StructType\Korrekturen $korrekturen = null): self
    {
        $this->Korrekturen = $korrekturen;

        return $this;
    }

    /**
     * Get ListeBekannteBedingungsverletzung value
     */
    public function getListeBekannteBedingungsverletzung(): ?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung
    {
        return $this->ListeBekannteBedingungsverletzung;
    }

    /**
     * Set ListeBekannteBedingungsverletzung value
     */
    public function setListeBekannteBedingungsverletzung(?\THAG\XKfz\StructType\ListeBekannteBedingungsverletzung $listeBekannteBedingungsverletzung = null): self
    {
        $this->ListeBekannteBedingungsverletzung = $listeBekannteBedingungsverletzung;

        return $this;
    }

    /**
     * Get IHKRegistrierungsnummer value
     */
    public function getIHKRegistrierungsnummer(): ?string
    {
        return $this->IHKRegistrierungsnummer;
    }

    /**
     * Set IHKRegistrierungsnummer value
     */
    public function setIHKRegistrierungsnummer(?string $iHKRegistrierungsnummer = null): self
    {
        $this->IHKRegistrierungsnummer = $iHKRegistrierungsnummer;

        return $this;
    }

    /**
     * Get VUNutzerId value
     */
    public function getVUNutzerId(): ?string
    {
        return $this->VUNutzerId;
    }

    /**
     * Set VUNutzerId value
     */
    public function setVUNutzerId(?string $vUNutzerId = null): self
    {
        $this->VUNutzerId = $vUNutzerId;

        return $this;
    }

    /**
     * Get PinGueltigBis value
     */
    public function getPinGueltigBis(): ?string
    {
        return $this->PinGueltigBis;
    }

    /**
     * Set PinGueltigBis value
     */
    public function setPinGueltigBis(?string $pinGueltigBis = null): self
    {
        $this->PinGueltigBis = $pinGueltigBis;

        return $this;
    }

    /**
     * Get NutzerAngemeldet value
     */
    public function getNutzerAngemeldet(): ?string
    {
        return $this->NutzerAngemeldet;
    }

    /**
     * Set NutzerAngemeldet value
     */
    public function setNutzerAngemeldet(?string $nutzerAngemeldet = null): self
    {
        $this->NutzerAngemeldet = $nutzerAngemeldet;

        return $this;
    }

    /**
     * Get IstInAdmingruppe value
     */
    public function getIstInAdmingruppe(): ?string
    {
        return $this->IstInAdmingruppe;
    }

    /**
     * Set IstInAdmingruppe value
     */
    public function setIstInAdmingruppe(?string $istInAdmingruppe = null): self
    {
        $this->IstInAdmingruppe = $istInAdmingruppe;

        return $this;
    }

    /**
     * Get Gruppennummer value
     */
    public function getGruppennummer(): ?string
    {
        return $this->Gruppennummer;
    }

    /**
     * Set Gruppennummer value
     */
    public function setGruppennummer(?string $gruppennummer = null): self
    {
        $this->Gruppennummer = $gruppennummer;

        return $this;
    }

    /**
     * Get Gruppenname value
     */
    public function getGruppenname(): ?string
    {
        return $this->Gruppenname;
    }

    /**
     * Set Gruppenname value
     */
    public function setGruppenname(?string $gruppenname = null): self
    {
        $this->Gruppenname = $gruppenname;

        return $this;
    }

    /**
     * Get Rechtnummer value
     */
    public function getRechtnummer(): ?string
    {
        return $this->Rechtnummer;
    }

    /**
     * Set Rechtnummer value
     */
    public function setRechtnummer(?string $rechtnummer = null): self
    {
        $this->Rechtnummer = $rechtnummer;

        return $this;
    }

    /**
     * Get ListeReversierungsstatus value
     */
    public function getListeReversierungsstatus(): ?\THAG\XKfz\StructType\ListeReversierungsstatus
    {
        return $this->ListeReversierungsstatus;
    }

    /**
     * Set ListeReversierungsstatus value
     */
    public function setListeReversierungsstatus(?\THAG\XKfz\StructType\ListeReversierungsstatus $listeReversierungsstatus = null): self
    {
        $this->ListeReversierungsstatus = $listeReversierungsstatus;

        return $this;
    }

    /**
     * Get ListenrechtEintragKey value
     */
    public function getListenrechtEintragKey(): ?string
    {
        return $this->ListenrechtEintragKey;
    }

    /**
     * Set ListenrechtEintragKey value
     */
    public function setListenrechtEintragKey(?string $listenrechtEintragKey = null): self
    {
        $this->ListenrechtEintragKey = $listenrechtEintragKey;

        return $this;
    }

    /**
     * Get Rechteklassenname value
     */
    public function getRechteklassenname(): ?string
    {
        return $this->Rechteklassenname;
    }

    /**
     * Set Rechteklassenname value
     */
    public function setRechteklassenname(?string $rechteklassenname = null): self
    {
        $this->Rechteklassenname = $rechteklassenname;

        return $this;
    }

    /**
     * Get Rechteklassennummer value
     */
    public function getRechteklassennummer(): ?string
    {
        return $this->Rechteklassennummer;
    }

    /**
     * Set Rechteklassennummer value
     */
    public function setRechteklassennummer(?string $rechteklassennummer = null): self
    {
        $this->Rechteklassennummer = $rechteklassennummer;

        return $this;
    }

    /**
     * Get Beschreibung value
     */
    public function getBeschreibung(): ?string
    {
        return $this->Beschreibung;
    }

    /**
     * Set Beschreibung value
     */
    public function setBeschreibung(?string $beschreibung = null): self
    {
        $this->Beschreibung = $beschreibung;

        return $this;
    }

    /**
     * Get Minimalwert value
     */
    public function getMinimalwert(): ?string
    {
        return $this->Minimalwert;
    }

    /**
     * Set Minimalwert value
     */
    public function setMinimalwert(?string $minimalwert = null): self
    {
        $this->Minimalwert = $minimalwert;

        return $this;
    }

    /**
     * Get Maximalwert value
     */
    public function getMaximalwert(): ?string
    {
        return $this->Maximalwert;
    }

    /**
     * Set Maximalwert value
     */
    public function setMaximalwert(?string $maximalwert = null): self
    {
        $this->Maximalwert = $maximalwert;

        return $this;
    }

    /**
     * Get Kommunikationspartnerkennung value
     */
    public function getKommunikationspartnerkennung(): ?string
    {
        return $this->Kommunikationspartnerkennung;
    }

    /**
     * Set Kommunikationspartnerkennung value
     */
    public function setKommunikationspartnerkennung(?string $kommunikationspartnerkennung = null): self
    {
        $this->Kommunikationspartnerkennung = $kommunikationspartnerkennung;

        return $this;
    }

    /**
     * Get Kommunikationspartnertyp value
     */
    public function getKommunikationspartnertyp(): ?string
    {
        return $this->Kommunikationspartnertyp;
    }

    /**
     * Set Kommunikationspartnertyp value
     */
    public function setKommunikationspartnertyp(?string $kommunikationspartnertyp = null): self
    {
        $this->Kommunikationspartnertyp = $kommunikationspartnertyp;

        return $this;
    }

    /**
     * Get Obergruppennummer value
     */
    public function getObergruppennummer(): ?string
    {
        return $this->Obergruppennummer;
    }

    /**
     * Set Obergruppennummer value
     */
    public function setObergruppennummer(?string $obergruppennummer = null): self
    {
        $this->Obergruppennummer = $obergruppennummer;

        return $this;
    }

    /**
     * Get Kommunikationspartnerursprung value
     */
    public function getKommunikationspartnerursprung(): ?string
    {
        return $this->Kommunikationspartnerursprung;
    }

    /**
     * Set Kommunikationspartnerursprung value
     */
    public function setKommunikationspartnerursprung(?string $kommunikationspartnerursprung = null): self
    {
        $this->Kommunikationspartnerursprung = $kommunikationspartnerursprung;

        return $this;
    }

    /**
     * Get ListeKommunikationspartner value
     */
    public function getListeKommunikationspartner(): ?\THAG\XKfz\StructType\ListeKommunikationspartner
    {
        return $this->ListeKommunikationspartner;
    }

    /**
     * Set ListeKommunikationspartner value
     */
    public function setListeKommunikationspartner(?\THAG\XKfz\StructType\ListeKommunikationspartner $listeKommunikationspartner = null): self
    {
        $this->ListeKommunikationspartner = $listeKommunikationspartner;

        return $this;
    }

    /**
     * Get ListeKommunikationspartnerkennung value
     */
    public function getListeKommunikationspartnerkennung(): ?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung
    {
        return $this->ListeKommunikationspartnerkennung;
    }

    /**
     * Set ListeKommunikationspartnerkennung value
     */
    public function setListeKommunikationspartnerkennung(?\THAG\XKfz\StructType\ListeKommunikationspartnerkennung $listeKommunikationspartnerkennung = null): self
    {
        $this->ListeKommunikationspartnerkennung = $listeKommunikationspartnerkennung;

        return $this;
    }

    /**
     * Get ListeAnzufragendesVersicherungsunternehmen value
     */
    public function getListeAnzufragendesVersicherungsunternehmen(): ?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen
    {
        return $this->ListeAnzufragendesVersicherungsunternehmen;
    }

    /**
     * Set ListeAnzufragendesVersicherungsunternehmen value
     */
    public function setListeAnzufragendesVersicherungsunternehmen(?\THAG\XKfz\StructType\ListeAnzufragendesVersicherungsunternehmen $listeAnzufragendesVersicherungsunternehmen = null): self
    {
        $this->ListeAnzufragendesVersicherungsunternehmen = $listeAnzufragendesVersicherungsunternehmen;

        return $this;
    }

    /**
     * Get UngebundenerVermittler value
     */
    public function getUngebundenerVermittler(): ?\THAG\XKfz\StructType\UngebundenerVermittler
    {
        return $this->UngebundenerVermittler;
    }

    /**
     * Set UngebundenerVermittler value
     */
    public function setUngebundenerVermittler(?\THAG\XKfz\StructType\UngebundenerVermittler $ungebundenerVermittler = null): self
    {
        $this->UngebundenerVermittler = $ungebundenerVermittler;

        return $this;
    }

    /**
     * Get Administrator value
     */
    public function getAdministrator(): ?\THAG\XKfz\StructType\Administrator
    {
        return $this->Administrator;
    }

    /**
     * Set Administrator value
     */
    public function setAdministrator(?\THAG\XKfz\StructType\Administrator $administrator = null): self
    {
        $this->Administrator = $administrator;

        return $this;
    }

    /**
     * Get VUInterneVermittlernummer value
     */
    public function getVUInterneVermittlernummer(): ?string
    {
        return $this->VUInterneVermittlernummer;
    }

    /**
     * Set VUInterneVermittlernummer value
     */
    public function setVUInterneVermittlernummer(?string $vUInterneVermittlernummer = null): self
    {
        $this->VUInterneVermittlernummer = $vUInterneVermittlernummer;

        return $this;
    }

    /**
     * Get Reversierungsstatus value
     */
    public function getReversierungsstatus(): ?string
    {
        return $this->Reversierungsstatus;
    }

    /**
     * Set Reversierungsstatus value
     */
    public function setReversierungsstatus(?string $reversierungsstatus = null): self
    {
        $this->Reversierungsstatus = $reversierungsstatus;

        return $this;
    }

    /**
     * Get ListeReversierungsrecht value
     */
    public function getListeReversierungsrecht(): ?\THAG\XKfz\StructType\ListeReversierungsrecht
    {
        return $this->ListeReversierungsrecht;
    }

    /**
     * Set ListeReversierungsrecht value
     */
    public function setListeReversierungsrecht(?\THAG\XKfz\StructType\ListeReversierungsrecht $listeReversierungsrecht = null): self
    {
        $this->ListeReversierungsrecht = $listeReversierungsrecht;

        return $this;
    }

    /**
     * Get ListeReversierungVM value
     */
    public function getListeReversierungVM(): ?\THAG\XKfz\StructType\ListeReversierungVM
    {
        return $this->ListeReversierungVM;
    }

    /**
     * Set ListeReversierungVM value
     */
    public function setListeReversierungVM(?\THAG\XKfz\StructType\ListeReversierungVM $listeReversierungVM = null): self
    {
        $this->ListeReversierungVM = $listeReversierungVM;

        return $this;
    }

    /**
     * Get ListeReversierungVU value
     */
    public function getListeReversierungVU(): ?\THAG\XKfz\StructType\ListeReversierungVU
    {
        return $this->ListeReversierungVU;
    }

    /**
     * Set ListeReversierungVU value
     */
    public function setListeReversierungVU(?\THAG\XKfz\StructType\ListeReversierungVU $listeReversierungVU = null): self
    {
        $this->ListeReversierungVU = $listeReversierungVU;

        return $this;
    }

    /**
     * Get AlleUntergruppen value
     */
    public function getAlleUntergruppen(): ?string
    {
        return $this->AlleUntergruppen;
    }

    /**
     * Set AlleUntergruppen value
     */
    public function setAlleUntergruppen(?string $alleUntergruppen = null): self
    {
        $this->AlleUntergruppen = $alleUntergruppen;

        return $this;
    }

    /**
     * Get eVBDaten value
     */
    public function getEVBDaten(): ?\THAG\XKfz\StructType\EVBDaten
    {
        return $this->eVBDaten;
    }

    /**
     * Set eVBDaten value
     */
    public function setEVBDaten(?\THAG\XKfz\StructType\EVBDaten $eVBDaten = null): self
    {
        $this->eVBDaten = $eVBDaten;

        return $this;
    }

    /**
     * Get NutzerRechercheAnfrage value
     */
    public function getNutzerRechercheAnfrage(): ?\THAG\XKfz\StructType\NutzerRechercheAnfrage
    {
        return $this->NutzerRechercheAnfrage;
    }

    /**
     * Set NutzerRechercheAnfrage value
     */
    public function setNutzerRechercheAnfrage(?\THAG\XKfz\StructType\NutzerRechercheAnfrage $nutzerRechercheAnfrage = null): self
    {
        $this->NutzerRechercheAnfrage = $nutzerRechercheAnfrage;

        return $this;
    }

    /**
     * Get ListeNutzerRechercheAntwort value
     */
    public function getListeNutzerRechercheAntwort(): ?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort
    {
        return $this->ListeNutzerRechercheAntwort;
    }

    /**
     * Set ListeNutzerRechercheAntwort value
     */
    public function setListeNutzerRechercheAntwort(?\THAG\XKfz\StructType\ListeNutzerRechercheAntwort $listeNutzerRechercheAntwort = null): self
    {
        $this->ListeNutzerRechercheAntwort = $listeNutzerRechercheAntwort;

        return $this;
    }

    /**
     * Get ListeGruppe value
     */
    public function getListeGruppe(): ?\THAG\XKfz\StructType\ListeGruppe
    {
        return $this->ListeGruppe;
    }

    /**
     * Set ListeGruppe value
     */
    public function setListeGruppe(?\THAG\XKfz\StructType\ListeGruppe $listeGruppe = null): self
    {
        $this->ListeGruppe = $listeGruppe;

        return $this;
    }

    /**
     * Get ListeGruppenrecht value
     */
    public function getListeGruppenrecht(): ?\THAG\XKfz\StructType\ListeGruppenrecht
    {
        return $this->ListeGruppenrecht;
    }

    /**
     * Set ListeGruppenrecht value
     */
    public function setListeGruppenrecht(?\THAG\XKfz\StructType\ListeGruppenrecht $listeGruppenrecht = null): self
    {
        $this->ListeGruppenrecht = $listeGruppenrecht;

        return $this;
    }

    /**
     * Get ListeRecht value
     */
    public function getListeRecht(): ?\THAG\XKfz\StructType\ListeRecht
    {
        return $this->ListeRecht;
    }

    /**
     * Set ListeRecht value
     */
    public function setListeRecht(?\THAG\XKfz\StructType\ListeRecht $listeRecht = null): self
    {
        $this->ListeRecht = $listeRecht;

        return $this;
    }

    /**
     * Get ListeRechteklasse value
     */
    public function getListeRechteklasse(): ?\THAG\XKfz\StructType\ListeRechteklasse
    {
        return $this->ListeRechteklasse;
    }

    /**
     * Set ListeRechteklasse value
     */
    public function setListeRechteklasse(?\THAG\XKfz\StructType\ListeRechteklasse $listeRechteklasse = null): self
    {
        $this->ListeRechteklasse = $listeRechteklasse;

        return $this;
    }

    /**
     * Get ListeTeilnahmeReversierung value
     */
    public function getListeTeilnahmeReversierung(): ?\THAG\XKfz\StructType\ListeTeilnahmeReversierung
    {
        return $this->ListeTeilnahmeReversierung;
    }

    /**
     * Set ListeTeilnahmeReversierung value
     */
    public function setListeTeilnahmeReversierung(?\THAG\XKfz\StructType\ListeTeilnahmeReversierung $listeTeilnahmeReversierung = null): self
    {
        $this->ListeTeilnahmeReversierung = $listeTeilnahmeReversierung;

        return $this;
    }

    /**
     * Get KorrekturFahrzeugidentifizierungsnummer value
     */
    public function getKorrekturFahrzeugidentifizierungsnummer(): ?string
    {
        return $this->KorrekturFahrzeugidentifizierungsnummer;
    }

    /**
     * Set KorrekturFahrzeugidentifizierungsnummer value
     */
    public function setKorrekturFahrzeugidentifizierungsnummer(?string $korrekturFahrzeugidentifizierungsnummer = null): self
    {
        $this->KorrekturFahrzeugidentifizierungsnummer = $korrekturFahrzeugidentifizierungsnummer;

        return $this;
    }

    /**
     * Get FzRechercheAnfrage value
     */
    public function getFzRechercheAnfrage(): ?\THAG\XKfz\StructType\FzRechercheAnfrage
    {
        return $this->FzRechercheAnfrage;
    }

    /**
     * Set FzRechercheAnfrage value
     */
    public function setFzRechercheAnfrage(?\THAG\XKfz\StructType\FzRechercheAnfrage $fzRechercheAnfrage = null): self
    {
        $this->FzRechercheAnfrage = $fzRechercheAnfrage;

        return $this;
    }

    /**
     * Get ListeFzRechercheAntwort value
     */
    public function getListeFzRechercheAntwort(): ?\THAG\XKfz\StructType\ListeFzRechercheAntwort
    {
        return $this->ListeFzRechercheAntwort;
    }

    /**
     * Set ListeFzRechercheAntwort value
     */
    public function setListeFzRechercheAntwort(?\THAG\XKfz\StructType\ListeFzRechercheAntwort $listeFzRechercheAntwort = null): self
    {
        $this->ListeFzRechercheAntwort = $listeFzRechercheAntwort;

        return $this;
    }

    /**
     * Get FzRechercheAnfrageDetails value
     */
    public function getFzRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\FzRechercheAnfrageDetails
    {
        return $this->FzRechercheAnfrageDetails;
    }

    /**
     * Set FzRechercheAnfrageDetails value
     */
    public function setFzRechercheAnfrageDetails(?\THAG\XKfz\StructType\FzRechercheAnfrageDetails $fzRechercheAnfrageDetails = null): self
    {
        $this->FzRechercheAnfrageDetails = $fzRechercheAnfrageDetails;

        return $this;
    }

    /**
     * Get FzRechercheAntwortDetails value
     */
    public function getFzRechercheAntwortDetails(): ?\THAG\XKfz\StructType\FzRechercheAntwortDetails
    {
        return $this->FzRechercheAntwortDetails;
    }

    /**
     * Set FzRechercheAntwortDetails value
     */
    public function setFzRechercheAntwortDetails(?\THAG\XKfz\StructType\FzRechercheAntwortDetails $fzRechercheAntwortDetails = null): self
    {
        $this->FzRechercheAntwortDetails = $fzRechercheAntwortDetails;

        return $this;
    }

    /**
     * Get ListeVkzFehler value
     */
    public function getListeVkzFehler(): ?\THAG\XKfz\StructType\ListeVkzFehler
    {
        return $this->ListeVkzFehler;
    }

    /**
     * Set ListeVkzFehler value
     */
    public function setListeVkzFehler(?\THAG\XKfz\StructType\ListeVkzFehler $listeVkzFehler = null): self
    {
        $this->ListeVkzFehler = $listeVkzFehler;

        return $this;
    }

    /**
     * Get EintragungImZfzrErfolgt value
     */
    public function getEintragungImZfzrErfolgt(): ?string
    {
        return $this->EintragungImZfzrErfolgt;
    }

    /**
     * Set EintragungImZfzrErfolgt value
     */
    public function setEintragungImZfzrErfolgt(?string $eintragungImZfzrErfolgt = null): self
    {
        $this->EintragungImZfzrErfolgt = $eintragungImZfzrErfolgt;

        return $this;
    }

    /**
     * Get ListeVorlage value
     */
    public function getListeVorlage(): ?\THAG\XKfz\StructType\ListeVorlage
    {
        return $this->ListeVorlage;
    }

    /**
     * Set ListeVorlage value
     */
    public function setListeVorlage(?\THAG\XKfz\StructType\ListeVorlage $listeVorlage = null): self
    {
        $this->ListeVorlage = $listeVorlage;

        return $this;
    }

    /**
     * Get VorlageNummer value
     */
    public function getVorlageNummer(): ?string
    {
        return $this->VorlageNummer;
    }

    /**
     * Set VorlageNummer value
     */
    public function setVorlageNummer(?string $vorlageNummer = null): self
    {
        $this->VorlageNummer = $vorlageNummer;

        return $this;
    }

    /**
     * Get NeuanlageMoeglich value
     */
    public function getNeuanlageMoeglich(): ?string
    {
        return $this->NeuanlageMoeglich;
    }

    /**
     * Set NeuanlageMoeglich value
     */
    public function setNeuanlageMoeglich(?string $neuanlageMoeglich = null): self
    {
        $this->NeuanlageMoeglich = $neuanlageMoeglich;

        return $this;
    }

    /**
     * Get VorlageDetail value
     */
    public function getVorlageDetail(): ?\THAG\XKfz\StructType\VorlageDetail
    {
        return $this->VorlageDetail;
    }

    /**
     * Set VorlageDetail value
     */
    public function setVorlageDetail(?\THAG\XKfz\StructType\VorlageDetail $vorlageDetail = null): self
    {
        $this->VorlageDetail = $vorlageDetail;

        return $this;
    }

    /**
     * Get VorlagePflegeart value
     */
    public function getVorlagePflegeart(): ?string
    {
        return $this->VorlagePflegeart;
    }

    /**
     * Set VorlagePflegeart value
     */
    public function setVorlagePflegeart(?string $vorlagePflegeart = null): self
    {
        $this->VorlagePflegeart = $vorlagePflegeart;

        return $this;
    }

    /**
     * Get VorlageName value
     */
    public function getVorlageName(): ?string
    {
        return $this->VorlageName;
    }

    /**
     * Set VorlageName value
     */
    public function setVorlageName(?string $vorlageName = null): self
    {
        $this->VorlageName = $vorlageName;

        return $this;
    }

    /**
     * Get Vorgangsart value
     */
    public function getVorgangsart(): ?string
    {
        return $this->Vorgangsart;
    }

    /**
     * Set Vorgangsart value
     */
    public function setVorgangsart(?string $vorgangsart = null): self
    {
        $this->Vorgangsart = $vorgangsart;

        return $this;
    }

    /**
     * Get VorlageInhalt value
     */
    public function getVorlageInhalt(): ?string
    {
        return $this->VorlageInhalt;
    }

    /**
     * Set VorlageInhalt value
     */
    public function setVorlageInhalt(?string $vorlageInhalt = null): self
    {
        $this->VorlageInhalt = $vorlageInhalt;

        return $this;
    }

    /**
     * Get UebermittlungsRechercheAnfrage value
     */
    public function getUebermittlungsRechercheAnfrage(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage
    {
        return $this->UebermittlungsRechercheAnfrage;
    }

    /**
     * Set UebermittlungsRechercheAnfrage value
     */
    public function setUebermittlungsRechercheAnfrage(?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrage $uebermittlungsRechercheAnfrage = null): self
    {
        $this->UebermittlungsRechercheAnfrage = $uebermittlungsRechercheAnfrage;

        return $this;
    }

    /**
     * Get UebermittlungsRechercheAnfrageDetails value
     */
    public function getUebermittlungsRechercheAnfrageDetails(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails
    {
        return $this->UebermittlungsRechercheAnfrageDetails;
    }

    /**
     * Set UebermittlungsRechercheAnfrageDetails value
     */
    public function setUebermittlungsRechercheAnfrageDetails(?\THAG\XKfz\StructType\UebermittlungsRechercheAnfrageDetails $uebermittlungsRechercheAnfrageDetails = null): self
    {
        $this->UebermittlungsRechercheAnfrageDetails = $uebermittlungsRechercheAnfrageDetails;

        return $this;
    }

    /**
     * Get ListeUebermittlungsRechercheAntwort value
     */
    public function getListeUebermittlungsRechercheAntwort(): ?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort
    {
        return $this->ListeUebermittlungsRechercheAntwort;
    }

    /**
     * Set ListeUebermittlungsRechercheAntwort value
     */
    public function setListeUebermittlungsRechercheAntwort(?\THAG\XKfz\StructType\ListeUebermittlungsRechercheAntwort $listeUebermittlungsRechercheAntwort = null): self
    {
        $this->ListeUebermittlungsRechercheAntwort = $listeUebermittlungsRechercheAntwort;

        return $this;
    }

    /**
     * Get UebermittlungsRechercheAntwortDetails value
     */
    public function getUebermittlungsRechercheAntwortDetails(): ?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails
    {
        return $this->UebermittlungsRechercheAntwortDetails;
    }

    /**
     * Set UebermittlungsRechercheAntwortDetails value
     */
    public function setUebermittlungsRechercheAntwortDetails(?\THAG\XKfz\StructType\UebermittlungsRechercheAntwortDetails $uebermittlungsRechercheAntwortDetails = null): self
    {
        $this->UebermittlungsRechercheAntwortDetails = $uebermittlungsRechercheAntwortDetails;

        return $this;
    }

    /**
     * Get ListeVorgangsart value
     */
    public function getListeVorgangsart(): ?\THAG\XKfz\StructType\ListeVorgangsart
    {
        return $this->ListeVorgangsart;
    }

    /**
     * Set ListeVorgangsart value
     */
    public function setListeVorgangsart(?\THAG\XKfz\StructType\ListeVorgangsart $listeVorgangsart = null): self
    {
        $this->ListeVorgangsart = $listeVorgangsart;

        return $this;
    }

    /**
     * Get ListeFeldVuIndividualisierung value
     */
    public function getListeFeldVuIndividualisierung(): ?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung
    {
        return $this->ListeFeldVuIndividualisierung;
    }

    /**
     * Set ListeFeldVuIndividualisierung value
     */
    public function setListeFeldVuIndividualisierung(?\THAG\XKfz\StructType\ListeFeldVuIndividualisierung $listeFeldVuIndividualisierung = null): self
    {
        $this->ListeFeldVuIndividualisierung = $listeFeldVuIndividualisierung;

        return $this;
    }

    /**
     * Get FeldXmlPfad value
     */
    public function getFeldXmlPfad(): ?string
    {
        return $this->FeldXmlPfad;
    }

    /**
     * Set FeldXmlPfad value
     */
    public function setFeldXmlPfad(?string $feldXmlPfad = null): self
    {
        $this->FeldXmlPfad = $feldXmlPfad;

        return $this;
    }

    /**
     * Get PortalTyp value
     */
    public function getPortalTyp(): ?string
    {
        return $this->PortalTyp;
    }

    /**
     * Set PortalTyp value
     */
    public function setPortalTyp(?string $portalTyp = null): self
    {
        $this->PortalTyp = $portalTyp;

        return $this;
    }

    /**
     * Get Begruendung value
     */
    public function getBegruendung(): ?string
    {
        return $this->Begruendung;
    }

    /**
     * Set Begruendung value
     */
    public function setBegruendung(?string $begruendung = null): self
    {
        $this->Begruendung = $begruendung;

        return $this;
    }

    /**
     * Get Datenpfad value
     */
    public function getDatenpfad(): ?string
    {
        return $this->Datenpfad;
    }

    /**
     * Set Datenpfad value
     */
    public function setDatenpfad(?string $datenpfad = null): self
    {
        $this->Datenpfad = $datenpfad;

        return $this;
    }

    /**
     * Get DatentypName value
     */
    public function getDatentypName(): ?string
    {
        return $this->DatentypName;
    }

    /**
     * Set DatentypName value
     */
    public function setDatentypName(?string $datentypName = null): self
    {
        $this->DatentypName = $datentypName;

        return $this;
    }

    /**
     * Get ListeDatentyp value
     */
    public function getListeDatentyp(): ?\THAG\XKfz\StructType\ListeDatentyp
    {
        return $this->ListeDatentyp;
    }

    /**
     * Set ListeDatentyp value
     */
    public function setListeDatentyp(?\THAG\XKfz\StructType\ListeDatentyp $listeDatentyp = null): self
    {
        $this->ListeDatentyp = $listeDatentyp;

        return $this;
    }

    /**
     * Get Daten value
     */
    public function getDaten(): ?string
    {
        return $this->Daten;
    }

    /**
     * Set Daten value
     */
    public function setDaten(?string $daten = null): self
    {
        $this->Daten = $daten;

        return $this;
    }

    /**
     * Get Profilpflegeergebnis value
     */
    public function getProfilpflegeergebnis(): ?string
    {
        return $this->Profilpflegeergebnis;
    }

    /**
     * Set Profilpflegeergebnis value
     */
    public function setProfilpflegeergebnis(?string $profilpflegeergebnis = null): self
    {
        $this->Profilpflegeergebnis = $profilpflegeergebnis;

        return $this;
    }

    /**
     * Get ListeDatenpfad value
     */
    public function getListeDatenpfad(): ?\THAG\XKfz\StructType\ListeDatenpfad
    {
        return $this->ListeDatenpfad;
    }

    /**
     * Set ListeDatenpfad value
     */
    public function setListeDatenpfad(?\THAG\XKfz\StructType\ListeDatenpfad $listeDatenpfad = null): self
    {
        $this->ListeDatenpfad = $listeDatenpfad;

        return $this;
    }

    /**
     * Get DatenAbfragezeitpunkt value
     */
    public function getDatenAbfragezeitpunkt(): ?string
    {
        return $this->DatenAbfragezeitpunkt;
    }

    /**
     * Set DatenAbfragezeitpunkt value
     */
    public function setDatenAbfragezeitpunkt(?string $datenAbfragezeitpunkt = null): self
    {
        $this->DatenAbfragezeitpunkt = $datenAbfragezeitpunkt;

        return $this;
    }

    /**
     * Get DatenAnzahlEbenen value
     */
    public function getDatenAnzahlEbenen(): ?string
    {
        return $this->DatenAnzahlEbenen;
    }

    /**
     * Set DatenAnzahlEbenen value
     */
    public function setDatenAnzahlEbenen(?string $datenAnzahlEbenen = null): self
    {
        $this->DatenAnzahlEbenen = $datenAnzahlEbenen;

        return $this;
    }

    /**
     * Get DatenIndirektePflege value
     */
    public function getDatenIndirektePflege(): ?string
    {
        return $this->DatenIndirektePflege;
    }

    /**
     * Set DatenIndirektePflege value
     */
    public function setDatenIndirektePflege(?string $datenIndirektePflege = null): self
    {
        $this->DatenIndirektePflege = $datenIndirektePflege;

        return $this;
    }

    /**
     * Get ListeFeldXmlPfad value
     */
    public function getListeFeldXmlPfad(): ?\THAG\XKfz\StructType\ListeFeldXmlPfad
    {
        return $this->ListeFeldXmlPfad;
    }

    /**
     * Set ListeFeldXmlPfad value
     */
    public function setListeFeldXmlPfad(?\THAG\XKfz\StructType\ListeFeldXmlPfad $listeFeldXmlPfad = null): self
    {
        $this->ListeFeldXmlPfad = $listeFeldXmlPfad;

        return $this;
    }

    /**
     * Get ListeVersicherung value
     */
    public function getListeVersicherung(): ?\THAG\XKfz\StructType\ListeVersicherung
    {
        return $this->ListeVersicherung;
    }

    /**
     * Set ListeVersicherung value
     */
    public function setListeVersicherung(?\THAG\XKfz\StructType\ListeVersicherung $listeVersicherung = null): self
    {
        $this->ListeVersicherung = $listeVersicherung;

        return $this;
    }

    /**
     * Get Versicherungsscheinnummer value
     */
    public function getVersicherungsscheinnummer(): ?string
    {
        return $this->Versicherungsscheinnummer;
    }

    /**
     * Set Versicherungsscheinnummer value
     */
    public function setVersicherungsscheinnummer(?string $versicherungsscheinnummer = null): self
    {
        $this->Versicherungsscheinnummer = $versicherungsscheinnummer;

        return $this;
    }

    /**
     * Get AbDatensatzId value
     */
    public function getAbDatensatzId(): ?string
    {
        return $this->AbDatensatzId;
    }

    /**
     * Set AbDatensatzId value
     */
    public function setAbDatensatzId(?string $abDatensatzId = null): self
    {
        $this->AbDatensatzId = $abDatensatzId;

        return $this;
    }

    /**
     * Get AnzahlDatensaetze value
     */
    public function getAnzahlDatensaetze(): ?string
    {
        return $this->AnzahlDatensaetze;
    }

    /**
     * Set AnzahlDatensaetze value
     */
    public function setAnzahlDatensaetze(?string $anzahlDatensaetze = null): self
    {
        $this->AnzahlDatensaetze = $anzahlDatensaetze;

        return $this;
    }

    /**
     * Get SortierungSpalte value
     */
    public function getSortierungSpalte(): ?string
    {
        return $this->SortierungSpalte;
    }

    /**
     * Set SortierungSpalte value
     */
    public function setSortierungSpalte(?string $sortierungSpalte = null): self
    {
        $this->SortierungSpalte = $sortierungSpalte;

        return $this;
    }

    /**
     * Get SortierungRichtung value
     */
    public function getSortierungRichtung(): ?string
    {
        return $this->SortierungRichtung;
    }

    /**
     * Set SortierungRichtung value
     */
    public function setSortierungRichtung(?string $sortierungRichtung = null): self
    {
        $this->SortierungRichtung = $sortierungRichtung;

        return $this;
    }

    /**
     * Get NaechsteDatensatzId value
     */
    public function getNaechsteDatensatzId(): ?string
    {
        return $this->NaechsteDatensatzId;
    }

    /**
     * Set NaechsteDatensatzId value
     */
    public function setNaechsteDatensatzId(?string $naechsteDatensatzId = null): self
    {
        $this->NaechsteDatensatzId = $naechsteDatensatzId;

        return $this;
    }

    /**
     * Get ListeStrukturOderNachrichtentyp value
     */
    public function getListeStrukturOderNachrichtentyp(): ?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp
    {
        return $this->ListeStrukturOderNachrichtentyp;
    }

    /**
     * Set ListeStrukturOderNachrichtentyp value
     */
    public function setListeStrukturOderNachrichtentyp(?\THAG\XKfz\StructType\ListeStrukturOderNachrichtentyp $listeStrukturOderNachrichtentyp = null): self
    {
        $this->ListeStrukturOderNachrichtentyp = $listeStrukturOderNachrichtentyp;

        return $this;
    }

    /**
     * Get ListeBedingungsdefinition value
     */
    public function getListeBedingungsdefinition(): ?\THAG\XKfz\StructType\ListeBedingungsdefinition
    {
        return $this->ListeBedingungsdefinition;
    }

    /**
     * Set ListeBedingungsdefinition value
     */
    public function setListeBedingungsdefinition(?\THAG\XKfz\StructType\ListeBedingungsdefinition $listeBedingungsdefinition = null): self
    {
        $this->ListeBedingungsdefinition = $listeBedingungsdefinition;

        return $this;
    }

    /**
     * Get ListeFeldbezeichnung value
     */
    public function getListeFeldbezeichnung(): ?\THAG\XKfz\StructType\ListeFeldbezeichnung
    {
        return $this->ListeFeldbezeichnung;
    }

    /**
     * Set ListeFeldbezeichnung value
     */
    public function setListeFeldbezeichnung(?\THAG\XKfz\StructType\ListeFeldbezeichnung $listeFeldbezeichnung = null): self
    {
        $this->ListeFeldbezeichnung = $listeFeldbezeichnung;

        return $this;
    }

    /**
     * Get ListeFelddefinition value
     */
    public function getListeFelddefinition(): ?\THAG\XKfz\StructType\ListeFelddefinition
    {
        return $this->ListeFelddefinition;
    }

    /**
     * Set ListeFelddefinition value
     */
    public function setListeFelddefinition(?\THAG\XKfz\StructType\ListeFelddefinition $listeFelddefinition = null): self
    {
        $this->ListeFelddefinition = $listeFelddefinition;

        return $this;
    }

    /**
     * Get Vorgangsnummer value
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * Set Vorgangsnummer value
     */
    public function setVorgangsnummer(?string $vorgangsnummer = null): self
    {
        $this->Vorgangsnummer = $vorgangsnummer;

        return $this;
    }

    /**
     * Get NurKontextUebersicht value
     */
    public function getNurKontextUebersicht(): ?string
    {
        return $this->NurKontextUebersicht;
    }

    /**
     * Set NurKontextUebersicht value
     */
    public function setNurKontextUebersicht(?string $nurKontextUebersicht = null): self
    {
        $this->NurKontextUebersicht = $nurKontextUebersicht;

        return $this;
    }

    /**
     * Get ListeVerarbeitungskontext value
     */
    public function getListeVerarbeitungskontext(): ?\THAG\XKfz\StructType\ListeVerarbeitungskontext
    {
        return $this->ListeVerarbeitungskontext;
    }

    /**
     * Set ListeVerarbeitungskontext value
     */
    public function setListeVerarbeitungskontext(?\THAG\XKfz\StructType\ListeVerarbeitungskontext $listeVerarbeitungskontext = null): self
    {
        $this->ListeVerarbeitungskontext = $listeVerarbeitungskontext;

        return $this;
    }

    /**
     * Get ListeBenachrichtigungsauftrag value
     */
    public function getListeBenachrichtigungsauftrag(): ?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag
    {
        return $this->ListeBenachrichtigungsauftrag;
    }

    /**
     * Set ListeBenachrichtigungsauftrag value
     */
    public function setListeBenachrichtigungsauftrag(?\THAG\XKfz\StructType\ListeBenachrichtigungsauftrag $listeBenachrichtigungsauftrag = null): self
    {
        $this->ListeBenachrichtigungsauftrag = $listeBenachrichtigungsauftrag;

        return $this;
    }

    /**
     * Get KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function getKennzeichenZugehoerigesWechselkennzeichen(): ?string
    {
        return $this->KennzeichenZugehoerigesWechselkennzeichen;
    }

    /**
     * Set KennzeichenZugehoerigesWechselkennzeichen value
     */
    public function setKennzeichenZugehoerigesWechselkennzeichen(?string $kennzeichenZugehoerigesWechselkennzeichen = null): self
    {
        $this->KennzeichenZugehoerigesWechselkennzeichen = $kennzeichenZugehoerigesWechselkennzeichen;

        return $this;
    }

    /**
     * Get Bonitaetsdaten value
     */
    public function getBonitaetsdaten(): ?\THAG\XKfz\StructType\Bonitaetsdaten
    {
        return $this->Bonitaetsdaten;
    }

    /**
     * Set Bonitaetsdaten value
     */
    public function setBonitaetsdaten(?\THAG\XKfz\StructType\Bonitaetsdaten $bonitaetsdaten = null): self
    {
        $this->Bonitaetsdaten = $bonitaetsdaten;

        return $this;
    }

    /**
     * Get ListeBonitaetsdaten value
     */
    public function getListeBonitaetsdaten(): ?\THAG\XKfz\StructType\ListeBonitaetsdaten
    {
        return $this->ListeBonitaetsdaten;
    }

    /**
     * Set ListeBonitaetsdaten value
     */
    public function setListeBonitaetsdaten(?\THAG\XKfz\StructType\ListeBonitaetsdaten $listeBonitaetsdaten = null): self
    {
        $this->ListeBonitaetsdaten = $listeBonitaetsdaten;

        return $this;
    }

    /**
     * Get Bonitaetsvorgangsstatus value
     */
    public function getBonitaetsvorgangsstatus(): ?string
    {
        return $this->Bonitaetsvorgangsstatus;
    }

    /**
     * Set Bonitaetsvorgangsstatus value
     */
    public function setBonitaetsvorgangsstatus(?string $bonitaetsvorgangsstatus = null): self
    {
        $this->Bonitaetsvorgangsstatus = $bonitaetsvorgangsstatus;

        return $this;
    }

    /**
     * Get PruefergebnisPositiv value
     */
    public function getPruefergebnisPositiv(): ?string
    {
        return $this->PruefergebnisPositiv;
    }

    /**
     * Set PruefergebnisPositiv value
     */
    public function setPruefergebnisPositiv(?string $pruefergebnisPositiv = null): self
    {
        $this->PruefergebnisPositiv = $pruefergebnisPositiv;

        return $this;
    }

    /**
     * Get ITDienstleisterId value
     */
    public function getITDienstleisterId(): ?string
    {
        return $this->ITDienstleisterId;
    }

    /**
     * Set ITDienstleisterId value
     */
    public function setITDienstleisterId(?string $iTDienstleisterId = null): self
    {
        $this->ITDienstleisterId = $iTDienstleisterId;

        return $this;
    }

    /**
     * Get SMSText value
     */
    public function getSMSText(): ?string
    {
        return $this->SMSText;
    }

    /**
     * Set SMSText value
     */
    public function setSMSText(?string $sMSText = null): self
    {
        $this->SMSText = $sMSText;

        return $this;
    }

    /**
     * Get SMSAbsenderkennung value
     */
    public function getSMSAbsenderkennung(): ?string
    {
        return $this->SMSAbsenderkennung;
    }

    /**
     * Set SMSAbsenderkennung value
     */
    public function setSMSAbsenderkennung(?string $sMSAbsenderkennung = null): self
    {
        $this->SMSAbsenderkennung = $sMSAbsenderkennung;

        return $this;
    }

    /**
     * Get AlternativeNutzerkennung value
     */
    public function getAlternativeNutzerkennung(): ?string
    {
        return $this->AlternativeNutzerkennung;
    }

    /**
     * Set AlternativeNutzerkennung value
     */
    public function setAlternativeNutzerkennung(?string $alternativeNutzerkennung = null): self
    {
        $this->AlternativeNutzerkennung = $alternativeNutzerkennung;

        return $this;
    }

    /**
     * Get Suchtext value
     */
    public function getSuchtext(): ?string
    {
        return $this->Suchtext;
    }

    /**
     * Set Suchtext value
     */
    public function setSuchtext(?string $suchtext = null): self
    {
        $this->Suchtext = $suchtext;

        return $this;
    }

    /**
     * Get VkzLogistikAuftrag value
     */
    public function getVkzLogistikAuftrag(): ?\THAG\XKfz\StructType\VkzLogistikAuftrag
    {
        return $this->VkzLogistikAuftrag;
    }

    /**
     * Set VkzLogistikAuftrag value
     */
    public function setVkzLogistikAuftrag(?\THAG\XKfz\StructType\VkzLogistikAuftrag $vkzLogistikAuftrag = null): self
    {
        $this->VkzLogistikAuftrag = $vkzLogistikAuftrag;

        return $this;
    }

    /**
     * Get AnschreibenPdf value
     */
    public function getAnschreibenPdf(): ?string
    {
        return $this->AnschreibenPdf;
    }

    /**
     * Set AnschreibenPdf value
     */
    public function setAnschreibenPdf(?string $anschreibenPdf = null): self
    {
        $this->AnschreibenPdf = $anschreibenPdf;

        return $this;
    }

    /**
     * Get Storno value
     */
    public function getStorno(): ?string
    {
        return $this->Storno;
    }

    /**
     * Set Storno value
     */
    public function setStorno(?string $storno = null): self
    {
        $this->Storno = $storno;

        return $this;
    }

    /**
     * Get LogistikEmpfaenger value
     */
    public function getLogistikEmpfaenger(): ?\THAG\XKfz\StructType\LogistikEmpfaenger
    {
        return $this->LogistikEmpfaenger;
    }

    /**
     * Set LogistikEmpfaenger value
     */
    public function setLogistikEmpfaenger(?\THAG\XKfz\StructType\LogistikEmpfaenger $logistikEmpfaenger = null): self
    {
        $this->LogistikEmpfaenger = $logistikEmpfaenger;

        return $this;
    }

    /**
     * Get ListeLogistikArtikel value
     */
    public function getListeLogistikArtikel(): ?\THAG\XKfz\StructType\ListeLogistikArtikel
    {
        return $this->ListeLogistikArtikel;
    }

    /**
     * Set ListeLogistikArtikel value
     */
    public function setListeLogistikArtikel(?\THAG\XKfz\StructType\ListeLogistikArtikel $listeLogistikArtikel = null): self
    {
        $this->ListeLogistikArtikel = $listeLogistikArtikel;

        return $this;
    }

    /**
     * Get ListeLogistikOption value
     */
    public function getListeLogistikOption(): ?\THAG\XKfz\StructType\ListeLogistikOption
    {
        return $this->ListeLogistikOption;
    }

    /**
     * Set ListeLogistikOption value
     */
    public function setListeLogistikOption(?\THAG\XKfz\StructType\ListeLogistikOption $listeLogistikOption = null): self
    {
        $this->ListeLogistikOption = $listeLogistikOption;

        return $this;
    }

    /**
     * Get LogistikZustellStatus value
     */
    public function getLogistikZustellStatus(): ?string
    {
        return $this->LogistikZustellStatus;
    }

    /**
     * Set LogistikZustellStatus value
     */
    public function setLogistikZustellStatus(?string $logistikZustellStatus = null): self
    {
        $this->LogistikZustellStatus = $logistikZustellStatus;

        return $this;
    }

    /**
     * Get TrackingId value
     */
    public function getTrackingId(): ?string
    {
        return $this->TrackingId;
    }

    /**
     * Set TrackingId value
     */
    public function setTrackingId(?string $trackingId = null): self
    {
        $this->TrackingId = $trackingId;

        return $this;
    }

    /**
     * Get TrackingLink value
     */
    public function getTrackingLink(): ?string
    {
        return $this->TrackingLink;
    }

    /**
     * Set TrackingLink value
     */
    public function setTrackingLink(?string $trackingLink = null): self
    {
        $this->TrackingLink = $trackingLink;

        return $this;
    }

    /**
     * Get ListeEmailEmpfaenger value
     */
    public function getListeEmailEmpfaenger(): ?\THAG\XKfz\StructType\ListeEmailEmpfaenger
    {
        return $this->ListeEmailEmpfaenger;
    }

    /**
     * Set ListeEmailEmpfaenger value
     */
    public function setListeEmailEmpfaenger(?\THAG\XKfz\StructType\ListeEmailEmpfaenger $listeEmailEmpfaenger = null): self
    {
        $this->ListeEmailEmpfaenger = $listeEmailEmpfaenger;

        return $this;
    }

    /**
     * Get ListeEmailEmpfaengerCc value
     */
    public function getListeEmailEmpfaengerCc(): ?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc
    {
        return $this->ListeEmailEmpfaengerCc;
    }

    /**
     * Set ListeEmailEmpfaengerCc value
     */
    public function setListeEmailEmpfaengerCc(?\THAG\XKfz\StructType\ListeEmailEmpfaengerCc $listeEmailEmpfaengerCc = null): self
    {
        $this->ListeEmailEmpfaengerCc = $listeEmailEmpfaengerCc;

        return $this;
    }

    /**
     * Get ListeEmailEmpfaengerBcc value
     */
    public function getListeEmailEmpfaengerBcc(): ?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc
    {
        return $this->ListeEmailEmpfaengerBcc;
    }

    /**
     * Set ListeEmailEmpfaengerBcc value
     */
    public function setListeEmailEmpfaengerBcc(?\THAG\XKfz\StructType\ListeEmailEmpfaengerBcc $listeEmailEmpfaengerBcc = null): self
    {
        $this->ListeEmailEmpfaengerBcc = $listeEmailEmpfaengerBcc;

        return $this;
    }

    /**
     * Get AdresslabelFreitext value
     */
    public function getAdresslabelFreitext(): ?string
    {
        return $this->AdresslabelFreitext;
    }

    /**
     * Set AdresslabelFreitext value
     */
    public function setAdresslabelFreitext(?string $adresslabelFreitext = null): self
    {
        $this->AdresslabelFreitext = $adresslabelFreitext;

        return $this;
    }

    /**
     * Get Details value
     */
    public function getDetails(): ?string
    {
        return $this->Details;
    }

    /**
     * Set Details value
     */
    public function setDetails(?string $details = null): self
    {
        $this->Details = $details;

        return $this;
    }

    /**
     * Get EmailVorlage value
     */
    public function getEmailVorlage(): ?string
    {
        return $this->EmailVorlage;
    }

    /**
     * Set EmailVorlage value
     */
    public function setEmailVorlage(?string $emailVorlage = null): self
    {
        $this->EmailVorlage = $emailVorlage;

        return $this;
    }

    /**
     * Get ListeEmailParameter value
     */
    public function getListeEmailParameter(): ?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter
    {
        return $this->ListeEmailParameter;
    }

    /**
     * Set ListeEmailParameter value
     */
    public function setListeEmailParameter(?\THAG\XKfz\StructType\GDV_EMAIL_001_ListeEmailParameter $listeEmailParameter = null): self
    {
        $this->ListeEmailParameter = $listeEmailParameter;

        return $this;
    }

    /**
     * Get ListeVkzProduktionsauftrag value
     */
    public function getListeVkzProduktionsauftrag(): ?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag
    {
        return $this->ListeVkzProduktionsauftrag;
    }

    /**
     * Set ListeVkzProduktionsauftrag value
     */
    public function setListeVkzProduktionsauftrag(?\THAG\XKfz\StructType\GDV_ITD_060_ListeVkzProduktionsauftrag $listeVkzProduktionsauftrag = null): self
    {
        $this->ListeVkzProduktionsauftrag = $listeVkzProduktionsauftrag;

        return $this;
    }

    /**
     * Get ListeAuftragStatus value
     */
    public function getListeAuftragStatus(): ?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus
    {
        return $this->ListeAuftragStatus;
    }

    /**
     * Set ListeAuftragStatus value
     */
    public function setListeAuftragStatus(?\THAG\XKfz\StructType\ITD_GDV_060_ListeAuftragStatus $listeAuftragStatus = null): self
    {
        $this->ListeAuftragStatus = $listeAuftragStatus;

        return $this;
    }

    /**
     * Get ListeVpeNummer value
     */
    public function getListeVpeNummer(): ?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer
    {
        return $this->ListeVpeNummer;
    }

    /**
     * Set ListeVpeNummer value
     */
    public function setListeVpeNummer(?\THAG\XKfz\StructType\ITD_GDV_062_ListeVpeNummer $listeVpeNummer = null): self
    {
        $this->ListeVpeNummer = $listeVpeNummer;

        return $this;
    }
}
