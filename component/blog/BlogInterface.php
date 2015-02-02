<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 02/02/15
 * Time: 12:00
 */

namespace component\blog;


interface BlogInterface {

    public function createNewBlogEntry(BlogEntry $entry);

    public function getBlogEntry(BlogEntry $entry);

    public function editBlogEntry(BlogEntry $entry);

    public function commentOnBlogEntry(BlogComment $comment, BlogEntry $entry);

    public function publishBlogEntry(BlogEntry $entry);

    public function publishComment(BlogComment $comment);

    public function createNewCategory(BlogCategory $category);

    public function getAllCategories();

    public function getAllBlogEntries();



} 