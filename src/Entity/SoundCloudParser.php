<?php

namespace App\Entity;

use App\Repository\SoundCloudParserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoundCloudParserRepository::class)
 */
class SoundCloudParser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $trackName;

    /**
     * @ORM\Column(type="time")
     */
    private $duration;

    /**
     * @ORM\Column(type="integer")
     */
    private $listeningsCount;

    /**
     * @ORM\Column(type="integer")
     */
    private $commentsCount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistPseudonym;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $artistCity;

    /**
     * @ORM\Column(type="integer")
     */
    private $subscribersCount;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isInDatabaseAlready;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTrackName(): ?string
    {
        return $this->trackName;
    }

    public function setTrackName(string $trackName): self
    {
        $this->trackName = $trackName;

        return $this;
    }

    public function getduration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setduration(\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getlisteningsCount(): ?int
    {
        return $this->listeningsCount;
    }

    public function setlisteningsCount(int $listeningsCount): self
    {
        $this->listeningsCount = $listeningsCount;

        return $this;
    }

    public function getCommentsCount(): ?int
    {
        return $this->commentsCount;
    }

    public function setCommentsCount(int $commentsCount): self
    {
        $this->commentsCount = $commentsCount;

        return $this;
    }

    public function getArtistName(): ?string
    {
        return $this->artistName;
    }

    public function setArtistName(?string $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }

    public function getArtistPseudonym(): ?string
    {
        return $this->artistPseudonym;
    }

    public function setArtistPseudonym(?string $artistPseudonym): self
    {
        $this->artistPseudonym = $artistPseudonym;

        return $this;
    }

    public function getArtistCity(): ?string
    {
        return $this->artistCity;
    }

    public function setArtistCity(?string $artistCity): self
    {
        $this->artistCity = $artistCity;

        return $this;
    }

    public function getSubscribersCount(): ?int
    {
        return $this->subscribersCount;
    }

    public function setSubscribersCount(int $subscribersCount): self
    {
        $this->subscribersCount = $subscribersCount;

        return $this;
    }

    public function getIsInDatabaseAlready(): ?bool
    {
        return $this->isInDatabaseAlready;
    }

    public function setIsInDatabaseAlready(bool $isInDatabaseAlready): self
    {
        $this->isInDatabaseAlready = $isInDatabaseAlready;

        return $this;
    }
}
