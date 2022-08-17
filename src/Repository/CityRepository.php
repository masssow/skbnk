<?php

namespace App\Repository;

use App\Entity\City;
use App\Entity\Search;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<City>
 *
 * @method City|null find($id, $lockMode = null, $lockVersion = null)
 * @method City|null findOneBy(array $criteria, array $orderBy = null)
 * @method City[]    findAll()
 * @method City[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, City::class);
    }

    public function add(City $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(City $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //     /**
    // * @return Job[] Returns an array job objects
    // */
    // public function findWithFilter(Search $search)
    // {
       
    //    $query = $this
    //     ->createQueryBuilder('c')
    //     ->select('co', 'c')
    //     ->join('c.competent', 'c');
       

    //     // if(!empty($search->categories)){
    //     //     $query = $query
    //     //     ->andWhere('c.id IN (:categories)')
    //     // ->setParameter('categories', $search->categories);
    //     // }

    //     if(!empty($search->city)){
    //         $query = $query
    //         ->andWhere('c.id IN (:city)')
    //     ->setParameter('city', $search->city);
    //     }

    //     // if(!empty($search->string)){
    //     //     $query = $query
    //     //     ->andWhere('j.name LIKE :string')
    //     // ->setParameter('string', "%{$search->string}%");
    //     // }
        
    
    //     return $query->getQuery()->getResult();
    // }

//    /**
//     * @return City[] Returns an array of City objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?City
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
