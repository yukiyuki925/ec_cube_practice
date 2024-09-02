<?php

namespace Customize\Form\Extension;

use Eccube\Common\EccubeConfig;
use Eccube\Form\Type\Front\EntryType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Customize\Repository\Master\BloodTypeRepository;

/**
 * 氏名(カナ)
 */
class EntryTypeExtension extends AbstractTypeExtension
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var BloodTypeRepository
     */
    protected $bloodTypeRepository;

    /**
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(EccubeConfig $eccubeConfig, BloodTypeRepository $bloodTypeRepository)
    {
        $this->eccubeConfig = $eccubeConfig;
        $this->bloodTypeRepository = $bloodTypeRepository;
    }

    /**
     * @return string
     */
    public function getExtendedType()
    {
        return EntryType::class;
    }

    /**
     * @return iterable
     */
    public static function getExtendedTypes(): iterable
    {
        yield EntryType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $form = $event->getForm();

            $fieldOptions = [
                'choices' => $this->bloodTypeRepository->findAll(),
                'choice_value' => 'id',
                'choice_label' => 'name',
                'required' => false

            ];

            // フォームフィールドを追加
            $form->add('BloodType', ChoiceType::class, $fieldOptions);

        });
    }
}
