<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 30/01/15
 * Time: 17:09
 */

namespace component\blog;


use application\AbstractDAO;

abstract class BlogDAO extends AbstractDAO{
    /**
     * Provides a way to find a specific item
     * @param array $item
     * @throws |Exception
     * @return mixed
     */
    public function find(array $item)
    {
        throw new \Exception("Unsupported method");
    }

    /**
     * Creates a new blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public abstract function insertNewBlogEntry(BlogEntry $blogEntry);

    /**
     * Create a new blog entry category
     * @param BlogCategory $category
     * @return mixed
     */
    public abstract function insertNewBlogEntryCategory(BlogCategory $category);

    /**
     * Searches for blog entries based on members which are set
     * @param BlogEntry $blogEntry
     * @return array
     */
    public abstract function findBlogEntry(BlogEntry $blogEntry);

    /**
     * Gets a blog entry
     * @param $blogEntryId
     * @return BlogEntry|null
     */
    public abstract function getBlogEntry($blogEntryId);

    /**
     * Modifies a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public abstract function modifyBlogEntry(BlogEntry $blogEntry);

    /**
     * Adds a comment for a given blog entry
     * @param BlogEntry $blogEntry
     * @param BlogComment $blogComment
     * @return mixed
     */
    public abstract function addCommentForBlogEntry(BlogEntry $blogEntry, BlogComment $blogComment);

    /**
     * Gets all blog entries
     * @return array
     */
    public abstract function getAllBlogEntry();

    /**
     * Gets all blog entries in a given category
     * @param $entryCategory
     * @return array
     */
    public abstract function getEntryInCategory($entryCategory);

    /**
     * Delete a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public abstract function deleteBlogEntry(BlogEntry $blogEntry);

    /**
     * Publish a comment so it can be visible
     * @param BlogComment $blogComment
     * @return bool
     */
    public abstract function publishBlogEntryComment(BlogComment $blogComment);

    /**
     * Publish a given blog entry
     * @param BlogEntry $blogEntry
     * @return bool
     */
    public abstract function publishBlogEntry(BlogEntry $blogEntry);

    /**
     * Gets a category
     * @param BlogCategory $category
     * @return BlogCategory
     */
    public abstract function getEntryCategory(BlogCategory $category);

    /**
     * Gets all category
     * @return array
     */
    public abstract function getAllEntryCategory();


} 