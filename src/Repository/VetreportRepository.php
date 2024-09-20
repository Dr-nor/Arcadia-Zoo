<?php

namespace App\Repository;

use App\Entity\Vetreport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vetreport>
 *
 * @method Vetreport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vetreport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vetreport[]    findAll()
 * @method Vetreport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VetreportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vetreport::class);
    }
}
