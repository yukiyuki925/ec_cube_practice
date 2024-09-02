<?php

namespace Customize\Entity\Master;

use Doctrine\ORM\Mapping as ORM;

if (!class_exists(BloodType::class, false)) {
    /**
      * 血液型マスタ
      *
      * @ORM\Table(name="mtb_blood_type")
      * @ORM\InheritanceType("SINGLE_TABLE")
      * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
      * @ORM\HasLifecycleCallbacks()
      * @ORM\Entity(repositoryClass="Customize\Repository\Master\BloodType")
      * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
      */
    class BloodType extends \Eccube\Entity\Master\AbstractMasterEntity
    {
        /**
         * A型
         */
        public const typeA = 1;

        /**
         * B型
         */
        public const typeB = 2;

        /**
         * O型
         */
        public const typeO = 3;

        /**
         * AB型
         */
        public const typeAB = 4;
    }
}
