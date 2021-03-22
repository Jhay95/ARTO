<?php


class Writer
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Add User / Register
    public function register($data): int|bool
    {
        $username = $data['fname'] . '_' . $data['lname'];
        // Prepare Query
        $this->db->query('INSERT INTO writers (writer_fname, writer_lname, writer_email, writer_city, writer_state,
                                writer_username, writer_password, writer_reg_date, writer_modify_date) 
                        VALUES (:fname, :lname, :email, :city, :state, :username, :password, CURRENT_TIMESTAMP, NULL)');

        // Bind Values
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':state', $data['state']);
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $data['password']);

        //Execute
        if ($this->db->execute()) {
            return $this->db->last_insert_id();
        } else {
            return false;
        }
    }

    // Login / Authenticate writer
    public function login($email, $password): bool
    {
        $this->db->query("SELECT * FROM writers WHERE writer_email = :email");
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        $hashed_password = $row->writer_password;
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Update Writers profile
    public function update($data): bool
    {
        $this->db->query("UPDATE writers
                              SET writer_fname = :fname,
                                  writer_lname = :lname,
                                  writer_email = :email,
                                  writer_profile = :profile,
                                  writer_city = :city,
                                  writer_state = :state,
                                  writer_modify_date = CURRENT_TIMESTAMP
                              WHERE writer_id = :id");
        // Bind Values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':fname', $data['fname']);
        $this->db->bind(':lname', $data['lname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':profile', $data['profile']);
        $this->db->bind(':city', $data['city']);
        $this->db->bind(':state', $data['state']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Find writer by Email during registration
    public function findWriterByEmail($email): bool
    {
        $this->db->query("SELECT * FROM writers WHERE writer_email = :email");
        $this->db->bind(':email', $email);
        //Check Rows
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Find writer by Email during profile update
    public function getWriterByEmail($email): bool
    {
        $this->db->query("SELECT * FROM writers WHERE writer_email = :email");
        $this->db->bind(':email', $email);
        //Check Rows
        if ($this->db->rowCount() > 1) {
            return true;
        } else {
            return false;
        }
    }

    // Find writer BY ID
    public function getWriterById($id)
    {
        $this->db->query("SELECT * FROM writers WHERE writer_id = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    // Find writers profile photo
    public function findPhoto($id): bool
    {
        $this->db->query("SELECT * FROM photos WHERE upload_id = :id");
        $this->db->bind(':id', $id);
        //Check Rows
        if ($this->db->rowCount() > 0) {
            return $this->db->single();;
        } else {
            return false;
        }
    }

    // Upload writers profile photo
    public function uploadPhoto($data): bool
    {
        $this->db->query("INSERT INTO photos (upload_id, photo_title, photo_size, photo_modify_date) VALUES (:id, :title, :size, CURRENT_TIMESTAMP)");
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['file']);
        $this->db->bind(':size', $data['size']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Edit writers profile photo
    public function editPhoto($data): bool
    {
        $this->db->query("UPDATE photos
                              SET photo_title = :title,
                                  photo_size = :size
                              WHERE upload_id = :id");

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['file']);
        $this->db->bind(':size', $data['size']);
        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Delete Writer's Profile
    public function delete($id): bool
    {
        $this->db->query("DELETE FROM writers
                              WHERE writer_id = :id");
        $this->db->bind(':id', $id);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}