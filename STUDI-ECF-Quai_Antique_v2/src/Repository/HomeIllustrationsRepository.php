<?php

namespace App\Repository;

use App\Entity\HomeIllustrations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HomeIllustrations>
 *
 * @method HomeIllustrations|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeIllustrations|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeIllustrations[]    findAll()
 * @method HomeIllustrations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeIllustrationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeIllustrations::class);
    }

    public function save(HomeIllustrations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HomeIllustrations $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return HomeIllustrations[] Returns an array of HomeIllustrations objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HomeIllustrations
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
