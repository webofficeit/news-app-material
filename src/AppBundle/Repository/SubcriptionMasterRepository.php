<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * Description of SubcriptionMasterRepository
 *
 * @author shyam
 */
class SubcriptionMasterRepository extends EntityRepository {
    
    public function findSubscribtionUser($userId)
    {
        return $this->createQueryBuilder('subcription')
        // p.category refers to the "category" property on product
        ->innerJoin('subcription.subcriptionids', 'usersubcription')
        // selects all the category data to avoid the query
        ->addSelect('subcription.id,subcription.title')
        ->andWhere('usersubcription.user = :id')
        ->andWhere('usersubcription.enabled = :enable')
        ->setParameter('id', $userId)
        ->setParameter('enable', 1)        
        ->getQuery()
        ->getResult();
    }
}
