<?php

namespace Customize\Controller\Mypage;

use Eccube\Controller\AbstractController;
use Eccube\Service\OrderHelper;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomizePointHistoryController extends AbstractController
{
    /**
     * @var OrderHelper
     */
    protected $orderHelper;

    /**
     * @param OrderHelper $orderHelper
     */
    public function __construct(
        OrderHelper $orderHelper
    ) {
        $this->orderHelper = $orderHelper;
    }

    /**
     * ポイント履歴
     *
     * @Route("/mypage/point_history", name="mypage_point_history", methods={"GET"})
     * @Template("Mypage/point_history.twig")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {
        return [];
    }
}
