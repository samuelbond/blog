<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 11:59
 */

namespace component\blog\version\v1;


use component\blog\Blog;
use component\blog\BlogComment;
use component\blog\BlogEntry;
use component\blog\BlogInterface;

class BlogVersion1 extends Blog implements BlogInterface{

    public function createNewBlogEntry(BlogEntry $entry)
    {
       return $this->dao->insertNewBlogEntry($entry);
    }

    public function getBlogEntry(BlogEntry $entry)
    {
        // TODO: Implement getBlogEntry() method.
    }

    public function editBlogEntry(BlogEntry $entry)
    {
        // TODO: Implement editBlogEntry() method.
    }

    public function commentOnBlogEntry(BlogComment $comment, BlogEntry $entry)
    {
        // TODO: Implement commentOnBlogEntry() method.
    }

    public function publishBlogEntry(BlogEntry $entry)
    {
        // TODO: Implement publishBlogEntry() method.
    }

    public function publishComment(BlogComment $comment)
    {
        // TODO: Implement publishComment() method.
    }


} 