<?php

namespace App\Entity;

use App\Repository\PrincingPlanBenefitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrincingPlanBenefitRepository::class)]
class PrincingPlanBenefit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'benefits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PricingPlan $pricingPlan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPricingPlan(): ?PricingPlan
    {
        return $this->pricingPlan;
    }

    public function setPricingPlan(?PricingPlan $pricingPlan): static
    {
        $this->pricingPlan = $pricingPlan;

        return $this;
    }
}
