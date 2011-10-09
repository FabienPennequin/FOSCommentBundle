<?php

namespace FOS\CommentBundle\Router;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * CommentUrlGeneratorInterface
 *
 * @author Fabien Pennequin <fabien@pennequin.me>
 */
interface CommentUrlGeneratorInterface
{
    function getCreateCommentUrl($threadId, $parentId=null);

    function getThreadShowFeedUrl($id);

    function getCommentLoadMoreUrl($commentId, $sorter);

    function getVoteAddUpUrl($commentId);

    function getVoteAddDownUrl($commentId);

    function getVoteList($commentId);
}