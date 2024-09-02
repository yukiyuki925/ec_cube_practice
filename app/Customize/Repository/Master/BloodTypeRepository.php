<?php

namespace Customize\Repository\Master;

use Customize\Entity\Master\BloodType;
use Doctrine\Persistence\ManagerRegistry as RegistryInterface;
use Eccube\Repository\AbstractRepository;

 /**
  * 血液型マスタテーブル
  */
class BloodTypeRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BloodType::class);
    }
}
