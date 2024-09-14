<?php

namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * @extends ServiceEntityRepository<Animal>
 *
 * @method Animal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Animal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Animal[]    findAll()
 * @method Animal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animal::class);
    }
    public function findAnimalsPaginated(int $page, int $limit = 3, $filters = null): array
    {
        $limit = abs($limit);

        $result = [];

        $query = $this->createQueryBuilder('u');
        // On filtre les données
        //races
        if($filters['races'] != null){
            $query->andWhere('u.race_id IN(:races)')
                ->setParameter(':races', array_values($filters['races']));
        }

         //habitat
         if($filters['habitats'] != null){
            $query->andWhere('u.habitat_id IN(:habitats)')
                ->setParameter(':habitats', array_values($filters['habitats']));
        }
        // Find
        if($filters['find'] != null){
            $query->andWhere('u.name LIKE :f')
            ->setParameter(':f', "%{$filters['find']}%");

        }


        $query->setMaxResults($limit)
              ->setFirstResult(($page * $limit) - $limit);


        $paginator = new Paginator($query);
        $data = $paginator->getQuery()->getResult();
        
        //On vérifie qu'on a des données
        if(empty($data)){
            return $result;
        }

        //On calcule le nombre de pages
        $pages = ceil($paginator->count() / $limit);

        // On remplit le tableau
        $result['data'] = $data;
        $result['pages'] = $pages;
        $result['page'] = $page;
        $result['limit'] = $limit;

        return $result;
    }

    /**
     * Returns number of animals
     * @return void 
     */
    public function getTotalAnimals($filters = null){
        $query = $this->createQueryBuilder('u')
            ->select('COUNT(u)');
        // Filtrer les données
        //categories
        if($filters['races'] != null){
            $query->andWhere('u.race_id IN(:races)')
                ->setParameter(':races', array_values($filters));
        }
        //habitats
        if($filters['habitats'] != null){
            $query->andWhere('u.habitat_id IN(:habitats)')
                ->setParameter(':habitats', array_values($filters));
        }
       
        return $query->getQuery()->getSingleScalarResult();
    }


}
