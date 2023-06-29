<?php

namespace App\Repository;

use App\Entity\Recetas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recetas>
 *
 * @method Recetas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recetas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recetas[]    findAll()
 * @method Recetas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecetasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recetas::class);
    }

    public function save(Recetas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Recetas $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function search($value): array
    {
        $query = $this->createQueryBuilder('receta')
            ->andwhere('receta.nombre LIKE :value')
            ->setParameter('value', $value)
            ->getQuery();

        return $query->getResult();
    }



//    /**
//     * @return Recetas[] Returns an array of Recetas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Recetas
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
