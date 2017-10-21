<?php

class Books extends CI_Model{
  function __construct() {

  }


  function getBooks(){

      $this->db->select('books.book_isbn,
                        books.book_title,
                        books.book_authors,
                        books.book_categories,
                        books.book_dateadded,
                        books.book_totalquantity,
                        books.book_publisher,
                        book_images.imageName,
                        books.book_id');
      $this->db->from('books');
      $this->db->join('book_images', 'book_images.book_id = books.book_id');
      $query = $this->db->get();

      // foreach($query as $book){
      //   $book_isbn = $book->book_isbn,
      //   $book_title = $book->book_title,
      //   $book_authors = $book->$book_authors,
      //   $book_categories = $book->book_categories,
      //   $book_dateadded = $book->book_dateadded,
      //   $book_totalquantity = $book->book_totalquantity,
      //   $book_publisher = $book->book_publisher,
      //   $book_img = $book->imageName
      // };

      return $query->result();

  }

  function getBooksSearch($search){

      $this->db->select('books.book_isbn,
                        books.book_title,
                        books.book_authors,
                        books.book_categories,
                        books.book_dateadded,
                        books.book_totalquantity,
                        books.book_publisher,
                        book_images.imageName,
                        books.book_id');
      $this->db->from('books');
      $this->db->like('book_title', $search);
      $this->db->or_like('book_authors', $search);
      $this->db->join('book_images', 'book_images.book_id = books.book_id');
      $query = $this->db->get();
      return $query->result();

  }

  function insertborrowed($data=array()){

    if(!array_key_exists("date_borrowed", $data)){
      $data['date_borrowed'] = date("Y-m-d H:i:s");
    }

    $this->db->insert('borrow_books',$data);

  }


  function delete($id){

    $this->db->where('request_id' , $id);
    $this->db->delete('borrow_request');

  }





  function getBorrowed(){

    $this->db->select('books.book_title,
                      books.book_authors,
                      borrow_books.borrow_status,
                      borrow_books.date_borrowed,
                      books.book_id,
                      borrow_books.date_returned,
                      users.name');
    $this->db->from('borrow_books');
    $this->db->join('books', 'books.book_id = borrow_books.book_id');
    $this->db->join('users', 'users.id = borrow_books.users_id');
    $this->db->where('active', '1');
    $query = $this->db->get();
    return $query->result();

  }


  function updateborrow($id){

      $data['date_returned'] = date("Y-m-d H:i:s");
      $this->db->set('date_returned', $data['date_returned']);
      $this->db->set('borrow_status', 'returned');
      $this->db->set('active', '0');
      $this->db->where('book_id', $id);
      $this->db->update('borrow_books');


}


  function getReturned(){

    $this->db->select('books.book_title,
                      books.book_authors,
                      borrow_books.borrow_status,
                      borrow_books.date_returned,
                      books.book_id,
                      users.name');
    $this->db->from('borrow_books');
    $this->db->join('books', 'books.book_id = borrow_books.book_id');
    $this->db->join('users', 'users.id = borrow_books.users_id');
    $this->db->where('active', '0');
    $query = $this->db->get();
    return $query->result();

  }


  function getRequests(){

    $this->db->select('books.book_title,
                      books.book_authors,
                      borrow_request.borrow_status,
                      borrow_request.date,
                      borrow_request.request_id,
                      borrow_request.book_id,
                      borrow_request.users_id,
                      users.name');
    $this->db->from('borrow_request');
    $this->db->join('books' , 'books.book_id = borrow_request.book_id');
    $this->db->join('users', 'users.id = borrow_request.users_id');
    $query = $this->db->get();
    return $query->result();

  }


  function insertbook($data){

      if(!array_key_exists("book_dateadded", $data)){
        $data['book_dateadded'] = date("Y-m-d H:i:s");
      }

    $insert = $this->db->insert('books', $data);


    if($insert){
        return $this->db->insert_id();;

    }else{
        return false;
    }

  }


  function insertimg($data){
      $this->db->insert('book_images',$data);

  }


  function getData($id){

    $this->db->select("*");
    $this->db->from('books');
    $this->db->where('book_id =', $id);
    $query = $this->db->get();
    return $query->result();

  }


  function getimg(){

    $this->db->select("*");
    $this->db->from('book_images');
    $query = $this->db->get();
    return $query->result();

  }


}
?>
