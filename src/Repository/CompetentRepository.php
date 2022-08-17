<?php

namespace App\Repository;

use App\Entity\Search;
use App\Entity\Competent;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Competent>
 *
 * @method Competent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Competent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Competent[]    findAll()
 * @method Competent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Competent::class);
    }

    public function add(Competent $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Competent $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

 
    // /**
    // * @return Competent[] Returns an array job objects
    // */
    // public function findWithFilter(Search $search)
    // {
       
    //    $query = $this
    //     ->createQueryBuilder('c')
    //     ->select('j', 'c')
    //     ->join('c.job', 'j');
       

    //     if(!empty($search->job)){
    //         $query = $query
    //         ->andWhere('j.id IN (:job)')
    //     ->setParameter('job', $search->job);
    //     }

    //     if(!empty($search->string)){
    //         $query = $query
    //         ->andWhere('j.name LIKE :string')
    //     ->setParameter('string', "%{$search->string}%");
    //     }
        
    
    //     return $query->getQuery()->getResult();
    // }


    // /**
    // * @return Competent[] Returns an array of Competent objects
    // */
    // public function search($value): array
    // {
    //     return $this->createQueryBuilder('c')
    //     ->where('c.Job LIKE :val')
    //     ->setParameter('val', '%'.$value.'%')
    //     ->getQuery()
    //     ->getResult()
    //     ;
    // }

//    public function findOneBySomeField($value): ?Competent
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
