<?php

/**
 * This class models the logic of accessing the Story information
 * required to be displayed on the webpage.
 */

class Story
{

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Add new stories to Database
    public function addNew($data)
    {
        $this->db->query('INSERT INTO stories (writer_id, story_title, story_slug, story_body, story_category, story_tag, story_location, story_modify_date) 
                        VALUES (:writer, :title, :slug, :body, :cat, :tag, :location, :modify)');
        $this->db->bind(':writer', $data['writer_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':cat', $data['cat']);
        $this->db->bind(':tag', $data['tag']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':modify', NULL);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Update Story
    public function update($data): bool
    {
        $this->db->query("UPDATE stories
                              SET story_title = :title,
                                  story_body = :body,
                                  story_category = :cat,
                                  story_location = :location,
                                  story_tag = :tag,
                                  story_slug = :slug,
                                  story_modify_date = CURRENT_TIMESTAMP
                              WHERE story_id = :id");
        // Bind Values
        $this->db->bind(':id', $data['story_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':cat', $data['cat']);
        $this->db->bind(':tag', $data['tag']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':slug', $data['slug']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete Story
    public function delete($id): bool
    {
        $this->db->query("DELETE FROM stories
                              WHERE story_id = :id");
        $this->db->bind(':id', $id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get snippets of all stories from Database
    public function getShortStories(): array
    {
        $this->db->query('SELECT s.story_id, s.story_title, s.story_body, 
                                DATE(story_pub_date) as pub_date, LEFT(story_body, 280) AS snippet, 
                                w.writer_fname,w.writer_lname, w.writer_city, w.writer_state 
                                FROM stories s 
                                JOIN writers w on w.writer_id = s.writer_id
                                ORDER BY pub_date DESC');
        return $this->db->resultSet();
    }

    // Get full story of a selection from Database
    public function getFullStory($id) {
        $this->db->query('SELECT s.*, w.writer_fname,w.writer_lname, w.writer_profile, w.writer_city, w.writer_state, 
                              DATE(story_pub_date) as pub_date,
                              DATE(story_modify_date) as mod_date 
                              FROM stories s 
                              JOIN writers w on w.writer_id = s.writer_id 
                              WHERE story_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    // Get all snippets of all stories in Database for particular writer
    public function getShortStoriesbyWriters($id) {
        $this->db->query('SELECT *, LEFT(story_body, 500) AS snippet, DATE(story_pub_date) as pub_date, DATE(story_modify_date) as mod_date FROM stories WHERE writer_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }









}