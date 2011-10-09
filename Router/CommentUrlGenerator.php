<?php

namespace FOS\CommentBundle\Router;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * CommentUrlGenerator
 *
 * @author Fabien Pennequin <fabien@pennequin.me>
 */
class CommentUrlGenerator extends ContainerAware implements CommentUrlGeneratorInterface
{
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->setContainer($container);
    }

    public function getCreateCommentUrl($threadId, $parentId=null)
    {
        return $this->generateUrl('fos_comment_comment_create', array(
            'threadId'  => $threadId,
            'parentId'  => $parentId,
        ));
    }

    public function getThreadShowFeedUrl($id)
    {
        return $this->generateUrl('fos_comment_thread_show_feed', array(
            'id' => $id,
        ));
    }

    public function getCommentLoadMoreUrl($commentId, $sorter)
    {
        return $this->generateUrl('fos_comment_comment_loadmore', array(
            'commentId' => $commentId,
            'sorter'    => $sorter,
        ));
    }

    public function getVoteAddUpUrl($commentId)
    {
        return $this->generateUrl('fos_comment_vote_add_up', array(
            'commentId' => $commentId,
        ));
    }

    public function getVoteAddDownUrl($commentId)
    {
        return $this->generateUrl('fos_comment_vote_add_down', array(
            'commentId' => $commentId,
        ));
    }

    public function getVoteList($commentId)
    {
        return $this->generateUrl('fos_comment_vote_list', array(
            'commentId' => $commentId,
        ));
    }


    protected function generateUrl($route, $parameters = array())
    {
        return $this->container->get('router')->generate(
            $route, $parameters
        );
    }
}