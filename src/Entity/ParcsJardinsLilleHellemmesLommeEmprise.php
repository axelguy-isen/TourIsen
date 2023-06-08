<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ParcsJardinsLilleHellemmesLommeEmprise
 *
 * @ORM\Table(name="parcs_jardins_lille_hellemmes_lomme_emprise")
 * @ORM\Entity
 */
class ParcsJardinsLilleHellemmesLommeEmprise
{
    /**
     * @var string
     *
     * @ORM\Column(name="Identifiant", type="decimal", precision=4, scale=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Nom d'usage`", type="string", length=37, nullable=true)
     */
    private $nomDusage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Quartier ou commune associée`", type="string", length=25, nullable=true)
     */
    private $quartierOuCommuneAssociée;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Hiérarchie`", type="decimal", precision=2, scale=1, nullable=true)
     */
    private $hiérarchie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Type", type="string", length=18, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Sous-Type`", type="string", length=28, nullable=true)
     */
    private $sousType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Ouvert au public`", type="string", length=3, nullable=true)
     */
    private $ouvertAuPublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Etat d'ouverture`", type="string", length=10, nullable=true)
     */
    private $etatDouverture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Horaire d'ouverture estivale`", type="string", length=100, nullable=true)
     */
    private $horaireDouvertureEstivale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Horaire d'ouverture hivernale`", type="string", length=92, nullable=true)
     */
    private $horaireDouvertureHivernale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Aire de Jeux pour enfants`", type="string", length=3, nullable=true)
     */
    private $aireDeJeuxPourEnfants;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Nom (liste)`", type="string", length=39, nullable=true)
     */
    private $nomliste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Adresse ou Voie`", type="string", length=38, nullable=true)
     */
    private $adresseOuVoie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Surface en m²`", type="string", length=16, nullable=true)
     */
    private $surfaceEnM²;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=10, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Accès en métro à 500m`", type="string", length=56, nullable=true)
     */
    private $accèsEnMétroà500m;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Autres accès`", type="string", length=10, nullable=true)
     */
    private $autresAccès;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Année d'ouverture`", type="string", length=4, nullable=true)
     */
    private $annéeDouverture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`X (L93)`", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $xl93;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`Y (L93)`", type="decimal", precision=11, scale=4, nullable=true)
     */
    private $yl93;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Longitude", type="decimal", precision=7, scale=6, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Latitude", type="decimal", precision=8, scale=6, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="`coord_geo`", type="string", length=19, nullable=true)
     */
    private $coordGeo;

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function getNomDusage(): ?string
    {
        return $this->nomDusage;
    }

    public function setNomDusage(?string $nomDusage): self
    {
        $this->nomDusage = $nomDusage;

        return $this;
    }

    public function getQuartierOuCommuneAssociée(): ?string
    {
        return $this->quartierOuCommuneAssociée;
    }

    public function setQuartierOuCommuneAssociée(?string $quartierOuCommuneAssociée): self
    {
        $this->quartierOuCommuneAssociée = $quartierOuCommuneAssociée;

        return $this;
    }

    public function getHiérarchie(): ?string
    {
        return $this->hiérarchie;
    }

    public function setHiérarchie(?string $hiérarchie): self
    {
        $this->hiérarchie = $hiérarchie;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSousType(): ?string
    {
        return $this->sousType;
    }

    public function setSousType(?string $sousType): self
    {
        $this->sousType = $sousType;

        return $this;
    }

    public function getOuvertAuPublic(): ?string
    {
        return $this->ouvertAuPublic;
    }

    public function setOuvertAuPublic(?string $ouvertAuPublic): self
    {
        $this->ouvertAuPublic = $ouvertAuPublic;

        return $this;
    }

    public function getEtatDouverture(): ?string
    {
        return $this->etatDouverture;
    }

    public function setEtatDouverture(?string $etatDouverture): self
    {
        $this->etatDouverture = $etatDouverture;

        return $this;
    }

    public function getHoraireDouvertureEstivale(): ?string
    {
        return $this->horaireDouvertureEstivale;
    }

    public function setHoraireDouvertureEstivale(?string $horaireDouvertureEstivale): self
    {
        $this->horaireDouvertureEstivale = $horaireDouvertureEstivale;

        return $this;
    }

    public function getHoraireDouvertureHivernale(): ?string
    {
        return $this->horaireDouvertureHivernale;
    }

    public function setHoraireDouvertureHivernale(?string $horaireDouvertureHivernale): self
    {
        $this->horaireDouvertureHivernale = $horaireDouvertureHivernale;

        return $this;
    }

    public function getAireDeJeuxPourEnfants(): ?string
    {
        return $this->aireDeJeuxPourEnfants;
    }

    public function setAireDeJeuxPourEnfants(?string $aireDeJeuxPourEnfants): self
    {
        $this->aireDeJeuxPourEnfants = $aireDeJeuxPourEnfants;

        return $this;
    }

    public function getNomliste(): ?string
    {
        return $this->nomliste;
    }

    public function setNomliste(?string $nomliste): self
    {
        $this->nomliste = $nomliste;

        return $this;
    }

    public function getAdresseOuVoie(): ?string
    {
        return $this->adresseOuVoie;
    }

    public function setAdresseOuVoie(?string $adresseOuVoie): self
    {
        $this->adresseOuVoie = $adresseOuVoie;

        return $this;
    }

    public function getSurfaceEnM²(): ?string
    {
        return $this->surfaceEnM²;
    }

    public function setSurfaceEnM²(?string $surfaceEnM²): self
    {
        $this->surfaceEnM² = $surfaceEnM²;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAccèsEnMétroà500m(): ?string
    {
        return $this->accèsEnMétroà500m;
    }

    public function setAccèsEnMétroà500m(?string $accèsEnMétroà500m): self
    {
        $this->accèsEnMétroà500m = $accèsEnMétroà500m;

        return $this;
    }

    public function getAutresAccès(): ?string
    {
        return $this->autresAccès;
    }

    public function setAutresAccès(?string $autresAccès): self
    {
        $this->autresAccès = $autresAccès;

        return $this;
    }

    public function getAnnéeDouverture(): ?string
    {
        return $this->annéeDouverture;
    }

    public function setAnnéeDouverture(?string $annéeDouverture): self
    {
        $this->annéeDouverture = $annéeDouverture;

        return $this;
    }

    public function getXl93(): ?string
    {
        return $this->xl93;
    }

    public function setXl93(?string $xl93): self
    {
        $this->xl93 = $xl93;

        return $this;
    }

    public function getYl93(): ?string
    {
        return $this->yl93;
    }

    public function setYl93(?string $yl93): self
    {
        $this->yl93 = $yl93;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getCoordGeo(): ?string
    {
        return $this->coordGeo;
    }

    public function setCoordGeo(?string $coordGeo): self
    {
        $this->coordGeo = $coordGeo;

        return $this;
    }


}
