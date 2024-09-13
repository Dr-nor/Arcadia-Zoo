<?php

namespace App\Repository;

use App\Entity\Opening;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Opening>
 *
 * @method Opening|null find($id, $lockMode = null, $lockVersion = null)
 * @method Opening|null findOneBy(array $criteria, array $orderBy = null)
 * @method Opening[]    findAll()
 * @method Opening[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpeningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Opening::class);
    }
}
