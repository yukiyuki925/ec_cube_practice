<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;

if (!class_exists('\Customize\Entity\Memo')) {

    /**
     * メモ
     *
     * @ORM\Table(name="dtb_memo")
     * @ORM\InheritanceType("SINGLE_TABLE")
     * @ORM\DiscriminatorColumn(name="discriminator_type", type="string", length=255)
     * @ORM\HasLifecycleCallbacks()
     * @ORM\Entity(repositoryClass="Customize\Repository\MemoRepository")
     */
    class Memo extends \Eccube\Entity\AbstractEntity
    {
        /**
         * ID
         * @var int
         *
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         * @ORM\Column(name="id", type="integer", options={"unsigned":true})
         */
        private $id;

        /**
         * メモ
         * @var string|null
         *
         * @ORM\Column(name="memo", type="text", nullable=false)
         */
        private $memo;

        /**
         * 作成日時
         * @var \DateTime
         *
         * @ORM\Column(name="create_date", type="datetimetz")
         */
        private $create_date;

        /**
         * 更新日時
         * @var \DateTime
         *
         * @ORM\Column(name="update_date", type="datetimetz")
         */
        private $update_date;


        // ゲッター・セッター

        /**
         * Get iD
         *
         * @return int
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set iD
         *
         * @param   int  $id  ID
         *
         * @return  self
         */
        public function setId(int $id)
        {
            $this->id = $id;

            return $this;
        }

        /**
         * Get メモ
         *
         * @return string|null
         */
        public function getDescription()
        {
            return $this->memo;
        }

        /**
         * Set メモ
         *
         * @param   string|null  $memo  メモ
         *
         * @return  self
         */
        public function setDescription($memo)
        {
            $this->memo = $memo;

            return $this;
        }

        /**
         * Get 作成日時
         *
         * @return \DateTime
         */
        public function getCreateDate()
        {
            return $this->create_date;
        }

        /**
         * Set 作成日時
         *
         * @param   \DateTime  $create_date  作成日時
         *
         * @return  self
         */
        public function setCreateDate(\DateTime $create_date)
        {
            $this->create_date = $create_date;

            return $this;
        }

        /**
         * Get 更新日時
         *
         * @return \DateTime
         */
        public function getUpdateDate()
        {
            return $this->update_date;
        }

        /**
         * Set 更新日時
         *
         * @param   \DateTime  $update_date  更新日時
         *
         * @return  self
         */
        public function setUpdateDate(\DateTime $update_date)
        {
            $this->update_date = $update_date;

            return $this;
        }
    }
}
