<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 11:59
 */

namespace component\blog\version\v1;


use component\blog\Blog;
use component\blog\BlogCategory;
use component\blog\BlogComment;
use component\blog\BlogEntry;
use component\blog\BlogInterface;

class BlogVersion1 extends Blog implements BlogInterface{

    public function createNewBlogEntry(BlogEntry $entry)
    {
       return $this->dao->insertNewBlogEntry($entry);
    }

    /**
     * @param BlogEntry $entry
     * @return BlogEntry
     */
    public function getBlogEntry(BlogEntry $entry)
    {
        return $this->dao->getBlogEntry($entry->getId());
    }

    public function getBlogEntryWithEntryId(BlogEntry $entry)
    {
        return $this->dao->getBlogEntry($entry->getEntryId(), true);
    }


    public function editBlogEntry(BlogEntry $entry)
    {
        return $this->dao->modifyBlogEntry($entry);
    }

    public function commentOnBlogEntry(BlogComment $comment, BlogEntry $entry)
    {
        // TODO: Implement commentOnBlogEntry() method.
    }

    public function publishBlogEntry(BlogEntry $entry)
    {
        return $this->dao->publishBlogEntry($entry);
    }

    public function publishComment(BlogComment $comment)
    {
        // TODO: Implement publishComment() method.
    }

    public function createNewCategory(BlogCategory $category)
    {
        return $this->dao->insertNewBlogEntryCategory($category);
    }

    public function getAllCategories()
    {
        return $this->dao->getAllEntryCategory();
    }

    public function getAllBlogEntries()
    {
        return $this->dao->getAllBlogEntry();
    }

    public function getAuthorsBlogEntries($author)
    {
        return $this->dao->getAllBlogEntriesBelongingToAuthor($author);
    }

    public function getAllBlogEntryAwaitingPublish()
    {
        return $this->dao->getAllBlogToPublish();
    }

    public function createANewPublishRequest(BlogEntry $blogEntry)
    {
        return $this->dao->insertPublishRequest($blogEntry);
    }


} 