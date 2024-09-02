<?php

 namespace Customize\Entity;

 use Doctrine\ORM\Mapping as ORM;
 use Eccube\Annotation\EntityExtension;

 /**
  * @EntityExtension("Eccube\Entity\Customer")
  */

 trait CustomerTrait
 {
     /**
      * 顧客情報
      *
      * @var ?\Customize\Entity\Master\BloodType
      *
      * @ORM\ManyToOne(targetEntity="Customize\Entity\Master\BloodType")
      * @ORM\JoinColumns({
      *   @ORM\JoinColumn(name="blood_type_id", referencedColumnName="id")
      * })
      *
      */
     private $BloodType;

     /**
     * Get 血液型
     *
     * @return ?\Customize\Entity\Master\BloodType
     */
     public function getBloodType()
     {
         return $this->BloodType;
     }

     /**
     * Set 血液型
     *
     * @param  ?\Customize\Entity\Master\BloodType
     *
     * @return self
     */
     public function setBloodType(?\Customize\Entity\Master\BloodType $bloodType)
     {
         $this->BloodType = $bloodType;

         return $this;
     }


 }
