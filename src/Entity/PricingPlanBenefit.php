<?php

namespace App\Entity;

use App\Repository\PricingPlanBenefitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PricingPlanBenefitRepository::class)]
class PricingPlanBenefit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
