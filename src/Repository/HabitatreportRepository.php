<?php

namespace App\Repository;

use App\Entity\Habitatreport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Habitatreport>
 *
 * @method Habitatreport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habitatreport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habitatreport[]    findAll()
 * @method Habitatreport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabitatreportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habitatreport::class);
    }
}
