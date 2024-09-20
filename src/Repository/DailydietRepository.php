<?php

namespace App\Repository;

use App\Entity\Dailydiet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dailydiet>
 *
 * @method Dailydiet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dailydiet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dailydiet[]    findAll()
 * @method Dailydiet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DailydietRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dailydiet::class);
    }
}
