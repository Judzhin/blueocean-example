<?php

namespace App\Entity;

use App\Repository\View3DRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class View3D
 *
 * @package App\Entity
 * @ORM\Entity(repositoryClass=View3DRepository::class)
 * @ORM\Table(name="view_3ds")
 */
class View3D
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    private \DateTime $date;

    /**
     * @var Player
     * @ORM\ManyToOne(targetEntity="Player")
     * @ORM\JoinColumn(name="playerid", referencedColumnName="id")
     */
    private Player $player;

    /**
     * @var Agent
     * @ORM\ManyToOne(targetEntity="Agent")
     * @ORM\JoinColumn(name="agentid", referencedColumnName="id")
     */
    private Agent $agent;

    /**
     * @var string
     * @ORM\Column(type="string", length=3)
     */
    private string $currency;

    /**
     * @var float|null
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
     */
    private ?float $bet;

    /**
     * @var float|null
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
     */
    private ?float $win;

    /**
     * @var float|null
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
     */
    private ?float $rake;

    /**
     * @var float|null
     * @ORM\Column(type="decimal", precision=7, scale=2, nullable=true)
     */
    private ?float $tournament;

    /**
     * @var float
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private float $net;

    /**
     * @var float|null
     * @ORM\Column(type="decimal", precision=7, scale=2)
     */
    private ?float $fin;

    /**
     * @var string
     * @ORM\Column(type="string", length=40, name="aams_ticket")
     */
    private string $aamsTicket;

    /**
     * @var string
     * @ORM\Column(type="string", length=40, name="aams_table")
     */
    private string $aamsTable;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return View3D
     */
    public function setId(int $id): View3D
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return View3D
     */
    public function setDate(\DateTime $date): View3D
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Player $player
     * @return View3D
     */
    public function setPlayer(Player $player): View3D
    {
        $this->player = $player;
        return $this;
    }

    /**
     * @return Agent
     */
    public function getAgent(): Agent
    {
        return $this->agent;
    }

    /**
     * @param Agent $agent
     * @return View3D
     */
    public function setAgent(Agent $agent): View3D
    {
        $this->agent = $agent;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return View3D
     */
    public function setCurrency(string $currency): View3D
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getBet(): ?float
    {
        return $this->bet;
    }

    /**
     * @param float|null $bet
     * @return View3D
     */
    public function setBet(?float $bet): View3D
    {
        $this->bet = $bet;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWin(): ?float
    {
        return $this->win;
    }

    /**
     * @param float|null $win
     * @return View3D
     */
    public function setWin(?float $win): View3D
    {
        $this->win = $win;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRake(): ?float
    {
        return $this->rake;
    }

    /**
     * @param float|null $rake
     * @return View3D
     */
    public function setRake(?float $rake): View3D
    {
        $this->rake = $rake;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getTournament(): ?float
    {
        return $this->tournament;
    }

    /**
     * @param float|null $tournament
     * @return View3D
     */
    public function setTournament(?float $tournament): View3D
    {
        $this->tournament = $tournament;
        return $this;
    }

    /**
     * @return float
     */
    public function getNet(): float
    {
        return $this->net;
    }

    /**
     * @param float $net
     * @return View3D
     */
    public function setNet(float $net): View3D
    {
        $this->net = $net;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getFin(): ?float
    {
        return $this->fin;
    }

    /**
     * @param float|null $fin
     * @return View3D
     */
    public function setFin(?float $fin): View3D
    {
        $this->fin = $fin;
        return $this;
    }

    /**
     * @return string
     */
    public function getAamsTicket(): string
    {
        return $this->aamsTicket;
    }

    /**
     * @param string $aamsTicket
     * @return View3D
     */
    public function setAamsTicket(string $aamsTicket): View3D
    {
        $this->aamsTicket = $aamsTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getAamsTable(): string
    {
        return $this->aamsTable;
    }

    /**
     * @param string $aamsTable
     * @return View3D
     */
    public function setAamsTable(string $aamsTable): View3D
    {
        $this->aamsTable = $aamsTable;
        return $this;
    }
}
