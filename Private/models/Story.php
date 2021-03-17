<?php


class Story
{

    /**
     * This class models the logic of accessing the Tailor information
     * required to be displayed on the webpage.
     */

    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    // Get all snippets of all stories in Database
    public function getShortStories(): array
    {
        $this->db->query('SELECT s.story_id, s.story_title, s.story_body, 
                                DATE(story_pub_date) as pub_date, LEFT(story_body, 300) AS snippet, 
                                w.writer_fname,w.writer_lname, w.writer_city, w.writer_state 
                                FROM stories s 
                                JOIN writers w on w.writer_id = s.writer_id
                                ORDER BY pub_date DESC');
        return $this->db->resultSet();
    }

    // Get full story from Database
    public function getFullStory($id) {
        $this->db->query('SELECT s.*, w.writer_fname,w.writer_lname, w.writer_profile, w.writer_city, w.writer_state, 
                              DATE(story_pub_date) as pub_date 
                              FROM stories s 
                              JOIN writers w on w.writer_id = s.writer_id 
                              WHERE story_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function findStoriesByWriters($id) {
        $this->db->query('SELECT * FROM stories WHERE writer_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    // Get all snippets of all stories in Database for particular writer
    public function getShortStoriesbyWriters($id) {
        $this->db->query('SELECT *, LEFT(story_body, 500) AS snippet, DATE(story_pub_date) as pub_date FROM stories WHERE writer_id = :id');
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    // Add new stories to Database
    public function addNew($data): bool
    {
        $this->db->query('INSERT INTO stories (writer_id, story_title, story_slug, story_body, story_category, story_location, story_modify_date) 
                        VALUES (:writer, :title, :slug, :body, :cat, :location, :modify)');
        $this->db->bind(':writer', $data['writer_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':cat', $data['cat']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':modify', NULL);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }






}